import Vue from 'vue';
import VueCarousel from 'vue-carousel';

import vuex from './vuex';

import showcase from './components/Showcase.vue';

Vue.use(VueCarousel);
Vue.component('showcase', showcase);

new Vue({
    store: vuex,
    el: '#app',
});
