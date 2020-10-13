import Vue from 'vue';
import showcase from './components/Showcase.vue';

Vue.component('showcase', showcase);

const app = new Vue({
    el: '#app',
});
