<?php
function themdm($tendm) {
	$conn=connectdb();
	$conn->exec($sql = "INSERT INTO tbl_danhmuc (tendm) VALUES ('".$tendm."')");
}
function deldm($id) {
	$conn=connectdb(); 
	$conn->exec($sql= "DELETE FROM tbl_danhmuc WHERE id=".$id);
	}
function updatedm($id, $tendm) {
    $conn = connectdb();
    $sql = "UPDATE tbl_danhmuc SET tendm = :tendm WHERE id = :id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':tendm', $tendm, PDO::PARAM_STR);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->execute();
}
function getonedm($id) {
	$conn=connectdb();
	$stmt = $conn->prepare("SELECT * FROM tbl_danhmuc WHERE id=".$id);
	$stmt->execute();
	$result = $stmt->setFetchMode (PDO::FETCH_ASSOC);
	$kq=$stmt->fetchAll();
	return $kq;
}		
function getall_dm(){
	$conn=connectdb();
	$stmt = $conn->prepare("SELECT * FROM 	tbl_danhmuc");
	$stmt->execute();
	$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
	$kq= $stmt->fetchAll();
	return $kq;
	}
?>