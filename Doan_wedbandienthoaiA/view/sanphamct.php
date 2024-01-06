<?php
    // session_start();
    include "header.php";
    if ($sanpham == 0) {
        echo "<h2>Sản phẩm này không tồn tại</h2>";
    } else {
        $id = $sanpham['id'];
        $tensp = $sanpham['tensp'];
        $img = $sanpham['img'];
        $gia = $sanpham['gia'];
        $giacu = $sanpham['giacu'];
        $chitiet = $sanpham['chitiet'];
        $mota = $sanpham['mota'];
?>
<form action="index.php?act=themgiohang" method="post">
    <div class="container mt-4">
        <div class="row">
            <!-- Cột cho hình ảnh sản phẩm -->
            <div class="col-lg-6">
                <div id="product-main-carousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="view/<?= $img ?>" class="d-block w-100" alt="Hình ảnh sản phẩm">
                            <input type="hidden" value="<?= $id ?>" name="id">
                            <input type="hidden" value="<?= $tensp ?>" name="tensp">
                            <input type="hidden" value="<?= $gia ?>" name="gia">
                            <input type="hidden" value="<?= $img ?>" name="img">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Cột cho thông tin sản phẩm -->
            <div class="col-lg-6">
                <h2><?= $tensp ?></h2>
                <p class="fs-5 ptien">Giá: <?= number_format($gia, 0, ',', '.').'đ' ?> <del><?= number_format($giacu, 0, ',', '.').'đ' ?></del></p>
                <h5>Cấu hình chi tiết sản phẩm <?= $tensp ?></h5>
                <?= $chitiet ?>
                <button class="btn btn-primary btn-block mb-2 d-grid gap-2 col-12" value="Thêm giỏ hàng" name="themgiohang">Thêm giỏ hàng</button>
                <button class="btn btn-success btn-block mb-2 d-grid gap-2 col-12" value="MUA NGAY" name="themgiohang">Mua ngay</button>
            </div>
        </div>
    </div>
    </form>
    <!-- Gợi ý phụ kiện đi kèm -->
    <div class="container mt-4">
        <h3>Gợi ý phụ kiện đi kèm</h3>
        <div class="product-grid-iphone row">
        <?php
            $count = 0;
            foreach ($spphukien as $sp) {
                $id=$sp['id'];
                $link = "index.php?act=sanphamct&id=".$id;
                $tensp=$sp['tensp'];
                $img=$sp['img'];
                $gia=$sp['gia'];
                if ($sp['giacu'] > 0) {
                    $gia = '<del>' . formattien($sp['giacu']) . '</del><p class="ptien">' . formattien($sp['gia']) .'</p>';
                } else {
                    $gia = '<p class="ptien">' . formattien($sp['gia']) . '</p>';
                }
                $sale = $sp['giacu']-$sp['gia'];                
                echo '
                <div class="product col-md-2 text-center">
                    <a href="'.$link.'" class="tensp">
                        <img src="./upload/' . $sp['img'] . '" style="max-width: 200px;" class="mx-auto" alt="' . $sp['tensp'] . '">
                        <h6>' . $sp['tensp'] . '</h6>
                        <span>' . $gia . '</span>
                        <input type="hidden" value="'. $sp['id'] .'" name="id">
                        <input type="hidden" value="'. $sp['tensp'] .'" name="tensp">
                        <input type="hidden" value="'. $sp['img'] .'" name="img">
                        <input type="hidden" value="'. $sp['gia'] .'" name="gia">
                    </a>
                </div>';
                $count++;
                if ($count % 5 == 0) {
                    echo '</div><div class="row justify-content-center">';
                }
            }
        ?>
        </div>
    </div>
    <!-- Phần mô tả sản phẩm -->
<div class="container mt-4">
    <h3>Thông tin sản phẩm</h3>
    <?= $mota ?>
</div>
<?php
    }
    include "view/footer.php";
?>
    
