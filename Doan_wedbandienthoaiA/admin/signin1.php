<meta http-equiv="refresh" content="2; url=login.php" />
<?php 
	include "view/header.php";
	include "connectdb.php";
    $hoten = $_POST['hoten'];
    $diachi = $_POST['diachi'];
    $email = $_POST['email'];
	$user = $_POST['user'];
	$pass = md5($_POST['pass']);
	
	$sql = "SELECT * FROM tbl_user WHERE user = '$user'";
	$checkmail = "SELECT * FROM  tbl_user WHERE email = '$email'";
	$rs = mysqli_query($conn,$sql);
	$rsmail = mysqli_query($conn,$checkmail);
	
	if (mysqli_num_rows($rs)>0) echo '<div align="center">Tên đăng nhập đã tồn tại! Vui lòng đăng ký lại.</div>'; 
		else if (mysqli_num_rows($rsmail)>0) echo "Email này đã tồn tại"; else {
		$ins = "INSERT INTO `tbl_user`(`name`, `address`, `email`, `user`, `pass`) VALUES ('$hoten', '$diachi','$email','$user','$pass')";
		$kq = mysqli_query($conn, $ins);
		if($kq) echo "Đã tạo tài khoản thành công"; else 
				echo "Tạo tài khoản thất bại";
		}
?> 