<?php

use codexten\yii\modules\dashboard\widgets\DashboardWidget;
use yii\web\View;

/* @var $this View */
/* @var $widget DashboardWidget */

$widget = $this->context;
?>
<dashboard-widget fetch-url="<?= $widget->fetchUrl ?>" class="dashboard-widget">
    <template v-slot="widget">

        <?php if ($widget->title): ?>

            <div class="title"><?= $widget->title ?></div>

        <?php endIf; ?>

        <div class="content">

            <?= $widget->renderContent('content') ?>
            
        </div>
    </template>
</dashboard-widget>
