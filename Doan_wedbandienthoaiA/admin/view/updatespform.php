<script src="ckeditor/ckeditor.js"></script>
<div>
    
    <div class="container mt-3">
    <h3>CẬP NHẬT SẢN PHẨM</h3>
  <form action="index.php?act=sanpham_update" method="post" enctype="multipart/form-data" style="width: 100%;">
    <div class="mb-3">
      <label for="iddm" class="form-label">Chọn sản phẩm</label>
      <select name="iddm" id="iddm" class="form-select">
        <option value="0">Chọn sản phẩm</option>
        <?php
        if (isset($dsdm)) {
          foreach ($dsdm as $dm) {
            if ($dm['id'] == $spct[0]['iddm']) {
              echo '<option value="' . $dm['id'] . '" selected>' . $dm['tendm'] . '</option>';
            } else {
              echo '<option value="' . $dm['id'] . '">' . $dm['tendm'] . '</option>';
            }
          }
        }
        ?>
      </select>
    </div>

    <div class="mb-3">
      <label for="tensp" class="form-label">Tên sản phẩm</label>
      <input type="text" name="tensp" id="tensp" class="form-control" value="<?= htmlspecialchars($spct[0]['tensp'], ENT_QUOTES, 'UTF-8') ?>">
    </div>

    <div class="mb-3">
        <label for="hinh" class="form-label">Hình ảnh hiện tại</label>
        <img src="<?= $spct[0]['img'] ?>" alt="Hình ảnh sản phẩm" class="img-thumbnail" style="width: 50px;">
    </div>

    <div class="mb-3">
      <label for="new_hinh" class="form-label">Chọn hình ảnh mới</label>
      <input type="file" name="hinh" id="new_hinh" class="form-control">
    </div>

    <div class="mb-3">
      <label for="giacu" class="form-label">Giá cũ</label>
      <input type="text" name="giacu" id="giacu" class="form-control" value="<?= $spct[0]['giacu'] ?>">
    </div>

    <div class="mb-3">
      <label for="gia" class="form-label">Giá mới</label>
      <input type="text" name="gia" id="gia" class="form-control" value="<?= $spct[0]['gia'] ?>">
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
    document.addEventListener('DOMContentLoaded', function() {
        CKEDITOR.replace("mota");
        CKEDITOR.replace("chitiet");
    });
</script>

    <input type="hidden" name="id" value="<?= $spct[0]['id'] ?>">

    <div class="mb-3 text-end">
      <input type="submit" name="capnhat" value="Cập Nhật" class="btn btn-primary">
    </div>>
  </form>
</div>

    <table class="table">
        <tr>
            <th>STT</th>
            <th>Tên sản phẩm</th>
            <th>Hình</th>
            <th>Giá cũ</th>
            <th>Giá</th>
            <th>Mô tả</th>
            <th>Chi tiết</th>
        </tr>
        <?php
        if (isset($kq) && (count($kq) > 0)) {
            $i = 1;
            foreach ($kq as $item) {
                echo '<tr>
                    <td>' . $i . '</td>
                    <td>' . $item['tensp'] . '</td>
                    <td><img src="' . $item['img'] . '" alt="' . $item['tensp'] . '" width="100px"></td>
                    <td>' . $item['giacu'] . '</td>
                    <td>' . $item['gia'] . '</td>
                    <td>' . $item['mota'] . '</td>
                    <td>' . $item['chitiet'] . '</td>
                    <td><a href="index.php?act=updatespform&id='.$dm['id'].'"><p><i class="bi bi-pencil-square"></i></p></a> <a href="index.php?act=delsp&id='.$dm['id'].'"><p><i class="bi bi-trash3-fill"></i></p></a></td>
                </tr>';
                $i++;
            }
        }
        ?>
    </table>
</div>
