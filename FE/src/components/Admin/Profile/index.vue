<template>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <ul class="nav nav-tabs nav-primary" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" data-bs-toggle="tab" href="#primaryhome" role="tab"
                                aria-selected="true">
                                <div class="d-flex align-items-center">
                                    <div class="tab-icon"><i class="fa-solid fa-user font-18 me-1"></i>
                                    </div>
                                    <div class="tab-title">Profile</div>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" data-bs-toggle="tab" href="#primarycontact" role="tab"
                                aria-selected="false" tabindex="-1">
                                <div class="d-flex align-items-center">
                                    <div class="tab-icon"><i class="fa-solid fa-lock font-18 me-1"></i>
                                    </div>
                                    <div class="tab-title">Đổi mật khẩu</div>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content py-3">
                        <div class="tab-pane fade show active" id="primaryhome" role="tabpanel">
                            <div class="row">
                                <div class="col-lg-4 d-flex">
                                    <div class="card flex-fill">
                                        <div class="card-body">
                                            <div class="d-flex flex-column align-items-center text-center">
                                                <img src="https://rypuop.stripocdn.email/content/guids/CABINET_cffa413c5ccab048888fec6cc485b815f8f80028a73882101227ae6949ec8f11/images/387321979_687594463281792_7574468668499025541_n.jpg"
                                                    style="width: 140px; height: 140px;" alt="Admin"
                                                    class="rounded-circle p-1 bg-primary">
                                                <div class="mt-3">
                                                    <h4>{{ user.ho_va_ten }}</h4>
                                                    <p class="text-secondary mb-1">{{ user.chuc_vu }}</p>
                                                    <p class="text-muted font-size-sm">{{ user.dia_chi }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-8 d-flex">
                                    <div class="card flex-fill">
                                        <div class="card-body">
                                            <div class="row mb-3">
                                                <div class="col-lg-3">
                                                    <h6 class="mb-0">Họ và Tên</h6>
                                                </div>
                                                <div class="col-lg-9 text-secondary">
                                                    <input v-model="user.ho_va_ten" type="text" class="form-control"
                                                        placeholder="Nhập họ và tên">
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-lg-3">
                                                    <h6 class="mb-0">Email</h6>
                                                </div>
                                                <div class="col-lg-9 text-secondary">
                                                    <input v-model="user.email" type="text" class="form-control"
                                                        placeholder="Nhập email">
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-lg-3">
                                                    <h6 class="mb-0">Số Điện Thoại</h6>
                                                </div>
                                                <div class="col-lg-9 text-secondary">
                                                    <input v-model="user.so_dien_thoai" type="text" class="form-control"
                                                        placeholder="Nhập số điện thoại">
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-lg-3">
                                                    <h6 class="mb-0">Địa Chỉ</h6>
                                                </div>
                                                <div class="col-lg-9 text-secondary">
                                                    <input v-model="user.dia_chi" type="text" class="form-control"
                                                        placeholder="Nhập số điện thoại">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-3"></div>
                                                <div class="col-lg-9 text-secondary">
                                                    <button type="button" class="btn btn-primary px-4">Lưu</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="primarycontact" role="tabpanel">
                            <div class="col">
                                <h4>Thay đổi mật khẩu</h4>
                            </div>
                            <div class="col">Quản lý mật khẩu để bảo mật tài khoản</div>
                            <hr>
                            <div class="row mb-2">
                                <div class="col-lg-2">
                                    <label for="">Mật khẩu cũ</label>
                                </div>
                                <div class="col-lg-3">
                                    <input v-model="doi_mat_khau.mat_khau_cu" type="text" placeholder="Nhập mật khẩu cũ"
                                        class="form-control">
                                </div>
                            </div>

                            <div class="row mb-2">
                                <div class="col-lg-2">
                                    <label for="">Mật khẩu mới</label>
                                </div>
                                <div class="col-lg-3">
                                    <input v-model="doi_mat_khau.mat_khau_moi" type="password"
                                        placeholder="Nhập mật khẩu mới" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-lg-2">
                                    <label for="">Nhập lại Mật khẩu mới </label>
                                </div>
                                <div class="col-lg-3">
                                    <input v-model="doi_mat_khau.xac_nhan_mat_khau_moi" type="password"
                                        placeholder="Nhập lại mật khẩu mới" class="form-control">
                                </div>
                            </div>
                            <button v-on:click="doiMatKhau()" class="btn btn-primary">Lưu</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
import axios from 'axios';

export default {
    data() {
        return {
            user: {},
            doi_mat_khau: {
                mat_khau_cu: "",
                mat_khau_moi: "",
                xac_nhan_mat_khau_moi: ""
            }
        }
    },

    mounted() {
        this.layThongTinLogin();
    },
    methods: {
        doiMatKhau() {
            axios
                .post("http://127.0.0.1:8000/api/admin/doi-mat-khau", this.doi_mat_khau, {
                    headers: {
                        Authorization: "Bearer " + localStorage.getItem("nhan_vien_login"),
                    },
                })
                .then((res) => {
                    if (res.data.status == 1) {
                        this.$toast.success(res.data.message);
                        this.doi_mat_khau = {
                            mat_khau_cu: '',
                            mat_khau_moi: '',
                            xac_nhan_mat_khau_moi: ''
                        }
                    } else {
                        this.$toast.error(res.data.message);
                    }
                })
                .catch((res) => {
                    const list = Object.values(res.response.data.errors);
                    list.forEach((v, i) => {
                        this.$toast.error(v[0]);
                    });
                })
        },
        layThongTinLogin() {
            var token = localStorage.getItem("nhan_vien_login");
            axios
                .get("http://127.0.0.1:8000/api/admin/profile", {
                    headers: {
                        Authorization: "Bearer " + token,
                    },
                })
                .then((res) => {
                    if (res.data.status) {
                        this.user = res.data.data;
                    } else {
                        toaster.error(res.data.message);
                    }
                });
        }
    }
}
</script>
<style></style>