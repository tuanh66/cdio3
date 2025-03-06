import { createRouter, createWebHistory } from "vue-router"; // cài vue-router: npm install vue-router@next --save

const routes = [
    // Admin
    {
        path: '/admin/dang-nhap',
        component: () => import('../components/Admin/DangNhap/index.vue'),
        meta: { layout: "blank" }
    },
    {
        path: '/admin/quan-tri-vien',
        component: () => import('../components/Admin/QuanTriVien/index.vue'),
    },
    {
        path: '/admin/nhan-vien',
        component: () => import('../components/Admin/NhanVien/index.vue'),

    },
    {
        path: '/admin/quy-dinh',
        component: () => import('../components/Admin/QuyDinh/index.vue'),

    },
    {
        path: '/admin/chuc-vu',
        component: () => import('../components/Admin/ChucVu/index.vue'),

    },

    // Client
    {
        path: '/client/trang-chu',
        component: () => import('../components/Client/TrangChu/index.vue'),
        meta: { layout: "client" }
    }, {
        path: '/client/viec-lam',
        component: () => import('../components/Client/ViecLam/index.vue'),
        meta: { layout: "client" }
    },
    {
        path: '/client/job',
        component: () => import('../components/Client/Job/index.vue'),
        meta: { layout: "client" }
    },




]

const router = createRouter({
    history: createWebHistory(),
    routes: routes
})

export default router