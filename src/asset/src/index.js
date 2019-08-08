import Test from './components/Test.vue'
import DashboardWidget from './components/DashboardWidget.vue'
import VueGoogleCharts from 'vue-google-charts'

// Install the components
export function install (Vue) {
  Vue.component('test', Test)
  Vue.component('dashboard-widget', DashboardWidget)
  Vue.use(VueGoogleCharts)
  /* -- Add more components here -- */
}

// Expose the components
export {
  Test,
  DashboardWidget,
  VueGoogleCharts
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
