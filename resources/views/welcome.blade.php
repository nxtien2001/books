@extends('client.content')
@section('content')
<!-- noi dung danh muc sach(categories) + banner slider -->
<section class="header bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-3" style="margin-right: -15px;">
                <!-- CATEGORIES -->
                <div class="categorycontent">
                    <ul>
                        <li> <a href="sach-kinh-te.html"> Sách Kinh Tế - Kỹ Năng</a><i class="fa fa-chevron-right float-right"></i>
                            <ul>
                                <li class="liheader"><a href="#" class="header text-uppercase">Sách Kinh Tế - Kỹ
                                        Năng</a></li>
                                <div class="content trai">
                                    <li><a href="#">Kinh Tế - Chính Trị</a></li>
                                    <li><a href="#">Sách Khởi Nghiệp</a></li>
                                    <li><a href="#">Sách Tài Chính, Kế Toán</a></li>
                                    <li><a href="#">Sách Quản Trị Nhân Sự</a></li>
                                    <li><a href="#">Sách Kỹ Năng Làm Việc</a></li>
                                </div>
                                <div class="content phai">
                                    <li><a href="#">Nhân Vật - Bài Học Kinh Doanh</a></li>
                                    <li><a href="#">Sách Quản Trị - Lãnh Đạo</a></li>
                                    <li><a href="#">Sách Kinh Tế Học</a></li>
                                    <li><a href="#">Sách Chứng Khoán - Bất Động Sản - Đầu Tư</a></li>
                                    <li><a href="#">Sách Marketing - Bán Hàng</a></li>
                                </div>
                            </ul>
                        </li>

                        <li><a href="#">Nghệ Thuật Sống - Tâm Lý </a><i class="fa fa-chevron-right float-right"></i>
                            <ul>
                                <li class="liheader"><a href="#" class="header text-uppercase">Nghệ Thuật Sống - Tâm
                                        Lý</a></li>
                                <div class="content trai">
                                    <li><a href="#">Sách Nghệ Thuật Sống</a></li>
                                    <li><a href="#">Sách Tâm Lý</a></li>
                                    <li><a href="#">Sách Hướng Nghiệp</a></li>
                                </div>
                                <div class="content phai">
                                    <li><a href="#">Sách Nghệ Thuật Sống Đẹp</a></li>
                                    <li><a href="#">Sách Tư Duy </a></li>
                                </div>
                            </ul>
                        </li>
                        <li><a href="#">Sách Văn Học Việt Nam</a><i class="fa fa-chevron-right float-right"></i>
                            <ul>
                                <li class="liheader"><a href="#" class="header text-uppercase">Sách Văn Học Việt
                                        Nam</a></li>
                                <div class="content trai">
                                    <li><a href="#">Truyện Ngắn - Tản Văn </a></li>
                                    <li><a href="#">Tiểu Thuyết lịch Sử </a></li>
                                    <li><a href="#">Phóng Sự - Ký Sự - Du ký - Tùy Bút</a></li>
                                    <li><a href="#">Thơ</a></li>
                                </div>
                                <div class="content phai">
                                    <li><a href="#">Tiểu thuyết</a></li>
                                    <li><a href="#">Tiểu sử - Hồi ký</a></li>
                                    <li><a href="#">Phê Bình Văn Học</a></li>
                                </div>
                            </ul>
                        </li>
                        <li><a href="#">Sách Văn Học Nước Ngoài</a><i class="fa fa-chevron-right float-right"></i>
                            <ul>
                                <li class="liheader"><a href="#" class="header text-uppercase">Sách Văn Học Nước
                                        Ngoài</a></li>
                                <div class="content trai">
                                    <li><a href="#">Văn Học Hiện Đại</a></li>
                                    <li><a href="#">Tiểu Thuyết </a></li>
                                    <li><a href="#">Truyện Trinh Thám</a></li>
                                    <li><a href="#">Thần Thoại - Cổ Tích</a></li>
                                </div>
                                <div class="content phai">
                                    <li><a href="#">Văn Học Kinh Điển</a></li>
                                    <li><a href="#">Sách Giả Tưởng - Kinh Dị</a></li>
                                    <li><a href="#">Truyện Kiếm Hiệp</a></li>
                                </div>
                            </ul>
                        </li>
                        <li><a href="#">Sách Thiếu Nhi</a><i class="fa fa-chevron-right float-right"></i>
                            <ul>
                                <li class="liheader"><a href="#" class="header text-uppercase">Sách Thiếu Nhi</a>
                                </li>
                                <div class="content trai">
                                    <li><a href="#">Mẫu Giáo</a></li>
                                    <li><a href="#">Thiếu Niên</a></li>
                                    <li><a href="#">Kiến Thức - Bách Khoa</a></li>
                                    <li><a href="#">Truyện Cổ Tích</a></li>
                                </div>
                                <div class="content phai">
                                    <li><a href="#">Nhi Đồng</a></li>
                                    <li><a href="#">Văn Học Thiếu Nhi</a></li>
                                    <li><a href="#">Kỹ Năng Sống</a></li>
                                    <li><a href="#">Truyện Tranh</a></li>
                                </div>
                            </ul>
                        </li>
                        <li><a href="#">Sách Giáo Dục - Gia Đình</a><i class="fa fa-chevron-right float-right"></i>
                            <ul>
                                <li class="liheader"><a href="#" class="header text-uppercase">Sách Giáo Dục - Gia
                                        Đình</a></li>
                                <div class="content trai">
                                    <li><a href="#">Giáo dục</a></li>
                                    <li><a href="#">Thai Giáo</a></li>
                                    <li><a href="#">Sách Dinh Dưỡng - Chăm Sóc Trẻ</a></li>
                                    <li><a href="#">Ẩm Thực - Nấu Ăn</a></li>
                                    <li><a href="#">Sách Tham Khảo</a></li>
                                </div>
                                <div class="content phai">
                                    <li><a href="#">Giới Tính</a></li>
                                    <li><a href="#">Sách Làm Cha Mẹ</a></li>
                                    <li><a href="#">Kiến Thức - Kỹ Năng Cho Trẻ</a></li>
                                    <li><a href="#">Ngoại Ngữ - Từ Điển</a></li>
                                </div>
                            </ul>
                        </li>
                        <li><a href="#">Sách Lịch Sử</a><i class="fa fa-chevron-right float-right"></i>
                            <ul>
                                <li class="liheader"><a href="#" class="header text-uppercase">Sách Lịch Sử</a></li>
                                <div class="content trai">
                                    <li><a href="#">Lịch Sử Việt Nam</a></li>
                                </div>
                                <div class="content phai">
                                    <li><a href="#">Lịch Sử Thế Giới</a></li>
                                </div>
                            </ul>
                        </li>
                        <li><a href="#">Sách Văn Hóa - Nghệ Thuật</a><i class="fa fa-chevron-right float-right"></i>
                            <ul>
                                <li class="liheader"><a href="#" class="header text-uppercase">Sách Văn Hóa - Nghệ
                                        Thuật</a></li>
                                <div class="content trai">
                                    <li><a href="#">Văn Hóa</a></li>
                                    <li><a href="#">Phong Tục Tập Quán</a></li>
                                    <li><a href="#">Phong Thủy</a></li>
                                </div>
                                <div class="content phai">
                                    <li><a href="#">Nghệ Thuật</a></li>
                                    <li><a href="#">Kiến Trúc</a></li>
                                    <li><a href="#">Du Lịch</a></li>
                                </div>
                            </ul>
                        </li>
                        <li><a href="#">Sách Khoa Học - Triết Học</a><i class="fa fa-chevron-right float-right"></i>
                            <ul>
                                <li class="liheader"><a href="#" class="header text-uppercase">Sách Khoa Học - Triết
                                        Học</a></li>
                                <div class="content trai">
                                    <li><a href="#">Triết Học Phương Tây</a></li>
                                    <li><a href="#">Khoa Học Cơ Bản</a></li>
                                </div>
                                <div class="content phai">
                                    <li><a href="#">Minh Tiết Phương Đông</a></li>
                                </div>
                            </ul>
                        </li>
                        <li><a href="#">Sách Tâm Linh - Tôn Giáo</a><i class="fa fa-chevron-right float-right"></i>

                        </li>
                        <li><a href="#">Sách Y Học - Thực Dưỡng</a><i class="fa fa-chevron-right float-right"></i>
                            <ul>
                                <li class="liheader"><a href="#" class="header text-uppercase">Sách Y Học - Thực
                                        Dưỡng</a></li>
                                <div class="content trai">
                                    <li><a href="#">Chăm Sóc Sức Khỏe</a></li>
                                    <li><a href="#">Y Học</a></li>
                                    <li><a href="#">Thiền - Yoga</a></li>
                                </div>
                                <div class="content phai">
                                    <li><a href="#">Thực Dưỡng</a></li>
                                    <li><a href="#">Đông Y - Cổ Truyền</a></li>
                                </div>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- banner slider  -->
            <div class="col-md-9 px-0">
                <div id="carouselId" class="carousel slide" data-ride="carousel">
                    <ol class="nutcarousel carousel-indicators rounded-circle">
                        <li data-target="#carouselId" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselId" data-slide-to="1"></li>
                        <li data-target="#carouselId" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <a href="#"><img src="{{asset('theme/client/images/banner-sach-moi.jpg')}}" class="img-fluid" style="height: 386px;" width="900px" alt="First slide"></a>
                        </div>
                        <div class="carousel-item">
                            <a href="#"><img src="{{asset('theme/client/images/banner-beethoven.jpg')}}" class="img-fluid" style="height: 386px;" width="900px" alt="Second slide"></a>
                        </div>
                        <div class="carousel-item">
                            <a href="#"><img src="{{asset('theme/client/images/neu-toi-biet-duoc-khi-20-full-banner.jpg')}}" class="img-fluid" style="height: 386px;" alt="Third slide"></a>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselId" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselId" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- khoi sach moi  -->
