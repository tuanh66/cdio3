import { createRouter, createWebHistory } from "vue-router"; // cài vue-router: npm install vue-router@next --save

const routes = [
    {
        path : '/',
        component: ()=>import('../layout/wrapper/index.vue')
    },
    // user
    {
        path : '/viec-lam',
        component: ()=>import('../layout/components/user/viec_lam/index.vue')
    },
    {
        path : '/mau-cv',
        component: ()=>import('../layout/components/user/mau_cv/index.vue')
    },
    {
        path : '/trang-chu',
        component: ()=>import('../layout/components/user/trang_chu/index.vue')
    },
    // admin
    {
        path : '/admin/viec-lam',
        component: ()=>import('../layout/components/admin/ql_vieclam/index.vue')
    },
]

const router = createRouter({
    history: createWebHistory(),
    routes: routes
})

export default router