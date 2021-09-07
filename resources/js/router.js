import {createRouter, createWebHistory} from 'vue-router'

import Customer from './component/Customer.vue'
import Company from './component/Company.vue'
import Employee from './component/Employee.vue'

const routes = [
    {path: '/customer', component:Customer},
    {path:'/company', component:Company},
    {path:'/employee', component:Employee},
]

const router = createRouter({
    history: createWebHistory(),
    routes
})

export default router
