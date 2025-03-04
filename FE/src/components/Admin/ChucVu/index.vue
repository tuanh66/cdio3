<template>
    <div class="row">
        <div class="col-lg-3">
            <div class="card">
                <div class="card-header">
                    <h4>THÊM MỚI CHỨC VỤ</h4>
                </div>
                <div class="card-body">
                    <label class="form-label">Tên chức vụ</label>
                    <input v-model="create_chucvu.ten_chuc_vu" type="text" name="" class="form-control">
                    <label class="form-label">Tình trạng</label>
                    <select v-model="create_chucvu.tinh_trang" class="form-select">
                        <option value="1">Hiển Thị</option>
                        <option value="0">Tạm Tắt</option>
                    </select>
                </div>
                <div class="card-footer text-end">
                    <button v-on:click="createChucVu()" class="btn btn-primary">Thêm Mới</button>
                </div>
            </div>
        </div>
        <div class="col-lg-9">
            <div class="card">
                <div class="card-header">
                    <h4>DANH SÁCH CHỨC VỤ</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover table-bordered">
                            <thead>
                                <tr class="text-nowrap text-center align-middle">
                                    <th>#</th>
                                    <th>Tên chức vụ</th>
                                    <th>Tình trạng</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <template v-for="(value, index) in list_chucvu" :key="index">
                                    <tr class="text-nowrap align-middle">
                                        <td class="text-center">{{ index + 1 }}</td>
                                        <td>{{ value.ten_chuc_vu }}</td>
                                        <td class="text-center">
                                            <button v-if="value.tinh_trang == 1" class="btn btn-success">Hiển
                                                Thị</button>
                                            <button v-else class="btn btn-danger">Tạm Tắt</button>
                                        </td>
                                        <td class="text-center">
                                            <button v-on:click="Object.assign(update_chucvu, value)"
                                                class="btn btn-primary me-2" data-bs-toggle="modal"
                                                data-bs-target="#capnhat">Cập Nhật</button>
                                            <button v-on:click="Object.assign(delete_chucvu, value)"
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
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Cập nhật chức vụ</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <label class="form-label">Tên chức vụ</label>
                    <input v-model="update_chucvu.ten_chuc_vu" type="text" class="form-control">
                    <label class="form-label">Tình trạng</label>
                    <select v-model="update_chucvu.tinh_trang" class="form-select">
                        <option value="1">Hoạt Động</option>
                        <option value="0">Tạm Tắt</option>
                    </select>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Quay lại</button>
                    <button v-on:click="updateChucVu()" type="button" class="btn btn-primary">Cập nhật</button>
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
                        Bạn có chắc chắn muốn xóa chức vụ
                        <strong>{{ delete_chucvu.ten_chuc_vu }}</strong>?
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Quay lại</button>
                    <button v-on:click="deleteChucVu()" type="button" class="btn btn-danger" data-bs-dismiss="modal">Xoá</button>
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
            list_chucvu: [],
            create_chucvu: {
                ten_chuc_vu: '',
                tinh_trang: ''
            },
            update_chucvu: {
                ten_chuc_vu: '', 
                tinh_trang: ''
            },
            delete_chucvu: {
                ten_chuc_vu: '',
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
                .get('http://127.0.0.1:8000/api/admin/chuc-vu/data')
                .then((res) => {
                    this.list_chucvu = res.data.data;
                });
        },
        createChucVu() {
            axios
                .post('http://127.0.0.1:8000/api/admin/chuc-vu/create', this.create_chucvu)
                .then((res) => {
                    if (res.data.status) {
                        this.$toast.success(res.data.message);
                        this.create_chucvu = {
                            ten_chuc_vu: "",
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
        updateChucVu() {
            axios
                .post('http://127.0.0.1:8000/api/admin/chuc-vu/update', this.update_chucvu)
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
        deleteChucVu() {
            axios
                .post('http://127.0.0.1:8000/api/admin/chuc-vu/delete', this.delete_chucvu)
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