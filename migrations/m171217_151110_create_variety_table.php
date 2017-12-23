<?php

use yii\db\Migration;

/**
 * Handles the creation of table `variety`.
 */
class m171217_151110_create_variety_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('variety', [
            'id' => $this->primaryKey(),
            'item_id' => $this->integer(),
            'text' => $this->string(),
            'img' => $this->string(),
        ]);
        $this->createIndex("idx-item_id",'variety','item_id');
        $this->addForeignKey('fk-item_id',
            'variety','item_id',
            'item','id');
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropForeignKey('fk-item_id','variety');
        $this->dropIndex('idx-item_id','variety');
        $this->dropTable('variety');
    }
}
