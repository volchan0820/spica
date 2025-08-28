<?php
namespace App\Controller;

use Cake\Auth\DefaultPasswordHasher;
use Cake\ORM\TableRegistry;
use Cake\Http\Exception\NotFoundException;
use Cake\Datasource\Exception\RecordNotFoundException;

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
                return $this->redirect($this->Url->build('/managements/administrator-login-ZmhT3nWEjld02kFcqEm5'));
            }

            // 管理者アカウントは1つだけ
            $SpicaStaffsTable = TableRegistry::getTableLocator()->get('SpicaStaffs');
            $staff = $SpicaStaffsTable->find()->first();

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

                    // Gmail へ通知
                    $mailer = new Mailer('default');
                    $mailer->setFrom(['r.miyazato0820@gmail.com' => '管理システム'])
                        ->setTo('r.miyazato0820@gmail.com')
                        ->setSubject('管理者ログインが3回失敗しました')
                        ->deliver(
                            "管理者ログインが3回失敗し、アカウントがロックされました。\n\n" .
                            "ユーザー名: {$username}\n" .
                            "時刻: " . date('Y-m-d H:i:s')
                        );

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