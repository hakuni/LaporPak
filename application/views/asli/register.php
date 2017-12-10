<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
</head>
<body>
	<center>
		<h1>Register</h1>
		<h3>Tambah data warga baru</h3>
		<?php echo validation_errors(); ?>
	</center>
	<form action="<?php echo base_url(). 'register/action_input'; ?>" method="post">
		<table style="margin:20px auto;">
      <tr>
				<td>No. KTP</td>
				<td><input type="text" name="no_KTP" maxlength="16" required></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama" required></td>
			</tr>
			<tr>
				<td>Username</td>
				<td><input type="text" name="username" maxlength="10" required></td>
			</tr>
      <tr>
				<td>Password</td>
				<td><input type="password" name="pass" maxlength="10" required></td>
			</tr>
			<tr>
				<td>Konfirmasi Password</td>
				<td><input type="password" name="konfirm" maxlength="10" required></td>
			</tr>
			<center>
      <select name="otoritas">
				<?php if($this->session->userdata('otoritas')==1){ ?>
					<option value="2">Ketua RT</option>
				<?php } ?>
          <option value="4">Penghuni</option>
          <option value="3">Pemilik</option>
      </select>
		</center>
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat"></td>
			</tr>
			<tr>
				<tr>
				<td></td>
				<td><input type="submit" name="submit" value="Tambah"></td>
			</tr>
		</table>
	</form>
</body>
</html>



<!--
	profil
	<div id="past" class="tab-pane fade">
	<br/>
	<?php if($laporan->num_rows()==0){?>
	<p>Anda belum memiliki laporan</p>
	<?php }
	else {
		foreach($laporan as $data){ ?>
			<div class="row">
				<div class="col-md-6 col-sm-6 animate-box">
				<a href="#" class="item-grid">
					<div class="image" style="background-image: url(<?php echo base_url();?>gambar/<?php echo $data->foto;?>)"></div>
					<div class="v-align">
						<div class="v-align-middle">
							<h3 class="title"><?php echo $data->topik; ?></h3>
							<h5 class="date"><span><?php echo $data->tanggal; ?></span>
							<p><?php echo $data->laporan; ?></p>
						</div>
					</div>
				</a>
			</div>
		</div>
	<?php } }?>
</div> -->
