<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\AdditionalPic */

$this->title = 'Create Additional Pic';
$this->params['breadcrumbs'][] = ['label' => 'Additional Pics', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="additional-pic-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
