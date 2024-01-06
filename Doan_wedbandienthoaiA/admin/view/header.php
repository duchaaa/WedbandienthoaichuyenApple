<?php
if (isset($_SESSION['username'])) {
    echo '<li class="nav-item"><a class="nav-link" href="logout.php"><i class="bi bi-box-arrow-right"></i> Đăng xuất</a></li>';
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Shop Mobile Việt Chính Hãng Apple</title>  
    <link rel="stylesheet" type="text/css" href="../css/css.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>  
</head>
<body style="background-color: #F2F2F2">
<header>
<div id="spacer"></div>
  <nav class="navbar navbar-expand-lg navbar-dark bg-success fixed-top">
    <div class="container">
      <a class="navbar-brand" href="index.php"><img src="../view/ImagesOther/logo_mobileviet.jpg" alt="logo" width="160px" /></a>
       <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav mx-auto">
       

         <li class="nav-item"><a class="nav-link" href="index.php?act=trangchu"><i class="bi bi-house"></i> Trang chủ</a></li>
          <li class="nav-item dropdown"><a class="nav-link" href="#"><i class="bi bi-phone"></i> Sản phẩm</a></li>
              <li class="nav-item"><a class="nav-link" href="../index.php?act=tintuc"><i class="bi bi-layout-text-window"></i> Tin tức</a></li>
              <li class="nav-item"><a class="nav-link" href="../index.php?act=viewgiohang"><i class="bi bi-bag"></i>  Giỏ hàng</a></li>
              <li class="nav-item"><a class="nav-link" href="index.php?act=thoat"><i class="bi bi-box-arrow-left"></i> Đăng Xuất</a></li>
          <form id="form1" name="form1" method="post" action="index.php?act=product">
            <div class="d-flex">
            <input type="text" name="kyw" id="timkiem" class="form-control ms-5" placeholder="Hôm nay bạn cần tìm gì?" />
              <button type="submit" class="btn btn-success ms-1"><i class="bi bi-search"></i></button>
			</div></form>
           </div>
          </div>
         </nav>
    </header> 
</body>
</html>