<section class="_1khoi sachmoi bg-white">
    <div class="container">
        <div class="noidung" style=" width: 100%;">
            <div class="row">
                <!--header-->
                <div class="col-12 d-flex justify-content-between align-items-center pb-2 bg-transparent pt-4">
                    <h1 class="header text-uppercase" style="font-weight: 400;">SÁCH MỚI TUYỂN CHỌN</h1>
                    <a href="sach-moi-tuyen-chon.html" class="btn btn-warning btn-sm text-white">Xem tất cả</a>
                </div>
            </div>
            <div class="khoisanpham" style="padding-bottom: 2rem;">
                <!-- 1 san pham -->
                <div class="card">
                    <a href="Lap-trinh-ke-hoach-kinh-doanh-hieu-qua.html" class="motsanpham" style="text-decoration: none; color: black;" data-toggle="tooltip" data-placement="bottom" title="Lập Kế Hoạch Kinh Doanh Hiệu Quả">
                        <img class="card-img-top anh" src="{{asset('theme/client/images/lap-ke-hoach-kinh-doanh-hieu-qua.jpg')}}" alt="lap-ke-hoach-kinh-doanh-hieu-qua">
                        <div class="card-body noidungsp mt-3">
                            <h3 class="card-title ten">Lập Kế Hoạch Kinh Doanh Hiệu Quả</h3>
                            <small class="tacgia text-muted">Brian Finch</small>
                            <div class="gia d-flex align-items-baseline">
                                <div class="giamoi">111.200 ₫</div>
                                <div class="giacu text-muted">139.000 ₫</div>
                                <div class="sale">-20%</div>
                            </div>
                            <div class="danhgia">
                                <ul class="d-flex" style="list-style: none;">
                                    <li class="active"><i class="fa fa-star"></i></li>
                                    <li class="active"><i class="fa fa-star"></i></li>
                                    <li class="active"><i class="fa fa-star"></i></li>
                                    <li class="active"><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><span class="text-muted">0 nhận xét</span></li>
                                </ul>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="card">
                    <a href="Ma-bun-luu-manh-va-nhung-cau-chuyen-khac-cua-nguyen-tri.html" class="motsanpham" style="text-decoration: none; color: black;" data-toggle="tooltip" data-placement="bottom" title="Ma Bùn Lưu Manh Và Những Câu Chuyện Khác Của Nguyễn
                        Trí">
                        <img class="card-img-top anh" src="{{asset('theme/client/images/ma-bun-luu-manh.jpg')}}" alt="ma-bun-luu-manh">
                        <div class="card-body noidungsp mt-3">
                            <h3 class="card-title ten">Ma Bùn Lưu Manh Và Những Câu Chuyện Khác Của Nguyễn
                                Trí</h3>
                            <small class="tacgia text-muted">Nguyễn Trí</small>
                            <div class="gia d-flex align-items-baseline">
                                <div class="giamoi">68.000 ₫</div>
                                <div class="giacu text-muted">85.000 ₫</div>
                                <div class="sale">-20%</div>
                            </div>
                            <div class="danhgia">
                                <ul class="d-flex" style="list-style: none;">
                                    <li class="active"><i class="fa fa-star"></i></li>
                                    <li class="active"><i class="fa fa-star"></i></li>
                                    <li class="active"><i class="fa fa-star"></i></li>
                                    <li class="active"><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><span class="text-muted">0 nhận xét</span></li>
                                </ul>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="card">
                    <a href="#" class="motsanpham" style="text-decoration: none; color: black;" data-toggle="tooltip" data-placement="bottom" title="Bank 4.0 - Giao dịch mọi nơi, không chỉ là ngân hàng">
                        <img class="card-img-top anh" src="{{asset('theme/client/images/bank-4.0.jpg')}}" alt="bank-4.0">
                        <div class="card-body noidungsp mt-3">
                            <h3 class="card-title ten">Bank 4.0 - Giao dịch mọi nơi, không chỉ là ngân hàng
                            </h3>
                            <small class="tacgia text-muted">Brett King</small>
                            <div class="gia d-flex align-items-baseline">
                                <div class="giamoi">111.200 ₫</div>
                                <div class="giacu text-muted">139.000 ₫</div>
                                <div class="sale">-20%</div>
                            </div>
                            <div class="danhgia">
                                <ul class="d-flex" style="list-style: none;">
                                    <li class="active"><i class="fa fa-star"></i></li>
                                    <li class="active"><i class="fa fa-star"></i></li>
                                    <li class="active"><i class="fa fa-star"></i></li>
                                    <li class="active"><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><span class="text-muted">0 nhận xét</span></li>
                                </ul>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="card">
                    <a href="#" class="motsanpham" style="text-decoration: none; color: black;" data-toggle="tooltip" data-placement="bottom" title="Bộ Sách 500 Câu Chuyện Đạo Đức - Những Câu Chuyện
                        Tình Thân (Bộ 8 Cuốn)">
                        <img class="card-img-top anh" src="{{asset('theme/client/images/bo-sach-500-cau-chuyen-dao-duc.jpg')}}" alt="bo-sach-500-cau-chuyen-dao-duc">
                        <div class="card-body noidungsp mt-3">
                            <h3 class="card-title ten">Bộ Sách 500 Câu Chuyện Đạo Đức - Những Câu Chuyện
                                Tình Thân (Bộ 8 Cuốn)</h3>
                            <small class="tacgia text-muted">Nguyễn Hạnh - Trần Thị Thanh Nguyên</small>
                            <div class="gia d-flex align-items-baseline">
                                <div class="giamoi">111.200 ₫</div>
                                <div class="giacu text-muted">139.000 ₫</div>
                                <div class="sale">-20%</div>
                            </div>
                            <div class="danhgia">
                                <ul class="d-flex" style="list-style: none;">
                                    <li class="active"><i class="fa fa-star"></i></li>
                                    <li class="active"><i class="fa fa-star"></i></li>
                                    <li class="active"><i class="fa fa-star"></i></li>
                                    <li class="active"><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><span class="text-muted">0 nhận xét</span></li>
                                </ul>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="card">
                    <a href="#" class="motsanpham" style="text-decoration: none; color: black;" data-toggle="tooltip" data-placement="bottom" title="Lịch Sử Ung Thư - Hoàng Đế Của Bách Bệnh">
                        <img class="card-img-top anh" src="{{asset('theme/client/images/ung-thu-hoang-de-cua-bach-benh.jpg')}}" alt="ung-thu-hoang-de-cua-bach-benh">
                        <div class="card-body noidungsp mt-3">
                            <h3 class="card-title ten">Lịch Sử Ung Thư - Hoàng Đế Của Bách Bệnh</h3>
                            <small class="tacgia text-muted">Siddhartha Mukherjee</small>
                            <div class="gia d-flex align-items-baseline">
                                <div class="giamoi">111.200 ₫</div>
                                <div class="giacu text-muted">139.000 ₫</div>
                                <div class="sale">-20%</div>
                            </div>
                            <div class="danhgia">
                                <ul class="d-flex" style="list-style: none;">
                                    <li class="active"><i class="fa fa-star"></i></li>
                                    <li class="active"><i class="fa fa-star"></i></li>
                                    <li class="active"><i class="fa fa-star"></i></li>
                                    <li class="active"><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><span class="text-muted">0 nhận xét</span></li>
                                </ul>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="card">
                    <a href="#" class="motsanpham" style="text-decoration: none; color: black;" data-toggle="tooltip" data-placement="bottom" title="Cuốn Sách Khám Phá: Trời Đêm Huyền Diệu">
                        <img class="card-img-top anh" src="{{asset('theme/client/images/troi-dem-huyen-dieu.jpg')}}" alt="troi-dem-huyen-dieu">
                        <div class="card-body noidungsp mt-3">
                            <h3 class="card-title ten">Cuốn Sách Khám Phá: Trời Đêm Huyền Diệu</h3>
                            <small class="tacgia text-muted">Disney Learning</small>
                            <div class="gia d-flex align-items-baseline">
                                <div class="giamoi">111.200 ₫</div>
                                <div class="giacu text-muted">139.000 ₫</div>
                                <div class="sale">-20%</div>
                            </div>
                            <div class="danhgia">
                                <ul class="d-flex" style="list-style: none;">
                                    <li class="active"><i class="fa fa-star"></i></li>
                                    <li class="active"><i class="fa fa-star"></i></li>
                                    <li class="active"><i class="fa fa-star"></i></li>
                                    <li class="active"><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><span class="text-muted">0 nhận xét</span></li>
                                </ul>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="card">
                    <a href="#" class="motsanpham" style="text-decoration: none; color: black;" data-toggle="tooltip" data-placement="bottom" title="Bộ Sách Những Câu Chuyện Cho Con Thành Người Tử Tế (Bộ 5 Cuốn)">
                        <img class="card-img-top anh" src="{{asset('theme/client/images/bo-sach-nhung-cau-chuyen-cho-con-thanh-nguoi-tu-te.jpg')}}" alt="bo-sach-nhung-cau-chuyen-cho-con-thanh-nguoi-tu-te">
                        <div class="card-body noidungsp mt-3">
                            <h3 class="card-title ten">Bộ Sách Những Câu Chuyện Cho Con Thành Người Tử Tế (Bộ 5
                                Cuốn)</h3>
                            <small class="tacgia text-muted">Nhiều Tác Giả</small>
                            <div class="gia d-flex align-items-baseline">
                                <div class="giamoi">111.200 ₫</div>
                                <div class="giacu text-muted">139.000 ₫</div>
                                <div class="sale">-20%</div>
                            </div>
                            <div class="danhgia">
                                <ul class="d-flex" style="list-style: none;">
                                    <li class="active"><i class="fa fa-star"></i></li>
                                    <li class="active"><i class="fa fa-star"></i></li>
                                    <li class="active"><i class="fa fa-star"></i></li>
                                    <li class="active"><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><span class="text-muted">0 nhận xét</span></li>
                                </ul>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="card">
                    <a href="#" class="motsanpham" style="text-decoration: none; color: black;" data-toggle="tooltip" data-placement="bottom" title="Lịch Sử Thế Giới">
                        <img class="card-img-top anh" src="{{asset('theme/client/images/lich-su-the-gioi.jpg')}}" alt="lich-su-the-gioi">
                        <div class="card-body noidungsp mt-3">
                            <h3 class="card-title ten">Lịch Sử Thế Giới</h3>
                            <small class="tacgia text-muted">Nam Phong tùng thư - Phạm Quỳnh chủ nhiệm</small>
                            <div class="gia d-flex align-items-baseline">
                                <div class="giamoi">111.200 ₫</div>
                                <div class="giacu text-muted">139.000 ₫</div>
                                <div class="sale">-20%</div>
                            </div>
                            <div class="danhgia">
                                <ul class="d-flex" style="list-style: none;">
                                    <li class="active"><i class="fa fa-star"></i></li>
                                    <li class="active"><i class="fa fa-star"></i></li>
                                    <li class="active"><i class="fa fa-star"></i></li>
                                    <li class="active"><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><span class="text-muted">0 nhận xét</span></li>
                                </ul>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- khoi sach combo hot  -->
