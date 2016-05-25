<?php

use yii\db\Schema;
use yii\db\Migration;

class m160509_063517_test_db_init extends Migration
{
    public function init(){
        $this->db = 'db';
        parent::init();
    }

    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%test_case}}', [
            'case_id' => Schema::TYPE_PK,
            'id_case' => Schema::TYPE_STRING . '(255) NOT NULL',
            'illustration'=> Schema::TYPE_STRING . '(255) NOT NULL',
            'route' => Schema::TYPE_STRING . '(255) DEFAULT NULL',
            'key' => Schema::TYPE_STRING . '(255) NOT NULL',
            'value' => Schema::TYPE_STRING . '(255) NOT NULL',
            'label' => Schema::TYPE_STRING . '(255) DEFAULT NULL',
//            'error_label' => Schema::TYPE_STRING . '(255) DEFAULT NULL',
//            'success_label' => Schema::TYPE_STRING . '(255) DEFAULT NULL',
            'trigger' => Schema::TYPE_STRING . '(255) DEFAULT NULL',
//            'type' => Schema::TYPE_INTEGER . ' NOT NULL',
            'delete' => Schema::TYPE_INTEGER . ' DEFAULT 0',
            'created_at' => Schema::TYPE_INTEGER . ' NOT NULL',
            'updated_at' => Schema::TYPE_INTEGER . ' NOT NULL',
        ], $tableOptions);

        $this->createTable('{{%test_case_affiliated}}', [
            'tca_id' => Schema::TYPE_PK,
            'case_id' => Schema::TYPE_STRING . '(255) NOT NULL',
//            'type' => Schema::TYPE_STRING . '(255) NOT NULL',
            'label' => Schema::TYPE_STRING . '(255) DEFAULT NULL',
            'delete' => Schema::TYPE_INTEGER . ' DEFAULT 0',
            'created_at' => Schema::TYPE_INTEGER . ' NOT NULL',
            'updated_at' => Schema::TYPE_INTEGER . ' NOT NULL',
        ], $tableOptions);

    }

    public function safeDown()
    {
        $this->dropTable('{{%test_case}}');
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
