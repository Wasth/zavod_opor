<?php

namespace app\models;

use Yii;
use yii\helpers\Url;

/**
 * This is the model class for table "additional_pic".
 *
 * @property integer $id
 * @property integer $item_id
 * @property string $img
 *
 * @property Item $item
 */
class AdditionalPic extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'additional_pic';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['item_id'], 'integer'],
            [['img'], 'string', 'max' => 255],
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
    public function getImgUrl(){
        return Url::toRoute('/assets/uploads/').'/'.$this->img;
    }
}
