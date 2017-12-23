<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Variety */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="variety-form">

    <?php $form = ActiveForm::begin(); ?>


    <?= $form->field($model, 'text')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'img')->fileInput()?>

    <?= $form->field($model, 'item_id')->hiddenInput(['value'=>$item_id])->label("")?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
