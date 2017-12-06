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
