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
            <slot v-if="this.isLoading==false" v-bind:data="data"></slot>
            <loading :active.sync="isLoading"
                     :can-cancel="false"
                     :is-full-page="false"
                     :loader="'dots'"
                     :color="'#007BFF'"></loading>
        </div>
    </div>
</template>

<script>
import axios from 'axios'
import Loading from 'vue-loading-overlay'

export default {
  name: 'dashboard-widget',
  props: ['fetchUrl'],
  components: {
    Loading,
  },
  data () {
    return {
      isLoading: true,
      data: {},
    }
  },
  methods: {
    fetch: function () {
      this.isLoading = true
      setTimeout(() => {
        axios
          .get(this.fetchUrl)
          .then(response => (this.data = response.data.data))
        this.isLoading = false
      }, 500)
    },
    refresh: function () {
      this.fetch()
    },
  },
  mounted: function () {
    this.fetch()
  },
}
</script>

<style scoped>

</style>
