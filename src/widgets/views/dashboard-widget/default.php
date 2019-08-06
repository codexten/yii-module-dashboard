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
<?php

?>

<div id="<?= $app ?>" class="vue">

    <loading :active.sync="isLoading"
             :can-cancel="false"
             :is-full-page="false"
             :loader="'dots'"
             :color="'#007BFF'"></loading>

    <button v-on:click="refresh">refresh</button>
    <div v-html="content"></div>

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
      axios
        .get('<?= $widget->renderUrl ?>')
        .then(response => (this.content = response.data))
      setTimeout(() => {
        this.isLoading = false
      }, 500)
    }
  },
  mounted: function () {
    this.render()
  }

})
</script>
