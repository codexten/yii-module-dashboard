<?php

use antkaz\vue\VueAsset;
use codexten\yii\modules\dashboard\widgets\DashboardWidget;
use yii\web\View;

/* @var $this View */
/* @var $widget DashboardWidget */

VueAsset::register($this);
$widget = $this->context;
$app = "{$widget->id}-app";
?>
<?php

?>

<div id="<?= $app ?>" class="vue">

    <p>{{ message }}</p>
    <button v-on:click="reverseMessage">Reverse Message</button>
    <div class="content">
        {{ content }}
    </div>

</div>

<script>
var app = new Vue({
  el: '#<?= $app ?>',
  data: {
    message: '<?= $widget->renderUrl ?>'
  },
  methods: {
    reverseMessage: function () {
      this.message = this.message.split('').reverse().join('')
    }
  },
  mounted: function () {
    var self = this;
    $.ajax({
      url: '<?= $widget->renderUrl ?>',
      method: 'GET',
      success: function (data) {
        self.content = data;
      },
      error: function (error) {
        console.log(error);
      }
    });
  }

})
</script>
