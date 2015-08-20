<?php

use yii\db\Schema;

class m140925_113152_create_pg_form_table extends \yii\db\Migration
{

    public $tableName = "pg__form";

	public function up()
	{
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

		$this->createTable("{{%$this->tableName}}", [
			'id' => Schema::TYPE_PK,
            'status' => Schema::TYPE_SMALLINT . ' NOT NULL DEFAULT 1',
            'author_id' => Schema::TYPE_INTEGER,
            'updater_id' => Schema::TYPE_INTEGER,
            'created_at' => Schema::TYPE_INTEGER,
            'updated_at' => Schema::TYPE_INTEGER,
			'root' => Schema::TYPE_INTEGER . ' NOT NULL DEFAULT 0',
			'lft' => Schema::TYPE_INTEGER . ' NOT NULL DEFAULT 0',
			'rgt' => Schema::TYPE_INTEGER . ' NOT NULL DEFAULT 0',
			'level' => Schema::TYPE_INTEGER . ' NOT NULL DEFAULT 0',
			'name' => Schema::TYPE_TEXT . ' NOT NULL DEFAULT \'\'',
			'slug' => Schema::TYPE_STRING . ' NOT NULL DEFAULT \'\'',
			'icon' => Schema::TYPE_STRING . ' NOT NULL DEFAULT \'\'',
			'onmain' => Schema::TYPE_SMALLINT . ' NOT NULL DEFAULT 0',
		], $tableOptions);

		$this->insert("{{%$this->tableName}}", [

			'author_id' => 1,
			'root' => 1,
			'lft' => 1,
			'rgt' => 2,
			'level' => 1,

		]);

	}

	public function down()
	{
		$this->dropTable("{{%$this->tableName}}");

	}
}
