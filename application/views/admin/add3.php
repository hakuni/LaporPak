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
    <form action="<?php echo base_url();?>dashboard/action_add3"method="post">
      <input type="text" name="topik_pengumuman" placeholder="Masukkan Topik pengumuman"><br>
      <input type="text" name="deskripsi_pengumuman" placeholder="Masukan deskripsi pengumuman "><br><br>
      <input type="submit" value="Save">
    </form>
  </br>
    <a href="<?php echo base_url().'Dashboard'?>"><button>Batal</button></a>
  </body>
</html>
