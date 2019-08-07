<?php

namespace codexten\yii\modules\dashboard\widgets;

use tolik505\vuejs\VueBundleAsset;
use yii\web\View;

class DashboardWidgetAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@moduleDashboard/widgets/assets/DashboardWidget';
    public $js = [
//        'https://unpkg.com/vue-loading-overlay@3.2.0/dist/vue-loading.min.js',
        'https://cdn.jsdelivr.net/npm/vue-loading-overlay@3',
//        'https://cdn.jsdelivr.net/npm/vue-friendly-iframe',
        'https://raw.githubusercontent.com/devstark-com/vue-google-charts/master/dist/vue-google-charts.browser.js',
        'js/script.js',
    ];
    public $css = [
        'https://cdn.jsdelivr.net/npm/vue-loading-overlay@3/dist/vue-loading.css',
    ];

    public $jsOptions = [
        'position' => View::POS_HEAD,
    ];

    public $depends = [
        VueBundleAsset::class,

    ];
}
