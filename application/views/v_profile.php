<!DOCTYPE html>
<html>
<head>
	<title>Profil</title>
</head>
<body>
	<p>Home --> <a href="home">home</a></p>
	<p>Untuk logout --> <a href="login/logout">Logout</a></p>
	<br/>
	<h1>Profil</h1>
		<p>Edit Profil --> <a href="profile/edit_profil">Edit</a></p>
		<?php if($this->session->userdata('otoritas')==3){ ?>
		<p>Tambahkan Penghuni --> <a href="register">Tambah</a></p>
	<?php } ?>
		<p>Buat laporan --> <a href="lapor">Lapor</a></p>
		<?php foreach($user as $data){
		          echo $data->no_KTP;
		          echo $data->nama;
		        }
					?>
</body>
</html>
