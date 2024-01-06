<?php
function insert_sanpham($iddm, $tensp, $img, $giacu, $gia, $mota, $chitiet){
    try {
        $conn = connectdb();
        $sql = "INSERT INTO tbl_sanpham (iddm, tensp, img, giacu, gia, mota, chitiet) VALUES ('$iddm', '$tensp', '$img', '$giacu', '$gia','$mota','$chitiet')";
        $conn->exec($sql);
        echo "Thêm sản phẩm thành công!";
    } catch (PDOException $e) {
        echo "<br><br>";
        echo '<p style="margin-left:50px">Vui lòng nhập đầy đủ thông tin.</p>';
    }
}

function getall_sp($iddm=0, $kyw=""){
	$conn=connectdb();
    $sql="SELECT * FROM tbl_sanpham WHERE 1";
    if($iddm>0) $sql.=" AND iddm=".$iddm;
    if($kyw!="") $sql.=" AND tensp like '%".$kyw."%'";
    $sql.=" order by id DESC";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
	$kq= $stmt->fetchAll();
	return $kq;
}
function get_spip($iddm){
	$conn=connectdb();
    $sql="SELECT * FROM tbl_sanpham WHERE iddm=13";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
	$kq= $stmt->fetchAll();
	return $kq;
}
function showsp($id){
    if($id>0){
        $sql = "SELECT * FROM tbl_sanpham WHERE id=".$id;
        $conn=connectdb();
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        return $stmt->fetch();
    }else{
        return 0;
    }
}
function get_spipad($iddm){
	$conn=connectdb();
    $sql="SELECT * FROM tbl_sanpham WHERE iddm=15";
    //$sql.=" order by id DESC";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
	$kq= $stmt->fetchAll();
	return $kq;
}
function get_spmac($iddm){
	$conn=connectdb();
    $sql="SELECT * FROM tbl_sanpham WHERE iddm=18";
    //$sql.=" order by id DESC";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
	$kq= $stmt->fetchAll();
	return $kq;
}
function get_spphukien($iddm){
	$conn=connectdb();
    $sql="SELECT * FROM tbl_sanpham WHERE iddm=20";
    //$sql.=" order by id DESC";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
	$kq= $stmt->fetchAll();
	return $kq;
}
function get_spwatch($iddm){
	$conn=connectdb();
    $sql="SELECT * FROM tbl_sanpham WHERE iddm=19";
    //$sql.=" order by id DESC";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
	$kq= $stmt->fetchAll();
	return $kq;
}
function getonesp($id) {
	$conn=connectdb();
	$stmt = $conn->prepare("SELECT * FROM tbl_sanpham WHERE id=".$id);
	$stmt->execute();
	$result = $stmt->setFetchMode (PDO::FETCH_ASSOC);
	$kq=$stmt->fetchAll();
	return $kq;
}
function updatesp($id, $tensp, $img, $giacu, $gia, $mota, $chitiet, $iddm) {
    $conn = connectdb();
    if ($img == "") {
        // Cập nhật sản phẩm khi không có hình ảnh
        $sql = "UPDATE tbl_sanpham SET tensp = :tensp, giacu = :giacu, gia = :gia, mota = :mota, chitiet = :chitiet, iddm = :iddm WHERE id = :id";
    } else {
        // Cập nhật sản phẩm khi có hình ảnh
        $sql = "UPDATE tbl_sanpham SET tensp = :tensp, img = :img, giacu = :giacu,  gia = :gia, mota = :mota, chitiet = :chitiet,  iddm = :iddm WHERE id = :id";
    }

    // Chuẩn bị truy vấn
    $stmt = $conn->prepare($sql);

    // Ràng buộc các tham số
    $stmt->bindParam(':tensp', $tensp, PDO::PARAM_STR);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->bindParam(':iddm', $iddm, PDO::PARAM_INT);
    $stmt->bindParam(':giacu', $giacu, PDO::PARAM_INT);
    $stmt->bindParam(':gia', $gia, PDO::PARAM_INT);
    $stmt->bindParam(':mota', $mota, PDO::PARAM_STR);
    $stmt->bindParam(':chitiet', $chitiet, PDO::PARAM_STR);

    if ($img != "") {
        $stmt->bindParam(':img', $img, PDO::PARAM_STR);
    }

    // Thực hiện truy vấn
    $stmt->execute();
}
function delsp($id) {
	$conn=connectdb(); 
	$conn->exec($sql= "DELETE FROM tbl_sanpham WHERE id=".$id);
	}	
    function showproduct($ds) {
        $count = 0;
        foreach ($ds as $sp) {
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
    }
    
// Hàm định dạng giá
function formattien($tien)
{
    return  number_format($tien, 0, ',', '.').' ₫';
}
    
?>