import DashboardWidget from './components/DashboardWidget.vue'
import Chart from './components/Chart.vue'
import VueGoogleCharts from 'vue-google-charts'

// Install the components
export function install (Vue) {
  Vue.component('dashboard-widget', DashboardWidget)
  Vue.component('chart', Chart)
  Vue.use(VueGoogleCharts)
  /* -- Add more components here -- */
}

// Expose the components
export {
  DashboardWidget,
  VueGoogleCharts,
  Chart,
  /* -- Add more components here -- */
}

/* -- Plugin definition & Auto-install -- */
/* You shouldn't have to modify the code below */

// Plugin
const plugin = {
  /* eslint-disable no-undef */
  version: VERSION,
  install,
}

export default plugin

// Auto-install
let GlobalVue = null
if (typeof window !== 'undefined') {
  GlobalVue = window.Vue
} else if (typeof global !== 'undefined') {
  GlobalVue = global.Vue
}
if (GlobalVue) {
  GlobalVue.use(plugin)
}
