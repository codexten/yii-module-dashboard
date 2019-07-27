<?php

use codexten\yii\modules\dashboard\widgets\DashboardWidget;
use yii\web\View;

/* @var $this View */
/* @var $widget DashboardWidget */

$widget = $this->context;
?>
<div class="portlet">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-gift"></i>
            Portlet
        </div>
        <div class="tools">
            <a href="#portlet-config" data-toggle="modal" class="config" data-original-title="" title=""> </a>
            <a href="javascript:" class="reload" data-original-title="" title=""> </a>
        </div>
    </div>
    <div class="portlet-body" style="display: block;">

        <?= $widget->renderContent('content') ?>

    </div>
</div>

