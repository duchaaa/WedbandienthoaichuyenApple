<?php
// session_start();
include "header.php";
// include "xoa_san_pham.php"; // Hãy đảm bảo đã bao gồm header.php trước khi sử dụng session và biến $cart.
// include "../model/sanpham.php"; // Nếu không sử dụng file này, bạn có thể bỏ nó.

if (isset($_SESSION['cart'])) {
    // Lấy danh sách sản phẩm từ biến session
    $cart = $_SESSION['cart'];
    $tong = 0;
    $kq = "";
    $stt = 0;

    if (count($cart) > 0) {
        echo '<div class="row">
                <div class="col-md-8">';
        echo '<div class="cart">';
        echo '<h4>Giỏ hàng <i class="bi bi-bag-check"></i></h4>';
        echo '<table class="table">';
        echo '<tr>
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
                echo '<tr>
            
                          <td><img src="view/' . $sp[1] . '" width="100px"></td>
                          <td>' . $sp[2] . '</td>
                          <td>' . number_format($sp[3], 0, ',', '.') . ' ₫</td>
                          <td>' . $sp[4] . '</td>
                          <td>' . number_format($tongtien, 0, ',', '.') . ' ₫</td>
                          <td><a href="index.php?act=delcart&i=' . $stt . '" style="color:#000"><p><i class="bi bi-trash3-fill"></i></p></a></td>
                        </tr>';
                $stt++;
            }
        }
        echo '</table></div>';
echo '<div class="cart-total">
           <p class="ptien">Tổng cộng: <span id="cart-total-amount">' . number_format($tong, 0, ',', '.') . ' ₫</span></p>
        </div>
        <div class="cart-buttons" style="margin-left: 20px;">
        <a href="index.php" class="btn btn-success">Tiếp tục mua hàng</a>
        <a href="index.php?act=delcart" class="btn btn-success">Xóa hết giỏ hàng</a>
        </div>';
echo $kq;
echo '</div>';
        echo '<div class="col-md-4 order-form-small">
                <div class="order-form">
                    <br/><h5>Thông tin đặt hàng</h5>
                    <form action="index.php?act=thanhtoan" method="post"> 
                        <input type="hidden" name="tongdonhang" value="<?=$tong?>">
                        <div class="mb-3 col-sm-11">                            
                            <input type="text" class="form-control " id="name" name="hoten" placeholder="Họ và tên*" required>
                        </div>
                        <div class="mb-3 col-sm-11">                          
                            <input type="text" class="form-control" id="address" name="diachi" placeholder="Địa chỉ*" required>
                        </div>
                        <div class="mb-3 col-sm-11">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email*" required>
                        </div>
                        <div class="mb-3 col-sm-11">
                            <input type="tel" class="form-control" id="phone" name="tel" placeholder="Số điện thoại*" required>
                        </div>
                        <div class="mb-3 col-sm-11">
                            <label class="form-label">Chọn phương thức thanh toán</label>
                            <div class="form-check">
                                <input type="radio" class="form-check-input" id="payment-cod" name="pttt" value="1" required>
                                <label class="form-check-label" for="payment-cod">Thanh toán khi nhận hàng</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" class="form-check-input" id="payment-transfer" name="pttt" value="2" required>
                                <label class="form-check-label" for="payment-transfer">Thanh toán chuyển khoản</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" class="form-check-input" id="payment-momo" name="pttt" value="3" required>
                                <label class="form-check-label" for="payment-momo">Thanh toán qua ví MOMO</label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary d-grid gap-2 col-11 mx-1" name="thanhtoan" value="submit">TIẾN HÀNH ĐẶT HÀNG</button>
                    </form>
                </div>
            </div>
        </div>';
    } else {
        echo '<div align="center"><h1 class="tintuc"><i class="bi bi-bag-x"></i></h1>';
        echo '<h6 >Không có sản phẩm nào trong giỏ hàng</h6>';
        echo '<a href="index.php" class="btn btn-primary d-grid gap-2 col-4 mx-auto">Về trang chủ</a></div>';
    }
} else {
    exit;
}

?>
