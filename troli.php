<?php
 
 session_start();

 if(empty($_SESSION['role'])){
    header("location:login/login.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<!-- Mobile Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Site Metas -->
	<title>Restoran FinalDeBeh</title>
	<meta name="keywords" content="">
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Site Icons -->
	<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
	<link rel="apple-touch-icon" href="images/apple-touch-icon.png">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- Site CSS -->
	<link rel="stylesheet" type="text/css" href="./css/style.css?v=<?php echo time(); ?>">
	<!-- Responsive CSS -->
	<link rel="stylesheet" href="css/responsive.css">
	<!-- Custom CSS -->
	<link rel="stylesheet" href="css/custom.css">

	<!-- <script src="vendor/jquery/jquery-3.2.1.min.js"></script> -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<style>
		.hidden{
			display:none;
		}
	</style>

	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	<link rel="shortcut icon" type="image/x-icon" href="images/logofinal.png">
</head>
<body>
    
<header class="top-navbar">
		<nav class="navbar navbar-expand-lg navbar-light bg-light" style="padding: 0;">
			<div class="container" style="padding: 0;">
				<a class="navbar-brand" href="home.php">
					<img src="images/logofinal.png" style="width: 130px;" alt="" />
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-rs-food"
					aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbars-rs-food">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active"><a class="nav-link" href="home.php">Home</a></li>
						<li class="nav-item"><a class="nav-link" href="profil.php">Profil</a></li>
						<li class="nav-item"><a class="nav-link" href="troli.php">Troli</a></li>
						
                        
                        <li class="nav-item active"><a class="nav-link " href="logout.php">Keluar</a></li>
					</ul>
				</div>
			</div>
		</nav>
	</header>

    <div class="all-page-title page-breadcrumb">
		<div class="container text-center">
			<div class="row">
				<div class="col-lg-12">
					<h1>Halaman Troli</h1>
				</div>
			</div>
		</div>
	</div>

<!-- Start menu troli -->
<?php 
if(empty($_SESSION['noOrder'])){
?>
<!-- jika tidak ada noOrder -->

<div class="reservation-box">
    <div class="container">
    <div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>Troli</h2>
						<p>Keranjang anda masih kosong :(</p>
					</div>
                    
    			</div>
	</div>
    </div>
</div>

<?php }else{?>

<div class="reservation-box">

    <div class="container">
    
        <div class="row">
        
            <div class="col-lg-12">
				<div class="heading-title text-center">
					<h2>Troli</h2>
					<p>Berikut adalah item anda dengan
                    nomor order <span id="Idorder"><?php echo $_SESSION['noOrder']?></span></p>
				</div>
                <div id="alertSuccess">
     
                </div>
    		</div>    

        </div>
        <div class="row">
        
            <div class="col-lg-12 col-sm-12 col-xs-12">
            
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">Item no.</th>
                        <th scope="col">Foto</th>
                        <th scope="col">Nama menu</th>
                        <th scope="col">Jumlah</th>
                        <th scope="col">Total harga</th>
                        <th scope="col">Batalkan</th>

                        </tr>
                    </thead>
                    <tbody id="detailMenu">
                        <!-- disini ditampilkan semua menu di keranjang -->
                        
                    </tbody>
                </table>
            </div>
            <div class="col-lg-12 col-sm-12 col-xs-12 d-flex justify-content-end">

                <div class="px-5">
                    <h4>Total harga: <span id="hargaTotal"></span></h4>
                </div>
                <!-- Button trigger modal -->
                <button id="tombolCheckout" type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#checkoutPesanan">
                Checkout
                </button>

            </div>
            


                <!-- Modal -->
                <div class="modal fade" id="checkoutPesanan" tabindex="-1" role="dialog" aria-labelledby="checkoutPesananTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="checkoutPesananTitle">Konfirmasi Pesanan</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div id="isiModal" class="modal-body">
                            ...
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-warning btn-sm" data-dismiss="modal">Batalkan</button>
                            <button id="konfirm" type="button" data-dismiss="modal" class="btn btn-primary">Konfirmasi</button>
                        </div>
                    </div>
                </div>
                </div>

        </div>
    
    </div>

</div>


<script src="troli.js"></script>
<?php }?>
<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<!-- ALL PLUGINS -->
	<script src="js/jquery.superslides.min.js"></script>
	<script src="js/images-loded.min.js"></script>
	<script src="js/isotope.min.js"></script>
	<script src="js/baguetteBox.min.js"></script>
	<script src="js/form-validator.min.js"></script>
	<script src="js/contact-form-script.js"></script>
	<script src="js/custom.js"></script>
    
</body>

