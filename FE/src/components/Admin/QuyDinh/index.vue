<template>
    <div class="row">
        <div class="col-lg-3">
            <div class="card">
                <div class="card-header">
                    <h4>THÊM ĐIỂM MỚI QUY ĐỊNH</h4>
                </div>
                <div class="card-body">
                    <label class="form-label">Mã số</label>
                    <input v-model="create_quydinh.ma_so" type="text" class="form-control">
                    <label class="form-label">Số điểm</label>
                    <input v-model="create_quydinh.so_diem" type="number" class="form-control">
                    <label class="form-label">Nội dung</label>
                    <input v-model="create_quydinh.noi_dung" type="text" class="form-control"
                        placeholder="Vd: Điểm cho công việc đúng hạ">
                    <label class="form-label">Ghi chú</label>
                    <textarea class="form-control" style="height: 80px"></textarea>
                    <label class="form-label">Loại điểm</label>
                    <input v-model="create_quydinh.loai_diem" type="text" class="form-control">
                    <label class="form-label">Tình trạng</label>
                    <select v-model="create_quydinh.tinh_trang" class="form-select">
                        <option value="1">Hoạt Động</option>
                        <option value="0">Tạm Tắt</option>
                    </select>
                </div>
                <div class="card-footer text-end">
                    <button v-on:click="createQuyDinh()" class="btn btn-primary">Thêm mới</button>
                </div>
            </div>
        </div>
        <div class="col-lg-9">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h4>DANH SÁCH QUY ĐỊNH ĐIỂM</h4>
                    <button class="btn btn-success"><i class="fa-regular fa-file-excel"></i> Xuất Excel</button>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr class="text-nowrap text-center align-middle">
                                    <th>#</th>
                                    <th>Mã số</th>
                                    <th>Số điểm</th>
                                    <th>Nội dung</th>
                                    <th>Ghi chú</th>
                                    <th>Loại điểm</th>
                                    <th>Tình trạng</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <template v-for="(value, index) in list_quydinh" :key="index">
                                    <tr class="text-nowrap align-middle">
                                        <td class="text-center">{{ index + 1 }}</td>
                                        <td class="text-center">{{ value.ma_so }}</td>
                                        <td class="text-center">{{ value.so_diem }}</td>
                                        <td>{{ value.noi_dung }}</td>
                                        <td>{{ value.ghi_chu }}</td>
                                        <td class="text-center">{{ value.loai_diem }}</td>
                                        <td class="text-center">
                                            <button v-if="value.tinh_trang == 1" class="btn btn-success">Hoạt
                                                Động</button>
                                            <button v-else class="btn btn-danger">Tạm Tắt</button>
                                        </td>
                                        <td class="text-center">
                                            <button v-on:click="Object.assign(update_quydinh, value)"
                                                class="btn btn-primary me-2" data-bs-toggle="modal"
                                                data-bs-target="#capnhat">Câp nhật</button>
                                            <button v-on:click="Object.assign(delete_quydinh, value)"
                                                class="btn btn-danger" data-bs-toggle="modal"
                                                data-bs-target="#xoa">Xoá</button>
                                        </td>
                                    </tr>
                                </template>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- modal capnhat -->
    <div class="modal fade" id="capnhat" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Cập nhật Quy Định</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6 md-3">
                            <label class="form-label">Mã số</label>
                            <input v-model="update_quydinh.ma_so" type="text" class="form-control">
                        </div>
                        <div class="col-md-6 md-3">
                            <label class="form-label">Số điểm</label>
                            <input v-model="update_quydinh.so_diem" type="email" class="form-control">
                        </div>
                        <div class="col-md-6 md-3">
                            <label class="form-label">Nội dung</label>
                            <input v-model="update_quydinh.noi_dung" type="text" class="form-control">
                        </div>
                        <div class="col-md-6 md-3">
                            <label class="form-label">Ghi chú</label>
                            <input v-model="update_quydinh.ghi_chu" type="date" class="form-control">
                        </div>
                        <div class="col-md-6 md-3">
                            <label class="form-label">Loại điểm</label>
                            <input v-model="update_quydinh.loai_diem" type="number" class="form-control">
                        </div>
                        <div class="col-md-6 md-3">
                            <label class="form-label">Tình trạng</label>
                            <select v-model="update_quydinh.tinh_trang" class="form-select">
                                <option value="1">Hoạt Động</option>
                                <option value="0">Tạm Tắt</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Quay lại</button>
                    <button v-on:click="updateQuyDinh()" type="button" class="btn btn-primary">Cập nhật</button>
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
                        Bạn có chắc chắn muốn xóa quy định
                        <strong>{{ delete_quydinh.ma_so }}</strong>?
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Quay lại</button>
                    <button v-on:click="deleteQuyDinh()" type="button" class="btn btn-danger">Xoá</button>
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
            list_quydinh: [],
            create_quydinh: {
                ma_so: '',
                so_diem: '',
                noi_dung: '',
                ghi_chu: '',
                loai_diem: '',
                tinh_trang: ''
            },
            update_quydinh: {
                ma_so: '',
                so_diem: '',
                noi_dung: '',
                ghi_chu: '',
                loai_diem: '',
                tinh_trang: ''
            },
            delete_quydinh: {
                ma_so: '',
                so_diem: '',
                noi_dung: '',
                ghi_chu: '',
                loai_diem: '',
                tinh_trang: ''
            },
        }
    },
    mounted() {
        this.loadData();
    },
    methods: {
        loadData() {
            axios
                .get('http://127.0.0.1:8000/api/admin/quy-dinh/data')
                .then((res) => {
                    this.list_quydinh = res.data.data;
                });
        },
        createQuyDinh() {
            axios
                .post('http://127.0.0.1:8000/api/admin/quy-dinh/create', this.create_quydinh)
                .then((res) => {
                    if (res.data.status) {
                        this.$toast.success(res.data.message);
                        this.create_nhan_vien = {
                            ho_va_ten: "",
                            email: "",
                            password: "",
                            re_password: "",
                            so_dien_thoai: "",
                            dia_chi: "",
                            ngay_sinh: "",
                            tinh_trang: "",
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
        updateQuyDinh() {
            axios
                .post('http://127.0.0.1:8000/api/admin/quy-dinh/update', this.update_quydinh)
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
        deleteQuyDinh() {
            axios
                .post('http://127.0.0.1:8000/api/admin/quy-dinh/delete', this.delete_quydinh)
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
    }
}
</script>
<style>
.card-header h4 {
    margin-top: 12px;
    margin-bottom: 12px;
    line-height: 1.5rem;
    display: flex;
    align-items: center;
}

.form-label {
    margin-top: 10px;
    margin-bottom: 0px;
    font-size: 16px;
}
</style>