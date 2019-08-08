<?php
/**
 * Created by PhpStorm.
 * User: jomon
 * Date: 10/8/18
 * Time: 8:30 PM
 */

$widget = $this->context;

/* @var $this \yii\web\View */
/* @var $widget \codexten\yii\web\widgets\Page */
/* @var $content string */

\codexten\yii\modules\dashboard\ModuleDashboardAsset::register($this);
?>

<?php $this->beginContent('@app/widgets/views/page/default.php'); ?>

<div id="<?= $widget->id ?>">

    <?= $widget->renderContent('content') ?>

</div>

<script>
var app = new Vue({
  el: '#<?= $widget->id?>',
  data: {
    message: 'Hello Vue.js!'
  }
})
</script>

<?php $this->endContent() ?>



