<?php

use yii\db\Migration;

/**
 * Handles the creation of table `scheme`.
 */
class m180302_182708_create_scheme_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('scheme', [
            'id' => $this->primaryKey(),
            'variety_id' => $this->integer(),
            'img' => $this->text(),
        ]);
        $this->createIndex('idx-scheme-variety_id','scheme','variety_id');
        $this->addForeignKey('fk-scheme-variety_id',
            'scheme','variety_id',
            'variety','id');
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropForeignKey('fk-scheme-variety_id','scheme');
        $this->dropIndex('idx-scheme-variety_id','scheme');
        $this->dropTable('scheme');
    }
}
