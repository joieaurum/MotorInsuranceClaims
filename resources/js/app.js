/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue')

Vue.component('dropdown', require('./components/Dropdown.vue').default)
Vue.component('property', require('./components/PropertyCard.vue').default)
Vue.component('search-filters', require('./components/SearchFilters.vue').default)
Vue.component('site-header', require('./components/SiteHeader.vue').default)

Vue.component('dashboard', require('./pages/dashboard.vue').default)

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});
