!function(root,factory){"object"==typeof exports&&"object"==typeof module?module.exports=factory():"function"==typeof define&&define.amd?define([],factory):"object"==typeof exports?exports.YiiModuleDashboard=factory():root.YiiModuleDashboard=factory()}(this,function(){return function(modules){function __webpack_require__(moduleId){if(installedModules[moduleId])return installedModules[moduleId].exports;var module=installedModules[moduleId]={i:moduleId,l:!1,exports:{}};return modules[moduleId].call(module.exports,module,module.exports,__webpack_require__),module.l=!0,module.exports}var installedModules={};return __webpack_require__.m=modules,__webpack_require__.c=installedModules,__webpack_require__.i=function(value){return value},__webpack_require__.d=function(exports,name,getter){__webpack_require__.o(exports,name)||Object.defineProperty(exports,name,{configurable:!1,enumerable:!0,get:getter})},__webpack_require__.n=function(module){var getter=module&&module.__esModule?function(){return module.default}:function(){return module};return __webpack_require__.d(getter,"a",getter),getter},__webpack_require__.o=function(object,property){return Object.prototype.hasOwnProperty.call(object,property)},__webpack_require__.p="",__webpack_require__(__webpack_require__.s=2)}([function(module,exports){var g,_typeof="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(obj){return typeof obj}:function(obj){return obj&&"function"==typeof Symbol&&obj.constructor===Symbol&&obj!==Symbol.prototype?"symbol":typeof obj};g=function(){return this}();try{g=g||Function("return this")()||(0,eval)("this")}catch(e){"object"===("undefined"==typeof window?"undefined":_typeof(window))&&(g=window)}module.exports=g},function(module,exports,__webpack_require__){__webpack_require__(4);var Component=__webpack_require__(5)(__webpack_require__(3),__webpack_require__(6),"data-v-e4699a12",null);module.exports=Component.exports},function(module,__webpack_exports__,__webpack_require__){"use strict";Object.defineProperty(__webpack_exports__,"__esModule",{value:!0}),function(global){function install(Vue){Vue.component("dashboard-widget",__WEBPACK_IMPORTED_MODULE_0__components_DashboardWidget_vue___default.a)}__webpack_exports__.install=install;var __WEBPACK_IMPORTED_MODULE_0__components_DashboardWidget_vue__=__webpack_require__(1),__WEBPACK_IMPORTED_MODULE_0__components_DashboardWidget_vue___default=__webpack_require__.n(__WEBPACK_IMPORTED_MODULE_0__components_DashboardWidget_vue__);__webpack_require__.d(__webpack_exports__,"DashboardWidget",function(){return __WEBPACK_IMPORTED_MODULE_0__components_DashboardWidget_vue___default.a});var plugin={version:"0.0.0",install:install};__webpack_exports__.default=plugin;var GlobalVue=null;"undefined"!=typeof window?GlobalVue=window.Vue:void 0!==global&&(GlobalVue=global.Vue),GlobalVue&&GlobalVue.use(plugin)}.call(__webpack_exports__,__webpack_require__(0))},function(module,__webpack_exports__,__webpack_require__){"use strict";Object.defineProperty(__webpack_exports__,"__esModule",{value:!0}),__webpack_exports__.default={name:"dashboard-widget",data:function(){return{message:"hai",chartData:[["","",""],["Jan",7,7],["Feb",9,9],["Mar",12,12],["Apr",6,6],["May",10,10],["June",8,8],["July",5,5],["Aug",13,13],["Sep",12,12],["Oct",10,10],["Nov",9,9],["Dec",8,8]],chartOptions:{chart:{title:"Monthly Coffee Production by Country"}}}}}},function(module,exports){},function(module,exports){module.exports=function(rawScriptExports,compiledTemplate,scopeId,cssModules){var esModule,scriptExports=rawScriptExports=rawScriptExports||{},type=typeof rawScriptExports.default;"object"!==type&&"function"!==type||(esModule=rawScriptExports,scriptExports=rawScriptExports.default);var options="function"==typeof scriptExports?scriptExports.options:scriptExports;if(compiledTemplate&&(options.render=compiledTemplate.render,options.staticRenderFns=compiledTemplate.staticRenderFns),scopeId&&(options._scopeId=scopeId),cssModules){var computed=options.computed||(options.computed={});Object.keys(cssModules).forEach(function(key){var module=cssModules[key];computed[key]=function(){return module}})}return{esModule:esModule,exports:scriptExports,options:options}}},function(module,exports){module.exports={render:function(){var _vm=this,_h=_vm.$createElement,_c=_vm._self._c||_h;return _c("div",{staticClass:"panel panel-default"},[_c("div",{staticClass:"panel-body"},[_c("div",{staticClass:"row"},[_c("div",{staticClass:"col-md-12"},[_c("div",{staticClass:"pull-right"},[_c("i",{staticClass:"fa fa-refresh",on:{click:_vm.refresh}})])])]),_vm._v(" "),_vm._t("default",null,{message:_vm.message})],2)])},staticRenderFns:[]}}])});