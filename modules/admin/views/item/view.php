<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Item */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Items', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="item-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>

        <?= Html::a('Изменить', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
        <?= Html::a('Добавить следующий элемент', ['create'], ['class' => 'btn btn-success right']) ?>
        <br><br>
        <?= Html::a('Установить изображение', ['setimg', 'id' => $model->id], ['class' => 'btn btn-success']) ?>
        <?= Html::a('Добавить дополнительное изображение', ['addpic', 'id' => $model->id], ['class' => 'btn btn-success']) ?>
        <?= Html::a('Добавить вариацию', ['variety/create', 'item_id' => $model->id], ['class' => 'btn btn-success']) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'text',
            'img',
        ],
    ]) ?>

    <h2>Дополнительные картинки</h2>
    <div class="additional-pics">
        <?php foreach($addPics as $pic): ?>
            <div><img src="<?= $pic->getImgUrl(); ?>"><?= Html::a('Удалить', ['additionalpic/delete', 'id' => $pic->id], [
                    'class' => 'btn btn-danger',
                    'data' => [
                        'confirm' => 'Are you sure you want to delete this item?',
                        'method' => 'post',
                    ],
                ]) ?></div>
        <?php endforeach; ?>
    </div>
    <h2>Вариации</h2>
    <div class="variety-pics">
        <?php foreach($varieties as $variety): ?>
            <div><h3><?= $variety->text ?></h3><img src="<?= $variety->getImgUrl(); ?>">
                <?= Html::a('Удалить', ['variety/delete', 'id' => $variety->id], [
                    'class' => 'btn btn-danger',
                    'data' => [
                        'confirm' => 'Are you sure you want to delete this item?',
                        'method' => 'post',
                    ],
                ]) ?>

                <?= Html::a('Изменить',['variety/view','id'=>$variety->id],['class'=>'btn btn-primary']) ?>
                </div>
        <?php endforeach; ?>
    </div>
</div>
