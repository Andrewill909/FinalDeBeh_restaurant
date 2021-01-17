<?php

include "koneksi.php";

session_start();

if($_POST['tipe']=="load"){

    $id = $_SESSION['id'];
    
    $query= "SELECT * FROM user WHERE UserId = '$id'" ;

    $validasi = mysqli_query($koneksi,$query);

    if($validasi==false){
        echo json_encode(array("statusCode"=>201));
    }else{
        if(mysqli_num_rows($validasi)>0){
            $tampung=array();
            $user = mysqli_fetch_array($validasi);
            $tampung[]=$user;
            echo json_encode($tampung);



        }else{
            echo json_encode(array("statusCode"=>202));
        }
    }
}else if($_POST['tipe']=="edit"){

    $id = $_SESSION['id'];
    $username = $_POST['username'];
    $usergender = $_POST['usergender'];
    $userphone = $_POST['userphone'];
    $userimg = $_POST['userimg'];
    $query = "UPDATE user SET UserName='$username',UserGender = '$usergender',UserPhone ='$userphone',
    UserPicture = '$userimg' WHERE UserId = '$id'";
    
    $verif = mysqli_query($koneksi,$query);

    if($verif){
        echo json_encode(array("statusCode"=>200));
    }else{
        echo json_encode(array("statusCode"=>201));
    }
}

?>