import Vue from 'vue';
import teams from './components/Teams.vue';

Vue.component('teams', teams);

const app = new Vue({
    el: '#app',
});
