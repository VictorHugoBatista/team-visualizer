import Vue from 'vue';
import VueCarousel from 'vue-carousel';

import vuex from './vuex';

import showcase from './components/Showcase.vue';
import loading from './components/Loading.vue';

Vue.use(VueCarousel);
Vue.component('showcase', showcase);
Vue.component('loading', loading);

new Vue({
    store: vuex,
    el: '#app',
});
