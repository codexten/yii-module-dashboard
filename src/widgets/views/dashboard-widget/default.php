<?php

use codexten\yii\modules\dashboard\widgets\DashboardWidget;
use codexten\yii\modules\dashboard\widgets\DashboardWidgetAsset;
use yii\web\View;

/* @var $this View */
/* @var $widget DashboardWidget */

DashboardWidgetAsset::register($this);

$widget = $this->context;
$app = "{$widget->id}-app";
?>

<div class="panel panel-default"  id="<?= $app ?>">
    <div class="panel-body">
        <div class="row">
            <div class="col-md-12">
                <div class="pull-right">
                    <i v-on:click="refresh" class="fa fa-refresh"></i>
                </div>
            </div>
        </div>

        <loading :active.sync="isLoading"
                 :can-cancel="false"
                 :is-full-page="false"
                 :loader="'dots'"
                 :color="'#007BFF'"></loading>
        <div v-html="content"></div>

    </div>
</div>

<script>
var app = new Vue({
  el: '#<?= $app ?>',
  data: {
    content: '',
    isLoading: false
  },
  methods: {
    refresh: function () {
      this.render()
    },
    render: function () {
      this.isLoading = true
      setTimeout(() => {
        axios
          .get('<?= $widget->renderUrl ?>')
          .then(response => (this.content = response.data))
        this.isLoading = false
      }, 500)
    }
  },
  mounted: function () {
    this.render()
  }

})
</script>
