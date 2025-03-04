<template>
    <div class="card">
        <div class="card-header">
            <div class="row d-flex align-items-center">
                <div class="col-lg-6">
                    <h4 class="">DANH SÁCH NHÂN VIÊN</h4>
                </div>
                <div class="col-lg-6 text-end">
                    <button class="btn btn-success me-2">Xuất Excel</button>
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#themmoi">Thêm Mới</button>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="col-lg-12">
                <div class="input-group mb-3">
                    <span class="input-group-text bg-white">
                        <i class="fa fa-search"></i>
                    </span>
                    <input type="text" class="form-control" placeholder="Search..." aria-label="search"
                        aria-describedby="button-addon2">
                    <button class="btn btn-outline-secondary" type="button" id="button-addon2">Tìm Kiếm</button>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-hover table-bordered table-striped">
                    <thead>
                        <tr class="text-nowrap text-center align-middle">
                            <th>#</th>
                            <th>Họ và tên</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th>Ngày sinh</th>
                            <th>Số điện thoại</th>
                            <th>Địa chỉ</th>
                            <th>Lương cơ bản</th>
                            <th>Chức vụ</th>
                            <th style="width: 100px;">Phòng ban</th>
                            <th>Tình trạng</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <template v-for="(value, index) in list_nhanvien" :key="index">
                            <tr class="text-nowrap align-middle">
                                <td class="text-center">{{ index + 1 }}</td>
                                <td>{{ value.ho_va_ten }}</td>
                                <td>{{ value.email }}</td>
                                <td class="text-center">{{ value.password }}</td>
                                <td class="text-center">{{ formatDate(value.ngay_sinh) }}</td>
                                <td class="text-center">{{ value.so_dien_thoai }}</td>
                                <td class="text-center">{{ value.dia_chi }}</td>
                                <td class="text-center">{{ value.luong_co_ban }}</td>
                                <td class="text-center">{{ value.chuc_vu }}</td>
                                <td>{{ value.phong_ban }}</td>
                                <td class="text-center">
                                    <button v-if="value.tinh_trang == 1" class="btn btn-success">Hoạt Động</button>
                                    <button v-else class="btn btn-danger" style="width: 106px;">Tạm Tắt</button>
                                </td>
                                <td class="text-center">
                                    <button v-on:click="Object.assign(update_nhapvien, value)"
                                        class="btn btn-primary me-2" data-bs-toggle="modal"
                                        data-bs-target="#capnhat">Cập nhật</button>
                                    <button v-on:click="Object.assign(delete_nhanvien, value)" class="btn btn-danger"
                                        data-bs-toggle="modal" data-bs-target="#xoa">Xoá</button>
                                </td>
                            </tr>
                        </template>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- modal themmoi -->
    <div class="modal fade" id="themmoi" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Thêm mới nhân viên</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6 md-3">
                            <label class="form-label">Họ và tên</label>
                            <input v-model="create_nhanvien.ho_va_ten" type="text" class="form-control">
                        </div>
                        <div class="col-md-6 md-3">
                            <label class="form-label">Email</label>
                            <input v-model="create_nhanvien.email" type="email" class="form-control">
                        </div>
                        <div class="col-md-6 md-3">
                            <label class="form-label">Password</label>
                            <input v-model="create_nhanvien.password" type="password" class="form-control">
                        </div>
                        <div class="col-md-6 md-3">
                            <label class="form-label">Ngày Sinh</label>
                            <input v-model="create_nhanvien.ngay_sinh" type="date" class="form-control">
                        </div>
                        <div class="col-md-6 md-3">
                            <label class="form-label">Số điện thoại</label>
                            <input v-model="create_nhanvien.so_dien_thoai" type="number" class="form-control">
                        </div>
                        <div class="col-md-6 md-3">
                            <label class="form-label">Địa chỉ</label>
                            <input v-model="create_nhanvien.dia_chi" type="text" class="form-control">
                        </div>
                        <div class="col-md-6 md-3">
                            <label class="form-label">Lương cơ bản</label>
                            <input v-model="create_nhanvien.luong_co_ban" type="number" class="form-control">
                        </div>
                        <div class="col-md-6 md-3">
                            <label class="form-label">Chức vụ</label>
                            <input v-model="create_nhanvien.chuc_vu" type="text" class="form-control">
                        </div>
                        <div class="col-md-6 md-3">
                            <label class="form-label">Phòng ban</label>
                            <input v-model="create_nhanvien.phong_ban" type="text" class="form-control">
                        </div>
                        <div class="col-md-6 md-3">
                            <label class="form-label">Tình trạng</label>
                            <select v-model="create_nhanvien.tinh_trang" class="form-select">
                                <option value="1">Hoạt Động</option>
                                <option value="0">Tạm Tắt</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Quay lại</button>
                    <button v-on:click="createNhanVien()" type="button" class="btn btn-primary">Thêm mới</button>
                </div>
            </div>
        </div>
    </div>
    <!-- end modal themmoi -->
    <!-- modal capnhat -->
    <div class="modal fade" id="capnhat" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Cập nhật nhân viên</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6 md-3">
                            <label class="form-label">Họ và tên</label>
                            <input v-model="update_nhapvien.ho_va_ten" type="text" class="form-control">
                        </div>
                        <div class="col-md-6 md-3">
                            <label class="form-label">Email</label>
                            <input v-model="update_nhapvien.email" type="email" class="form-control">
                        </div>
                        <div class="col-md-6 md-3">
                            <label class="form-label">Password</label>
                            <input v-model="update_nhapvien.password" type="text" class="form-control">
                        </div>
                        <div class="col-md-6 md-3">
                            <label class="form-label">Ngày Sinh</label>
                            <input v-model="update_nhapvien.ngay_sinh" type="date" class="form-control">
                        </div>
                        <div class="col-md-6 md-3">
                            <label class="form-label">Số điện thoại</label>
                            <input v-model="update_nhapvien.so_dien_thoai" type="number" class="form-control">
                        </div>
                        <div class="col-md-6 md-3">
                            <label class="form-label">Địa chỉ</label>
                            <input v-model="update_nhapvien.dia_chi" type="text" class="form-control">
                        </div>
                        <div class="col-md-6 md-3">
                            <label class="form-label">Lương cơ bản</label>
                            <input v-model="update_nhapvien.luong_co_ban" type="number" class="form-control">
                        </div>
                        <div class="col-md-6 md-3">
                            <label class="form-label">Chức vụ</label>
                            <input v-model="update_nhapvien.chuc_vu" type="text" class="form-control">
                        </div>
                        <div class="col-md-6 md-3">
                            <label class="form-label">Phòng ban</label>
                            <input v-model="update_nhapvien.phong_ban" type="text" class="form-control">
                        </div>
                        <div class="col-md-6 md-3">
                            <label class="form-label">Tình trạng</label>
                            <select v-model="update_nhapvien.tinh_trang" class="form-select">
                                <option value="1">Hoạt Động</option>
                                <option value="0">Tạm Tắt</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Quay lại</button>
                    <button v-on:click="updateNhanVien()" type="button" class="btn btn-primary">Cập nhật</button>
                </div>
            </div>
        </div>
    </div>
    <!-- end modal capnhat -->
    <!-- modal xoa -->
    <div class="modal fade" id="xoa" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Xoá nhân viên</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="alert alert-danger" role="alert">
                        Bạn có chắc chắn muốn xóa nhân viên
                        <strong>{{ delete_nhanvien.ho_va_ten }}</strong>?
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Quay lại</button>
                    <button v-on:click="deleteNhanVien()" type="button" class="btn btn-danger" data-bs-dismiss="modal">Xoá</button>
                </div>
            </div>
        </div>
    </div>
    <!-- end modal xoa -->
