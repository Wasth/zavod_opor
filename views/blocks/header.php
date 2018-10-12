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
        <div id="menuUp">
            <a href="/">
                <div class="menu-item">О нас</div>
            </a><a href="<?= Url::toRoute(['media']) ?>">
                <div class="menu-item">Фото и видео</div>
            </a><a href="<?= Url::toRoute(['contacts']) ?>">
                <div class="menu-item">Контакты</div>
            </a><a href="<?= Url::toRoute(['order']) ?>">
                <div class="menu-item">Заказать</div>
            </a>
        </div>
        <div id="right-block">
            <h1 class="number"><span class="number-pre-text">Отправьте заявку на почту <i class="mobile-delimiter fas fa-arrow-right"></i></span><a href="mailto:sales@opora-rg.ru" onclick="yaCounter48355565.reachGoal('emailclick'); return true;"> sales@opora-rg.ru </a></h1>
            <h1 class="email"><span class="mail-pre-text">Есть вопросы? Звоните прямо сейчас!</span>
                    <a onclick="yaCounter48355565.reachGoal('phoneclick'); return true;" href="tel:88003500919">8 (800) 350-09-19</a></h1>
        </div>
        <div class="clear"></div>
    </div>
    <div id="menu">
        <div id="menuWrapper">
            <div class="content">
                <a href="<?= Url::toRoute(['catalog']) ?>">
                    <div class="menu-item">Опоры</div>
                </a><a href="<?= Url::toRoute(['dop', 'id'=>'3']) ?>">
                    <div class="menu-item">Закладные детали</div>
                </a><a href="<?= Url::toRoute(['dop', 'id'=>'4']) ?>">
                    <div class="menu-item">Лестницы и ограждения</div>
                </a><a href="<?= Url::toRoute(['dop', 'id'=>'5']) ?>">
                    <div class="menu-item">Сальники</div>
                </a><a href="<?= Url::toRoute(['dop', 'id'=>'6']) ?>">
                    <div class="menu-item">Фундаментальные болты</div>
                </a>
            </div>
        </div>
    </div>
</header>
