<!DOCTYPE html>
<html lang="en">
<head>
  <title>Upload File</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/desainjson.css">
  <script src="assets/jquery/3.2.0/jquery.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
</head>
<body background="assets/back.jpg">
<br>
<div class="container">
<div class="kotak">
<h3>Uploader file</h3>
<br>
<h5>upload your file to local folder</h5>
<body>
	<?php echo $error; ?>

	<?php echo form_open_multipart('upload/aksi_upload'); ?>

	<input type="file" name="berkas" size="20" />

	<br>

	<input type="submit" value="upload" />

	</form>
</div>
  </div>
</body>
</html>