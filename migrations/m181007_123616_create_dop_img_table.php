<?php

use yii\db\Migration;

/**
 * Handles the creation of table `dop_img`.
 */
class m181007_123616_create_dop_img_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('dop_img', [
            'id' => $this->primaryKey(),
            'dop_id' => $this->integer(),
            'name' => $this->string(),
        ]);
        $this->createIndex('idx-dop_id','dop_img','dop_id');
        $this->addForeignKey('fk-dop_id',
            'dop_img', 'dop_id',
            'dop_items','id');
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropForeignKey('fk-dop_id','dop_img');
        $this->dropForeignKey('idx-dop_id','dop_img');
        $this->dropTable('dop_img');
    }
}
