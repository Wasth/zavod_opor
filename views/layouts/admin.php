<?php
/* @var $this \yii\web\View */
/* @var $content string */
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\helpers\Url;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
AppAsset::register($this);
$this->title = 'Админ-панель';
$curDomain = Yii::$app->request->serverName;
?>
<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <body>
    <?php $this->beginBody() ?>

    <div class="wrap">
        <?php
        NavBar::begin([
            'brandLabel' => $curDomain.' - админ-панель',
            'brandUrl' => '/admin/default/index',
            'options' => [
                'class' => 'navbar-inverse navbar-fixed-top',
            ],
        ]);
        echo Nav::widget([
            'options' => ['class' => 'navbar-nav navbar-right'],
            'items' => [
                ['label' => 'Главная', 'url' => ['/admin/default/index']],
                ['label' => 'Элементы в каталоге', 'items' => [
                    [
                        'label' => 'Опоры',
                        'url' => '/admin/item/',
                    ],
                    [
                        'label' => 'Закладные детали',
                        'url' => '/admin/dop-items/index?id=3',
                    ],
                    [
                        'label' => 'Лестницы и ограждения',
                        'url' => '/admin/dop-items/index?id=4',
                    ],
                    [
                        'label' => 'Сальники',
                        'url' => '/admin/dop-items/index?id=5',
                    ],
                    [
                        'label' => 'Фундаментальные болты',
                        'url' => '/admin/dop-items/index?id=6',
                    ],
                ]],
                ['label' => 'Открыть сайт', 'url' => ['/']],
                ['label' => 'Выйти из аккаунта', 'url' => ['/exitadmin']],
            ],
        ]);
        NavBar::end();
        ?>

        <div class="container">
            <?= Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>
            <?= $content ?>
        </div>
    </div>



    <?php $this->endBody() ?>
    <?php $this->registerJsFile('/ckeditor/ckeditor.js');?>
    <?php $this->registerJsFile('/ckfinder/ckfinder.js');?>
    <script>
        $(document).ready(function () {
            var editor = CKEDITOR.replaceAll();
            CKFinder.setupCKEditor(editor);
        });
    </script>
    </body>
    </html>
<?php $this->endPage() ?>