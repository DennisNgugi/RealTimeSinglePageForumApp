

require('./bootstrap');

window.Vue = require('vue');
import Vue from 'vue';
import VueRouter from 'vue-router'
import axios from 'axios'
import User from './Helpers/User'
window.User = User
console.log(User.id())
Vue.use(VueRouter)
Vue.use(axios)


import Login from './components/Auth/Login.vue'
import Register from './components/Auth/Register.vue'
import Question from './components/Question.vue'
import Category from './components/Category.vue'

const routes = [


{
name: 'question',
path:'/question',
component: Question
},

{
name: 'category',
path:'/category',
component: Category
},

{
name: 'login',
path:'/login',
component: Login
},

{
name: 'register',
path:'/register',
component: Register
},
];
const router = new VueRouter({
    mode: 'history',
    routes: routes,
});


const app = new Vue({
    el: '#app',
    router
});
