<?php
namespace App\Model\Table;

use Cake\ORM\Table;

class AdminLoginAttemptsTable extends Table
{
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('admin_login_attempts'); // 実際のテーブル名
        $this->setPrimaryKey('id');
    }
}
