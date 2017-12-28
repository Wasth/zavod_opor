<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\VarietyAddPic */

$this->title = 'Update Variety Add Pic: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Variety Add Pics', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="variety-add-pic-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
