<?php

session_start();

if(empty($_SESSION['role'])){
    header("location:login/login.php");
}

?>

<!DOCTYPE html>
<html lang="en">
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

<!-- Start All Pages -->
	<div class="all-page-title page-breadcrumb">
		<div class="container text-center">
			<div class="row">
				<div class="col-lg-12">
					<h1>Halaman Profil</h1>
				</div>
			</div>
		</div>
	</div>
	<!-- End All Pages -->
	
	<!-- Start Reservation -->
	<div class="reservation-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>Profil</h2>
						<p>Lengkapi profilmu untuk mendapatkan pengalaman terbaik di website kami</p>
					</div>
                    <div id="alert"> 
                    </div>
                    
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12 col-sm-12 col-xs-12">
					<div class="contact-block">
						
							<div class="row">
								<div class="col-md-6">
									<h3>Foto Profil</h3>																	
									<div class="col-md-12">
                                        <div class="text-center" id="imageContainer">
                                            <img id="imgprofil" src="images/profil/noimage.jpg" class="rounded img-fluid img-thumbnail" alt="kosong">
                                        </div>
									</div>
                                    <div class="col-md-12">
                                    <form id="formfoto" action="prosesFotoProfil.php" method="POST" enctype="multipart/form-data" >
                                            <div class="form-group d-inline-block">
                                                <label for="userpict">Foto profil:</label>
									    		<input type="file" id="userpict" class="form-control-file" name="userpicture">
                                                <button  type="submit" class="btn btn-primary mt-3">Ubah foto</button>
									    	</div> 
                                    </form>
										
									</div>
								</div>
								<div class="col-md-6">
                                
									<h3>Edit profil</h3>
									<div class="col-md-12">
										<div class="form-group">
                                            <label for="username">Nama:</label>
											<input type="text" class="form-control" id="username" name="username" placeholder="Username...">
											
										</div>                                 
									</div>
									<div class="col-md-12">
										<div class="form-group">
                                        <label for="usergender">Jenis Kelamin:</label>
											<input type="text" placeholder="Jenis Kelamin" id="usergender" class="form-control" name="gender" >
											
										</div> 
									</div>
									<div class="col-md-12">
										<div class="form-group">
                                        <label for="userphone">Telepon:</label>
											<input type="text" placeholder="Telepon" id="userphone" class="form-control" name="telepon">
											
										</div> 
									</div>
                                
								</div>
								<div class="col-md-12">
									<div class="submit-button text-center">
										<button class="btn btn-common" id="submit">Edit Profil</button>
										<div id="msgSubmit" class="h3 text-center hidden"></div> 
										<div class="clearfix"></div> 
									</div>
								</div>
							</div>            
						
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Reservation -->







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
    <script src="scriptProfil.js"></script>
	
</body>
</html>