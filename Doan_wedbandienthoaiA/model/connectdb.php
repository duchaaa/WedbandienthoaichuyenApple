<?php
function connectdb() {
		$servername = "localhost";
		$username = "root";
		$password = "";
	try {
		$conn = new PDO("mysql:host=$servername;dbname=db_sanpham", $username, $password);
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $e) {
}
		return $conn;
}
	?>