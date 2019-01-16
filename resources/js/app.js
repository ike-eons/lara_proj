
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

import moment from 'moment'; //request moment js

import VueProgressBar from 'vue-progressbar' // import VueProgressBar

import { Form, HasError, AlertError } from 'vform' //vform package

import Vue from 'vue'
import VueRouter from 'vue-router'

// ES6 Modules or TypeScript
import swal from 'sweetalert2'
window.swal = swal; //sweet alert

//display comfirm dialog top-right
const toast = swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000
});

window.toast = toast;



//global components
Window.Form = Form;
Vue.component(HasError.name, HasError)
Vue.component(AlertError.name, AlertError)


// create new instance of vue as Fire
let Fire = new Vue();
window.Fire = Fire;

//string to uppercase
Vue.filter('uppercase', function (text) {
    return text.toUpperCase();
});

//first string to uppercase
Vue.filter('capitalize', function (text) {
    return text.charAt(0).toUpperCase() + text.slice(1)
});

//date time format
Vue.filter('datetime',function(created){
   return moment(created).format('MMMM Do YYYY, h:mm:ss a');
});

//progress bar
Vue.use(VueProgressBar, {
    color: 'rgb(255, 219, 148)',
    failedColor: 'red',
    height: '4px'
});


// explicit installation of Router via Vue.use()
Vue.use(VueRouter)

//2. defining some routes
    // Each route should map to a component. The "component" can
    // either be an actual component constructor created via
    // `Vue.extend()`, or just a component options object.
    // We'll talk about nested routes later.
let routes = [
    { path: '/dashboard', component: require('./components/Dashboard.vue') },
    { path: '/profile', component: require('./components/Profile.vue') },
    { path: '/users', component: require('./components/Users.vue') }
  ]

//3. Routes Registration
    //Create the router instance and pass the `routes` option
    // You can pass in additional options here, but let's
    // keep it simple for now.
const router = new VueRouter({
    mode: 'history',
    routes // short for `routes: routes`
  })
  
/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key)))

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    router,
    data:{
        search: ''
    },
    methods:{
        searchit(){
            Fire.$emit('searching');
        }
    }
});
