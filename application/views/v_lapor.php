<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if($this->session->userdata('status')=='login'){ ?>
	<!DOCTYPE html>
	<html>

	<head>
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <meta charset="utf-8">
	    <title>Lapor</title>
	    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/login/styles_lapor.css">
	</head>

	<body>
	    <div class="container" id="registration-form">
	        <div class="frm">
	            <h1>Buat Laporan</h1>
							<p><?php echo $error;?><p>
	            <?php echo form_open_multipart('lapor/action_lapor');?>
							<div class="form-group"><br/>
							<h3>Topik <b>Laporan</b></h3>
								<input class="col-md-12" name="topik" placeholder="Topik" required>
							<br/>
							<br/>
									<textarea id="isiartikel" class="col-md-12" name="laporan" placeholder="Isi Laporan" required></textarea><br/>
							<br/>
							</div>
							<div class="form-group">
									<br><label><b>Tambahkan Foto</b></label>
									<p> Upload foto, max 2 MB </p>
									<input class="w3-input w3-border" name="berkas" type="file" required>
							</div>
							<div class="form-group">
									<br/>
									<input type="submit" name="submit" class="btn btn btn-primary btn-xl col-md-12" value="KIRIM">
							</div>
							<div class="form-group">
									<br/>
									<a href="<?php echo base_url()?>"><input type="button" class="btn btn btn-second btn-xl col-md-12" value="BATAL"></a>
							</div>
					</div>
	  </div>
	</body>

	</html>

<?php } else redirect('login');?>
