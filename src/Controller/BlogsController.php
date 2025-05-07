<?php
namespace App\Controller;

use Cake\ORM\TableRegistry; 
use Cake\Validation\Validator;
use Cake\Http\Exception\NotFoundException;
use Cake\Datasource\Exception\RecordNotFoundException;
use Laminas\Diactoros\UploadedFile; // ファイルアップロード対応
use Cake\Log\Log;

class BlogsController extends AppController
{
    public function initialize(): void
    {
        parent::initialize();
    }

    // 管理画面トップページ
    public function index()
    {

    }

    // 下書きブログ一覧
    public function draftList()
    {
        // 全てのブログ記事を取得
        $blogs = $this->Blogs->find()
            ->where(['delete_flag' => 0])
            ->order(['created' => 'DESC']); // 公開・下書き両方を表示
    
        $this->set(compact('blogs'));
    }

    // 書きブログ記事
    public function draftView($id = null)
    {
        try {
            $blog = $this->Blogs->get($id);
            if ($blog->status !== 'draft') {
                throw new NotFoundException(__('下書きの記事のみ閲覧可能です。'));
            }
        } catch (RecordNotFoundException $e) {
            throw new NotFoundException(__('記事が見つかりませんでした。'));
        }
    
        $this->set(compact('blog'));
    }

    // 公開中ブログ一覧
    public function blogList()
    {
        // 全てのブログ記事を取得
        $blogs = $this->Blogs->find()
            ->where(['delete_flag' => 0])
            ->order(['created' => 'DESC']); // 公開・下書き両方を表示
    
        $this->set(compact('blogs'));
    }

    // 公開中ブログ記事
    public function blogView($id = null)
    {
        try {
            $blog = $this->Blogs->get($id);
            if ($blog->status !== 'published') {
                throw new NotFoundException(__('公開中の記事のみ閲覧可能です。'));
            }
        } catch (RecordNotFoundException $e) {
            throw new NotFoundException(__('記事が見つかりませんでした。'));
        }
    
        $this->set(compact('blog'));
    }

