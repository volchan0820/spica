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
        // モデルをロードする
        $this->Galleries = $this->getTableLocator()->get('Galleries');
    }
    
    // スタイル画像追加
    public function styleUploadAdmin()
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
            // $targetPath = WWW_ROOT . 'img/gallerys/' . $filename;　// vbox環境用
            $uploadPath = '/home/purplemink37/www/img/gallerys/';
            // $uploaded->moveTo($targetPath);　// vbox環境用
            $uploaded->moveTo($uploadPath . $filename);
            $data['image_path'] = 'gallerys/' . $filename;
            $gallery = $this->Galleries->patchEntity($gallery, $data);
            if ($this->Galleries->save($gallery)) {
                $this->Flash->success('登録成功');
                return $this->redirect(['controller' => 'Gallerys', 'action' => 'styleUploadCompleteAdmin']);
            } else {
                $this->Flash->error('登録に失敗しました。');
            }
        }
    }

    // スタイル画像一覧
    public function styleListAdmin() {
        $galleries = $this->Galleries
            ->find('all')
            ->where(['delete_flag' => 0])
            ->toArray();
        $styles = ['all' => '全てのスタイル', 'short' => 'ショート', 'bob' => 'ボブ', 'medium' => 'ミディアム', 'long' => 'ロング'];
        $this->set(compact('galleries', 'styles'));
    }

    // スタイル画像削除処理
    public function imageDelete($id = null)
    {
        $this->request->allowMethod(['post']);
        $gallery = $this->Galleries->get($id);
        $gallery->delete_flag = 1;
        if ($this->Galleries->save($gallery)) {
            $this->Flash->success(__('削除しました。'));
        } else {
            $this->Flash->error(__('削除に失敗しました。'));
        }
        return $this->redirect(['action' => 'styleListAdmin']);
    }

    public function styleUploadCompleteAdmin() {
    }
}