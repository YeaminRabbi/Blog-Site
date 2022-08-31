require('./bootstrap');

import Vue from 'vue';
import store from './store/index'


window.Vue = require('vue').default;


Vue.component('blog-form-component', require('./components/BlogFormComponent.vue').default);


const app = new Vue({
    store,
    el: '#vue-app',
});


