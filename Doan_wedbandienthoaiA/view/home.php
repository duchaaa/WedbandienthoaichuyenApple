<?php
    include "header.php";
?>
   <!-- Carousel 1-->
   <div id="carousel1" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="3"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="4"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <a href="index.php?act=sanphamct&id=99"><img src="view/ImagesBanner/bn1.jpg" class="d-block w-100"></a>
            </div>
            <div class="carousel-item">
                <a href="index.php?act=sanphamct&id=47"><img src="view/ImagesBanner/bn2.png" class="d-block w-100"></a>
            </div>
            <div class="carousel-item">
                <a href="index.php?act=sanphamct&id=47"><img src="view/ImagesBanner/bn3.jpg" class="d-block w-100"></a>
            </div>
            <div class="carousel-item">
                <a href="index.php?act=sanphamct&id=47"><img src="view/ImagesBanner/bn4.jpg" class="d-block w-100"></a>
            </div>
            <div class="carousel-item">
                <a href="index.php?act=sanphamct&id=99"><img src="view/ImagesBanner/bn5.jpg" class="d-block w-100"></a>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carousel1" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel1" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </a>
    </div>
    </div>
    <div class="banner">
        <div class="container">
            <div class="row mt-5">
                <div class="row">
                    <div class="col">
                        <div class="row">
                            <div class="col">
                                <a href="index.php?act=sanphamct&id=79"><img src="view/ImagesBanner/bn6.png" alt="Ảnh 1" class="img-fluid"></a>
                            </div>
                            <div class="col">
                                <a href="index.php?act=sanphamct&id=80"><img src="view/ImagesBanner/bn7.png" alt="Ảnh 2" class="img-fluid"></a>
                            </div>
                            <div class="col">
                                <a href="index.php?act=sanphamct&id=80"><img src="view/ImagesBanner/bn8.png" alt="Ảnh 3" class="img-fluid"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 <!--Carousel 2-->
