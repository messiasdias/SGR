/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
window.Vue = require('vue').default;

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('dashboard', require('./components/dashboard/dashboard.vue').default);
Vue.component('unidades', require('./components/unidades/unidades.vue').default);
Vue.component('clientes', require('./components/clientes/clientes.vue').default);
Vue.component('usuarios', require('./components/usuarios/usuarios.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const Vuelidate = require('vuelidate').default
Vue.use(Vuelidate)

import VueMask from 'v-mask'
Vue.use(VueMask)

const app = new Vue({
    el: '#app',
});
