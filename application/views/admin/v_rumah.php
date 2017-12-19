 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

if($this->session->userdata('status')=='login' && ($this->session->userdata('otoritas') == 2 || $this->session->userdata('otoritas') == 1)){ ?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Profile</title>
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
				</nav>
			</div>
		</div>
	</header>

	<!-- tabs -->
    <br />
    <br />
    <div class="container">
            <center><h2>Data Rumah Warga</h2></center>
          <br />
					<table class="table table-striped">
					    <thead>
					      <tr>
					        <th>No</th>
					        <th>Foto</th>
					        <th>Biodata</th>
					      </tr>
					    </thead>
							<?php $no=0; foreach($x as $data){?>
					    <tbody>
					      <tr>
					        <td><?php echo ++$no; ?></td>
					        <td><img src="<?php echo base_url().'gambar/'.$data->foto_profil ?>" class="img" weight="150px" height="150px"></td>
					        <td>
					        	<table>
											<tr>
												<td>Nama</td>
												<td>:</td>
												<td><?php echo $data->nama;?></td>
											</tr>
											<tr>
												<td>No KTP</td>
												<td>:</td>
												<td><?php echo $data->no_KTP;?></td>
											</tr>
											<tr>
												<td>Jenis Kelamin</td>
												<td>:</td>
												<td><?php echo $data->jenis_k;?></td>
											</tr>
											<tr>
												<td>Agama</td>
												<td>:</td>
												<td><?php echo $data->agama;?></td>
											</tr>
											<tr>
												<td>Telepon</td>
												<td>:</td>
												<td><?php echo $data->telepon;?></td>
											</tr>
											<tr>
												<td>Status</td>
												<td>:</td>
												<?php if($data->otoritas == 3){ echo "<td> Pemilik Rumah </td>"; }
												 else if($data->otoritas == 4){ echo "<td> Penghuni Rumah </td>";} ?>
											</tr>
										</table>
					        </td>
					      </tr>
					    </tbody>
						<?php } ?>
					  </table>
        </div>
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
<?php } else redirect('login');?>
