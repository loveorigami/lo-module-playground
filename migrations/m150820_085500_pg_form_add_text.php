<?php

use console\db\Migration;

class m150820_085500_pg_form_add_text extends Migration
{
    public $tableName = "{{%pg__form}}";

    public function up()
    {
        $this->addColumn($this->tableName, "text1", $this->text());
        $this->addColumn($this->tableName, "text2", $this->text());
        $this->addColumn($this->tableName, "text3", $this->text());
        $this->addColumn($this->tableName, "text4", $this->text());
        $this->addColumn($this->tableName, "text5", $this->text());
        $this->addColumn($this->tableName, "text6", $this->text());
        $this->addColumn($this->tableName, "text7", $this->text());

        $this->addColumn($this->tableName, "title", $this->string());
        $this->addColumn($this->tableName, "keywords", $this->string());
        $this->addColumn($this->tableName, "description", $this->string());
    }

    public function down()
    {
        $this->dropColumn($this->tableName, "text1");
        $this->dropColumn($this->tableName, "text2");
        $this->dropColumn($this->tableName, "text3");
        $this->dropColumn($this->tableName, "text4");
        $this->dropColumn($this->tableName, "text5");
        $this->dropColumn($this->tableName, "text6");
        $this->dropColumn($this->tableName, "text7");

        $this->dropColumn($this->tableName, "title");
        $this->dropColumn($this->tableName, "keywords");
        $this->dropColumn($this->tableName, "description");
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
