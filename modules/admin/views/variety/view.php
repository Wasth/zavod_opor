<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Variety */

$this->title = $model->id;
?>
<div class="variety-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
<!--        --><?//= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Вернуться к элементу',['item/view', 'id'=>$model->item->id],['class'=>'btn btn-primary']) ?>
        <?= Html::a('Добавить дополнительное изображение', ['addpic', 'id' => $model->id], ['class' => 'btn btn-success']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'item_id',
            'text',
            'img',
        ],
    ]) ?>
    <h2>Дополнительные картинки</h2>
    <div class="additional-pics">
        <?php foreach($addPics as $pic): ?>
            <div><img src="<?= $pic->getImgUrl(); ?>"><?= Html::a('Удалить', ['varietyaddpic/delete', 'id' => $pic->id], [
                    'class' => 'btn btn-danger',
                    'data' => [
                        'confirm' => 'Are you sure you want to delete this item?',
                        'method' => 'post',
                    ],
                ]) ?></div>
        <?php endforeach; ?>
    </div>
</div>
