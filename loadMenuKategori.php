<?php

include "koneksi.php";

$query = "SELECT * FROM foodcategory";

$tampung = array();

$hasil = mysqli_query($koneksi,$query);

while($row = mysqli_fetch_array($hasil)){
    $tampung[]=$row;
}

echo json_encode($tampung);

?>