<?php

namespace app\models;

use Yii;
use yii\helpers\Url;

//use yii\helpers\Url;

/**
 * This is the model class for table "variety".
 *
 * @property integer $id
 * @property integer $item_id
 * @property string $text
 * @property string $img
 *
 * @property Item $item
 */
class Variety extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'variety';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['item_id'], 'integer'],
            [['text', 'img'], 'string', 'max' => 255],
            [['item_id'], 'exist', 'skipOnError' => true, 'targetClass' => Item::className(), 'targetAttribute' => ['item_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'item_id' => 'Item ID',
            'text' => 'Text',
            'img' => 'Img',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getItem()
    {
        return $this->hasOne(Item::className(), ['id' => 'item_id']);
    }
    public function getImgUrl() {
        return Url::toRoute('/assets/uploads/').'/'.$this->img;
    }
    public function getAddpics(){
        return $this->hasMany(VarietyAddPic::className(),['variety_id'=>'id']);
    }
}