    // ブログ新規投稿
    public function add()
    {
        $blog = $this->Blogs->newEmptyEntity();
        
        if ($this->request->is(['post', 'put'])) {  // POSTまたはPUTメソッドの場合
            $blog = $this->Blogs->patchEntity($blog, $this->request->getData());    // フォームデータをエンティティにパッチ

            // ステータスを適用 (デフォルトは 'draft' )
            if (empty($this->request->getData('status'))) { // ステータスが空の場合
                $blog->status = 'draft';    // 下書き
            }

            if ($this->Blogs->save($blog)) {
                $this->Flash->success(__('ブログを保存しました。'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('ブログの保存に失敗しました。'));
        }

        $this->set(compact('blog'));
    }

    // 画像アップロード機能
    public function uploadImage()
    {
        $this->autoRender = false;
        
        if ($this->request->is('post') && !empty($this->request->getData('image'))) {   // POSTメソッドかつ画像がある場合
            $image = $this->request->getData('image');  // 画像ファイルを取得
            $uploadPath = WWW_ROOT . 'img' . DS . 'blogs' . DS; // 保存先のパス
            $filename = time() . '_' . $image->getClientFilename(); // ファイル名を作成
            $image->moveTo($uploadPath . $filename);    // ファイルを保存

            $this->response = $this->response->withType('application/json') // JSON形式で
                ->withStringBody(json_encode([  // レスポンスを返す
                    'success' => true,  // 成功
                    'url' => '/img/blogs/' . $filename  // 画像のURLを返す
                ]));
            return $this->response; // レスポンスを返す
        }
        
        $this->response = $this->response->withType('application/json') // JSON形式で
            ->withStringBody(json_encode([  // レスポンスを返す
                'success' => false, 
                'message' => '画像のアップロードに失敗しました。'
            ]));
        return $this->response;
    }

    // 自動保存機能
    public function autosave()
    {
        $this->request->allowMethod(['post']);  // POSTメソッドのみ許可
    
        $data = $this->request->getData();  // フォームデータを取得
        $blog = null;   // 下書き記事
    
        // IDがある場合、既存のレコードを取得
        if (!empty($data['id'])) {
            $blog = $this->Blogs->find()    // Blogsテーブルを検索
                ->where(['id' => $data['id']])  // IDで検索
                ->first();  // 既存のレコードを取得
        }
    
        // 既存レコードがない場合、新規作成
        if (empty($data['id']) || !$blog) { // IDがないか、取得できない場合
            $blog = $this->Blogs->newEmptyEntity();  // 新しいエンティティを作成
        }
    
        // データを更新（フォームデータをセット）
        $blog = $this->Blogs->patchEntity($blog, $data);
        
        // 新規作成の場合はstatusを'draft'に設定
        if (empty($data['id']) || !$blog->id) {
            $blog->status = 'draft';  // 新規作成は下書き
        } else {
            // 既存レコードがある場合、公開にしたい場合はstatusを変更
            if (!empty($data['status']) && $data['status'] === 'published') {
                $blog->status = 'published';  // 公開状態に更新
            }
        }
    
        // 保存
        if ($this->Blogs->save($blog)) {  // 保存に成功した場合
            // 新規作成された場合は、IDを取得
            $newBlogId = $blog->id;
            Log::debug('New Blog ID: ' . $newBlogId);  // ログファイルにIDを出力
    
            return $this->response->withType('application/json')  // JSON形式で
                ->withStringBody(json_encode([      // レスポンスを返す
                    'success' => true,  // 成功
                    'id' => $newBlogId  // 新規作成されたレコードのIDを返す
                ]));  // 成功を返す
        }
    
        // 保存に失敗した場合
        return $this->response->withType('application/json')  // JSON形式で
            ->withStringBody(json_encode(['success' => false]));  // 失敗を返す
    }

    // 編集ページの保存機能
    public function editAutosave()
    {
        $this->request->allowMethod(['post']);  // POSTメソッドのみ許可
    
        $data = $this->request->getData();  // 送信されたデータを取得
        $blog = null;  // 下書き記事
    
        // IDがある場合、既存のレコードを取得
        if (!empty($data['id'])) {
            $blog = $this->Blogs->find()
                ->where(['id' => $data['id']])
                ->first();
        }
    
        // 既存レコードがない場合、新規作成
        if (empty($data['id']) || !$blog) {
            $blog = $this->Blogs->newEmptyEntity();
        }
    
        // データを更新（フォームデータをセット）
        $blog = $this->Blogs->patchEntity($blog, $data);
    
        // 新規作成の場合はstatusを'draft'に設定
        if (empty($data['id']) || !$blog->id) {
            $blog->status = 'draft';  // 新規作成は下書き
        } else {
            // 既存レコードがある場合、公開にしたい場合はstatusを変更
            if (!empty($data['status']) && $data['status'] === 'published') {
                $blog->status = 'published';  // 公開状態に更新
            }
        }
    
        // 保存
        if ($this->Blogs->save($blog)) {
            $newBlogId = $blog->id;
            Log::debug('Auto-saved Blog ID: ' . $newBlogId);
    
            return $this->response->withType('application/json')
                ->withStringBody(json_encode([
                    'success' => true,
                    'id' => $newBlogId
                ]));
        }
    
        // 保存に失敗した場合
        return $this->response->withType('application/json')
            ->withStringBody(json_encode(['success' => false]));
    }
    
    // ブログ編集ページ
    public function edit($id = null)    // 引数にIDを取る
    {
        $blog = $this->Blogs->get($id);  // 編集する記事を取得

        // フォームが送信された場合
        if ($this->request->is(['patch', 'post', 'put'])) {

            $blog = $this->Blogs->patchEntity($blog, $this->request->getData());  // フォームデータをセット
            
            
            // ステータスを適用 (デフォルトは 'draft' )
            if (empty($this->request->getData('status'))) { // ステータスが空の場合
                $blog->status = 'draft';    // 下書き
            }

            if ($this->Blogs->save($blog)) {
                $this->Flash->success(__('記事が更新されました。'));

                return $this->redirect(['action' => 'index']);  // 更新後は一覧ページにリダイレクト
            }
            $this->Flash->error(__('記事の更新に失敗しました。'));
        }

        $this->set(compact('blog'));  // ビューにブログデータを渡す
    }

    // ブログ投稿ボタン
    public function publish()
    {
        if ($this->request->is('post')) {   // POSTメソッドの場合
            $data = $this->request->getData();
    
            // 下書きの ID を取得
            $blog = $this->Blogs->find()    // Blogsテーブルを検索
                ->where(['id' => $data['id'], 'status' => 'draft']) // 下書きのみ
                ->first();
    
            if (!$blog) {
                $this->Flash->error('下書きが見つかりませんでした。');
                return $this->redirect(['action' => 'index']);
            }
    
            // ステータスを 'published' に更新
            $blog = $this->Blogs->patchEntity($blog, ['status' => 'published']);
    
            if ($this->Blogs->save($blog)) {
                $this->Flash->success('ブログを公開しました。');
                return $this->redirect(['controller' => 'Managements', 'action' => 'administratorLoginSuccess']);
            } else {
                $this->Flash->error('公開に失敗しました。');
            }
        }
    
        return $this->redirect(['action' => 'add']);
    }
    
    // ブログプレビューボタン
    public function preview()
    {
        if ($this->request->is('post')) {
            $data = $this->request->getData(); // フォームデータを取得
    
            // ここでIDを使ってデータベースからデータを取得したい場合
            if (isset($data['id']) && !empty($data['id'])) {
                $dataFromDb = $this->Blogs->get($data['id']); // DBからデータを取得
                $this->set('data', $dataFromDb); // DBから取得したデータを渡す
            } else {
                $this->set(compact('data')); // フォームデータをそのまま渡す
            }
        } else {
            return $this->redirect(['action' => 'add']); // 直接アクセス禁止
        }
    }

    // 公開中のブログ削除
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);

        try {
            $blog = $this->Blogs->get($id);  // blogsテーブルから1件取得
            $blog->delete_flag = 1;           // delete_flagを1にするだけ
            if ($this->Blogs->save($blog)) {
                $this->Flash->success(__('ブログ記事を削除しました。'));
            } else {
                $this->Flash->error(__('ブログ記事の削除に失敗しました。'));
            }
        } catch (\Exception $e) {
            $this->Flash->error(__('ブログ記事の削除時にエラーが発生しました。'));
        }

        return $this->redirect(['action' => 'blogList']); // 一覧に戻す
    }

}
