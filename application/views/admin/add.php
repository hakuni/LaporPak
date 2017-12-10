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
    <form action="<?php echo base_url();?>dashboard/action_add"method="post">
      <input type="text" name="no_KTP" placeholder="Masukan nomor KTP"><br>
      <input type="text" name="topik" placeholder="Masukan topik laporan"><br>
      <input type="text" name="laporan" placeholder="Masukan laporan"><br><br>
      <input type="submit" value="Save">
    </form>
  </body>
</html>
