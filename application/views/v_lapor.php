<!DOCTYPE html>
<html>
<head>
	<title>Lapor</title>
</head>
<body>
	<center>
		<h1>Lapor</h1>
		<h3>Membuat Laporan Kejadian</h3>
		<?php echo $error;?>
	</center>
	<?php echo form_open_multipart('lapor/action_lapor');?>
		<table style="margin:20px auto;">
      <tr>
				<td>Topik</td>
				<td><input type="text" name="topik" required></td>
			</tr>
			<tr>
				<td>Laporan</td>
				<td><textarea rows="4" cols="50" name="laporan" required></textarea></td>
			</tr>
      <tr>
				<td>Foto</td>
				<td><input type="file" name="berkas" required></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="Submit"></td>
			</tr>
		</table>
	</form>
</body>
</html>
