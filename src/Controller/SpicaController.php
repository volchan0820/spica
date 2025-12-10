<?php
namespace App\Controller;

use Cake\ORM\TableRegistry; 
use Cake\Validation\Validator;
use Cake\Http\Exception\NotFoundException;
use Cake\Datasource\Exception\RecordNotFoundException;

class SpicaController extends AppController
{
    public function initialize(): void
    {
        parent::initialize();
        // モデルをロードする
        $this->Blogs = $this->getTableLocator()->get('Blogs');
        $this->Galleries = $this->getTableLocator()->get('Galleries');
    }

    // TOP
    public function index()
    {
        // データベースからブログの投稿を取得（最新の投稿順）
        $blogs = $this->Blogs->find('all', [
            'order' => ['Blogs.created' => 'DESC']
        ])->toArray();

        $this->set(compact('blogs'));
    }

    // CONCEPT
    public function concept()
    {

    }

    // CONCEPT_TECHNOLOGY
    public function conceptTechnology()
    {

    }

    // MENU
    public function menu()
    {

    }

    // SALON RRODUCTS
    public function products()
    {

    }

    // GALLERY
    public function gallery()
    {
        $galleries = $this->Galleries
            ->find('all')
            ->where(['delete_flag' => 0])
            ->toArray();
        $styles = ['all' => '全てのスタイル', 'short' => 'ショート', 'bob' => 'ボブ', 'medium' => 'ミディアム', 'long' => 'ロング'];
        $this->set(compact('galleries', 'styles'));
    }

    // BLOG 一覧
    public function blogList()
    {
        $blogs = $this->Blogs->find()
            ->where(['status' => 'published'])
            ->where(['delete_flag' => 0])
            ->order(['created' => 'DESC']);    
        $this->set(compact('blogs'));
    }

    // BLOG 記事
    public function blogView($id = null)
    {
        try {
            $blog = $this->Blogs->get($id);
            $this->set(compact('blog'));
        } catch (RecordNotFoundException $e) {
            throw new NotFoundException(__('記事が見つかりませんでした。'));
        }
        // NEXT 次の記事を取得
        $nextBlog = $this->Blogs->find()
            ->where(['id >' => $id, 'status' => 'published', 'delete_flag' => 0])
            ->order(['id' => 'ASC'])
            ->first();
        // BACK 前の記事を取得
        $prevBlog = $this->Blogs->find()
            ->where(['id <' => $id, 'status' => 'published', 'delete_flag' => 0])
            ->order(['id' => 'DESC'])
            ->first();
        $this->set(compact('blog', 'nextBlog', 'prevBlog'));
    }

    // ACCESS
    public function access()
    {

    }

    // WEB予約
    public function reservation()
    {

    }

    // PRIVACY POLICY
    public function privacyPolicy()
    {

    }
}