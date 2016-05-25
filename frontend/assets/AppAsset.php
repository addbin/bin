<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'css/common.css',
        'css/main.css',
        'css/bootstrap.css',

    ];
    public $js = [
        'js/libs/modernizr.min.js',
    ];
    public $woff = [
        'fonts/icomoon.dev.svg',
        'fonts/icomoon.ttf',
//        'fonts/icomoon.dev.svg',
//        'fonts/icomoon.dev.svg',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
