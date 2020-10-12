require('./bootstrap');

import Vue from 'vue'
import VueRouter from 'vue-router'

import App from "./views/App";
import Welcome from "./views/Welcome";

window.Vue = require('vue');
Vue.use(VueRouter);

const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/',
            name: 'home',
            component: Welcome
        },
    ],
});

const app = new Vue({
    el: '#app',
    components: { App },
    router,
});