<section class="_1khoi combohot mt-4">
    <div class="container">
        <div class="noidung bg-white" style=" width: 100%;">
            <div class="row">
                <!--header -->
                <div class="col-12 d-flex justify-content-between align-items-center pb-2 bg-light">
                    <h2 class="header text-uppercase" style="font-weight: 400;">COMBO SÁCH HOT - GIẢM ĐẾN 25%</h2>
                    <a href="#" class="btn btn-warning btn-sm text-white">Xem tất cả</a>
                </div>
            </div>
            <div class="khoisanpham">
                <div class="card">
                    <a href="#" class="motsanpham" style="text-decoration: none; color: black;" data-toggle="tooltip" data-placement="bottom" title="Chuyện Nghề Và Chuyện Đời - Bộ 4 Cuốn">
                        <img class="card-img-top anh" src="{{asset('theme/client/images/combo-chuyen-nghe-chuyen-doi.jpg')}}" alt="combo-chuyen-nghe-chuyen-doi">
                        <div class="card-body noidungsp mt-3">
                            <h3 class="card-title ten">Chuyện Nghề Và Chuyện Đời - Bộ 4 Cuốn</h3>
                            <small class="tacgia text-muted">Nguyễn Hữu Long</small>
                            <div class="gia d-flex align-items-baseline">
                                <div class="giamoi">111.200 ₫</div>
                                <div class="giacu text-muted">139.000 ₫</div>
                                <div class="sale">-20%</div>
                            </div>
                            <div class="danhgia">
                                <ul class="d-flex" style="list-style: none;">
                                    <li class="active"><i class="fa fa-star"></i></li>
                                    <li class="active"><i class="fa fa-star"></i></li>
                                    <li class="active"><i class="fa fa-star"></i></li>
                                    <li class="active"><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><span class="text-muted">0 nhận xét</span></li>
                                </ul>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="card">
                    <a href="#" class="motsanpham" style="text-decoration: none; color: black;" data-toggle="tooltip" data-placement="bottom" title="Combo Mẹ Con Sư Tử - Bồ Tát Ngàn Tay Ngàn Mắt">
                        <img class="card-img-top anh" src="{{asset('theme/client/images/combo-me-con-su-tu-bo-tat-ngan-tay-ngan-mat.jpg')}}" alt="combo-me-con-su-tu-bo-tat-ngan-tay-ngan-mat">
                        <div class="card-body noidungsp mt-3">
                            <h3 class="card-title ten">Combo Mẹ Con Sư Tử - Bồ Tát Ngàn Tay Ngàn Mắt</h3>
                            <small class="tacgia text-muted">Thích Nhất Hạnh</small>
                            <div class="gia d-flex align-items-baseline">
                                <div class="giamoi">111.200 ₫</div>
                                <div class="giacu text-muted">139.000 ₫</div>
                                <div class="sale">-20%</div>
                            </div>
                            <div class="danhgia">
                                <ul class="d-flex" style="list-style: none;">
                                    <li class="active"><i class="fa fa-star"></i></li>
                                    <li class="active"><i class="fa fa-star"></i></li>
                                    <li class="active"><i class="fa fa-star"></i></li>
                                    <li class="active"><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><span class="text-muted">0 nhận xét</span></li>
                                </ul>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="card">
                    <a href="#" class="motsanpham" style="text-decoration: none; color: black;" data-toggle="tooltip" data-placement="bottom" title="Combo Osho: Hạnh Phúc Tại Tâm, Can Đảm Biến Thách Thức Thành
                            Sức Mạnh & Sáng Tạo Bừng Cháy Sức Mạnh Bên Trong">
                        <img class="card-img-top anh" src="{{asset('theme/client/images/combo-hanh-phuc-sang-tao.jpg')}}" alt="combo-hanh-phuc-sang-tao">
                        <div class="card-body noidungsp mt-3">
                            <h3 class="card-title ten">Combo Osho: Hạnh Phúc Tại Tâm, Can Đảm Biến Thách Thức Thành
                                Sức Mạnh & Sáng Tạo Bừng Cháy Sức Mạnh Bên Trong
                            </h3>
                            <small class="tacgia text-muted">Gosho Aoyama, Mutsuki Watanabe, Takahisa Taira</small>
                            <div class="gia d-flex align-items-baseline">
                                <div class="giamoi">111.200 ₫</div>
                                <div class="giacu text-muted">139.000 ₫</div>
                                <div class="sale">-20%</div>
                            </div>
                            <div class="danhgia">
                                <ul class="d-flex" style="list-style: none;">
                                    <li class="active"><i class="fa fa-star"></i></li>
                                    <li class="active"><i class="fa fa-star"></i></li>
                                    <li class="active"><i class="fa fa-star"></i></li>
                                    <li class="active"><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><span class="text-muted">0 nhận xét</span></li>
                                </ul>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="card">
                    <a href="#" class="motsanpham" style="text-decoration: none; color: black;" data-toggle="tooltip" data-placement="bottom" title="Combo Giáo Dục Và Ý Nghĩa Cuộc Sống Và Bạn Đang Nghịch Gì Với Đời Mình?">
                        <img class="card-img-top anh" src="{{asset('theme/client/images/combo-giao-duc-va-y-nghia-cuoc-song.jpg')}}" alt="combo-giao-duc-va-y-nghia-cuoc-song">
                        <div class="card-body noidungsp mt-3">
                            <h3 class="card-title ten">Combo Giáo Dục Và Ý Nghĩa Cuộc Sống Và Bạn Đang Nghịch Gì Với
                                Đời Mình?</h3>
                            <small class="tacgia text-muted"> J.Krishnamurti</small>
                            <div class="gia d-flex align-items-baseline">
                                <div class="giamoi">111.200 ₫</div>
                                <div class="giacu text-muted">139.000 ₫</div>
                                <div class="sale">-20%</div>
                            </div>
                            <div class="danhgia">
                                <ul class="d-flex" style="list-style: none;">
                                    <li class="active"><i class="fa fa-star"></i></li>
                                    <li class="active"><i class="fa fa-star"></i></li>
                                    <li class="active"><i class="fa fa-star"></i></li>
                                    <li class="active"><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><span class="text-muted">0 nhận xét</span></li>
                                </ul>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="card">
                    <a href="#" class="motsanpham" style="text-decoration: none; color: black;" data-toggle="tooltip" data-placement="bottom" title="Combo Dinh Dưỡng Xanh - Thần dược xanh">
                        <img class="card-img-top anh" src="{{asset('theme/client/images/combo-dinh-duong-than-duoc-xanh.jpg')}}" alt="combo-dinh-duong-than-duoc-xanh">
                        <div class="card-body noidungsp mt-3">
                            <h3 class="card-title ten">Combo Dinh Dưỡng Xanh - Thần dược xanh</h3>
                            <small class="tacgia text-muted">Ryu Seung-SunVictoria Boutenko</small>
                            <div class="gia d-flex align-items-baseline">
                                <div class="giamoi">111.200 ₫</div>
                                <div class="giacu text-muted">139.000 ₫</div>
                                <div class="sale">-20%</div>
                            </div>
                            <div class="danhgia">
                                <ul class="d-flex" style="list-style: none;">
                                    <li class="active"><i class="fa fa-star"></i></li>
                                    <li class="active"><i class="fa fa-star"></i></li>
                                    <li class="active"><i class="fa fa-star"></i></li>
                                    <li class="active"><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><span class="text-muted">0 nhận xét</span></li>
                                </ul>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="card">
                    <a href="#" class="motsanpham" style="text-decoration: none; color: black;" data-toggle="tooltip" data-placement="bottom" title="Combo Ăn Xanh Để Khỏe - Sống Lành Để Trẻ">
                        <img class="card-img-top anh" src="{{asset('theme/client/images/combo-an-xanh-song-lanh.jpg')}}" alt="combo-an-xanh-song-lanh">
                        <div class="card-body noidungsp mt-3">
                            <h3 class="card-title ten">Combo Ăn Xanh Để Khỏe - Sống Lành Để Trẻ</h3>
                            <small class="tacgia text-muted">Norman W. Walker</small>
                            <div class="gia d-flex align-items-baseline">
                                <div class="giamoi">111.200 ₫</div>
                                <div class="giacu text-muted">139.000 ₫</div>
                                <div class="sale">-20%</div>
                            </div>
                            <div class="danhgia">
                                <ul class="d-flex" style="list-style: none;">
                                    <li class="active"><i class="fa fa-star"></i></li>
                                    <li class="active"><i class="fa fa-star"></i></li>
                                    <li class="active"><i class="fa fa-star"></i></li>
                                    <li class="active"><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><span class="text-muted">0 nhận xét</span></li>
                                </ul>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="card">
                    <a href="#" class="motsanpham" style="text-decoration: none; color: black;" data-toggle="tooltip" data-placement="bottom" title="Combo Lược Sử Loài Người - Lược Sử Tương Lai - 21 Bài Học Cho Thế Kỷ 21">
                        <img class="card-img-top anh" src="{{asset('theme/client/images/combo-luoc-su-loai-nguoi.jpg')}}" alt="combo-luoc-su-loai-nguoi">
                        <div class="card-body noidungsp mt-3">
                            <h3 class="card-title ten">Combo Lược Sử Loài Người - Lược Sử Tương Lai - 21 Bài Học Cho
                                Thế Kỷ 21</h3>
                            <small class="tacgia text-muted">Yuval Noah Harari</small>
                            <div class="gia d-flex align-items-baseline">
                                <div class="giamoi">111.200 ₫</div>
                                <div class="giacu text-muted">139.000 ₫</div>
                                <div class="sale">-20%</div>
                            </div>
                            <div class="danhgia">
                                <ul class="d-flex" style="list-style: none;">
                                    <li class="active"><i class="fa fa-star"></i></li>
                                    <li class="active"><i class="fa fa-star"></i></li>
                                    <li class="active"><i class="fa fa-star"></i></li>
                                    <li class="active"><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><span class="text-muted">0 nhận xét</span></li>
                                </ul>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="card">
                    <a href="#" class="motsanpham" style="text-decoration: none; color: black;" data-toggle="tooltip" data-placement="bottom" title="Bộ Sách Phong Cách Sống (Bộ 5 Cuốn)">
                        <img class="card-img-top anh" src="{{asset('theme/client/images/combo-phong-cach-song.jpg')}}" alt="combo-phong-cach-song">
                        <div class="card-body noidungsp mt-3">
                            <h3 class="card-title ten">Bộ Sách Phong Cách Sống (Bộ 5 Cuốn)</h3>
                            <small class="tacgia text-muted">Marie Tourell Soderberg, Joanna Nylund, Yukari
                                Mitsuhashi, Margareta Magnusson, Linnea Dunne</small>
                            <div class="gia d-flex align-items-baseline">
                                <div class="giamoi">111.200 ₫</div>
                                <div class="giacu text-muted">139.000 ₫</div>
                                <div class="sale">-20%</div>
                            </div>
                            <div class="danhgia">
                                <ul class="d-flex" style="list-style: none;">
                                    <li class="active"><i class="fa fa-star"></i></li>
                                    <li class="active"><i class="fa fa-star"></i></li>
                                    <li class="active"><i class="fa fa-star"></i></li>
                                    <li class="active"><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><span class="text-muted">0 nhận xét</span></li>
                                </ul>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- khoi sach sap phathanh  -->
