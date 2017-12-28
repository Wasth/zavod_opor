<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\VarietyAddPic */

$this->title = 'Create Variety Add Pic';
$this->params['breadcrumbs'][] = ['label' => 'Variety Add Pics', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="variety-add-pic-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
