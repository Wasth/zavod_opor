<?php

use yii\db\Migration;

/**
 * Handles the creation of table `variety_add_pic`.
 */
class m171226_132010_create_variety_add_pic_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('variety_add_pic', [
            'id' => $this->primaryKey(),
            'variety_id' => $this->integer(),
            'img' => $this->string(),
        ]);
        $this->createIndex('idx-pic-variety_id','variety_add_pic','variety_id');
        $this->addForeignKey('fk-pic-variety_id',
            'variety_add_pic','variety_id',
            'variety','id');
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropForeignKey('fk-pic-variety_id','variety_add_pic');
        $this->dropIndex('idx-pic-variety_id','variety_add_pic');
        $this->dropTable('variety_add_pic');
    }
}
