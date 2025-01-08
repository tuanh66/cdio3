<template>
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-4" style="max-width: 473px;">
                        <input type="text" class="form-control" placeholder="Chức danh, Kỹ năng, Tên công ty">
                    </div>
                    <div class="col-lg-4" style="max-width: 473px;">
                        <select class="form-select" aria-label="Default select example" style="height: 45px;">
                            <option selected>Tất cả ngành nghề</option>
                            <option value="1">An Ninh/Bảo Vệ</option>
                            <option value="2">An Toàn Lao Động</option>
                            <option value="3">Bán Hàng/Kinh Doanh</option>
                            <option value="4">Bán Lẻ/Bán Sỉ</option>
                            <option value="5">Bảo Hiểm</option>
                            <option value="6">Công Nghệ Thông Tin</option>
                            <option value="7">Giáo Dục/Đào Tạo</option>
                            <option value="8">Kế Toán/Kiểm Toán</option>
                            <option value="9">Kiến Trúc/Thiết Kế</option>
                            <option value="10">Marketing/Truyền Thông</option>
                            <option value="11">Ngân Hàng/Tài Chính</option>
                            <option value="12">Nhân Sự</option>
                            <option value="13">Sản Xuất/Cơ Khí</option>
                            <option value="14">Vận Tải/Kho Vận</option>
                            <option value="15">Y Tế/Chăm Sóc Sức Khỏe</option>
                        </select>
                    </div>
                    <div class="col-lg-4" style="max-width: 473px;">
                        <select class="form-select" aria-label="Default select example" style="height: 45px;">
                            <option selected>Tất Cả Địa Điểm</option>
                            <option value="1">Hà Giang</option>
                            <option value="2">Cao Bằng</option>
                            <option value="3">Bắc Kạn</option>
                            <option value="4">Tuyên Quang</option>
                            <option value="5">Lào Cai</option>
                            <option value="6">Yên Bái</option>
                            <option value="7">Thái Nguyên</option>
                            <option value="8">Lạng Sơn</option>
                            <option value="9">Phú Thọ</option>
                            <option value="10">Bắc Giang</option>
                            <option value="11">Quảng Ninh</option>
                            <option value="12">Hà Nội</option>
                            <option value="13">Vĩnh Phúc</option>
                            <option value="14">Bắc Ninh</option>
                            <option value="15">Hải Dương</option>
                            <option value="16">Hưng Yên</option>
                            <option value="17">Hà Nam</option>
                            <option value="18">Nam Định</option>
                            <option value="19">Thái Bình</option>
                            <option value="20">Hải Phòng</option>
                            <option value="21">Hòa Bình</option>
                            <option value="22">Sơn La</option>
                            <option value="23">Điện Biên</option>
                            <option value="24">Lai Châu</option>
                            <option value="25">Thanh Hóa</option>
                            <option value="26">Nghệ An</option>
                            <option value="27">Hà Tĩnh</option>
                            <option value="28">Quảng Bình</option>
                            <option value="29">Quảng Trị</option>
                            <option value="30">Thừa Thiên Huế</option>
                            <option value="31">Đà Nẵng</option>
                            <option value="32">Quảng Nam</option>
                            <option value="33">Quảng Ngãi</option>
                            <option value="34">Bình Định</option>
                            <option value="35">Phú Yên</option>
                            <option value="36">Khánh Hòa</option>
                            <option value="37">Ninh Thuận</option>
                            <option value="38">Bình Thuận</option>
                            <option value="39">Kon Tum</option>
                            <option value="40">Gia Lai</option>
                            <option value="41">Đắk Lắk</option>
                            <option value="42">Đắk Nông</option>
                            <option value="43">Lâm Đồng</option>
                            <option value="44">TP Hồ Chí Minh</option>
                            <option value="45">Bà Rịa - Vũng Tàu</option>
                            <option value="46">Bình Dương</option>
                            <option value="47">Bình Phước</option>
                            <option value="48">Đồng Nai</option>
                            <option value="49">Tây Ninh</option>
                            <option value="50">Long An</option>
                            <option value="51">Đồng Tháp</option>
                            <option value="52">Tiền Giang</option>
                            <option value="53">An Giang</option>
                            <option value="54">Bến Tre</option>
                            <option value="55">Vĩnh Long</option>
                            <option value="56">Trà Vinh</option>
                            <option value="57">Cần Thơ</option>
                            <option value="58">Hậu Giang</option>
                            <option value="59">Sóc Trăng</option>
                            <option value="60">Bạc Liêu</option>
                            <option value="61">Cà Mau</option>
                        </select>
                    </div>
                    <button class="btn d-flex justify-content-center align-items-center"
                        style="background: #00B2A3; height: 45px; width: 45px;"><i
                            class="fa-solid fa-magnifying-glass fa-xl" style="color: #FFFFFF;"></i></button>
                </div>
            </div>
            <div class="card-footer pe-0">
                <div class="row">
                    <div class="col-lg-2" style="max-width: 231px;">
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Mức Lương</option>
                            <option value="1">Từ 3.000.000 đ</option>
                            <option value="2">Từ 5.000.000 đ</option>
                            <option value="3">Từ 7.000.000 đ</option>
                            <option value="4">Từ 10.000.000 đ</option>
                            <option value="5">Từ 15.000.000 đ</option>
                            <option value="6">Từ 20.000.000 đ</option>
                            <option value="7">Từ 30.000.000 đ</option>
                            <option value="8">Từ 40.000.000 đ</option>
                            <option value="9">Từ 50.000.000 đ</option>
                            <option value="10">Từ 60.000.000 đ</option>
                            <option value="11">Từ 70.000.000 đ</option>
                        </select>
                    </div>
                    <div class="col-lg-2 ps-0" style="max-width: 231px;">
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Cấp Bậc</option>
                            <option value="1">Sinh viên/ Thực tập sinh</option>
                            <option value="2">Mới tốt nghiệp</option>
                            <option value="3">Nhân viên</option>
                            <option value="4">Trưởng nhóm/Giám sát</option>
                            <option value="5">Quản Lý</option>
                            <option value="6">Quản Lý Cấp Cao</option>
                            <option value="7">Điều Hành Cấp Cao</option>
                        </select>
                    </div>
                    <div class="col-lg-2 ps-0" style="max-width: 231px;">
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Đăng Trong Vòng</option>
                            <option value="1">3 ngày trước</option>
                            <option value="2">1 tuần trước</option>
                            <option value="3">2 tuần trước</option>
                            <option value="4">1 tháng trước</option>
                        </select>
                    </div>
                    <div class="col-lg-2 ps-0" style="max-width: 231px;">
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Hình Thức Làm Việc</option>
                            <option value="1">Nhân Viên Chính Thức</option>
                            <option value="2">Tạm Thời/Dự Án</option>
                            <option value="3">Bán Hàng/Kinh Doanh</option>
                            <option value="4">Thời Vụ - Nghề Tự Do</option>
                            <option value="5">Thực Tập</option>
                        </select>
                    </div>
                    <div class="col-lg-2 ps-0" style="max-width: 231px;">
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Phúc Lợi Mong Muốn</option>
                            <option value="1">Bảo Hiểm Y Tế</option>
                            <option value="2">Bảo Hiểm Xã Hội</option>
                            <option value="3">Thưởng Tháng 13</option>
                            <option value="4">Du Lịch Hằng Năm</option>
                            <option value="5">Đào Tạo/Nâng Cao Kỹ Năng</option>
                            <option value="6">Chế Độ Làm Việc Linh Hoạt</option>
                            <option value="7">Phụ Cấp Ăn Uống</option>
                            <option value="8">Phụ Cấp Đi Lại</option>
                            <option value="9">Hỗ Trợ Nhà Ở</option>
                            <option value="10">Chăm Sóc Sức Khỏe</option>
                            <option value="11">Môi Trường Làm Việc Thoải Mái</option>
                            <option value="12">Chế Độ Thai Sản</option>
                        </select>
                    </div>
                    <div class="col-lg-2 ps-0" style="max-width: 231px;">
                        <select class="form-select" aria-label="Default select example" style="height: 45px;">
                            <option selected>Kinh Nghiệm Làm Việc</option>
                            <option value="1">Không Yêu Cầu Kinh Nghiệm</option>
                            <option value="2">Chưa Có Kih Nghiệm</option>
                            <option value="3">Đến Dưới 1 Năm</option>
                            <option value="4">Từ 1 - 4 Năm</option>
                            <option value="5">Từ 5 - 7 Năm</option>
                            <option value="6">Từ 7 - 10 Năm</option>
                            <option value="7">Từ 11 Năm</option>
                        </select>
                    </div>
                    <div class="col-lg-2 ps-0 d-flex align-items-center justify-content-end" style="max-width: 90px;">
                        <a role="button" class="btn-clear btn-link text-decoration-none">Xóa bộ lọc</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
export default {

}
</script>
<style></style>