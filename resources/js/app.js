

import Vue from 'vue'
import VueRouter from 'vue-router'
import VueAxios from 'vue-axios'
import Axios from 'axios'

import Articles from './components/Articles.vue'
import Article  from './components/Article.vue'
import EditArticle from './components/EditArticle.vue'

Vue.use(VueRouter, VueAxios, Axios);

const routes = [
   {
       name: 'Articles',
       path: '/Travelmagazine/travelmagazine-laravel/public',
       component: Articles
   },
   {
        name: 'Article',
        path: '/Travelmagazine/travelmagazine-laravel/public/article/:id',
        component: Article
    },
    {
        name: 'EditArticle',
        path: '/Travelmagazine/travelmagazine-laravel/public/edit/:id',
        component: EditArticle
    }   
];

const router = new VueRouter({ 
    mode: 'history',
    routes
});

new Vue(
    Vue.util.extend(
    { router }    
    )
).$mount('#app');

