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
    <form action="<?php echo base_url();?>crud/action_add"method="post">
      <input type="text" name="nama" placeholder="Masukan Nama"><br>
      <input type="text" name="status" placeholder="Masukan Status"><br>
      <input type="text" name="jurusan" placeholder="Masukan Jurusan"><br><br>
      <input type="submit" value="Save">
    </form>
  </body>
</html>
