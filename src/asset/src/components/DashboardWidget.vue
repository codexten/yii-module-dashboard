<template>
    <div>
        <slot v-if="this.isLoading==false" v-bind:data="data"></slot>
        <loading :active.sync="isLoading"
                 :can-cancel="false"
                 :is-full-page="false"
                 :loader="'dots'"
                 :color="'#007BFF'"></loading>
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
          .catch(function (error) {
            // handle error
            console.log(error)
          })
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
