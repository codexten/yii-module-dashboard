<template>
    <div class="panel panel-default">
        <div class="panel-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="pull-right">
                        <i v-on:click="refresh" class="fa fa-refresh"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
  name: 'dashboard-widget',
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
}
</script>

<style scoped>

</style>
