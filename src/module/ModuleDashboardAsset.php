<?php

namespace codexten\yii\modules\dashboard;

use codexten\yii\web\assets\vue\VueAsset;

class ModuleDashboardAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@moduleDashboardAsset/dist';
    public $js = [
        'yii-module-dashboard.browser.js',
    ];
    public $css = [
        'yii-module-dashboard.css',
    ];
    public $depends = [
        VueAsset::class,
    ];
}
