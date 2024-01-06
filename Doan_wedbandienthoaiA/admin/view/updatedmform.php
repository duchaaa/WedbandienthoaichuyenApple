<div>
	<br/><br/>
	<h2>CẬP NHẬT DANH MỤC</h2>
    <form action="index.php?act=updatedmform" method="post" style="width: 20%;">
    <input type="hidden" name="id" value="<?=$kqone[0]['id']?>">
    <div class="mb-3">
        <label for="tendm" class="form-label">Tên danh mục</label>
        <input type="text" class="form-control" id="tendm" name="tendm" value="<?=$kqone[0]['tendm']?>" required>
    </div>
	<div class="mb-3">
    	<button type="submit" class="btn btn-primary">Cập nhật</button>
	</div>
</form>

	<table class="table">
	 <tr>
	  <td><b>STT</b></th>
	  <td><b>Tên danh mục</b></th>
	 
	  <td><b>Hành động</b></th>
	</tr>
	<?php
	if(isset($kq)&&(count($kq)>0)){
	$i=1;
	foreach ($kq as $dm) {
	echo '<tr>
		<td>'.$i.'</td>
		<td>'.$dm['tendm'].'</td>
		
		<td><a href="index.php?act=updatedmform&id='.$dm['id'].'"><p class="ptien"><i class="bi bi-pencil-square"></i></p></a> <a href="index.php?act=deldm&id='.$dm['id'].'"><p class="ptien"><i class="bi bi-trash3-fill"></i></p></a></td>
		 </tr>';
			$i++;
		}
	}
?>
	</table>
	</div>