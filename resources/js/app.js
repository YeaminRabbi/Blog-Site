require('./bootstrap');

import Vue from 'vue';
import store from './store/index'
import CKEditor from '@ckeditor/ckeditor5-vue2';


window.Vue = require('vue').default;

Vue.use( CKEditor );

Vue.component('blog-form-component', require('./components/BlogFormComponent.vue').default);
Vue.component('blog-list-component', require('./components/BlogListComponent.vue').default);

const app = new Vue({
    store,
    el: '#vue-app',
});


