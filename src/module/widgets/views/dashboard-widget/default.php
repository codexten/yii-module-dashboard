<?php

use codexten\yii\modules\dashboard\widgets\DashboardWidget;
use codexten\yii\modules\dashboard\widgets\DashboardWidgetAsset;
use yii\web\View;

/* @var $this View */
/* @var $widget DashboardWidget */

//DashboardWidgetAsset::register($this);

$widget = $this->context;
$app = "{$widget->id}-app";
$npm = Yii::getAlias('@vendor/npm-asset');
?>

<div class="panel panel-default" id="<?= $app ?>">
    <div class="panel-body">
        <div class="row">
            <div class="col-md-12">
                <div class="pull-right">
                    <i v-on:click="refresh" class="fa fa-refresh"></i>
                </div>
            </div>
        </div>
        <span>Hello</span>
        <test></test>

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
    isLoading: false,
    loaded: false,
    chartData: [
      ['Year', 'Sales', 'Expenses', 'Profit'],
      ['2014', 1000, 400, 200],
      ['2015', 1170, 460, 250],
      ['2016', 660, 1120, 300],
      ['2017', 1030, 540, 350]
    ],
    chartOptions: {
      chart: {
        title: 'Company Performance',
        subtitle: 'Sales, Expenses, and Profit: 2014-2017',
      }
    }
  },
  methods: {
    startCallBack: function (x) {
      console.log(x)
    },
    endCallBack: function (x) {
      console.log(x)
    },
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
    // this.render()
  }

})
</script>
