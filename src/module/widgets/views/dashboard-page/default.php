<?php

use codexten\yii\modules\dashboard\ModuleDashboardAsset;

/* @var $this \yii\web\View */
/* @var $widget \codexten\yii\web\widgets\Page */
/* @var $content string */

$widget = $this->context;

ModuleDashboardAsset::register($this);

$js = <<<JS
var app = new Vue({
  el: '#{$widget->id}',
  data: {
    message: 'Hello Vue.js!'
  }
})
JS;

$this->registerJs($js, \yii\web\View::POS_END);
?>

<?php $this->beginContent('@app/widgets/views/page/default.php'); ?>

<div id="<?= $widget->id ?>">

    <?= $widget->renderContent('content') ?>

</div>

<?php $this->endContent() ?>



