<?php 

include "koneksi.php";

session_start();

$userid = $_SESSION['id'];

$query = "SELECT Saldo FROM user WHERE UserId='$userid'";

$eksekusi = mysqli_query($koneksi,$query);



if($eksekusi){
    $res = mysqli_fetch_array($eksekusi);

    $saldo = $res['Saldo'];

    echo json_encode(array("saldo"=>$saldo));
}else{
    echo json_encode(array("statusCode"=>201));
}

?>