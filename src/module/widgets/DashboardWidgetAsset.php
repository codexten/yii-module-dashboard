<?php

namespace codexten\yii\modules\dashboard\widgets;

use tolik505\vuejs\VueBundleAsset;
use yii\web\AssetBundle;
use yii\web\View;

class DashboardWidgetAsset extends AssetBundle
{
    public $sourcePath = '@moduleDashboard/widgets/assets/DashboardWidget';
    public $js = [
        'https://unpkg.com/http-vue-loader',
//        '/npm/vue-google-charts/dist/vue-google-charts.browser.js',
//        'https://unpkg.com/vue-loading-overlay@3.2.0/dist/vue-loading.min.js',
        'https://cdn.jsdelivr.net/npm/vue-loading-overlay@3',
//        'https://cdn.jsdelivr.net/npm/vue-friendly-iframe',
        'js/vue-google-charts.browser.js',
        'js/script.js',
        'js/clock.js',
    ];
    public $css = [
        'https://cdn.jsdelivr.net/npm/vue-loading-overlay@3/dist/vue-loading.css',
    ];

    public $jsOptions = [
        'position' => View::POS_HEAD,
    ];

    public $depends = [
        GoogleChartAsset::class,
    ];
}