<section class="_1khoi sapphathanh mt-4">
    <div class="container">
        <div class="noidung bg-white" style=" width: 100%;">
            <div class="row">
                <!--header-->
                <div class="col-12 d-flex justify-content-between align-items-center pb-2 bg-light">
                    <h2 class="header text-uppercase" style="font-weight: 400;">SÁCH SẮP PHÁT HÀNH / ĐẶT TRƯỚC</h2>
                    <a href="#" class="btn btn-warning btn-sm text-white">Xem tất cả</a>
                </div>
            </div>
            <div class="khoisanpham">
                <!-- 1 san pham -->
                <div class="card">
                    <a href="#" class="motsanpham" style="text-decoration: none; color: black;" data-toggle="tooltip" data-placement="bottom" title="Ngoại Giao Của Chính Quyền Sài Gòn">
                        <img class="card-img-top anh" src="{{asset('theme/client/images/ngoai-giao-cua-chinh-quyen-sai-gon.jpg')}}" alt="ngoai-giao-cua-chinh-quyen-sai-gon">
                        <div class="card-body noidungsp mt-3">
                            <h3 class="card-title ten">Ngoại Giao Của Chính Quyền Sài Gòn</h3>
                            <small class="tacgia text-muted">Brian Finch</small>
                            <div class="gia d-flex align-items-baseline">
                            </div>
                            <div class="danhgia">
                                <ul class="d-flex" style="list-style: none;">
                                    <li class="active"><i class="fa fa-star"></i></li>
                                    <li class="active"><i class="fa fa-star"></i></li>
                                    <li class="active"><i class="fa fa-star"></i></li>
                                    <li class="active"><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><span class="text-muted">0 nhận xét</span></li>
                                </ul>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="card">
                    <a href="#" class="motsanpham" style="text-decoration: none; color: black;" data-toggle="tooltip" data-placement="bottom" title="Đường Mây Trên Đất Hoa">
                        <img class="card-img-top anh" src="{{asset('theme/client/images/duong-may-tren-dat-hoa.jpg')}}" alt="duong-may-tren-dat-hoa">
                        <div class="card-body noidungsp mt-3">
                            <h3 class="card-title ten">Đường Mây Trên Đất Hoa</h3>
                            <small class="tacgia text-muted">Brian Finch</small>
                            <div class="gia d-flex align-items-baseline">
                            </div>
                            <div class="danhgia">
                                <ul class="d-flex" style="list-style: none;">
                                    <li class="active"><i class="fa fa-star"></i></li>
                                    <li class="active"><i class="fa fa-star"></i></li>
                                    <li class="active"><i class="fa fa-star"></i></li>
                                    <li class="active"><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><span class="text-muted">0 nhận xét</span></li>
                                </ul>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="card">
                    <a href="#" class="motsanpham" style="text-decoration: none; color: black;" data-toggle="tooltip" data-placement="bottom" title="Muôn Kiếp Nhân Sinh">
                        <img class="card-img-top anh" src="{{asset('theme/client/images/muon-kiep-nhan-sinh.jpg')}}" alt="muon-kiep-nhan-sinh">
                        <div class="card-body noidungsp mt-3">
                            <h3 class="card-title ten">Muôn Kiếp Nhân Sinh</h3>
                            <small class="tacgia text-muted">Brian Finch</small>
                            <div class="gia d-flex align-items-baseline">
                            </div>
                            <div class="danhgia">
                                <ul class="d-flex" style="list-style: none;">
                                    <li class="active"><i class="fa fa-star"></i></li>
                                    <li class="active"><i class="fa fa-star"></i></li>
                                    <li class="active"><i class="fa fa-star"></i></li>
                                    <li class="active"><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><span class="text-muted">0 nhận xét</span></li>
                                </ul>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="card">
                    <a href="#" class="motsanpham" style="text-decoration: none; color: black;" data-toggle="tooltip" data-placement="bottom" title="Đường Mây Trong Cõi Mộng">
                        <img class="card-img-top anh" src="{{asset('theme/client/images/duong-may-trong-coi-mong.jpg')}}" alt="duong-may-trong-coi-mong.jpg">
                        <div class="card-body noidungsp mt-3">
                            <h3 class="card-title ten">Đường Mây Trong Cõi Mộng</h3>
                            <small class="tacgia text-muted">Brian Finch</small>
                            <div class="gia d-flex align-items-baseline">
                            </div>
                            <div class="danhgia">
                                <ul class="d-flex" style="list-style: none;">
                                    <li class="active"><i class="fa fa-star"></i></li>
                                    <li class="active"><i class="fa fa-star"></i></li>
                                    <li class="active"><i class="fa fa-star"></i></li>
                                    <li class="active"><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><span class="text-muted">0 nhận xét</span></li>
                                </ul>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- div _1khoi -- khoi sachnendoc -->
