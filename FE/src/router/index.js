import { createRouter, createWebHistory } from "vue-router"; // cài vue-router: npm install vue-router@next --save

const routes = [
    // Admin
    {
        path : '/admin/dang-nhap',
        component: ()=>import('../components/Admin/DangNhap/index.vue'),
        meta: { layout: "blank"}
    },
    {
        path : '/admin/quan-tri-vien',
        component: ()=>import('../components/Admin/QuanTriVien/index.vue'),
    },
    {
        path : '/admin/nhan-vien',
        component: ()=>import('../components/Admin/NhanVien/index.vue'),

    },
    {
        path : '/admin/quy-dinh',
        component: ()=>import('../components/Admin/QuyDinh/index.vue'),

    },
    {
        path : '/admin/chuc-vu',
        component: ()=>import('../components/Admin/ChucVu/index.vue'),

    },
    {
        path : '/admin/trang-chu',
        component: ()=>import('../components/Admin/trang_chu/index.vue'),

    }, {
        path : '/admin/viec-lam',
        component: ()=>import('../components/Admin/viec_lam/index.vue'),

    },

]

const router = createRouter({
    history: createWebHistory(),
    routes: routes
})

export default router