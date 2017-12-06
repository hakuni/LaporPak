<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/login/styles.css">
</head>

<body >
    <div  class="container" id="registration-form" >
        <div class="image"></div>
        <div class="frm">
            <h1>Masuk</h1>
						<h5><?php echo $error; ?></h5>
            <form action="<?php echo base_url(). 'login/action_check'; ?>" method="post">
                <div class="form-group">
                    <label for="username">KTP atau Username:</label>
                    <input type="text" class="form-control" name="no_KTP" maxlength="16" placeholder="Masukkan No.KTP atau username" required>
                </div>
                <div class="form-group">
                    <label for="pwd">Password:</label>
                    <input type="password" class="form-control" name="pass" placeholder="Masukkan password" required>
                </div>
                <div class="form-group">
                    <input type="submit" name="submit" class="btn btn-success btn-lg" value="Masuk">
                </div>
            </form>
        </div>
    </div>
</body>

</html>
