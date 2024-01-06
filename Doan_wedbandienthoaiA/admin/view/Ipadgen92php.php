
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title></title>
    <link rel="stylesheet" type="text/css" href="bandt6css.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<!--Header-->
<body style="background-color: #F2F2F2">
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
<body>
<form action="themgiohang.php" method="post">
   <div class="container mt-4">
    <div id="product-info">
        <div class="row">
            <div class="col-lg-6">
                <div id="product-main-carousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="ImageProduct/0006205_ipad-gen-9-102-inch-wifi-64gb_240.png" class="d-block" alt="Hình ảnh 1" width="500px">
                            <input type="hidden" name="img" value="ImageProduct/0006205_ipad-gen-9-102-inch-wifi-64gb_240.png" />
                            <input type="hidden" name="tensp" value="iPad Gen 9 10.2 inch Wifi 64G" />
                            <input type="hidden" name="gia" value="7090000" />
                            <input type="hidden" name="id" value="1" />
                        </div>
                        <!-- Thêm các hình ảnh khác của sản phẩm ở đây -->
                    </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-6">
                <h3>iPad Gen 9 10.2 inch Wifi 64G</h3>
                <p>Giá: 7.090.000₫</p>
                <h4>Thông số kỹ thuật:</h4>
                
                <table class="table table-striped">
                    <tbody>
                        <tr >
                            <td>Màn hình</td>
                            <td>6.7″ Super Retina XDR display</td>
                        </tr>
                        <tr>
                            <td>Camera sau</td>
                            <td>12MP, khẩu độ ƒ / 1.9</td>
                        </tr>
                        <tr>
                            <td>Chip</td>
                            <td>Chip A16 Bionic 6 nhân, GPU 5 nhân 16-core Neural Engine</td>
                        </tr>
                        <tr>
                            <td>RAM</td>
                            <td>6GB</td>
                        </tr>
                        <tr>
                            <td>Độ phân giải màn hình</td>
                            <td>2796 x 1290 pixel ở 460 ppi</td>
                        </tr>
                    </tbody>
                </table>
                <h4>Phiên bản bộ nhớ:</h4>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="memory" value="128GB" id="128GB" checked>
                    <label class="form-check-label" for="128GB">128GB</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="memory" value="256GB" id="256GB">
                    <label class="form-check-label" for="256GB">256GB</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="memory" value="512GB" id="512GB">
                    <label class="form-check-label" for="512GB">512GB</label>
                </div>
                <button class="btn btn-primary mt-3">Mua ngay</button>
                <button class="btn btn-success mt-3" value="Thêm giỏ hàng" name="themgiohang">Thêm giỏ hàng</button>
            </div>
        </div>
    </div>
</div>
</form>
</body>
</html>
