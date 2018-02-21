<?php $this->title = 'Каталог продукции' ?>
<div class="minimal-h">
    <div id="catalogWrapper">
        <div id="catalog" class="content">
            <div id="catalogGrid">
                <?php use yii\helpers\Url;

                foreach($items as $item): ?>
                    <div>
                        <img src="<?= $item->getImgUrl() ?>" alt="catalog_img">
                        <p><?= $item->text ?></p>
                        <a href="<?= Url::toRoute(['item','id'=>$item->id]) ?>">
                            <button>ПОДРОБНЕЕ</button>
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>

        </div>
    </div>
</div>