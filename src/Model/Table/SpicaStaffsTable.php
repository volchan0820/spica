<?php
namespace App\Model\Table;

use Cake\ORM\Table;

class SpicaStaffsTable extends Table
{
    public function initialize(array $config): void
    {
        parent::initialize($config);

        // データベース名とテーブル名を指定
        $this->setTable('spica_staffs');  // スキーマ名が必要な場合、'spica.spica_staffs' に変更
        $this->setPrimaryKey('spica_staff_id'); // 主キーが 'spica_staff_id' の場合
    }
}
