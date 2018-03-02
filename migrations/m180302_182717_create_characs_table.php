<?php

use yii\db\Migration;

/**
 * Handles the creation of table `characs`.
 */
class m180302_182717_create_characs_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('characs', [
            'id' => $this->primaryKey(),
            'variety_id' => $this->integer(),
            'content' => $this->text(),
        ]);
        $this->createIndex('idx-characs-variety_id','characs','variety_id');
        $this->addForeignKey('fk-characs-variety_id',
            'characs','variety_id',
            'variety','id');
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropForeignKey('fk-characs-variety_id','characs');
        $this->dropIndex('idx-characs-variety_id','characs');
        $this->dropTable('characs');
    }
}
