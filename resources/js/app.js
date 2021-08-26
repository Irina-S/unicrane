require('./bootstrap');
import {store} from './store'

window.Vue = require('vue');


Vue.component('calculate-component', require('./components/CalculateComponent.vue').default);
// Vue.component('calculte-item-component', require('./components/CalculateItemComponent.vue').default);

const app = new Vue({
    store,
    el: '#app',
});
