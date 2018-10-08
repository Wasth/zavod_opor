<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DopImg */

$this->title = 'Update Dop Img: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Dop Imgs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="dop-img-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
