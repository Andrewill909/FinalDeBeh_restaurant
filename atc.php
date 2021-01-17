<?php 

include "koneksi.php";

session_start();

$foodid=$_POST['foodId'];
$jumlah=$_POST['jumlah'];
$detailfoodid=$_POST['detailFoodId'];

//cek apakah sudah ada order
if(empty($_SESSION['noOrder'])){
    $query = "SELECT OrderId FROM customerorder ORDER BY OrderId DESC LIMIT 1";

    $eksekusi = mysqli_query($koneksi,$query);
    if(mysqli_num_rows($eksekusi)<1){
        $OrderId = "OR01";
        $_SESSION['noOrder']=$OrderId;
    }else{
        $hasil = mysqli_fetch_array($eksekusi);
        $curID= $hasil['OrderId'];
        $curID = substr($curID,2);

        if($curID[0]=="0" && $curID[1]!="9"){
            $num = (int)$curID;
            $num++;
            $res = "0".$num;
        }else{
            $num = (int)$curID;
            $res = ++$num;
        }

        $newID = 'OR'.$res;
        $_SESSION['noOrder']=$newID;
    }
    //insert ke db
    $noOrder = $_SESSION['noOrder'];
    $idUser = $_SESSION['id'];
    $date = date("Y/m/d");
    $query2 = "INSERT into customerorder SET OrderId = '$noOrder', UserId = '$idUser',Date ='$date'";

    $insert = mysqli_query($koneksi,$query2);

    if(!$insert){
        echo "error";
        echo "$date";
        die();
    }

}

    $noorder = $_SESSION['noOrder'];
 //cek dulu OrderDetailId dan tentukan no ID yang baru
    $orderdetail = "SELECT OrderDetailId FROM orderdetail ORDER BY OrderDetailId DESC LIMIT 1";
    $eksekusii = mysqli_query($koneksi,$orderdetail);

    if(!$eksekusii){
        echo "gagal";
        echo "$eksekusii";
    }

    if(mysqli_num_rows($eksekusii)<1){
        $orderDetId = 'OD01';

    }else{
        $hasil = mysqli_fetch_array($eksekusii);
        $curID = $hasil['OrderDetailId'];
        $curID = substr($curID,2);

        if($curID[0]=="0" && $curID[1]!="9"){
            $num = (int)$curID;
            $num++;
            $res = "0".$num;
        }else{
            $num = (int)$curID;
            $res = ++$num;
        }

        $orderDetId = 'OD'.$res;


    }
    //insert ke tabel orderdetail
    //ambil harga dahulu
    $querydetailfood = "SELECT * FROM detailfood WHERE DetailFoodId = '$detailfoodid'";
    $cari = mysqli_query($koneksi,$querydetailfood);
    $hasilcari = mysqli_fetch_array($cari);
    $harga = $hasilcari['Price'];

    $hargatotal = $harga * $jumlah;

    
    $query = "INSERT into orderdetail SET OrderDetailId = '$orderDetId',OrderId = '$noorder',
    FoodId ='$foodid',Qty = '$jumlah',TotalPrice ='$hargatotal'";

    $insert = mysqli_query($koneksi,$query);

    if($insert){
        echo json_encode(array("statusCode"=>200));
    }else{
        echo json_encode(array("statusCode"=>201));
    }




?>