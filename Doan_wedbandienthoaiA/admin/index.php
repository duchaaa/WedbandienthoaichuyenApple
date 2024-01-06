<?php
session_start();
ob_start();
if(isset($_SESSION['role'])&&($_SESSION['role']==1)){
include "../model/connectdb.php";
include "../model/danhmuc.php";
include "../model/sanpham.php";
include "../model/user.php";
include "view/header.php";
$dsdm = getall_dm();

if (isset($_GET['act'])) {
    switch ($_GET['act']) {
        case 'danhmuc':
            $kq = getall_dm();
            include "view/danhmuc.php";
            break;
        case 'adddm':
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $tendm = $_POST['tendm'];
                themdm($tendm);
            }
            $kq = getall_dm();
            include "view/danhmuc.php";
            break;
        case 'sanpham':
            // Load danh sách danh mục
            $dsdm = getall_dm();
            // Load danh sách sản phẩm
            $kq = getall_sp();
            include "view/sanpham.php";
            break;
        case 'updatespform':
            // Load danh sách danh mục
            $dsdm = getall_dm();
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $spct = getonesp($_GET['id']);
            }
            // Load danh sách sản phẩm
            $kq = getall_sp();
            include "view/updatespform.php";
            break;
        case 'sanpham_update':
            if (isset($_POST['capnhat']) && $_POST['capnhat']) {
                $iddm = $_POST['iddm'];
                $tensp = $_POST['tensp'];
                $giacu = $_POST['giacu'];
                $gia = $_POST['gia'];
                $mota = $_POST['mota'];
                $chitiet = $_POST['chitiet'];
                $id = $_POST['id'];

                // Kiểm tra và xử lý tệp ảnh
                $img = "";
                if (!empty($_FILES['hinh']['name'])) {
                    $target_dir = "../upload/";
                    $target_file = $target_dir . basename($_FILES['hinh']['name']);
                    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

                    // Kiểm tra định dạng tệp ảnh
                    if ($imageFileType == "jpg" || $imageFileType == "png" || $imageFileType == "jpeg" || $imageFileType == "gif") {
                        // Di chuyển tệp ảnh vào thư mục đích
                        if (move_uploaded_file($_FILES['hinh']['tmp_name'], $target_file)) {
                            $img = $target_file;
                        } else {
                            echo "Lỗi khi tải lên tệp ảnh.";
                        }
                    } else {
                        echo "Chỉ cho phép tệp ảnh định dạng JPG, PNG, JPEG, hoặc GIF.";
                    }
                }

                // Cập nhật sản phẩm
                updatesp($id, $tensp, $img, $giacu, $gia, $mota, $chitiet,$iddm);
            }

            // Cập nhật danh sách sản phẩm sau khi thực hiện cập nhật
            $dsdm = getall_dm();
            $kq = getall_sp();
            include "view/sanpham.php";
            break;
        case 'sanpham_add':
            if (isset($_POST['themmoi']) && $_POST['themmoi']) {
                $iddm = $_POST['iddm'];
                $tensp = $_POST['tensp'];
                $giacu = $_POST['giacu'];
                $gia = $_POST['gia'];
                $mota = $_POST['mota'];
                $chitiet = $_POST['chitiet'];
                $img = "";
                if (!empty($_FILES['hinh']['name'])) {
                    $target_dir = "../upload/";
                    $target_file = $target_dir . basename($_FILES['hinh']['name']);
                    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
                    if ($imageFileType == "jpg" || $imageFileType == "png" || $imageFileType == "jpeg" || $imageFileType == "gif") {
                        if (move_uploaded_file($_FILES['hinh']['tmp_name'], $target_file)) {
                            $img = $target_file;
                        } else {
                            echo "Lỗi khi tải lên tệp ảnh.";
                        }
                    } else {
                        echo "Chỉ cho phép tệp ảnh định dạng JPG, PNG, JPEG, hoặc GIF.";
                    }
                }
                // Thêm sản phẩm mới vào cơ sở dữ liệu
                insert_sanpham($iddm, $tensp, $img, $giacu, $gia, $mota, $chitiet);
            }
            // Cập nhật danh sách sản phẩm sau khi thêm mới
            $dsdm = getall_dm();
            $kq = getall_sp();
            include "view/sanpham.php";
            break;
        case 'dangky':
            if (isset($_POST['dangky']) && $_POST['dangky']) {               
                $hoten = $_POST['hoten'];
                $email = $_POST['email'];
                $diachi = $_POST['diachi'];
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                themtk($hoten,$diachi,$email,$user,$pass);
            }
            include "signin.php";
            break;
        case 'deldm':
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                deldm($id);
            }
            $kq = getall_dm();
            include "view/danhmuc.php";
            break;
        case 'delsp':
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                delsp($id);
            }
            $kq = getall_sp();
            include "view/sanpham.php";
            break;
        case 'updatedmform':
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $kqone = getonedm($id);
            }
            $kq = getall_dm();
            include "view/updatedmform.php";

            if (isset($_POST['id'])) {
                $id = $_POST['id'];
                $tendm = $_POST['tendm'];
                updatedm($id, $tendm);
                $kq = getall_dm();
                include "view/danhmuc.php";
            }
            break;
		case 'thoat':
			if(isset($_SESSION['role'])) unset($_SESSION['role']);
			header('location: login.php');
            break;
        case 'trangchu':
            header('location: ../index.php');
            break;
        default:
            include "view/home.php";
            break;
        case 'dangnhap':
            if((isset($_POST['dangnhap']))&&($_POST['dangnhap'])){
                $user = $_POST['user'];
                $pass = md5($_POST['pass']);
                $kq=checkinfo($user, $pass);
                $role=$kq[0]['role'];
                if($role==1){
                    $_SESSION['role']=$role;
                    header('location: admin/index.php');
                }else{
                    $_SESSION['role']=$role;
                    $_SESSION['iduser']=$kq[0]['id'];
                    $_SESSION['username']=$kq[0]['user'];
                    header('location: index.php');
                    break;
                }
            }
            case 'product':
                if (isset($_POST['kyw'])&&($_POST['kyw']!="")){
                    $kyw=$_POST['kyw'];
                }else{
                    $kyw="";
                }
                if (isset($_GET['id'])&&($_GET['id']>0)){
                    $id=$_GET['id'];
                }else{
                    $id=0;
                }
                    $dssp=getall_sp($id, $kyw);
                    include 'view/product.php';
                    break;
    		}
}else{
    include "view/home.php";
			}
}else{
	header('location: login.php');
  			}
?>
