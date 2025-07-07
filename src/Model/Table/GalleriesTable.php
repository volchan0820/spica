<?php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class GalleriesTable extends Table
{
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('galleries'); // テーブル名（DBと一致）
        $this->setPrimaryKey('id');   // 主キー
        $this->addBehavior('Timestamp'); // created, modified を自動設定
    }

    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->inList('style', ['short', 'bob', 'medium', 'long'], '有効なスタイルを選択してください。')
            ->notEmptyString('style', 'スタイルを選択してください。')
            ->notEmptyString('image_path', '画像のパスが登録されていません。');

        return $validator;
    }
}