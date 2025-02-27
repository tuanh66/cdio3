import { createRouter, createWebHistory } from "vue-router"; // cài vue-router: npm install vue-router@next --save

const routes = [
    // Admin
    {
        path : '/admin/nhan-vien',
        component: ()=>import('../components/Admin/NhanVien/index.vue'),

    },
    {
        path : '/admin/quy-dinh',
        component: ()=>import('../components/Admin/QuyDinh/index.vue'),

    },
]

const router = createRouter({
    history: createWebHistory(),
    routes: routes
})

export default router