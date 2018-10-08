<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\DopItems */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Dop Items', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dop-items-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>
    <p>
        <?= Html::a('Добавить изображение', ['add-pic', 'id' => $model->id], ['class' => 'btn btn-success']) ?>
        <?= Html::a('Добавить дочерний элемент', ['create', 'id' => $model->id], ['class' => 'btn btn-success']) ?>
        <?= Html::a('Добавить характеристики', ['add-characs', 'id' => $model->id], ['class' => 'btn btn-success']) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            'parent_id',
        ],
    ]) ?>
    <h2>Дополнительные картинки</h2>
    <div class="additional-pics">
        <?php foreach($addPics as $pic): ?>
            <div><img src="<?= $pic->getImgUrl(); ?>"><?= Html::a('Удалить', ['dop-img/delete', 'id' => $pic->id], [
                    'class' => 'btn btn-danger',
                    'data' => [
                        'confirm' => 'Are you sure you want to delete this item?',
                        'method' => 'post',
                    ],
                ]) ?></div>
        <?php endforeach; ?>
    </div>
    <h2>Дочерние элементы</h2>
    <div class="variety-pics">
        <?php foreach($children as $variety): ?>
            <div><h3><?= $variety->name ?></h3><img src="<?= $variety->getImgUrl(); ?>">
                <?= Html::a('Удалить', ['delete', 'id' => $variety->id], [
                    'class' => 'btn btn-danger',
                    'data' => [
                        'confirm' => 'Are you sure you want to delete this item?',
                        'method' => 'post',
                    ],
                ]) ?>

                <?= Html::a('Изменить',['view','id'=>$variety->id],['class'=>'btn btn-primary']) ?>
            </div>
        <?php endforeach; ?>
    </div>
    <h2>Характеристики</h2>
    <div class="additional-pics">
        <?= $characs->content ?>
    </div>
</div>
