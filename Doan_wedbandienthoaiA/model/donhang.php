<?php
    function taodonhang($madh,$tongdonhang,$pttt,$hoten,$diachi,$email,$tel){
        $conn=connectdb();
        $sql = "INSERT INTO tbl_donhang(madh,tongdonhang,pttt,hoten,diachi,email,tel) "; 
        $sql.=  "VALUES('".$madh."', '".$tongdonhang."', '".$pttt."', '".$hoten."','".$diachi."','".$email."','".$tel."')";
        $conn->exec($sql);
        $last_id = $conn->lastInsertId();
        return $last_id;
    }
?>