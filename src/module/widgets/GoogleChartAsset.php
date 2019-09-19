<?php

namespace codexten\yii\modules\dashboard\widgets;

use tolik505\vuejs\VueBundleAsset;
use yii\web\View;

class GoogleChartAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@vendor/npm-asset/vue-google-charts/dist';
    public $js = [
//        'vue-google-charts.browser.js',
    ];

    public $jsOptions = [
        'position' => View::POS_HEAD,
    ];

    public $depends = [
        VueBundleAsset::class,
    ];
}
