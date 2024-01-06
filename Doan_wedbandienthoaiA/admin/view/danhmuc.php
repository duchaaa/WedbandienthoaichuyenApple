
<script language="javascript">
	function checkinput(){
		if(document.from1.tendm.value==""){
			alert("Hãy nhập tên danh mục vào.");
			document.from1.tendm.focus();
			return false;
		}
		return true;

	}
	</script>
<div class="container mt-5">
<h3>THÊM DANH MỤC</h3>
  <form id="from1" name="from1" action="index.php?act=adddm" method="post" style="width: 20%;" onsubmit="return checkinput();">
    <div class="mb-3">
      <label for="tendm" class="form-label">Tên danh mục</label>
      <input type="text" name="tendm" id="tendm" class="form-control">
    </div>
    <div class="mb-3">
      <input type="submit" name="themmoi" value="Thêm mới" class="btn btn-primary">
    </div>
  </form>
</div>

	<table class="table">
	 <tr>
	  <td><b>STT</b></td>
	  <td><b>Tên danh mục</b></td>
	  <td><b>Hành động</b></td>
	</tr>
	<?php
	if(isset($kq)&&(count($kq) >0)){
	$i=1;
	foreach ($kq as $dm) {
	echo '<tr>
		<td>'.$i.'</td>
		<td>'.$dm['tendm'].'</td>		
		<td><a href="index.php?act=updatedmform&id='.$dm['id'].'"><p class="ptien"><i class="bi bi-pencil-square"></i></p></a><a href="index.php?act=deldm&id='.$dm['id'].'"><p class="ptien"><i class="bi bi-trash3-fill"></i></p></a></td>
		 </tr>';
			$i++;
		}
	}
?>
	</table>
