<?php
namespace App\Controller;

use Cake\ORM\TableRegistry; 
use Cake\Validation\Validator;
use Cake\Http\Exception\NotFoundException;
use Cake\Datasource\Exception\RecordNotFoundException;

class SpicaController extends AppController
{

    //public $Blogs;

    public function initialize(): void
    {
        parent::initialize();
        // モデルをロードする
        $this->Blogs = $this->getTableLocator()->get('Blogs');
    }

    // サイトの一番初めの画面
    public function index()
    {
        // データベースからブログの投稿を取得（最新の投稿順）
        $blogs = $this->Blogs->find('all', [
            'order' => ['Blogs.created' => 'DESC']
        ])->toArray();

        // ビューにデータを渡す
        $this->set(compact('blogs'));
    }

    // コンセプト
    public function concept()
    {

    }

    // メニュー
    public function menu()
    {

    }

    // スタッフ
    public function staff()
    {

    }

    public function blog()
    {
        // 公開済みのブログ記事を取得
        $blogs = $this->Blogs->find()
            ->where(['status' => 'published'])  // 公開された記事だけを取得
            ->where(['delete_flag' => 0])   // 削除されていないデータだけ
            ->order(['created' => 'DESC']);    // 新しい順に並べる
    
        $this->set(compact('blogs'));
    }

    public function view($id = null)
    {
        try {
            $blog = $this->Blogs->get($id);
            $this->set(compact('blog'));
        } catch (RecordNotFoundException $e) {
            throw new NotFoundException(__('記事が見つかりませんでした。'));
        }
    }


}