<h2 class="fw-bold text-center mb-4 mt-4 text-warning">F<i class="bi bi-lightning-fill"></i>ASH SALE ONLINE</h2>
<div id="carousel2" class="carousel slide" data-bs-ride="carousel" style="background-color:mediumseagreen">
    <div class="carousel-inner">
        <div class="carousel-item active mb-3 mt-4">
            <div class="container justify-content-center">
                <div class="row product-grid-iphone">
                    <?php
                    $count = 0;
                    foreach ($spipad as $sp) {
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
                                <span class="discount-label"><i class="bi bi-lightning-charge-fill"></i> Giảm '.formattien($sale).'</span>
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
                        if ($count == 5) {
                            break;
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
        <div class="carousel-item mb-3 mt-4">
            <div class="container justify-content-center">
                <div class="row product-grid-iphone">
                    <?php
                    $count = 0;
                    foreach ($spip as $sp) {
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
                                <span class="discount-label"><i class="bi bi-lightning-charge-fill"></i> Giảm '.formattien($sale).'</span>
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
                        if ($count == 5) {
                            break;
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
        <!-- Các item carousel khác tương tự -->
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carousel2" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carousel2" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
    </div>
        <!--Iphone-->
<div class="container">
    <h2 class="fw-bold text-center mb-4 mt-4">iPhone</h2>
    <div class="product-grid-iphone row">
    <?php
        $count = 0;
        foreach ($spip as $sp) {
            $id = $sp['id'];
            $link = "index.php?act=sanphamct&id=" . $id;
            $tensp = $sp['tensp'];
            $img = $sp['img'];
            $gia = $sp['gia'];

            if ($sp['giacu'] > 0) {
                $gia = '<del>' . formattien($sp['giacu']) . '</del><p class="ptien">' . formattien($sp['gia']) . '</p>';
            } else {
                $gia = '<p class="ptien">' . formattien($sp['gia']) . '</p>';
            }

            $sale = $sp['giacu'] - $sp['gia'];

            echo '
            <div class="product col-md-2 text-center">
                <a href="' . $link . '" class="tensp">
                    <img src="./upload/' . $sp['img'] . '" style="max-width: 200px;" class="mx-auto" alt="' . $sp['tensp'] . '">
                    <h6>' . $sp['tensp'] . '</h6>
                    <span class="discount-label"><i class="bi bi-lightning-charge-fill"></i> Giảm ' . formattien($sale) . '</span>
                    <span>' . $gia . '</span>
                    <input type="hidden" value="' . $sp['id'] . '" name="id">
                    <input type="hidden" value="' . $sp['tensp'] . '" name="tensp">
                    <input type="hidden" value="' . $sp['img'] . '" name="img">
                    <input type="hidden" value="' . $sp['gia'] . '" name="gia">
                </a>
            </div>';
            $count++;
            if ($count % 5 == 0) {
                echo '</div><div class="row justify-content-center">';
            }
            if ($count == 5) {
                break;
            }
        }
    ?>

        <div class="d-flex justify-content-center">
            <a href="index.php?act=product&id=13"> <button class="btn btn-outline-success">Xem Tất Cả iPhone <i class="bi bi-chevron-right"></i>
            </button></a>
        </div>
        <!--Ipad-->
    <div class="container">
    <h2 class="fw-bold text-center mb-4 mt-4">iPad</h2>
    <div class="product-grid-iphone row">
    <?php
            $count = 0;
            foreach ($spipad as $sp) {
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
                if ($count == 5) {
                    break;
                }
            }
    ?>
       
        </div>
        <div class="d-flex justify-content-center">
        <a href="index.php?act=product&id=15"><button class="btn btn-outline-success">Xem Tất Cả iPad <i class="bi bi-chevron-right"></i>
            </button></a>
        </div>
        <!--Mac-->
        <div class="container">
    <h2 class="fw-bold text-center mb-4 mt-4">Mac</h2>
    <div class="product-grid-iphone row">
    <?php
        $count = 0;
        foreach ($spmac as $sp) {
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
            if ($count == 5) {
                break;
            }
        }
    ?>
        </div>
        <div class="d-flex justify-content-center">
        <a href="index.php?act=product&id=18"><button class="btn btn-outline-success">Xem Tất Cả Mac <i class="bi bi-chevron-right"></i>
            </button></a>
        </div>
        <!--Watch-->
        <div class="container">
    <h2 class="fw-bold text-center mb-4 mt-4">Wacth</h2>
    <div class="product-grid-iphone row">
    <?php
        $count = 0;
        foreach ($spwatch as $sp) {
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
            if ($count == 5) {
                break;
            }
        }
    ?>
        <div class="d-flex justify-content-center">
        <a href="index.php?act=product&id=19"><button class="btn btn-outline-success">Xem Tất Cả Wacth <i class="bi bi-chevron-right"></i>
            </button></a>
        </div>
        <!--Phụ kiện-->
        <div class="container">
    <h2 class="fw-bold text-center mb-4 mt-4">Phụ kiện</h2>
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
            if ($count == 5) {
                break;
            }
        }
    ?>
        <div class="d-flex justify-content-center">
        <a href="index.php?act=product&id=20"><button class="btn btn-outline-success mb-4">Xem Tất Cả Phụ kiện <i class="bi bi-chevron-right"></i>
            </button></a>
        </div>
    </div>
    <br />
    <div align="center"><img src="view/ImagesBanner/bn9.png" />
    </div>
    <br />
    <br />
    <h3 class="fw-bold text-center">Tin tức</h3>
    <br />
    <br />

    <!--Tin tức-->
    <div class="container">
        <div class="row">
            <!-- Thẻ 1 -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card">
                    <img src="view/ImagesOther/tintuc4.jpg" class="card-img-top" alt="Ảnh Card 1">
                    <div class="card-body">
                        <h5 class="card-title">iPhone 15 Pro Có Mấy Màu? Màu Nào Mới Và Đẹp Nhất?</h5>
                        <p class="card-text">20/10/2023</p>
                    </div>
                </div>
            </div>

            <!-- Thẻ 2 -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card">
                    <img src="view/ImagesOther/tintuc2.jpeg" class="card-img-top" alt="Ảnh Card 2">
                    <div class="card-body">
                        <h5 class="card-title">Chip A17 Pro bứt phát hiệu suất, thách thức mọi game nặng!</h5>
                        <p class="card-text">19/10/2023</p>
                    </div>
                </div>
            </div>

            <!-- Thẻ 3 -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card">
                    <img src="view/ImagesOther/tintuc3.jpg" class="card-img-top" alt="Ảnh Card 3">
                    <div class="card-body">
                        <h5 class="card-title">Android 14 sẽ có các tính năng mà bạn nên khám phá nó ngay lập tức</h5>
                        <p class="card-text">20/10/2023</p>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center mb-4"><a href="index.php?act=tintuc">
            <button class="btn btn-outline-success">Xem Tất Cả tin tức <i class="bi bi-chevron-right"></i>
            </button></a>
        </div>
        </div>
    </div>
    </div>
</div>

<?php
    include "view/footer.php";
?>