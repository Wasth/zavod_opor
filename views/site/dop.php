<?php $this->title = $parent->name ?>
<div class="minimal-h">
    <div id="catalogWrapper">
        <h1 class="block-title"><?= $parent->name ?></h1>
        <br><br>
        <div id="catalog" class="content">

            <?php use yii\helpers\Url;

            foreach($items as $item): ?>
                <div>
                    <?php if($item->dopItems): ?>
                        <h2 class="parent-item"><?= $item->name ?></h2>
                        <?php foreach ($item->dopItems as $child): ?>
                            <h3 class="inline child-item"><a href="<?= Url::to(['full-dop', 'id' => $child->id]) ?>"><?= $child->name ?></a></h3>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <a class="clickable-parent" href="<?= Url::to(['full-dop', 'id' => $item->id]) ?>"><h2><?= $item->name?></h2></a>
                    <?php endif; ?>

                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<br>
<br>