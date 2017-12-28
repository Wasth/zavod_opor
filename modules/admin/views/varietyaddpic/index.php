<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\VarietyAddPicSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Variety Add Pics';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="variety-add-pic-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Variety Add Pic', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'variety_id',
            'img',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
