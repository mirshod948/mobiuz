<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'css/bracket.css',
        'lib/font-awesome/css/font-awesome.css',
        'lib/Ionicons/css/ionicons.css',
        'lib/perfect-scrollbar/css/perfect-scrollbar.css',
        'lib/jquery-switchbutton/jquery.switchButton.css',
        'lib/rickshaw/rickshaw.min.css',
        'lib/chartist/chartist.css',
        'http://themepixels.me/bracket/img/bracket-social.png',
    ];
    public $js = [
        'js/jquery.js',
        'js/popper.js',
        'js/bootstrap.js',
        'js/perfect-scrollbar.jquery.js',
        'js/moment.js',
        'js/jquery-ui.js',
        'js/jquery.switchButton.js',
        'js/jquery.peity.js',
        'js/chartist.js',
        'js/jquery.sparkline.min.js',
        'js/d3.js',
        'js/rickshaw.min.js',
        'js/bracket.js',
        'js/ResizeSensor.js',
        'js/dashboard.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap5\BootstrapAsset',
    ];
}
