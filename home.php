<?php
session_start();

if(empty($_SESSION['role'])){
    header("location:login/login.php");
}

if($_SESSION['role']=='customer'){
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
	<!-- Start header -->
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
	<!-- End header -->

	<!-- Start slides -->
	<div id="slides" class="cover-slides">
		<ul class="slides-container">
			<li class="text-left">
				<img src="images/slider1.jpg" alt="">
				<div class="container">
					<div class="row">
						<div class="col-md-12" style="padding-top: 90px;">
							<h1>Hallo <?php echo $_SESSION['nama']?>...</h1>
							<h1 class="m-b-20"><strong>Selamat Datang di <br> Restoran FinalDeBeh</strong></h1>
							<p class="m-b-40">Cari menu favoritmu dan tambahkan ke keranjang <br>
								Jangan lupa berikan ulasan terhadap website kami</p>
							<p><a class="btn btn-lg btn-circle btn-outline-new-white" href="#gomenu">Pesan sekarang</a></p>
						</div>
					</div>
				</div>
			</li>
			<li class="text-left">
				<img src="images/slider2.jpg" alt="">
				<div class="container">
					<div class="row">
						<div class="col-md-12" style="padding-top: 90px;">
							<h1>Hallo <?php echo $_SESSION['nama']?>...</h1>
							<h1 class="m-b-20"><strong>Selamat Datang di <br> Restoran FinalDeBeh</strong></h1>
							<p class="m-b-40">Nikmati berbagai hidangan dari seluruh nusantara <br>
								dan dapatkan berbagai penawaran menarik</p>
							<p><a class="btn btn-lg btn-circle btn-outline-new-white" href="#gomenu">Pesan sekarang</a></p>
						</div>
					</div>
				</div>
			</li>
			<li class="text-left">
				<img src="images/slider3.jpg" alt="">
				<div class="container">
					<div class="row">
						<div class="col-md-12" style="padding-top: 90px;">
							<h1>Hallo <?php echo $_SESSION['nama']?>...</h1>
							<h1 class="m-b-20"><strong>Selamat Datang di <br> Restoran FinalDeBeh</strong></h1>
							<p class="m-b-40">Awali pagimu dengan sarapan di restoran FinalDeBeh<br>
								Final project akan terasa jauh lebih mudah </p>
							<p><a class="btn btn-lg btn-circle btn-outline-new-white" href="#gomenu">Pesan sekarang</a></p>
						</div>
					</div>
				</div>
			</li>
		</ul>
		<div class="slides-navigation">
			<a href="#" class="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
			<a href="#" class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
		</div>
	</div>
	<!-- End slides -->

	<!-- Start About -->
	<div class="about-section-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12 text-center">
					<div class="inner-column">
						<h1>Selamat datang di <br><span>Restoran FinalDeBeh</span></h1>
						<h4>Tentang kami</h4>
						<p>Restoran FinalDeBeh merupakan restoran dengan spesialisasi di masakan nusantara
							 yang dihidangkan oleh berbagai chef professional. Karena orderan yang sangat banyak,
							kami membuat website ini sebagai alternatif pemesanan menu pada restoran FinalDeBeh</p>
							<p>Dengan website ini, kami berusaha semaksimal mungkin untuk melayani pembeli secara cepat
							dan tepat. Keuntungan utama dari website ini yaitu pemesanan makanan di restoran FinalDeBeh dapat dilakukan secara jauh lebih mudah </p>
						<a class="btn btn-lg btn-circle btn-outline-new-white" href="#">Pesan sekarang</a>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12">
					<img src="images/resto.jpg" alt="" class="img-fluid">
				</div>
			</div>
		</div>
	</div>
	<!-- End About -->

	<!-- Start QT -->
	<div class="qt-box qt-background">
		<div class="container">
			<div class="row">
				<div class="col-md-8 ml-auto mr-auto text-center">
					<p class="lead ">
						" A lot of restaurant serve good food, but they don't have very good service. "
					</p>
					<span class="lead">Andre William</span>
				</div>
			</div>
		</div>
	</div>
	<!-- End QT -->
 
	<!-- Start Menu -->
	<div class="menu-box" id="gomenu">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>Menu</h2>
						<p>Berikut adalah daftar menu pada restoran FinalDeBeh</p>
					</div>
				</div>
			</div>

			<div class="row inner-menu-box">
				<div class="col-3">
					<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">

						<a class="nav-link active kategoriMenu" data-kategoriid="semua"  data-toggle="pill" aria-selected="true">All</a>
						
						<div id="loadKategori">
						<!-- kategori disini -->
							
						</div>	
					</div>
				</div>

				<div class="col-9">
					<div class="tab-content" id="v-pills-tabContent">
						<div class="tab-pane fade show active" id="v-pills-all" role="tabpanel"
							aria-labelledby="v-pills-home-tab">
							<div id="dynamicMenuAll" class="row">
							<!-- Menu disini -->

								
							</div>

						</div>
						
					</div>
				</div>
			</div>

		</div>
	</div>
	<!-- End Menu -->

	<!-- Start Gallery -->
	<div class="gallery-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>Galeri Restoran FinalDeBeh</h2>
						<p>Restoran FinalDeBeh memiliki tempat yang luas dan nyaman</p>
					</div>
				</div>
			</div>
			<div class="tz-gallery">
				<div class="row">
					<div class="col-sm-12 col-md-4 col-lg-4">
						<a class="lightbox" href="images/Restoran1.jpg">
							<img class="img-fluid" src="images/Restoran1.jpg" alt="Gallery Images">
						</a>
					</div>
					<div class="col-sm-6 col-md-4 col-lg-4">
						<a class="lightbox" href="images/Restoran2.jpg">
							<img class="img-fluid" src="images/Restoran2.jpg" alt="Gallery Images">
						</a>
					</div>
					<div class="col-sm-6 col-md-4 col-lg-4">
						<a class="lightbox" href="images/Restoran3.jpg">
							<img class="img-fluid" src="images/Restoran3.jpg" alt="Gallery Images">
						</a>
					</div>
					<div class="col-sm-12 col-md-4 col-lg-4">
						<a class="lightbox" href="images/Restoran4.jpg">
							<img class="img-fluid" src="images/Restoran4.jpg" alt="Gallery Images">
						</a>
					</div>
					<div class="col-sm-6 col-md-4 col-lg-4">
						<a class="lightbox" href="images/Restoran5.jpg">
							<img class="img-fluid" src="images/Restoran5.jpg" alt="Gallery Images">
						</a>
					</div>
					<div class="col-sm-6 col-md-4 col-lg-4">
						<a class="lightbox" href="images/Restoran6.jpg">
							<img class="img-fluid" src="images/Restoran6.jpg" alt="Gallery Images">
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Gallery -->

	<!-- Start Customer Reviews -->
	<div class="customer-reviews-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>Ulasan Customer Kami</h2>
						<p>Apa kata mereka ?</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-8 mr-auto ml-auto text-center">
					<div id="reviews" class="carousel slide" data-ride="carousel">
						<div class="carousel-inner mt-4">
							<div class="carousel-item text-center active">
								<div class="img-box p-1 border rounded-circle m-auto">
									<img class="d-block w-100 rounded-circle" src="images/quotations-button.png" alt="">
								</div>
								<h5 class="mt-4 mb-0"><strong class="text-warning text-uppercase">Zea mays</strong>
								</h5>
								<h6 class="text-dark m-0">Petani</h6>
								<p class="m-0 pt-3">Masakan di restoran ini sangat nikmat ditambah dengan suasana
									yang menyenangkan
								</p>
							</div>
							<div class="carousel-item text-center">
								<div class="img-box p-1 border rounded-circle m-auto">
									<img class="d-block w-100 rounded-circle" src="images/quotations-button.png" alt="">
								</div>
								<h5 class="mt-4 mb-0"><strong class="text-warning text-uppercase">Steven Santoso</strong>
								</h5>
								<h6 class="text-dark m-0">Web Designer</h6>
								<p class="m-0 pt-3">Pelayananya sangat ramah dan suasana restoran sangat menyenangkan
									. Ditambah dengan kualitas makanan nomor satu serta terjamin kebersihanya
								</p>
							</div>
							<div class="carousel-item text-center">
								<div class="img-box p-1 border rounded-circle m-auto">
									<img class="d-block w-100 rounded-circle" src="images/quotations-button.png" alt="">
								</div>
								<h5 class="mt-4 mb-0"><strong class="text-warning text-uppercase">Daniel Rigid</strong>
								</h5>
								<h6 class="text-dark m-0">Peternak ayam</h6>
								<p class="m-0 pt-3">Awalnya saya kesulitan untuk memesan di restoran ini karena antrianya
									selalu mengular. Tetapi setelah menggunakan website ini pemesanan terasa jauh lebih mudah.
									Saya sampai ketagihan dan bisa memesan hingga 6 porsi dalam sehari.
								</p>
							</div>
						</div>
						<a class="carousel-control-prev" href="#reviews" role="button" data-slide="prev">
							<i class="fa fa-angle-left" aria-hidden="true"></i>
							<span class="sr-only">Previous</span>
						</a>
						<a class="carousel-control-next" href="#reviews" role="button" data-slide="next">
							<i class="fa fa-angle-right" aria-hidden="true"></i>
							<span class="sr-only">Next</span>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Customer Reviews -->

	<!-- Start Contact info -->
	<div class="contact-imfo-box mb-3">
		<div class="container">
			<div class="row">
				<div class="col-md-4 arrow-right">
					<i class="fa fa-volume-control-phone"></i>
					<div class="overflow-hidden">
						<h4>Telepon</h4>
						<p class="lead">
							+62 833 5566 7788
						</p>
					</div>
				</div>
				<div class="col-md-4 arrow-right">
					<i class="fa fa-envelope"></i>
					<div class="overflow-hidden">
						<h4>Email</h4>
						<p class="lead">
							FinalDeBeh@gmail.com
						</p>
					</div>
				</div>
				<div class="col-md-4">
					<i class="fa fa-map-marker"></i>
					<div class="overflow-hidden">
						<h4>Lokasi</h4>
						<p class="lead">
							Jl. finalprojectdatabaseLB no 20 
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Contact info -->

	<!-- Start Footer -->
	<footer class="footer-area bg-f">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<h3>Tentang kami</h3>
					<p>Restoran FinalDeBeh merupakan restoran dengan spesisalisasi pada masakan nusantara.
						Selain melalui onsite, pelanggan dapat membeli hidangan pada website ini untuk order secara online
						ataupun ingin memesan makanan lebih dahulu
					</p>
				</div>
				<div class="col-lg-3 col-md-6">
					<h3>Berlangganan</h3>
					<div class="subscribe_form">
						<form class="subscribe_form">
							<input name="EMAIL" id="subs-email" class="form_input" placeholder="Email Address..."
								type="email">
							<button type="submit" class="submit">Berlangganan</button>
							<div class="clearfix"></div>
						</form>
					</div>
					<ul class="list-inline f-social">
						<li class="list-inline-item"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
						</li>
						<li class="list-inline-item"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
						</li>
						<li class="list-inline-item"><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
						</li>
						<li class="list-inline-item"><a href="#"><i class="fa fa-google-plus"
									aria-hidden="true"></i></a></li>
						<li class="list-inline-item"><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
						</li>
					</ul>
				</div>
				<div class="col-lg-3 col-md-6">
					<h3>Hubungi kami</h3>
					<p class="lead">Jl. FinalDeBehLB no 20</p>
					<p class="lead"><a href="#">+62 833 5566 7788</a></p>
					<p><a href="#"> FinalDeBeh@gmail.com</a></p>
				</div>
				<div class="col-lg-3 col-md-6">
					<h3>Jam operasional</h3>
					<p><span class="text-color">Senin: </span>TUTUP</p>
					<p><span class="text-color">Selasa-sabtu :</span> 05:00 - 22:00</p>
					<p><span class="text-color">Minggu :</span> 5:00 - 00:00</p>
				</div>
			</div>
		</div>

		<div class="copyright">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<p class="company-name">All Rights Reserved. &copy; 2020 <a href="#">FinalDeBeh</a>
							Dibuat untuk :
							Final Project Database System</p>
					</div>
				</div>
			</div>
		</div>

	</footer>
	<!-- End Footer -->

	<a href="#" id="back-to-top" title="Back to top" style="display: none;"><i class="fa fa-paper-plane-o"
			aria-hidden="true"></i></a>

	<!-- ALL JS FILES -->
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
	<script src="loadHomeMenu.js"></script>
</body>

</html>

<?php
}else
?>