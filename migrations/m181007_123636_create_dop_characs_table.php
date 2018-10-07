<?php

use yii\db\Migration;

/**
 * Handles the creation of table `dop_characs`.
 */
class m181007_123636_create_dop_characs_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('dop_characs', [
            'id' => $this->primaryKey(),
            'dop_id' => $this->integer(),
            'content' => $this->text(),
        ]);
        $this->createIndex('idx-dop_characs-dop_id','dop_characs','dop_id');
        $this->addForeignKey('fk-dop_characs-dop_id',
            'dop_characs', 'dop_id',
            'dop_items','id');
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropForeignKey('fk-dop_characs-dop_id','dop_characs');
        $this->dropForeignKey('idx-dop_characs-dop_id','dop_characs');
        $this->dropTable('dop_characs');
    }
}
