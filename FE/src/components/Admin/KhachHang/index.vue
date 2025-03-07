<template>
    <div class="card">
        <div class="card-header">
            <div class="row d-flex align-items-center">
                <div class="col-lg-6">
                    <h4 class="">DANH SÁCH KHÁCH HÀNG</h4>
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
                            <th>Tình trạng</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <template v-for="(value, index) in list_khachhang" :key="index">
                            <tr class="text-nowrap align-middle">
                                <td class="text-center">{{ index + 1 }}</td>
                                <td>{{ value.ho_va_ten }}</td>
                                <td>{{ value.email }}</td>
                                <td class="text-center">{{ value.password }}</td>
                                <td class="text-center">{{ formatDate(value.ngay_sinh) }}</td>
                                <td class="text-center">{{ value.so_dien_thoai }}</td>
                                <td class="text-center">{{ value.dia_chi }}</td>
                                <td class="text-center">
                                    <button v-if="value.tinh_trang == 1" class="btn btn-success">Hoạt Động</button>
                                    <button v-else class="btn btn-danger" style="width: 106px;">Tạm Tắt</button>
                                </td>
                                <td class="text-center">
                                    <button v-on:click="Object.assign(update_khachhang, value)"
                                        class="btn btn-primary me-2" data-bs-toggle="modal"
                                        data-bs-target="#capnhat">Cập nhật</button>
                                    <button v-on:click="Object.assign(delete_khachhang, value)" class="btn btn-danger"
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
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Thêm mới khách hàng</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6 md-3">
                            <label class="form-label">Họ và tên</label>
                            <input v-model="create_khachhang.ho_va_ten" type="text" class="form-control">
                        </div>
                        <div class="col-md-6 md-3">
                            <label class="form-label">Email</label>
                            <input v-model="create_khachhang.email" type="email" class="form-control">
                        </div>
                        <div class="col-md-6 md-3">
                            <label class="form-label">Password</label>
                            <input v-model="create_khachhang.password" type="password" class="form-control">
                        </div>
                        <div class="col-md-6 md-3">
                            <label class="form-label">Ngày Sinh</label>
                            <input v-model="create_khachhang.ngay_sinh" type="date" class="form-control">
                        </div>
                        <div class="col-md-6 md-3">
                            <label class="form-label">Số điện thoại</label>
                            <input v-model="create_khachhang.so_dien_thoai" type="number" class="form-control">
                        </div>
                        <div class="col-md-6 md-3">
                            <label class="form-label">Địa chỉ</label>
                            <input v-model="create_khachhang.dia_chi" type="text" class="form-control">
                        </div>
                        <div class="col-md-6 md-3">
                            <label class="form-label">Tình trạng</label>
                            <select v-model="create_khachhang.tinh_trang" class="form-select">
                                <option value="1">Hoạt Động</option>
                                <option value="0">Tạm Tắt</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Quay lại</button>
                    <button v-on:click="createKhachHang()" type="button" class="btn btn-primary"
                        data-bs-dismiss="modal">Thêm mới</button>
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
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Cập nhật khách hàng</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6 md-3">
                            <label class="form-label">Họ và tên</label>
                            <input v-model="update_khachhang.ho_va_ten" type="text" class="form-control">
                        </div>
                        <div class="col-md-6 md-3">
                            <label class="form-label">Email</label>
                            <input v-model="update_khachhang.email" type="email" class="form-control">
                        </div>
                        <div class="col-md-6 md-3">
                            <label class="form-label">Password</label>
                            <input v-model="update_khachhang.password" type="text" class="form-control">
                        </div>
                        <div class="col-md-6 md-3">
                            <label class="form-label">Ngày Sinh</label>
                            <input v-model="update_khachhang.ngay_sinh" type="date" class="form-control">
                        </div>
                        <div class="col-md-6 md-3">
                            <label class="form-label">Số điện thoại</label>
                            <input v-model="update_khachhang.so_dien_thoai" type="number" class="form-control">
                        </div>
                        <div class="col-md-6 md-3">
                            <label class="form-label">Địa chỉ</label>
                            <input v-model="update_khachhang.dia_chi" type="text" class="form-control">
                        </div>
                        <div class="col-md-6 md-3">
                            <label class="form-label">Tình trạng</label>
                            <select v-model="update_khachhang.tinh_trang" class="form-select">
                                <option value="1">Hoạt Động</option>
                                <option value="0">Tạm Tắt</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Quay lại</button>
                    <button v-on:click="updateKhachHang()" type="button" class="btn btn-primary"
                        data-bs-dismiss="modal">Cập
                        nhật</button>
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
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Xoá khách hàng</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="alert alert-danger" role="alert">
                        Bạn có chắc chắn muốn xóa khách hàng
                        <strong>{{ delete_khachhang.ho_va_ten }}</strong>?
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Quay lại</button>
                    <button v-on:click="deleteKhachHang()" type="button" class="btn btn-danger" data-bs-dismiss="modal">Xoá</button>
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
            list_khachhang: [],
            create_khachhang: {
                ho_va_ten: '',
                email: '',
                password: '',
                ngay_sinh: '',
                so_dien_thoai: '',
                dia_chi: '',
                tinh_trang: ''
            },
            update_khachhang: {
                ho_va_ten: '',
                email: '',
                password: '',
                ngay_sinh: '',
                so_dien_thoai: '',
                dia_chi: '',
                tinh_trang: ''
            },
            delete_khachhang: {
                ho_va_ten: '',
                email: '',
                password: '',
                ngay_sinh: '',
                so_dien_thoai: '',
                dia_chi: '',
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
                .get('http://127.0.0.1:8000/api/admin/khach-hang/data')
                .then((res) => {
                    this.list_khachhang = res.data.data;
                });
        },
        createKhachHang() {
            axios
                .post('http://127.0.0.1:8000/api/admin/khach-hang/create', this.create_khachhang)
                .then((res) => {
                    if (res.data.status) {
                        this.$toast.success(res.data.message);
                        this.create_khachhang = {
                            ho_va_ten: "",
                            email: "",
                            password: "",
                            ngay_sinh: "",
                            so_dien_thoai: "",
                            dia_chi: "",
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
        updateKhachHang() {
            axios
                .post('http://127.0.0.1:8000/api/admin/khach-hang/update', this.update_khachhang)
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
        deleteKhachHang() {
            axios
                .post('http://127.0.0.1:8000/api/admin/khach-hang/delete', this.delete_khachhang)
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