<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <title>login</title>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/login/styles.css">
</head>

<body>
    <div class="container" id="registration-form">
        <div class="image"></div>
        <div class="frm">
            <h1>Tambah User</h1>
						<h5><?php echo validation_errors(); ?><h5>
            <form action="<?php echo base_url(). 'register/action_input'; ?>" method="post">
							<div class="form-group">
									<label for="username">Nomor KTP:</label>
									<input type="text" class="form-control" id="username" name="no_KTP" placeholder="Masukkan No.KTP" maxlength="16" required>
							</div>
                <div class="form-group">
                    <label for="nama">Nama:</label>
                    <input type="text" class="form-control" id="username" name="nama" placeholder="Masukkan nama" required>
                </div>
                <div class="form-group">
                    <label for="username">Username:</label>
                    <input type="text" class="form-control" id="username" name="username" placeholder="Masukkan username" maxlength="10" required>
                </div>
                <div class="form-group">
                    <label for="pwd">Password:</label>
                    <input type="password" class="form-control" id="pwd" name="pass" placeholder="Masukkan password" required>
                </div>
								<div class="form-group">
                    <label for="pwd">Konfirmasi Password:</label>
                    <input type="password" class="form-control" id="pwd" name="konfirm" placeholder="Masukkan  konfirmasi password" required>
                </div>
								<div class="form-group">
                    <label for="username">Alamat:</label>
                    <input type="text" class="form-control" id="username" name="alamat" placeholder="Masukkan alamat">
                </div>
                <div class="form-group">
                    <input type="submit" name="submit" class="btn btn-success btn-lg" value="Tambah">
                </div>
            </form>
        </div>
    </div>
</body>

</html>