</template>
<script>
import axios from 'axios';

export default {
    data() {
        return {
            list_nhanvien: [],
            create_nhanvien: {
                ho_va_ten: '',
                email: '',
                password: '',
                ngay_sinh: '',
                so_dien_thoai: '',
                dia_chi: '',
                luong_co_ban: '',
                chuc_vu: '',
                phong_ban: '',
                tinh_trang: ''
            },
            update_nhapvien: {
                ho_va_ten: '',
                email: '',
                password: '',
                ngay_sinh: '',
                so_dien_thoai: '',
                dia_chi: '',
                luong_co_ban: '',
                chuc_vu: '',
                phong_ban: '',
                tinh_trang: ''
            },
            delete_nhanvien: {
                ho_va_ten: '',
                email: '',
                password: '',
                ngay_sinh: '',
                so_dien_thoai: '',
                dia_chi: '',
                luong_co_ban: '',
                chuc_vu: '',
                phong_ban: '',
                tinh_trang: ''
            }
        }
    },
    mounted() {
        this.loadData();
    },
    methods: {
        formatDate(date) {
            if (!date) return '';
            const [year, month, day] = date.split('-');
            return `${day}/${month}/${year}`;
        },
        loadData() {
            axios
                .get('http://127.0.0.1:8000/api/admin/nhan-vien/data')
                .then((res) => {
                    this.list_nhanvien = res.data.data;
                });
        },
        createNhanVien() {
            axios
                .post('http://127.0.0.1:8000/api/admin/nhan-vien/create', this.create_nhanvien)
                .then((res) => {
                    if (res.data.status) {
                        this.$toast.success(res.data.message);
                        this.create_nhanvien = {
                            ho_va_ten: "",
                            email: "",
                            password: "",
                            ngay_sinh: "",
                            so_dien_thoai: "",
                            dia_chi: "",
                            luong_co_ban: "",
                            chuc_vu: "",
                            phong_ban: "",
                            tinh_trang: ""
                        };
                        this.loadData();
                    } else {
                        this.$toast.error(res.data.message);
                    }
                })
                .catch(error => {
                    var obj = error.response.data.errors;
                    var result = Object.keys(obj).map((key) => [key, obj[key]]);
                    result.forEach((value_1, key_1) => {
                        var xxx = value_1[1];
                        xxx.forEach((value, key) => {
                            this.$toast.error(value);
                        });
                    });
                });
        },
        updateNhanVien() {
            axios
                .post('http://127.0.0.1:8000/api/admin/nhan-vien/update', this.update_nhanvien)
                .then((res) => {
                    if (res.data.status) {
                        this.$toast.success(res.data.message);
                        this.loadData();
                    } else {
                        this.$toast.error(res.data.message);
                    }
                })
                .catch(error => {
                    var obj = error.response.data.errors;
                    var result = Object.keys(obj).map((key) => [key, obj[key]]);
                    result.forEach((value_1, key_1) => {
                        var xxx = value_1[1];
                        xxx.forEach((value, key) => {
                            this.$toast.error(value);
                        });
                    });
                });
        },
        deleteNhanVien() {
            axios
                .post('http://127.0.0.1:8000/api/admin/nhan-vien/delete', this.delete_nhanvien)
                .then((res) => {
                    if (res.data.status) {
                        this.$toast.success(res.data.message);
                        this.loadData();
                    } else {
                        this.$toast.error(res.data.message);
                    }
                })
                .catch(error => {
                    var obj = error.response.data.errors;
                    var result = Object.keys(obj).map((key) => [key, obj[key]]);
                    result.forEach((value_1, key_1) => {
                        var xxx = value_1[1];
                        xxx.forEach((value, key) => {
                            this.$toast.error(value);
                        });
                    });
                });
        },
    },
}
</script>
<style>
.card-header h4 {
    margin-top: 0;
    margin-bottom: 0;
    line-height: 1.5rem;
    display: flex;
    align-items: center;
}

.modal-body label {
    margin-top: 10px;
    margin-bottom: 0px;
    font-size: 16px;
}
</style>