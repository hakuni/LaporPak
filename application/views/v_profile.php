 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

if($this->session->userdata('status')=='login'){ ?>
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
	<link rel="stylesheet" href="<?php echo base_url()?>assets/home/css/style.css">

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
            <?php if($this->session->userdata('otoritas')==1 || $this->session->userdata('otoritas')==2){ ?>
						<li><a href="<?php echo base_url()?>Dashboard">Dashboard</a></li> <?php } ?>
						<li><a href="<?php echo base_url()?>list_laporan">Laporan</a></li>
						<li><a href="#">About</a></li>
						<li><a href="#">Contact</a></li>
						<?php if($this->session->userdata('status') != "login"){ ?>
						<li class="cta"><a href="<?php echo base_url()?>login">Login</a></li>
						<?php }else{ ?>
						<li><a href="<?php echo base_url()?>profile">Profil</a></li>
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
      <ul class="nav nav-tabs nav-justified text-center">
            <li class="active"><a data-toggle="tab" href="#upcoming">PROFIL</a></li>
            <li><a data-toggle="tab" href="#past">LAPORANKU</a></li>
            <li><a data-toggle="tab" href="#bookmark">RUMAHKU</a></li>
      </ul>

      <div class="tab-content">
        <div id="upcoming" class="tab-pane fade in active">
                     <!-- Rincian Profil -->
              <div class="container">
                <div class="row">
									<br/>
									<?php foreach($user as $data){ ?>
									<div class="col-lg-2"></div>
									<div class="col-lg-4 text-center">
										<img src="<?php echo base_url().'gambar/'.$data->foto_profil ?>" class="img-responsive" width="" height="" alt="">
									</div>
									<div class="col-lg-6">
										<h3 data-field="id">Profil Info</h3>
															<table>
																<h2><tbody>
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
																		<td>Username</td>
																		<td>:</td>
																		<td><?php echo $data->username;?></td>
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
																		<td>No Rumah</td>
																		<td>:</td>
																		<td><?php echo $data->nomor_rumah;?></td>
																	</tr>
																	<tr>
																		<td>Alamat</td>
																		<td>:</td>
																		<td><?php foreach($rumah as $rmh){ echo $rmh->alamat;}?></td>
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
																		 else if($data->otoritas == 2){ echo "<td> Penghuni Rumah </td>";} ?>
																	</tr>
																<?php } ?>
																	<tr>
																		<td></td>
																		<td></td>
																		<td><a href="<?php echo base_url();?>editP"><button onclick="document.getElementById('genmodal').style.display='block'" class="submit btn btn-primary btn-xl">Ubah data</button></a></td>
																		<td><a href="<?php echo base_url();?>editP/editPass"><button onclick="document.getElementById('genmodal').style.display='block'" class="submit btn btn-primary btn-xl">Ganti Password</button></a></td>
																	</tr>
																</tbody></h2>
															</table>
														</div>
													</div>
                      </div>
                </div>


        <div id="past" class="tab-pane fade">
          <br/>
					<?php if(!$laporan){ ?>
          <center><p>Anda belum memiliki laporan</p></center>
				<?php } else {
					foreach($laporan as $lapor){ ?>
						<div id="fh5co-blog-section" class="fh5co-light-grey-section">
								<div class="container">
									<div class="row">
										<div class="col-md-4 animate-box">
											<a href="<?php echo base_url().'detail/index/'.$lapor->id_laporan;?>" class="item-grid">
												<div class="image" style="background-image: url(<?php echo base_url().'gambar/'.$lapor->foto ?>)"></div>
												<div class="v-align">
													<div class="v-align-middle">
														<h3 class="title"><?php echo $lapor->topik; ?></h3>
														<h5 class="date"><span><?php echo $lapor->tanggal; ?></span>
														<p><?php echo $lapor->laporan ?></p>
													</div>
												</div>
											</a>
										</div>
									</div>
								</div>
					</div>
				<?php } } ?>
        </div>

				<div id="bookmark" class="tab-pane fade">
          <br />
					<table class="table table-striped">
					    <thead>
					      <tr>
					        <th>No</th>
					        <th>Foto</th>
					        <th>Biodata</th>
					      </tr>
					    </thead>
							<?php $no=0; foreach($penghuni as $data){?>
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
						<?php if ($this->session->userdata('otoritas')==3){ ?>
          <td><center><a href="<?php echo base_url()?>register"><button onclick="document.getElementById('genmodal').style.display='block'" class="submit btn btn-primary btn-xl">Tambahkan Penghuni</center></button></a></td>
					<?php } ?>
        </div>
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
