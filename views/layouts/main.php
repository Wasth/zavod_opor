<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\assets\PublicAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\helpers\Url;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

//AppAsset::register($this);
PublicAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="<?= Url::toRoute('assets/img/logo.png') ?>">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <meta name="mailru-domain" content="XR0aAwLFXBZomEn0" />
    <?php $this->head() ?>

</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <div class="container">
        <header id="headerWrapper">
            <div id="header" class="content">
                <div id="left-block">
                    <a href="/">
                        <img src="assets/img/logo.png">
                        <h1>Завод по производству<br>элементов трубопроводов</h1>
                    </a>
                </div>
                <div id="right-block">
                    <h1 class="number">8 (800) 200-40-80</h1>
                    <h1 class="email"><a href="mailto:sale@metiz-mk.ru">sale@metiz-mk.ru</a></h1>
                </div>
                <div class="clear"></div>
            </div>
        </header>
        <div id="menu">
            <div id="menuWrapper" class="">
                <div id="menuContainer" class="content">
                    <a href="/">
                        <div class="menu-item">Главная</div>
                    </a><a href="">
                        <div class="menu-item">О компании</div>
                    </a><a href="">
                        <div class="menu-item">Контакты</div>
                    </a>
                </div>
            </div>
        </div>
        <?= $content ?>
        <footer id="footerWrapper">
            <div id="footer" class="content">
                <div id="left-block-footer">
                    <img src="assets/img/logo.png">
                    <h1>Завод по производству<br>элементов трубопроводов</h1>
                </div>
                <div id="right-block-footer">
                    <h1 class="number">8 (800) 200-40-80</h1>
                    <h1 class="email"><a href="mailto:sale@metiz-mk.ru">sale@metiz-mk.ru</a></h1>
                </div>
                <div class="clear"></div>
            </div>
        </footer>
    </div>
</div>



<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
