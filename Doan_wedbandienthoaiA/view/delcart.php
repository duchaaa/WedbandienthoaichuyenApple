<?php
 session_start();
 ob_start();
if (isset($_SESSION['cart'])) {
    if (isset($_GET['id'])) {
        array_splice($_SESSION['cart'], $_GET['id'],1);      
        }else{
			unset($_SESSION['cart']);
		}
    if (count($_SESSION['cart'])>0) header("Location: viewgiohang.php");
	else header("Location: index.php");
	}
?>
