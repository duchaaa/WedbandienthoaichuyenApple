<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Untitled Document</title>
    <link rel="stylesheet" type="text/css" href="bandt6css.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<!--Header-->
<body">
<div id="spacer"></div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
	$(document).ready(function() {
  	var menuHeight = $(".navbar").outerHeight();
  	$("#spacer").css("height", menuHeight + "px");
	});
</script>
    <nav class="navbar navbar-expand-lg navbar-dark bg-success fixed-top">
        <div class="container">
            <a class="navbar-brand" href="shopdienthoai.html"><img src="ImagesOther/logo_mobileviet.jpg" alt="logo" width="160px" /></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
             <ul class="navbar-nav mx-auto">
              <li class="nav-item"><a class="nav-link" href="#"><i class="bi bi-phone"></i> iPhone</a></li>
              <li class="nav-item"><a class="nav-link" href="#"><i class="bi bi-tablet"></i> iPad</a></li>
              <li class="nav-item"><a class="nav-link" href="#"><i class="bi bi-laptop"></i> Mac</a></li>
              <li class="nav-item"><a class="nav-link" href="#"><i class="bi bi-smartwatch"></i> Watch</a></li>
              <li class="nav-item"><a class="nav-link" href="#"><i class="bi bi-headphones"></i> Phụ kiện</a></li>
              <li class="nav-item"><a class="nav-link" href="shopdienthoai.html"><i class="bi bi-house"></i> Trang chủ</a></li>
              <li class="nav-item"><a class="nav-link" href="#"><i class="bi bi-newspaper"></i> Tin tức</a></li>
              <li class="nav-item"><a class="nav-link" href="#"><img src="Icon/bags-shopping (1).png" /></a></li>
              <li class="nav-item dropdown"><a class="nav-link" href="#"><img src="Icon/account (1).png" /></a>
              <ul class="dropdown-menu">
               <li><a class="dropdown-item" href="dangnhap.php">Đăng nhập</a></li>
               <li><a class="dropdown-item" href="taotaikhoanndung.php">Tạo tài khoản</a></li>
             </ul></li>
            <div class="d-flex">
    		  <input type="text" class="form-control ms-5" placeholder="Hôm nay bạn cần tìm gì?" />
    		  <button type="submit" class="btn btn-success ms-3"><i class="bi bi-search"></i></button>
			</div>
           </div>
          </div>
         </nav>
<section class="vh-100">
    <div class="container py-5 h-100">
        <div class="row d-flex align-items-center justify-content-center h-100">
            <div class="col-md-8 col-lg-7 col-xl-6">
                <img src="ImagesOther/banner_taotaikhoan1.jpg" class="img-fluid" alt="Phone image">
            </div>
            <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
                <form id="form1" name="from1" method="post" action="">
                	<!-- Họ tên -->
                    <div class="form-outline mb-4">
                        <label class="form-label" for="user">Họ tên</label>
                        <input type="text" name="hoten" id="hoten" class="form-control form-control-lg" /> 
                    </div>
                	<!-- email -->
                    <div class="form-outline mb-4">
                        <label class="form-label" for="user">Email</label>
                        <input type="email" name="email" id="email" class="form-control form-control-lg" /> 
                    </div>
                    <!-- Sđt -->
                    <div class="form-outline mb-4">
                        <label class="form-label" for="user">Số điện thoại</label>
                        <input type="text" name="sdt" id="sdt" class="form-control form-control-lg" /> 
                    </div>
                    <!-- username -->
                    <div class="form-outline mb-4">
                        <label class="form-label" for="user">Tên đăng nhập</label>
                        <input type="text" name="username_new" id="username_new" class="form-control form-control-lg" /> 
                    </div>
                    <!-- password  -->
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form1Example23">Tạo mật khẩu</label>
                        <input type="password" name="password_new" id="password_new" class="form-control form-control-lg" />
                    </div>
                    <!-- button login-->
                    <input type="submit" name="dangnhap" class="btn btn-success btn-block mb-4" value="Tạo tài khoản">
                </form>
                <!-- Thêm thông báo lỗi -->
            </div>
        </div>
    </div>
</section>
<!-- Footer -->
<footer class="text-center text-lg-start bg-dark text-white">
    <!-- Section: Social media -->
    <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
        <!-- Left -->
        <div class="me-5 d-none d-lg-block"></div>
    </section>
    <!-- Section: Social media -->

    <!-- Section: Links  -->
    <section class="">
        <div class="container text-center text-md-start mt-5">
            <!-- Grid row -->
            <div class="row mt-3">
                <!-- Grid column -->
                <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                    <!-- Content -->
                    <h6 class="text-uppercase fw-bold mb-4">
                        <i class="fas fa-gem me-3"></i>Company name
                    </h6>
                    <p>
                        Here you can use rows and columns to organize your footer content. Lorem ipsum
                        dolor sit amet, consectetur adipisicing elit.
                    </p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold mb-4">
                        Thông tin
                    </h6>
                    <p>
                        <a href="#!" class="text-reset">Tin tức</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">Giới thiệu</a>
                    </p>
                </div>
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                    <h6 class="text-uppercase fw-bold mb-4">Địa chỉ &amp; Liên hệ</h6>
                    <p><i class="fas fa-home me-3"></i>Thông tin của tôi</p>
                    <p><i class="fas fa-envelope me-3"></i>Đơn đặt hàng</p>
                </div>
            </div>
        </div>
    </section>
    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
        &copy; 2023 Copyright:
        <a class="text-reset fw-bold" href="https://mdbootstrap.com/">MDBootstrap.com</a>
    </div>
</footer>
</body>
</html>