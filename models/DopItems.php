<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "dop_items".
 *
 * @property integer $id
 * @property string $name
 * @property integer $parent_id
 *
 * @property DopCharacs[] $dopCharacs
 * @property DopImg[] $dopImgs
 * @property DopItems $parent
 * @property DopItems[] $dopItems
 * @property DopSchemes[] $dopSchemes
 */
class DopItems extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'dop_items';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['parent_id'], 'integer'],
            [['name'], 'string', 'max' => 255],
            [['parent_id'], 'exist', 'skipOnError' => true, 'targetClass' => DopItems::className(), 'targetAttribute' => ['parent_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'parent_id' => 'Parent ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDopCharacs()
    {
        return $this->hasMany(DopCharacs::className(), ['dop_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDopImgs()
    {
        return $this->hasMany(DopImg::className(), ['dop_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getParent()
    {
        return $this->hasOne(DopItems::className(), ['id' => 'parent_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDopItems()
    {
        return $this->hasMany(DopItems::className(), ['parent_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDopSchemes()
    {
        return $this->hasMany(DopSchemes::className(), ['dop_id' => 'id']);
    }

    public function getImgUrl(){
        return '';
    }
}
