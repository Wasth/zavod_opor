<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Вход для администратора';
?>

<div id="adminWrapper">
    <h1>Вход для администратора</h1>

    <?php $form = ActiveForm::begin() ?>

    <?= $form->field($model,'username')->textInput(['placeholder'=>'Логин'])->label("") ?>
    <?= $form->field($model,'password')->passwordInput(['placeholder'=>'Пароль'])->label("") ?>

    <?= Html::submitButton('Войти') ?>

    <?php ActiveForm::end() ?>
</div>
