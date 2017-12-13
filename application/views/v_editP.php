<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if($this->session->userdata('status')=='login'){ ?>

  <!DOCTYPE html>
  <html>
  <head>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta charset="utf-8">
      <title>Edit Profil</title>
      <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/login/style_edit.css">
  </head>

  <body>
      <div class="container" id="registration-form">
          <div class="image">
              <h3>Edit Akun</h3>
              <p><?php echo validation_errors(); ?></p>
              <p><?php echo $error;?></p>
              <?php echo form_open_multipart('editP/action');?>
                  <?php foreach($user as $data){ ?>
                    <div class="w3-section w3-center">
      									<br><label><b>Tambahkan Foto</b></label>
      									<p> Upload foto, max 2 MB </p>
      									<input class="w3-input w3-border" name="berkas" type="file" required>
      							</div>
                  <div class="form-group">
                      <br/>
                      <label for="pwd">No Rumah:</label>
                      <input class="form-control" value="<?php echo $data->nomor_rumah ?>" disabled>
                  </div>
                  <?php if($this->session->userdata('otoritas')==3){ ?>
                  <div class="form-group">
                      <label for="pwd">Alamat:</label>
                      <input name="alamat" type="text" class="form-control"  placeholder="Masukkan alamat">
                  </div>
                  <?php } ?>
                  <div class="form-group">
                      <label for="username">Nomor telepon:</label>
                      <input type="number" class="form-control" name="telp" placeholder="Masukan nomor telepon" name="no_KTP" maxlength="13">
                  </div>
                </div>
          <div class="frm">
                  </br>
                  <div class="form-group">
                      <label for="username">Nomor KTP:</label>
                      <input class="form-control" value="<?php echo $data->no_KTP ?>" disabled>
                  </div>
                  <div class="form-group">
                      <label for="pwd">Nama:</label>
                      <input class="form-control"value="<?php echo $data->nama ?>" disabled>
                  </div>
                  <div class="form-group">
                      <label for="username">Username:</label>
                      <input class="form-control" value="<?php echo $data->username ?>" disabled>
                  </div>
                  <div class="form-group">
                    <label for="username">Agama:</label>
                          <center><select name="agama">
                          <option value="">Pilih Agama</option>
                          <option value="Islam">Islam</option>
                          <option value="Katolik">Katolik</option>
                          <option value="Protestan">Protestan</option>
                          <option value="Hindu">Hindu</option>
                          <option value="Budha">Budha</option>
                          <option value="Tionghoa">Tionghoa</option>
                          <option value="Lainnya">Lainnya</option>
                        </select></center>
                  </div>
                <?php } ?>
                  <div class="form-group">
                      <input type="submit" name="submit" class="btn btn-success btn-lg" value="Simpan">
                      <a href="<?php echo base_url().'profile'?>"><input type="button" name="submit" class="btn btn-fail btn-lg" value="Batal"></a>
                  </div>
          </div>
      </div>
  </body>

  </html>

<?php }
else
  redirect('login');?>
