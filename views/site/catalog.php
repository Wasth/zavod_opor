<?php $this->title = 'Опоры' ?>
<div class="minimal-h">
    <div id="catalogWrapper">
        <h1 class="block-title">Опоры</h1>
        <br><br>
        <div id="catalog" class="content">
            <?php use yii\helpers\Url;

            foreach($items as $item): ?>
                <div>
                    <h2><?= $item->text ?></h2>
                    <?php foreach ($item->varieties as $child): ?>
                        <h3 class="inline"><a href="<?= Url::toRoute(['variety', 'id'=>$child->id]) ?>"><?= $child->text ?></a></h3>
                    <?php endforeach; ?>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<br>
<br>