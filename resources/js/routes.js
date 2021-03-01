import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)
import Administration from './components/Home'
import Accounting from './components/Hello'
import Purchasing from './components/Purchasing'


export default new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/',
            name: 'Administration',
            component: Administration
        },

        {
            path: '/Accounting',
            name: 'Accounting',
            component: Accounting
        },

        {
            path: '/Purchasing', 
            name:'Purchasing', 
            component: Purchasing
        }, 


        {
            path: '/test', 
            name:'test', 
            component: Administration
        }

    ],
});