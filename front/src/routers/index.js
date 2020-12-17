import Vue from 'vue'
import VueRouter from 'vue-router';
import Home from '../components/Home'
import AddProduct from '../components/AddProduct'
import EditProduct from '../components/EditProducts'

Vue.use(VueRouter);

const routes = [
  {
    name: 'home',
    path: '/',
    component: Home
  },
  {
    name: 'add',
    path: '/add',
    component: AddProduct
  },

  {
    name:'edit',
    path:'/edit',
    component:EditProduct
  }
]
 
const router = new VueRouter({routes})

export default router;