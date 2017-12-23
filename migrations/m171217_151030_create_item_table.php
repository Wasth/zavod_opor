<?php

use yii\db\Migration;

/**
 * Handles the creation of table `item`.
 */
class m171217_151030_create_item_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('item', [
            'id' => $this->primaryKey(),
            'text' => $this->string(),
            'img' => $this->string(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('item');
    }
}
