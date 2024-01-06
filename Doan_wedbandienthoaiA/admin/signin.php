<?php
    include "view/header.php";
?>
<script language="javascript">
	function checkinput(){
		if(document.from1.hoten.value==""){
			alert("Hãy nhập họ tên vào.");
			document.from1.hoten.focus();
			return false;
		}
		if(document.from1.diachi.value==""){
			alert("Hãy nhập địa chỉ vào.");
			document.from1.diachi.focus();
			return false;
		}
		if(document.from1.user.value==""){
			alert("Hãy nhập tên đăng nhập vào.");
			document.from1.user.focus();
			return false;
		}
		if(document.from1.email.value==""){
			alert("Hãy nhập email vào.");
			document.from1.email.focus();
			return false;
        }
        if(document.from1.pass.value==""){
			alert("Hãy nhập mật khẩu vào.");
			document.from1.pass.focus();
			return false;
		}
        if(document.from1.repass.value==""){
			alert("Hãy xác nhận lại mật khẩu.");
			document.from1.repass.focus();
			return false;
		}
		if(document.from1.pass.value!=document.from1.repass.value){
			alert("Xác nhận mật khẩu không trùng khớp.");
			return false;
		}
		return true;
        // Ngăn chặn sự kiện submit nếu có lỗi
    document.getElementById('form1').addEventListener('submit', function (event) {
        if (!checkinput()) {
            event.preventDefault();
        }
            });
	}
</script>
<body>
<section class="vh-100">
    <div class="container py-5 h-100">
        <div class="row d-flex align-items-center justify-content-center h-100">
            <div class="col-md-8 col-lg-7 col-xl-6">
                <img src="../view/ImagesOther/bkg_singin.png" class="img-fluid">
            </div>
            <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
                <form id="form1" name="from1" method="post" action="signin1.php" onsubmit="return checkinput();">
                	<!-- Họ tên -->
                    <div class="form-outline mb-4">
                        <label class="form-label" for="user1">Họ tên</label>
                        <input type="text" name="hoten" id="hoten" class="form-control form-control-lg" /> 
                    </div>
                     <!-- diachi -->
                     <div class="form-outline mb-4">
                        <label class="form-label" for="user">Địa chỉ</label>
                        <input type="text" name="diachi" id="diachi" class="form-control form-control-lg" /> 
                    </div>
                	<!-- email -->
                    <div class="form-outline mb-4">
                        <label class="form-label" for="user">Email</label>
                        <input type="email" name="email" id="email" class="form-control form-control-lg" /> 
                    </div>
                    <!-- username -->
                    <div class="form-outline mb-4">
                        <label class="form-label" for="user">Tên đăng nhập</label>
                        <input type="text" name="user" id="user" class="form-control form-control-lg" /> 
                    </div>
                    <!-- password  -->
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form1Example23">Tạo mật khẩu</label>
                        <input type="password" name="pass" id="pass" class="form-control form-control-lg" />
                    </div>
                    <!-- re password  -->
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form1Example23">Xác nhận lại mật khẩu</label>
                        <input type="password" name="repass" id="repass" class="form-control form-control-lg" />
                    </div>
                    <!-- button login-->
                    <input type="submit" name="tao" class="btn btn-success d-grid gap-2 mb-4 col-12 mx-auto" value="Tạo tài khoản" >
                </form>
            </div>
        </div>
    </div>
</section>
</body>