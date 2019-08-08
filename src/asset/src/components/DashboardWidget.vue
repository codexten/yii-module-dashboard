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
            <slot v-bind:message="message"></slot>
        </div>
    </div>
</template>

<script>
export default {
  name: 'dashboard-widget',
  data () {
    return {
      message: 'hai',
      // Array will be automatically processed with visualization.arrayToDataTable function
      chartData: [
        ['', '', ''],
        ['Jan', 7, 7],
        ['Feb', 9, 9],
        ['Mar', 12, 12],
        ['Apr', 6, 6],
        ['May', 10, 10],
        ['June', 8, 8],
        ['July', 5, 5],
        ['Aug', 13, 13],
        ['Sep', 12, 12],
        ['Oct', 10, 10],
        ['Nov', 9, 9],
        ['Dec', 8, 8],
      ],
      chartOptions: {
        chart: {
          title: 'Monthly Coffee Production by Country',
        },
      },
    }
  },
}
</script>

<style scoped>

</style>
