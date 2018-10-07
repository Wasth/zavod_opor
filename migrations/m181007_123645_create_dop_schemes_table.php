<?php

use yii\db\Migration;

/**
 * Handles the creation of table `dop_schemes`.
 */
class m181007_123645_create_dop_schemes_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('dop_schemes', [
            'id' => $this->primaryKey(),
            'dop_id' => $this->integer(),
            'img' => $this->string(),
        ]);
        $this->createIndex('idx-dop_schemes-dop_id','dop_schemes','dop_id');
        $this->addForeignKey('fk-dop_schemes-dop_id',
            'dop_schemes', 'dop_id',
            'dop_items','id');
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropForeignKey('fk-dop_schemes-dop_id','dop_schemes');
        $this->dropForeignKey('idx-dop_schemes-dop_id','dop_schemes');
        $this->dropTable('dop_schemes');
    }
}
