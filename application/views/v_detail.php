
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Detail Laporan</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by FreeHTML5.co" />
	<meta name="keywords" content="free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="FreeHTML5.co" />

  <!--
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE
	DESIGNED & DEVELOPED by FreeHTML5.co

	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<link href="https://fonts.googleapis.com/css?family=Raleway:200,300,400,700" rel="stylesheet">

	<!-- Animate.css -->
	<link rel="stylesheet" href="<?php echo base_url()?>assets/home/css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="<?php echo base_url()?>assets/home/css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="<?php echo base_url()?>assets/home/css/bootstrap.css">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="<?php echo base_url()?>assets/home/css/flexslider.css">
	<!-- Theme style  -->
	<link rel="stylesheet" href="<?php echo base_url()?>assets/home/css/style2.css">

	<!-- Modernizr JS -->
	<script src="<?php echo base_url()?>assets/home/js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>


	<div id="fh5co-page">
	<header id="fh5co-header" role="banner">
		<div class="container">
      <div class="header-inner">
				<h1><a href="<?php echo base_url()?>">LaporPak</a></h1>
				<nav role="navigation">
					<ul>
						<li><a href="<?php echo base_url()?>list_laporan">Laporan</a></li>
						<?php if($this->session->userdata('status') != "login"){ ?>
						<li class="cta"><a href="<?php echo base_url()?>login">Login</a></li>
						<?php } else {
							if($this->session->userdata('otoritas')==1 || $this->session->userdata('otoritas')==2){ ?>
									<li><a href="<?php echo base_url()?>Dashboard">Dashboard</a></li> <?php } else {?>
						<li><a href="<?php echo base_url().'profile/index/'.$this->session->userdata('no_KTP')?>">Profil</a></li> <?php } ?>
						<li class="cta"><a href="<?php echo base_url()?>login/logout">Logout</a></li>
					<?php	} ?>
					</ul>
					</ul>
				</nav>
			</div>
		</div>
	</header>
	<div id="fh5co-blog-section" class="fh5co-light-grey-section">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center fh5co-heading animate-box">
						<h2>Detail Laporan Warga</h2>
					</div>
				</div>
				<div class="row">
		    <?php foreach($details as $data){ ?>
						<div class="col-md-6 col-md-offset-3 animate-box">
								<figure>
									<img src="<?php echo base_url().'gambar/'.$data->foto;?>">
								</figure>
							<br/>
								<b><h1><?php echo $data->topik;?></h1></b>
				        <h5 style="color: grey"><span><?php echo $data->tanggal; ?></span></h5><br/>
								<h4><?php echo $data->laporan;?></h4>
			      <?php } ?>
					</div>
				</div>
			</div>
		</div>

		<footer id="fh5co-footer" role="contentinfo">

			<div class="container">
				<div class="col-md-6 col-md-push-1 col-sm-12 col-sm-push-0 col-xs-12 col-xs-push-0">
								<h3>Tentang Kami</h3>
					<p>Sistem informasi berbasis teknologi (web) yang akan berfungsi sebagai alat untuk mengefesiensikan pekerjaan Ketua RT dan pengurusnya dalam memanajemen data warga dan mempermudah warga untuk melaporkan kejadian/ peristiwa secara Real-Time.</p>
				</div>

				<div class="col-md-2 col-md-push-1 col-sm-12 col-sm-push-0 col-xs-12 col-xs-push-0">
					<h3>Our Team</h3>
					<ul class="fh5co-social">
						<li>Adis Mutiara Safitri</li>
						<li>Muhammad Luthfir R</li>
						<li>Ihda Aini F</li>
						<li>Ilham Kurniawan</li>
					</ul>
				</div>


				<div class="col-md-12 fh5co-copyright text-center">
					<p>&copy; 2016 Free HTML5 template. All Rights Reserved. <span>Designed with <i class="icon-heart"></i> by <a href="http://freehtml5.co/" target="_blank">FreeHTML5.co</a> Demo Images by <a href="http://unsplash.com/" target="_blank">Unsplash</a></span></p>
				</div>

			</div>
		</footer>
	</div>


	<!-- jQuery -->
	<script src="<?php echo base_url()?>assets/home/js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="<?php echo base_url()?>assets/home/js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="<?php echo base_url()?>assets/home/js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="<?php echo base_url()?>assets/home/js/jquery.waypoints.min.js"></script>
	<!-- Flexslider -->
	<script src="<?php echo base_url()?>assets/home/js/jquery.flexslider-min.js"></script>
	<!-- Stellar -->
	<script src="<?php echo base_url()?>assets/home/js/jquery.stellar.min.js"></script>

	<!-- MAIN JS -->
	<script src="<?php echo base_url()?>assets/home/js/main.js"></script>

	</body>
</html>
