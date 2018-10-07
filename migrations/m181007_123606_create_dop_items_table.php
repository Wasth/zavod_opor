<?php

use yii\db\Migration;

/**
 * Handles the creation of table `dop_items`.
 */
class m181007_123606_create_dop_items_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('dop_items', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'parent_id' => $this->integer(),
        ]);
        $this->createIndex('idx-parent_id', 'dop_items', 'parent_id');
        $this->addForeignKey('fk-dop_items-parent_id',
            'dop_items', 'parent_id',
            'dop_items', 'id');
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropForeignKey('fk-dop_items-parent_id','dop_items');
        $this->dropIndex('idx-parent_id','dop_items');
        $this->dropTable('dop_items');
    }
}
