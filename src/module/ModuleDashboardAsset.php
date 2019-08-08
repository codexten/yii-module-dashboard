<?php

namespace codexten\yii\modules\dashboard;

use codexten\yii\web\assets\vue\VueAsset;
use yii\web\View;

class ModuleDashboardAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@moduleDashboardAsset/dist';
    public $js = [
        'yii-module-dashboard.browser.js',
    ];
    public $css = [
        'yii-module-dashboard.css',
    ];
    public $jsOptions = [
        'position' => View::POS_HEAD,
    ];
    public $depends = [
        VueAsset::class,
    ];
}
