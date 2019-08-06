<?php

use codexten\yii\modules\dashboard\widgets\DashboardWidget;
use tolik505\vuejs\VueBundleAsset;
use yii\web\View;

/* @var $this View */
/* @var $widget DashboardWidget */

VueBundleAsset::register($this);

$widget = $this->context;
$app = "{$widget->id}-app";
?>
<?php

?>

<div id="<?= $app ?>" class="vue">

    <button v-on:click="refresh">refresh</button>
    <div v-html="content"></div>

</div>

<script>
var app = new Vue({
  el: '#<?= $app ?>',
  data: {
    content: ''
  },
  methods: {
    refresh: function () {
      this.render()
    },
    render: function () {
      axios
        .get('<?= $widget->renderUrl ?>')
        .then(response => (this.content = response.data))
    }
  },
  mounted: function () {
    this.render()
  }

})
</script>
