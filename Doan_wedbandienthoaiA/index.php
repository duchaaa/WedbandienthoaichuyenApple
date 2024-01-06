<?php
session_start();
ob_start();
if(!isset($_SESSION['cart'])) $_SESSION['cart']=[];
include "model/connectdb.php";
include "model/danhmuc.php";
include "model/sanpham.php";
include "model/donhang.php";
$dsdm = getall_dm();
$sphome1=getall_sp(0,"");
$spip=get_spip(1);
$spipad=get_spipad(1);
$spmac=get_spmac(1);
$spwatch=get_spwatch(1);
$spphukien=get_spphukien(1);
include "view/header.php";

if (isset($_GET['act'])) {
    switch ($_GET['act']) {
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
        case 'themgiohang':
                    if(isset($_POST['themgiohang']) && ($_POST['themgiohang'])){
                        $id = $_POST['id'];
                        $img = $_POST['img'];
                        $tensp = $_POST['tensp'];
                        $gia = $_POST['gia'];
                        $sl=1;
                        $fg=0;
                        $i=0;
                        foreach ($_SESSION['cart'] as $sp) {
                            if($sp[2]===$tensp){
                                $slnew=$sl+$sp[4];
                                $_SESSION['cart'][$i][4]=$slnew;
                                $fg=1;
                                break;
                            }
                            $i++;
                        }
                        if($fg==0){
                        $sp=array($id,$img,$tensp,$gia,$sl);
                        $_SESSION['cart'][]=$sp;
                    
                    }
                        header('Location: index.php?act=viewgiohang');
                }
                    break;
            case 'delcart':
                        if(isset($_GET['i'])&& ($_GET['i']>=0)){
                            if(isset($_SESSION['cart']))
                                array_splice($_SESSION['cart'],$_GET['i'],1);
                        }else{
                            if(isset($_SESSION['cart'])) unset($_SESSION['cart']);
                        }                        
                        if(isset($_SESSION['cart'])&&(count($_SESSION['cart'])>=0)){
                            header('Location: index.php?act=viewgiohang');
                        }else{
                            header('Location: index.php?act=viewgiohang');
                        }
                    break;
                    case 'viewgiohang':
                        include "view/viewgiohang.php";
                        break;
            case 'thanhtoan':
                        if((isset($_POST['thanhtoan']))&&($_POST['thanhtoan'])){
                            $tongdonhang= $_POST['tongdonhang'];
                            $hoten= $_POST['hoten'];
                            $diachi= $_POST['diachi'];
                            $email= $_POST['email'];
                            $tel= $_POST['tel'];
                            $pttt= $_POST['pttt'];
                            $madh="MOBIEVIET".rand(0,999999);
                            $iddh=taodonhang($madh,$tongdonhang,$pttt,$hoten,$diachi,$email,$tel);
                        }
                        include 'view/donhang.php';
                        break;
            case 'sanphamct':
                        if((isset($_GET['id']))&&($_GET['id']>0)){
                            $id=$_GET['id'];
                            $sanpham=showsp($id);
                        }else{
                            $id=0;
                        }              
                        include 'view/sanphamct.php';
                        break;
            
            case 'thoat':
                unset($_SESSION['role']);
                unset($_SESSION['iduser']);
                unset($_SESSION['username']);
                header('location: index.php');
                break;      
            case 'tintuc':
                include 'view/tintuc.html';
                break;        
        default:
            include 'view/home.php';
            break;
    }
} else {
    include 'view/home.php';
}
?>