<section class="_1khoi sachnendoc bg-white mt-4">
    <div class="container">
        <div class="noidung" style=" width: 100%;">
            <div class="row">
                <!--header-->
                <div class="col-12 d-flex justify-content-between align-items-center pb-2 bg-transparent pt-4">
                    <h2 class="header text-uppercase" style="font-weight: 400;">SÁCH HAY NÊN ĐỌC</h2>
                    <a href="#" class="btn btn-warning btn-sm text-white">Xem tất cả</a>
                </div>
                <!-- 1 san pham -->
                <div class="col-lg col-sm-4">
                    <div class="card">
                        <a href="#" class="motsanpham" style="text-decoration: none; color: black;" data-toggle="tooltip" data-placement="bottom" title="Từng bước chân nở hoa: Khi câu kinh bước tới">
                            <img class="card-img-top anh" src="{{asset('theme/client/images/tung-buoc-chan-no-hoa.jpg')}}" alt="tung-buoc-chan-no-hoa">
                            <div class="card-body noidungsp mt-3">
                                <h3 class="card-title ten">Từng bước chân nở hoa: Khi câu kinh bước tới</h3>
                                <small class="thoigian text-muted">03/04/2020</small>
                                <div><a class="detail" href="#">Xem chi tiết</a></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg col-sm-4">
                    <div class="card">
                        <a href="#" class="motsanpham" style="text-decoration: none; color: black;" data-toggle="tooltip" data-placement="bottom" title="Cảm ơn vì đã được thương">
                            <img class="card-img-top anh" src="{{asset('theme/client/images/cam-on-vi-da-duoc-thuong.jpg')}}" alt="cam-on-vi-da-duoc-thuong">
                            <div class="card-body noidungsp mt-3">
                                <h3 class="card-title ten">Cảm ơn vì đã được thương</h3>
                                <small class="thoigian text-muted">31/03/2020</small>
                                <div><a class="detail" href="#">Xem chi tiết</a></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg col-sm-4">
                    <div class="card">
                        <a href="#" class="motsanpham" style="text-decoration: none; color: black;" data-toggle="tooltip" data-placement="bottom" title="Hào quang của vua Gia Long trong mắt Michel Gaultier">
                            <img class="card-img-top anh" src="{{asset('theme/client/images/vua-gia-long.jpg')}}" alt="vua-gia-long">
                            <div class="card-body noidungsp mt-3">
                                <h3 class="card-title ten">Hào quang của vua Gia Long trong mắt Michel Gaultier</h3>
                                <small class="thoigian text-muted">21/03/2020</small>
                                <div><a class="detail" href="#">Xem chi tiết</a></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg col-sm-4">
                    <div class="card">
                        <a href="#" class="motsanpham" style="text-decoration: none; color: black;" data-toggle="tooltip" data-placement="bottom" title="Suối nguồn” và cái tôi hiện sinh trong từng cá thể">
                            <img class="card-img-top anh" src="{{asset('theme/client/images/suoi-nguon-va-cai-toi-trong-tung-ca-the.jpg')}}" alt="suoi-nguon-va-cai-toi-trong-tung-ca-the">
                            <div class="card-body noidungsp mt-3">
                                <h3 class="card-title ten">"Suối nguồn” và cái tôi hiện sinh trong từng cá thể</h3>
                                <small class="thoigian text-muted">16/03/2020</small>
                                <div><a class="detail" href="#">Xem chi tiết</a></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg col-sm-4">
                    <div class="card cuoicung">
                        <a href="#" class="motsanpham" style="text-decoration: none; color: black;" data-toggle="tooltip" data-placement="bottom" title="Đại dịch trên những con đường tơ lụa">
                            <img class="card-img-top anh" src="{{asset('theme/client/images/dai-dich-tren-con-duong-to-lua.jpg')}}" alt="dai-dich-tren-con-duong-to-lua">
                            <div class="card-body noidungsp mt-3">
                                <h3 class="card-title ten">Đại dịch trên những con đường tơ lụa</h3>
                                <small class="thoigian text-muted">16/03/2020</small>
                                <div><a class="detail" href="#">Xem chi tiết</a></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <hr>
    </div>
</section>
@endsection