<?php
    session_start();
    ob_start();
    include "../model/connectdb.php";
    include "view/header.php";
    include "../model/user.php";
    
    if (isset($_POST['dangnhap']) && $_POST['dangnhap']) {
        $user = $_POST['user'];
        $pass = md5($_POST['pass']);
        $role = checkuser($user, $pass);
        $kq=checkinfo($user, $pass);
        if ($role == -1) {
            $showError = true;
        }else{
            $_SESSION['role'] = $role;
            if ($role == 1) {
                header('location: index.php');
            }else{         
            $_SESSION['iduser']=$kq[0]['id'];
            $_SESSION['username']=$kq[0]['user'];
            header('location: ../index.php');
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Đăng nhập</title>
</head>
<body>
    <section class="vh-100">
        <div class="container py-5 h-100">
            <div class="row d-flex align-items-center justify-content-center h-100">
                <div class="col-md-8 col-lg-7 col-xl-6">
                    <img src="../view/ImagesOther/bkg_login.png" class="img-fluid">
                </div>
                <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
                    <form id="form1" name="from1" method="post" action="">
                        <!-- username -->
                        <div class="form-outline mb-4">
                            <label class="form-label" for="user">Tên đăng nhập</label>
                            <input type="text" name="user" id="username" class="form-control form-control-lg" /> 
                        </div>
                        <!-- password  -->
                        <div class="form-outline mb-4">
                            <label class="form-label" for="form1Example23">Mật khẩu</label>
                            <input type="password" name="pass" id="password" class="form-control form-control-lg" /> 
                        </div>
                        <!-- Thông báo lỗi -->
                        <?php if (isset($showError) && $showError) { ?>
                            <div id="error-message" class="alert alert-danger">
                                Tên đăng nhập hoặc mật khẩu không chính xác. Vui lòng nhập lại!
                            </div>
                        <?php } ?>
                        <!-- button login-->
                        <input type="submit" name="dangnhap" class="btn btn-success btn-block mb-2 d-grid gap-2 col-12 mx-auto" value="Đăng nhập">
                        <h6 align="center">Hoặc</h6>
                        <a href="signin.php" class="btn btn-primary d-grid gap-2 mb-4 col-12 mx-auto">Đăng ký</a>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
