<?php 

include "koneksi.php";

$idorder = $_POST['idOrder'];

$query = "SELECT * FROM customerorder as cr, orderdetail as od, food as f WHERE
 cr.OrderId = od.OrderId AND od.FoodId = f.FoodId AND cr.OrderId='$idorder'";

 $eksekusi = mysqli_query($koneksi,$query);

 if(!$eksekusi){
     echo json_encode(array("statusCode"=>201));
     die();
 }

 $tampung = array();

 while($row=mysqli_fetch_array($eksekusi)){
     $tampung[]=$row;
 }

 echo json_encode($tampung);

?>