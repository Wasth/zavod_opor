<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class PublicAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'assets/css/fonts.css',
        'assets/css/style.css',
        'assets/css/cardstyles.css',
    ];
    public $js = [
        'assets/js/jquery.js',
        'assets/js/main.js',
    ];
    public $depends = [

    ];
}
