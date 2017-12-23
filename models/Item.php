<?php

namespace app\models;

use Yii;
use yii\helpers\Url;

/**
 * This is the model class for table "item".
 *
 * @property integer $id
 * @property string $text
 * @property string $img
 *
 * @property AdditionalPic[] $additionalPics
 * @property Variety[] $varieties
 */
class Item extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'item';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['text', 'img'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'text' => 'Text',
            'img' => 'Img',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAdditionalPics()
    {
        return $this->hasMany(AdditionalPic::className(), ['item_id' => 'id']);
    }
    public function getImgUrl() {
        return Url::toRoute('/assets/uploads/').'/'.$this->img;
    }
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVarieties()
    {
        return $this->hasMany(Variety::className(), ['item_id' => 'id']);
    }

    public function saveImage($image){
        $this->img = $image;
        return $this->save(false);
    }
}
