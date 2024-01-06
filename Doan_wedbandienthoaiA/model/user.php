<?php
function checkuser($user, $pass){
    $conn = connectdb();
    $input_pass = $_POST['pass'];
    $partial_md5_input = substr(md5($input_pass), 0, 18);
    $stmt = $conn->prepare("SELECT * FROM tbl_user WHERE user = '$user' AND SUBSTRING(pass, 1, 18) = '$partial_md5_input'");
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq = $stmt->fetchAll();   
    if (count($kq) > 0) {
        return $kq[0]['role'];
    } else {
        return -1; 
    }
}

	function checkinfo($user, $pass){
		$conn=connectdb();
		$input_pass = $_POST['pass'];
		$partial_md5_input = substr(md5($input_pass), 0, 18);
		$stmt = $conn->prepare("SELECT * FROM tbl_user WHERE user = '$user' AND SUBSTRING(pass, 1, 18) = '$partial_md5_input'");
		$stmt->execute();
		$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
		$kq= $stmt->fetchAll();
	    return $kq;
		}
	function themtk($hoten,$diachi,$email,$user,$pass){
		$conn=connectdb();
		$sql = "INSERT INTO tbl_user(name, address, email, user, pass) VALUES ('$hoten','$diachi','$email','$user','$pass')";
		$conn->exec($sql);
	}
?>

