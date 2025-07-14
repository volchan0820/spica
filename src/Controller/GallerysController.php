<?php
namespace App\Controller;

use Cake\Auth\DefaultPasswordHasher;
use Cake\ORM\TableRegistry;
use Cake\Http\Exception\NotFoundException;
use Cake\Datasource\Exception\RecordNotFoundException;

class GallerysController extends AppController
{
    public $Galleries;
    public function initialize(): void
    {
        parent::initialize();

        // Galleriesモデルを明示的にロード
        $this->loadModel('Galleries');
    }
    
    // 画像追加
    public function add()
    {
        $styleOptions = ['short' => 'ショート', 'bob' => 'ボブ', 'medium' => 'ミディアム', 'long' => 'ロング'];
        $menuOptions1 = ['cut' => 'カット', 'color' => 'カラー', 'perm' => 'パーマ', 'straight' => 'ストレート', 'treatment' => 'トリートメント'];
        $menuOptions2 = ['cut' => 'カット', 'color' => 'カラー', 'perm' => 'パーマ', 'straight' => 'ストレート', 'treatment' => 'トリートメント'];
        $menuOptions3 = ['cut' => 'カット', 'color' => 'カラー', 'perm' => 'パーマ', 'straight' => 'ストレート', 'treatment' => 'トリートメント'];
        $menuOptions4 = ['cut' => 'カット', 'color' => 'カラー', 'perm' => 'パーマ', 'straight' => 'ストレート', 'treatment' => 'トリートメント'];
        $menuOptions5 = ['cut' => 'カット', 'color' => 'カラー', 'perm' => 'パーマ', 'straight' => 'ストレート', 'treatment' => 'トリートメント'];
        $this->set(compact('styleOptions', 'menuOptions1', 'menuOptions2', 'menuOptions3', 'menuOptions4', 'menuOptions5'));

        if ($this->request->is('post')) {
            $data = $this->request->getData();

            if (empty($data['style']) || empty($data['menu1']) || !$data['image_file'] || $data['image_file']->getError() !== UPLOAD_ERR_OK) {
                $this->Flash->error('スタイルと画像とメニュー①は必須項目です。');
                return;
            }

            $gallery = $this->Galleries->newEmptyEntity();

            $uploaded = $data['image_file'];
            $filename = time() . '_' . $uploaded->getClientFilename();
            $targetPath = WWW_ROOT . 'img/gallerys/' . $filename;

            $uploaded->moveTo($targetPath);
            $data['image_path'] = 'gallerys/' . $filename;

            $gallery = $this->Galleries->patchEntity($gallery, $data);
            if ($this->Galleries->save($gallery)) {
                $this->Flash->success('登録成功');
                return $this->redirect(['controller' => 'Managements', 'action' => 'administratorLoginSuccess']);
            } else {
                $this->Flash->error('登録に失敗しました。');
            }
        }
    }
}