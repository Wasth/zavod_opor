<?php

namespace app\models;

use Yii;
use yii\helpers\Url;

/**
 * This is the model class for table "variety_add_pic".
 *
 * @property integer $id
 * @property integer $variety_id
 * @property string $img
 *
 * @property Variety $variety
 */
class VarietyAddPic extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'variety_add_pic';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['variety_id'], 'integer'],
            [['img'], 'string', 'max' => 255],
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
