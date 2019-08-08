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

            <GChart
                    type="ColumnChart"
                    :data="chartData"
                    :options="chartOptions"
            />
        </div>
    </div>
</template>

<script>
export default {
  name: 'dashboard-widget',
  data () {
    return {
      // Array will be automatically processed with visualization.arrayToDataTable function
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
}
</script>

<style scoped>

</style>
