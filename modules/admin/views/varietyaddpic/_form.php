<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\VarietyAddPic */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="variety-add-pic-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'variety_id')->textInput() ?>

    <?= $form->field($model, 'img')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
