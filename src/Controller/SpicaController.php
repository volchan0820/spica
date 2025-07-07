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
        $this->Galleries = $this->getTableLocator()->get('Galleries');
    }

    // サイトの一番初めの画面
    public function index()
    {
        // データベースからブログの投稿を取得（最新の投稿順）
        $blogs = $this->Blogs->find('all', [
            'order' => ['Blogs.created' => 'DESC']
        ])->toArray();

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

    // ギャラリー
    public function gallery()
    {
        $galleries = $this->Galleries->find('all')->toArray();
        $styles = ['all' => '全てのスタイル', 'short' => 'ショート', 'bob' => 'ボブ', 'medium' => 'ミディアム', 'long' => 'ロング'];
        $this->set(compact('galleries', 'styles'));
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
        // 次の記事を取得
        $nextBlog = $this->Blogs->find()
            ->where(['id >' => $id, 'status' => 'published', 'delete_flag' => 0])
            ->order(['id' => 'ASC'])
            ->first();
        // 前の記事を取得
        $prevBlog = $this->Blogs->find()
            ->where(['id <' => $id, 'status' => 'published', 'delete_flag' => 0])
            ->order(['id' => 'DESC'])
            ->first();
        $this->set(compact('blog', 'nextBlog', 'prevBlog'));
    }

    // アクセス
    public function access()
    {

    }

    // WEB予約
    public function reservation()
    {

    }

    // プライバシーポリシー
    public function privacyPolicy()
    {

    }
}