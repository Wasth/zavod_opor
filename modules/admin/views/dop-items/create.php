<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\DopItems */

$this->title = 'Create Dop Items';
$this->params['breadcrumbs'][] = ['label' => 'Dop Items', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dop-items-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
