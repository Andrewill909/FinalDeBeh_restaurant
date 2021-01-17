<?php

include "koneksi.php";

$query = "SELECT * FROM food,detailfood,foodcategory WHERE food.FoodId = detailfood.FoodId AND food.CategoryId = foodcategory.CategoryId";

$tampung = array();

$hasil = mysqli_query($koneksi,$query);

while($row = mysqli_fetch_array($hasil)){
    $tampung[] = $row; 
}

echo json_encode($tampung);

?>