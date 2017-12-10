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
    <?php foreach ($laporan->result() as $key): ?>
      <form action="<?php echo base_url();?>dashboard/action_update/<?php echo $key->id_laporan ?>"method="post">
        <input type="text" name="no_KTP" placeholder="Masukan Nomor KTP"value=<?php echo $key->no_KTP ?>><br>
        <input type="text" name="topik" placeholder="Masukan Topik"value=<?php echo $key->topik ?>><br>
        <input type="text" name="laporan" placeholder="Masukan laporan"value=<?php echo $key->laporan ?>><br><br>
        <input type="submit" value="Save">
      </form>
    <?php endforeach; ?>
  </body>
</html>
