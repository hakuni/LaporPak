<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Input Data</title>
    <link rel="stylesheet" href="">
  </head>
  <body>
    <h2>Input Data</h2>
    <form action="<?php echo base_url();?>dashboard/action_add2"method="post">
      <input type="text" name="no_KTP" placeholder="Masukan nomor KTP"><br>
      <input type="text" name="nama" placeholder="Masukkan nama anda"><br>
      <input type="text" name="nomor_rumah" placeholder="Masukan nomor rumah "><br><br>
      <input type="submit" value="Save">
    </form>
  </body>
</html>
