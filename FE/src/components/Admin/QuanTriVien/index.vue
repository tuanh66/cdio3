<template>
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <h4>QUẢN TRỊ VIÊN</h4>
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#themmoi"><i class="fa-solid fa-plus"></i> Thêm Mới</button>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover table-bordered">
                    <thead>
                        <tr class="text-nowrap text-center align-middle">
                            <th>#</th>
                            <th>Họ Và Tên</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th>Số Điện Thoại</th>
                            <th>Ngày Sinh</th>
                            <th>Chức Vụ</th>
                            <th>Tình Trạng</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <template v-for="(value, index) in list_quantrivien" :key="index">
                            <tr class="text-nowrap align-middle">
                                <td class="text-center">{{ index + 1 }}</td>
                                <td>{{ value.ho_va_ten }}</td>
                                <td>{{ valie.email }}</td>
                                <td>{{ value.password }}</td>
                                <td>{{ value.so_dien_thoai }}</td>
                                <td class="text-center">{{ value.ngay_sinh }}</td>
                                <td>{{ value.chuc_vu }}</td>
                                <td class="text-center">
                                    <button v-if="value.tinh_trang == 1" class="btn btn-primary">Hoạt Động</button>
                                    <button v-else class="btn btn-danger" style="width: 106px;">Tạm Tắt</button>
                                </td>
                                <td class="text-center">
                                    <button v-on:click="Object.assign(update_quantrivien, value)"
                                        class="btn btn-primary me-2" data-bs-toggle="modal"
                                        data-bs-target="#capnhat">Cập Nhật</button>
                                    <button v-on:click="Object.assign(delete_quantrivien, value)" class="btn btn-danger"
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
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Thêm mới Quản Trị Viên</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    
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
                        <strong>{{  }}</strong>?
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Quay lại</button>
                    <button v-on:click="deleteNhanVien()" type="button" class="btn btn-danger">Xoá</button>
                </div>
            </div>
        </div>
    </div>
    <!-- end modal xoa -->
</template>
<script>
export default {
    data() {
        return {
            list_quantrivien: [],
            create_quantrivien: {
                ho_va_ten: '',
                email: '',
                password: '',
                so_dien_thoai: '',
                ngay_sinh: '',
                chuc_vu: '',
                tinh_trang: '',
            },
            update_quantrivien: {
                ho_va_ten: '',
                email: '',
                password: '',
                so_dien_thoai: '',
                ngay_sinh: '',
                chuc_vu: '',
                tinh_trang: '',
            },
            delete_quantrivien: {
                ho_va_ten: '',
                email: '',
                password: '',
                so_dien_thoai: '',
                ngay_sinh: '',
                chuc_vu: '',
                tinh_trang: '',
            },
        }
    }
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