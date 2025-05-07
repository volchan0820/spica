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
        $result = $this->Authentication->getResult();

        // ユーザーがログインしている場合、リダイレクト
        if ($result && $result->isValid()) {
            return $this->redirect([
                'controller' => 'Managements','action' => 'administratorLoginSuccess',]);
        }

        // POSTリクエストで認証が無効な場合はエラーメッセージ
        if ($this->request->is('post') && !$result->isValid()) {
            $username = $this->request->getData('username');
            $password = $this->request->getData('passwd');

            $ManagementTable = TableRegistry::getTableLocator()->get('SpicaStaffs');
            $staff = $ManagementTable->find()->where(['spica_staff_id' => $username])->first();

            if ($staff) {
                $hasher = new DefaultPasswordHasher();
                if ($hasher->check($password, $staff->passwd)) {
                    $this->Authentication->setIdentity($staff);
                    return $this->redirect(['controller' => 'Managements','action' => 'administratorLoginSuccess',]);
                } else {
                    $this->Flash->error(__('ログインIDまたはパスワードが違います'));
                }
            } else {
                $this->Flash->error(__('ログインIDまたはパスワードが違います'));
            }
        }
    }

    // ログイン成功後のアクション（管理画面一覧）
    public function administratorLoginSuccess()
    {
        // ログイン成功後に管理者ページにリダイレクト
       // $this->Flash->success(__('ログイン成功！'));
       // return $this->redirect(['controller' => 'Managements', 'action' => 'index']); // Dashboard コントローラーへのリダイレクト
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
}