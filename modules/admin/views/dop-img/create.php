<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\DopImg */

$this->title = 'Create Dop Img';
$this->params['breadcrumbs'][] = ['label' => 'Dop Imgs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dop-img-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
