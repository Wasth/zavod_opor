<?php

namespace app\models;

use Yii;
use yii\helpers\Url;

/**
 * This is the model class for table "scheme".
 *
 * @property integer $id
 * @property integer $variety_id
 * @property string $img
 *
 * @property Variety $variety
 */
class Scheme extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'scheme';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['variety_id'], 'integer'],
            [['img'], 'string'],
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
            'img' => 'Img',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVariety()
    {
        return $this->hasOne(Variety::className(), ['id' => 'variety_id']);
    }
    public function getImgUrl(){
        return Url::toRoute('/assets/uploads/').'/'.$this->img;
    }
}
