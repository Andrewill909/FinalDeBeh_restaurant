<?php 

include "koneksi.php";

session_start();

$totalHarga = $_POST['totalHarga'];

$userid = $_SESSION['id'];

$query = "SELECT Saldo FROM user WHERE UserId='$userid'";

$eksekusi = mysqli_query($koneksi,$query);



if($eksekusi){
    $res = mysqli_fetch_array($eksekusi);

    $saldo = $res['Saldo'];

    $saldoAkhir = $saldo - $totalHarga;

    //update

    $query2 = "UPDATE user SET Saldo='$saldoAkhir' WHERE UserId='$userid'";

    $eksekusi2 = mysqli_query($koneksi,$query2);

    if($eksekusi2){
        unset($_SESSION['noOrder']);
        echo json_encode(array("statusCode"=>200));
    }else{
        echo json_encode(array("statusCode"=>201));
        
    }

    
}else{
    echo json_encode(array("statusCode"=>201));
}

?>