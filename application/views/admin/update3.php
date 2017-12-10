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
    <?php foreach ($infowarga->result() as $key): ?>
      <form action="<?php echo base_url();?>dashboard/action_update3/<?php echo $key->no_pengumuman ?>"method="post">
        <input type="text" name="topik_pengumuman" placeholder="Masukan Topik Pengumuman"value=<?php echo $key->topik_pengumuman?>> <br>
        <input type="text" name="deskripsi_pengumuman" placeholder="Masukan Deskripsi Pengumuman"value=<?php echo $key->deskripsi_pengumuman ?>> <br><br>
        <input type="submit" value="Save">
      </form>
    <?php endforeach; ?>
  </body>
</html>
