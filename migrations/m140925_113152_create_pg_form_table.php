<?php

use console\db\Migration;

class m140925_113152_create_pg_form_table extends Migration
{

    public $tableName = "{{%pg__form}}";

    public function up()
    {
        $this->createTable($this->tableName, [
            'id' => $this->primaryKey(),
            'status' => $this->smallInteger()->notNull()->defaultValue(0),
            'author_id' => $this->integer()->notNull(),
            'updater_id' => $this->integer()->notNull(),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
            'root' => $this->integer()->notNull()->defaultValue(0),
            'lft' => $this->integer()->notNull()->defaultValue(0),
            'rgt' => $this->integer()->notNull()->defaultValue(0),
            'level' => $this->integer()->notNull()->defaultValue(0),
            'name' => $this->string()->notNull(),
            'slug' => $this->string()->unique(),
            'icon' => $this->string(),
            'onmain' => $this->smallInteger(1)->defaultValue(0),
        ]);

        $this->insert($this->tableName, [
            'author_id' => 1,
            'root' => 1,
            'lft' => 1,
            'rgt' => 2,
            'level' => 1,
        ]);

    }

    public function down()
    {
        $this->dropTable($this->tableName);

    }
}
