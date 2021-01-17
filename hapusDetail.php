<?php 

include "koneksi.php";

$id =  $_POST['id'];//id order detail

$query = "DELETE from orderdetail WHERE OrderDetailId = '$id'";

$eksekusi = mysqli_query($koneksi,$query);

if(!$eksekusi){
    echo json_encode(array("statusCode"=>201));
    die();
}else if($eksekusi){
    echo json_encode(array("statusCode"=>200));
}



?>