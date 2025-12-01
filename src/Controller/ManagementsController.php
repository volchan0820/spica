<?php
namespace App\Controller;

// Composer の autoload を読み込む
require_once ROOT . '/vendor/autoload.php';

use Cake\Auth\DefaultPasswordHasher;
use Cake\ORM\TableRegistry;
use Cake\Http\Exception\NotFoundException;
use Cake\Datasource\Exception\RecordNotFoundException;
use Cake\Mailer\Mailer;
use GeoIp2\Database\Reader;

class ManagementsController extends AppController
{
    public function initialize(): void
    {
        parent::initialize();
        $this->loadComponent('Authentication.Authentication');
    }

    // 認証をスキップさせる
    public function beforeFilter(\Cake\Event\EventInterface $event)
    {
        parent::beforeFilter($event);
        // 認証が不要なアクションを追加
        $this->Authentication->addUnauthenticatedActions(['administratorLogin']);
    }

    // 管理者ログイン画面
    public function administratorLogin()
    {
        $this->request->allowMethod(['get', 'post']);

        // admin_login_attempts テーブル
        $AttemptsTable = TableRegistry::getTableLocator()->get('AdminLoginAttempts');
        $attempt = $AttemptsTable->find()->first(); // 管理者は1人なので1件のみ取得

        // ロック済みならロック画面
        if ($attempt && (int)$attempt->is_locked === 1) {
            return $this->render('administrator_login_locked');
        }

        if ($this->request->is('post')) {
            $username = $this->request->getData('username');
            $password = $this->request->getData('passwd');

            if (!$username || !$password) {
                $this->Flash->error(__('IDとパスワードを入力してください'));
                return $this->redirect(['controller' => 'Managements', 'action' => 'administratorLogin']);
            }

            // 管理者アカウントは1つだけ
            $SpicaStaffsTable = TableRegistry::getTableLocator()->get('SpicaStaffs');
            // $staff = $SpicaStaffsTable->find()->first();
            // ★ spica_staff_id で検索する（管理者 1 人でも必要）
            $staff = $SpicaStaffsTable->find()
                ->where(['spica_staff_id' => $username])
                ->first();

            $hasher = new DefaultPasswordHasher();
            if ($staff && $hasher->check($password, $staff->passwd)) {
                // ログイン成功 → 失敗回数リセット
                if ($attempt) {
                    $attempt->attempt_count = 0;
                    $attempt->last_attempt = date('Y-m-d H:i:s');
                    $AttemptsTable->save($attempt);
                }

                $this->Authentication->setIdentity($staff);
                return $this->redirect(['controller' => 'Managements', 'action' => 'administratorLoginSuccess']);
            } else {
                // ログイン失敗 → カウントアップ
                if (!$attempt) {
                    $attempt = $AttemptsTable->newEntity();
                }

                $attempt->attempt_count = ((int)$attempt->attempt_count) + 1;
                $attempt->last_attempt = date('Y-m-d H:i:s');

                // 3回以上でロック
                if ($attempt->attempt_count >= 3) {
                    $attempt->is_locked = 1;
                    $AttemptsTable->save($attempt);

                    // // ログイン失敗の詳細を取得                    
                    // $ip = $this->request->clientIp();                           // IPアドレス取得                    
                    // $userAgent = $this->request->getHeaderLine('User-Agent');   // User-Agent取得
                    // $host = gethostbyaddr($ip);                                 // ホスト名（IPから逆引き）
                    // $geoDbPath = '/usr/share/GeoIP/GeoLite2-City.mmdb';         // GeoIP データベースのパス

                    // try {
                    //     $reader = new Reader($geoDbPath);
                    //     $record = $reader->city($ip);

                    //     $country = $record->country->name;                     // 国
                    //     $region  = $record->mostSpecificSubdivision->name;     // 都道府県など
                    //     $city    = $record->city->name;                        // 市区町村
                    // } catch (\Exception $e) {
                    //     $country = $region = $city = '不明';
                    // }


$ip = $this->request->clientIp();
$userAgent = $this->request->getHeaderLine('User-Agent');
$host = gethostbyaddr($ip);

// 初期値
$country = '不明';
$region  = '不明';
$city    = '不明';

try {
    $json = @file_get_contents("https://ipinfo.io/{$ip}/json");

    if ($json !== false) {
        $data = json_decode($json);

        if (!empty($data->country)) {
            $country = $data->country;
        }
        if (!empty($data->region)) {
            $region = $data->region;
        }
        if (!empty($data->city)) {
            $city = $data->city;
        }
    }
} catch (\Throwable $e) {
    // 何もしない（メールは継続）
}


                    // メール送信内容
                    $mailBody = "管理者ログインが3回失敗し、アカウントがロックされました。\n\n" .
                                "ユーザー名: {$username}\n" .
                                "時刻: " . date('Y-m-d H:i:s') . "\n" .
                                "IPアドレス: {$ip}\n" .
                                "ホスト名: {$host}\n" .
                                "国: {$country}\n" .
                                "地域: {$region}\n" .
                                "市区町村: {$city}\n" .
                                "User-Agent: {$userAgent}\n";

                    // Gmail へ通知
                    $mailer = new Mailer('default');
                    // 差出人の設定
                    $mailer->setFrom(['r.miyazato0820@gmail.com' => '管理システム'])
                        // 宛先
                        ->setTo('r.miyazato0820@gmail.com')
                        // 件名
                        ->setSubject('管理者ログインが3回失敗しました')
                        // 本文
                        ->deliver($mailBody);

                    return $this->render('administrator_login_locked');
                }

                $AttemptsTable->save($attempt);
                $this->Flash->error(__('ログインIDまたはパスワードが違います'));
            }
        }
    }

    // ログイン成功後のアクション（管理画面一覧）
    public function administratorLoginSuccess()
    {

    }

    // ログアウト処理
    public function administratorLogout()
    {
        // ログアウト
        $this->Authentication->logout();

        return $this->redirect([
            'controller' => 'Managements','action' => 'administratorLogin', // ログインページにリダイレクト
        ]);
    }

    public function AdministratorLoginLocked()
    {

    }

}