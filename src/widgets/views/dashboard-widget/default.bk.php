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

<div class="panel panel-default" id="<?= $app ?>">
    <div class="panel-body">
        <div class="row">
            <div class="col-md-12">
                <div class="pull-right">
                    <i v-on:click="refresh" class="fa fa-refresh"></i>
                </div>
            </div>
        </div>

        <div id="editor" ref="editor">HTML TABLE HERE</div>
        <div
                id="iframe-wrapper"
                :style="iframe.wrapperStyle"
        >
            <iframe
                    v-if="loaded"
                    :src="iframe.src"
                    :style="iframe.style"
                    :height="iframe.style.height"
                    :width="iframe.style.width"
                    type="application/pdf"
                    frameborder="0"
            ></iframe>
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
    isLoading: false,
    loaded: false,
    iframe: {
      src: '<?= $widget->renderUrl ?>',
      style: null,
      wrapperStyle: null,
    }
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
    // this.render()
    let editor = this.$refs.editor;
    this.iframe.style = {
      position: 'absolute',
      width: window.innerWidth,
      height: window.innerHeight,
      top: -editor.offsetTop + "px",
      left: -editor.offsetLeft + "px",
    }
    this.iframe.wrapperStyle = {
      overflow: 'hidden',
      height: editor.clientHeight + "px",
      width: editor.clientWidth + "px",
    }
    this.loaded = true;
  }

})
</script>
