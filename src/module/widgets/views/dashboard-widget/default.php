<?php

use codexten\yii\modules\dashboard\widgets\DashboardWidget;
use codexten\yii\modules\dashboard\widgets\DashboardWidgetAsset;
use yii\helpers\Url;
use yii\web\View;

/* @var $this View */
/* @var $widget DashboardWidget */

//DashboardWidgetAsset::register($this);

$widget = $this->context;
?>
<dashboard-widget fetch-url="<?= $widget->fetchUrl ?>" style="width: 900px; height: 500px;">
    <template v-slot="widget">

        <?= $widget->renderContent('content') ?>

    </template>
</dashboard-widget>
