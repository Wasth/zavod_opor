<?php
use yii\helpers\Url;
?>

<header id="headerWrapper">
    <div id="header" class="content">
        <div id="left-block">
            <a href="/">
                <img src="/assets/img/logo.png">
                <h1>«Риана Групп»</h1>
            </a>
        </div>
        <div id="right-block">
            <h1 class="number">8 (8553) 35-52-55</h1>
            <h1 class="email"><a href="mailto:sales@opora-rg.ru">sales@opora-rg.ru</a></h1>
        </div>
        <div class="clear"></div>
    </div>
    <div id="menu">
        <div id="menuWrapper" class="">
            <div id="menuContainer" class="content">
                <a href="/">
                    <div class="menu-item">Главная</div>
                </a><a href="<?= Url::toRoute(['catalog']) ?>">
                    <div class="menu-item">Каталог</div>
                </a><a href="<?= Url::toRoute(['media']) ?>">
                    <div class="menu-item">Фото и видео</div>
                </a><a href="<?= Url::toRoute(['contacts']) ?>">
                    <div class="menu-item">Контакты</div>
                </a><a href="<?= Url::toRoute(['order']) ?>">
                    <div class="menu-item">Заказать</div>
                </a>
            </div>
        </div>
    </div>
</header>
