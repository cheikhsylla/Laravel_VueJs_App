require('./bootstrap');

window.Vue = require('vue').default;
import vuetify from './vuetify/index.js' // path to vuetify export

import BootstrapVue from 'bootstrap-vue/dist/bootstrap-vue.esm';
import 'bootstrap/dist/css/bootstrap.css';
import 'bootstrap-vue/dist/bootstrap-vue.css';

Vue.use(BootstrapVue);

import VueRouter from 'vue-router';
import { routes } from './routes';
Vue.use(VueRouter);
const router = new VueRouter({
    mode: 'history',
    routes
});

import Home from './components/Home.vue';
import Homec from './components/Homec.vue';


const app = new Vue({
    el: '#app',
    router,
    components:{Home,Homec}

});
