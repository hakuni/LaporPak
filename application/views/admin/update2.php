<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Input Data</title>
    <link rel="stylesheet" href="">
  </head>
  <body>
    <h2>Edit Data</h2>
    <?php foreach ($warga->result() as $key): ?>
      <form action="<?php echo base_url();?>dashboard/action_update2/<?php echo $key->no_KTP ?>"method="post">
        <input type="text" name="nama" placeholder="Masukan Nama"value=<?php echo $key->nama?>> <br>
        <input type="number" name="nomor_rumah" placeholder="Masukan Nomor Rumah"value=<?php echo $key->nomor_rumah ?>> <br><br>
        <input type="submit" value="Save">
      </form>
    <?php endforeach; ?>
  </br>
      <a href="<?php echo base_url().'Dashboard'?>"><button>Batal</button></a>
  </body>
</html>
