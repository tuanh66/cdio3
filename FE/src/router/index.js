import { createRouter, createWebHistory } from "vue-router"; // cài vue-router: npm install vue-router@next --save
import checkAdminLogin from "./checkAdminLogin";
import checkClientLogin from "./checkClientLogin";


const routes = [
    // Admin
    {
        path: '/admin/dang-nhap',
        component: () => import('../components/Admin/DangNhap/index.vue'),
        meta: { layout: "blank" }
    },
    {
        path: '/admin/nhan-vien',
        component: () => import('../components/Admin/NhanVien/index.vue'),
        beforeEnter: checkAdminLogin
    },
    {
        path: '/admin/khach-hang',
        component: () => import('../components/Admin/KhachHang/index.vue'),
        beforeEnter: checkAdminLogin
    },
    {
        path: '/admin/quy-dinh',
        component: () => import('../components/Admin/QuyDinh/index.vue'),
        beforeEnter: checkAdminLogin
    },
    {
        path: '/admin/chuc-vu',
        component: () => import('../components/Admin/ChucVu/index.vue'),
        beforeEnter: checkAdminLogin
    },
    {
        path: '/admin/profile',
        component: () => import('../components/Admin/Profile/index.vue'),
        beforeEnter: checkAdminLogin
    },

    // Client
    {
        path: '/client/dang-nhap',
        component: () => import('../components/Client/DangNhap/index.vue'),
        meta: { layout: "blank" }
    },
    {
        path: '/client/trang-chu',
        component: () => import('../components/Client/TrangChu/index.vue'),
        meta: { layout: "client" },
        beforeEnter: checkClientLogin
    }, 
    {
        path: '/client/viec-lam',
        component: () => import('../components/Client/ViecLam/index.vue'),
        meta: { layout: "client" },
        beforeEnter: checkClientLogin
    },
    {
        path: '/client/cam-nang',
        component: () => import('../components/Client/CamNang/index.vue'),
        meta: { layout: "client" },
        beforeEnter: checkClientLogin
    },
    {
        path: '/client/profile',
        component: () => import('../components/Client/Profile/index.vue'),
        meta: { layout: "client" },
        beforeEnter: checkClientLogin
    },
]

const router = createRouter({
    history: createWebHistory(),
    routes: routes
})

export default router