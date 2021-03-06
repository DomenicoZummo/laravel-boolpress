import Vue from 'vue';
import VueRouter from 'vue-router';


// componenti per le pagine

import Home from './pages/Home.vue';
import About from './pages/About.vue';
import Blog from './pages/Blog.vue';
import PostDetail from './pages/PostDetail.vue';

// Registrazione

Vue.use(VueRouter);


// Definizione

const router = new VueRouter({
    mode:'history',
    linkExactActiveClass:'active',
    routes:[
        {
            path: '/' , 
            name:'home',
            component: Home,
        },
        {
            path: '/about' , 
            name:'about',
            component: About,
        },
        {
            path: '/blog' , 
            name:'blog',
            component: Blog,
        },
        {
            path: '/home/:slug' , 
            name:'post-detail',
            component: PostDetail,
        },
    ],
});


export default router ;