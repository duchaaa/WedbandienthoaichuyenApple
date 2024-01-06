<?php
//session_start();
include "header.php";

if (isset($_SESSION['cart'])) {
    // Lấy danh sách sản phẩm từ biến session
    $cart = $_SESSION['cart'];
    $tong = 0;
    $kq = "";
    $stt = 0;

    if (count($cart) > 0) {
        echo '<div class="cart">';
        echo '<h2>ĐƠN HÀNG CỦA BẠN</h2>';
        // Hiển thị ID đơn hàng
        echo '<p>#Mã đơn hàng: ' . $iddh . '</p>';
        echo '<table class="table">';
        echo '<tr>
                <td><b>STT</b></td>
                <td><b>Hình ảnh</b></td>
                <td><b>Tên sản phẩm</b></td>
                <td><b>Đơn giá</b></td>
                <td><b>Số lượng</b></td>
                <td><b>Thành tiền</b></td>
              </tr>';

        foreach ($_SESSION['cart'] as $sp) {
            if (count($sp) >= 5) {
                $tongtien = $sp[3] * $sp[4];
                $tong += $tongtien;
                echo'<tr>
                          <td>' .($stt+1). '</td>
                          <td><img src="view/' . $sp[1] . '" width="100px"></td>
                          <td>' . $sp[2] . '</td>
                          <td>' . number_format($sp[3], 0, ',', '.') . ' ₫</td>     
                          <td>' . $sp[4] . '</td>
                          <td>' . number_format($tongtien, 0, ',', '.') . ' ₫</td>     
                        </tr>';
                $stt++;
            }
        }
        echo '<div class="cart-total">
                   <p>Tổng cộng: <span id="cart-total-amount">' . number_format($tong, 0, ',', '.') . ' ₫</span></p>
                </div>';
        echo $kq;
        echo '</table></div>';
        echo '<div class="cart-buttons" style="margin-left: 20px;">
        <a href="index.php" class="btn btn-success">Tiếp tục mua hàng</a>
        </div>';
    } else {
        echo '<p>Giỏ hàng của bạn trống!</p>';
    }
} else {
    header("Location: no-san-giohang.php");
    exit;
}
?>
