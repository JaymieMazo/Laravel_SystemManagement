import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)
import Administration from './components/Home'
import Accounting from './components/Hello'
import CadDesign1 from './components/Purchasing'
import CadDesign2 from './components/Purchasing'
import Denki from './components/Purchasing'
import Engineering from './components/Purchasing'
import Estimation from './components/Purchasing'
import Exterior from './components/Purchasing'
import Frame from './components/Purchasing'
import FSE from './components/Purchasing'
import GPC from './components/Purchasing'
import Hacchu from './components/Purchasing'
  


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
            path: '/CadDesign1', 
            name:'CadDesign1', 
            component: CadDesign1
        }, 


        {
            path: '/CadDesign2', 
            name:'Cad Design2', 
            component: CadDesign2
        },

        
        {
            path: '/Denki', 
            name:'Denki', 
            component: Denki
        },

        {
            path: '/Engineering', 
            name:'Engineering', 
            component: Engineering
        },
        {
            path: '/Estimation', 
            name:'Estimation', 
            component: Estimation
        },

        {
            path: '/Exterior', 
            name:'Exterior', 
            component: Exterior
        },
        {
            path: '/Frame', 
            name:'Frame', 
            component: Frame
        },

        {
            path: '/FSE', 
            name:'FSE', 
            component: FSE
        },
        
        {
            path: '/GPC', 
            name:'GPC', 
            component: GPC
        },
        
        {
            path: '/Hacchu', 
            name:'Hacchu', 
            component: Hacchu
        },
        


    ],
});