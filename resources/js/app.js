require ('./bootstrap');

window.Vue = require('vue').default

import{createApp} from 'vue';

import App from './Components/Main.vue';

createApp(App)
.mount('#app');

import Vue from 'vue';
import VueRouter from 'vue-router';
import routes from './Components/routes';

Vue.use(VueRouter);

const router = new VueRouter({
    mode: 'history',
    routes: routes,
});

const app = new Vue({
    el: '#app',
    router: router,
});

