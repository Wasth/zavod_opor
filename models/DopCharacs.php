<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "dop_characs".
 *
 * @property integer $id
 * @property integer $dop_id
 * @property string $content
 *
 * @property DopItems $dop
 */
class DopCharacs extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'dop_characs';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['dop_id'], 'integer'],
            [['content'], 'string'],
            [['dop_id'], 'exist', 'skipOnError' => true, 'targetClass' => DopItems::className(), 'targetAttribute' => ['dop_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'dop_id' => 'Dop ID',
            'content' => 'Content',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDop()
    {
        return $this->hasOne(DopItems::className(), ['id' => 'dop_id']);
    }
}
