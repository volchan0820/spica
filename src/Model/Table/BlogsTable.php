<?php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cake\ORM\RulesChecker;

class BlogsTable extends Table
{
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('blogs'); // テーブル名
        $this->setDisplayField('title'); // デフォルトの表示フィールド
        $this->setPrimaryKey('id'); // 主キー

        $this->addBehavior('Timestamp'); // created, modifiedフィールドを自動で管理
    }

    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->notEmptyString('title', 'タイトルは必須です')
            ->notEmptyString('content', '本文は必須です');

        // status のバリデーション (ENUM: 'draft' or 'published')
        $validator
            ->notEmptyString('status', 'ステータスは必須です')
            ->inList('status', ['draft', 'published'], '無効なステータス値です');

        return $validator;
    }
}
