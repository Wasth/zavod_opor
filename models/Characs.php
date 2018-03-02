<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "characs".
 *
 * @property integer $id
 * @property integer $variety_id
 * @property string $content
 *
 * @property Variety $variety
 */
class Characs extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'characs';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['variety_id'], 'integer'],
            [['content'], 'string'],
            [['variety_id'], 'exist', 'skipOnError' => true, 'targetClass' => Variety::className(), 'targetAttribute' => ['variety_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'variety_id' => 'Variety ID',
            'content' => 'Content',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVariety()
    {
        return $this->hasOne(Variety::className(), ['id' => 'variety_id']);
    }
}
