<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script src="ckeditor/ckeditor.js"></script>
</head>
<body>
<br/><div class="container mt-3">
	<h3>THÊM SẢN PHẨM</h3>
  <form action="index.php?act=sanpham_add" method="post" enctype="multipart/form-data" style="width: 100%;">
    <div class="mb-3">
      <label for="iddm" class="form-label">Chọn sản phẩm</label>
      <select name="iddm" id="iddm" class="form-select">
        <option value="0">Chọn sản phẩm</option>
        <?php
        if (isset($dsdm)) {
          foreach ($dsdm as $dm) {
            echo '<option value="' . $dm['id'] . '">' . $dm['tendm'] . '</option>';
          }
        }
        ?>
      </select>
    </div>

    <div class="mb-3">
      <label for="tensp" class="form-label">Tên sản phẩm</label>
      <input type="text" name="tensp" id="tensp" class="form-control">
    </div>

    <div class="mb-3">
      <label for="hinh" class="form-label">Hình ảnh</label>
      <input type="file" name="hinh" id="hinh" class="form-control">
    </div>

    <div class="mb-3">
      <label for="giacu" class="form-label">Giá cũ</label>
      <input type="text" name="giacu" id="giacu" class="form-control">
    </div>

    <div class="mb-3">
      <label for="gia" class="form-label">Giá mới</label>
      <input type="text" name="gia" id="gia" class="form-control">
    </div>

    <div class="mb-3">
    <label for="mota" class="form-label">Mô tả</label>
    <textarea name="mota" id="mota" class="form-control"></textarea>
</div>

<div class="mb-3">
    <label for="chitiet" class="form-label">Chi tiết</label>
    <textarea name="chitiet" id="chitiet" class="form-control"></textarea>
</div>

<script>
        CKEDITOR.replace("mota");
        CKEDITOR.replace("chitiet");
</script>
    <div class="mb-3 text-end">
      <input type="submit" name="themmoi" value="Thêm Mới" class="btn btn-primary">
    </div>
  </form>
</div>

<table class="table">
	<tr>
	  <td><b>STT</b></td>
	  <td><b>Tên sản phẩm</b></td>
	  <td><b>Hình</b></td>
	  <td><b>Giá cũ</b></td>
    <td><b>Giá</b></td>
	  <td><b>Mô tả</b></td>
	  <td><b>Chi tiết</b></td>
	</tr>
	<?php
	if(isset($kq) && (count($kq) > 0)){
		$i = 1;
		foreach ($kq as $dm) {
			echo '<tr>
				<td>'.$i.'</td>
				<td>'.$dm['tensp'].'</td>
				<td><img src="' . $dm['img'] . '" alt="Hình ảnh sản phẩm" width="100"></td>
				<td>' . number_format($dm['giacu'], 0, ',', '.') . ' ₫</td>
				<td>' . number_format($dm['gia'], 0, ',', '.') . ' ₫</td>
				<td>'.$dm['mota'].'</td>
        <td>'.$dm['chitiet'].'</td>
				<td><a href="index.php?act=updatespform&id='.$dm['id'].'"><p  class="ptien"><i class="bi bi-pencil-square"></i></p></a> <a href="index.php?act=delsp&id='.$dm['id'].'"><p  class="ptien"><i class="bi bi-trash3-fill"></i></p></a></td>
			</tr>';
			$i++;
		}
	}
	?>
</table>
  </body>
</html>           