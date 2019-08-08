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
            <slot v-bind:data="data"></slot>
        </div>
    </div>
</template>

<script>
export default {
  name: 'dashboard-widget',
  data () {
    return {
      data: {
        message: 'hai',
        // Array will be automatically processed with visualization.arrayToDataTable function
        chartData: [
          ['Year', 'Sales', 'Expenses', 'Profit'],
          ['2014', 1000, 400, 200],
          ['2015', 1170, 460, 250],
          ['2016', 660, 1120, 300],
          ['2017', 1030, 540, 350],
        ],
        chartOptions: {
          chart: {
            title: 'Company Performance',
            subtitle: 'Sales, Expenses, and Profit: 2014-2017',
          },
        },
      },
    }
  },
  methods: {
    refresh: function () {
    }
    ,
  }
  ,
}
</script>

<style scoped>

</style>
