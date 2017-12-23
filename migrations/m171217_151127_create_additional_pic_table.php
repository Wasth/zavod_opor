<?php

use yii\db\Migration;

/**
 * Handles the creation of table `additional_pic`.
 */
class m171217_151127_create_additional_pic_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('additional_pic', [
            'id' => $this->primaryKey(),
            'item_id' => $this->integer(),
            'img' => $this->string(),
        ]);
        $this->createIndex('idx-pic-item_id','additional_pic','item_id');
        $this->addForeignKey('fk-pic-item_id',
            'additional_pic','item_id',
            'item','id');
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropForeignKey('fk-pic-item_id','additional_pic');
        $this->dropIndex('idx-pic-item_id','additional_pic');
        $this->dropTable('additional_pic');
    }
}
