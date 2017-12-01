<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/metisMenu.css',
        'font-awesome/4.6.3/css/font-awesome.min.css',
        'css/sb-admin-2.min.css',
        'css/site.css',
    ];
    public $js = [
        'js/bootstrap.min.js',
        'js/metisMenu.js',
        'js/sb-admin-2.min.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\web\JqueryAsset'
    ];
}
