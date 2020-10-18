import Vue from 'vue';
import VueCarousel from 'vue-carousel';

import showcase from './components/Showcase.vue';

Vue.use(VueCarousel);
Vue.component('showcase', showcase);

const app = new Vue({
    el: '#app',
});
