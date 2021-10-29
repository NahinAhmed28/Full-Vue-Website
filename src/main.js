import Vue from 'vue'

import App from './App.vue'


import './registerServiceWorker'
import store from './store'
import { BootstrapVue, IconsPlugin } from 'bootstrap-vue'


// import VueCompositionAPI from '@vue/composition-api'

// Vue.use(VueCompositionAPI);

import Vuelidate from 'vuelidate'
Vue.use(Vuelidate);

import Chartkick from 'vue-chartkick'
import Chart from 'chart.js'

import TrendChart from "vue-trend-chart";
import Trend from "vuetrend"
Vue.use(Trend)

import 'bootstrap-vue/dist/bootstrap-vue.css';
import 'bootstrap/dist/css/bootstrap.css';

Vue.use(BootstrapVue);



Vue.use(Chartkick.use(Chart));

Vue.use(TrendChart);



Vue.use(IconsPlugin)
Vue.config.productionTip = false

new Vue({
    store,
    render: h => h(App)
}).$mount('#app')