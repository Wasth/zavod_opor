<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Admin Panel';
?>

<div>
    <h1>AdminMenu</h1>

    <?php $form = ActiveForm::begin() ?>

    <?= $form->field($model,'username')->textInput()->label("Username") ?>
    <?= $form->field($model,'password')->passwordInput()->label("Password") ?>

    <?= Html::submitButton('Sign in') ?>

    <?php ActiveForm::end() ?>
</div>
