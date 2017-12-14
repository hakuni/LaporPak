<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if($this->session->userdata('status')=='login'){ ?>

<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <title>Edit Password</title>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/login/styles_login.css">
</head>

<body>
    <div  class="container" id="registration-form" >
        <div class="image"></div>
        <div class="frm">
            <h1>Edit Password</h1>
						<p><?php echo $error; ?></p>
            <form action="<?php echo base_url(). 'editP/passAction'; ?>" method="post">
                <div class="form-group">
                    <label for="username">KTP:</label>
                    <input class="form-control" value="<?php echo $this->session->userdata('no_KTP'); ?>" disabled>
                </div>
                <div class="form-group">
                    <label for="pwd">Password:</label>
                    <input type="password" class="form-control" name="pass" placeholder="Masukkan password" required>
                </div>
                <div class="form-group">
                    <label for="pwd">Konfirmasi Password:</label>
                    <input type="password" class="form-control" placeholder="Masukan ulang password" name="konfirm" maxlength="10" required>
                </div>
                <div class="form-group">
                    <input type="submit" name="submit" class="btn btn-success btn-lg" value="Simpan">
                    <a href="<?php echo base_url().'profile/index/'.$this->session->userdata('no_KTP')?>"><input type="button" name="submit" class="btn btn-fail btn-lg" value="Batal"></a>
                </div>
            </form>

        </div>
    </div>
</body>

</html>
<?php } else redirect('home');?>
