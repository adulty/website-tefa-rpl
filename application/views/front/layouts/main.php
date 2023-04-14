<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $title ?> - TEFA RPL SMK 1 TRIPLE "J"</title>
     <!-- Bootstrap -->
   <link rel="stylesheet" href="<?= base_url('assets/') ?>vendor/bootstrap/css/bootstrap.min.css">
   <!-- Font Awesome -->
   <link rel="stylesheet" href="<?= base_url('assets/') ?>vendor/fontawesome-free/css/all.min.css">
   	<!-- Icon -->
	<link rel="shortcut icon" type="image/png" href="assets/favicon.png"/>
	<!-- Main CSS -->
	<link rel="stylesheet" href="<?= base_url('assets/')?>css/style.css">
</head>
<body>
    <!-- Navbar -->
<?php echo $this->load->view('front/layouts/navbar'); ?>
    <!-- End of Navbar -->


<!-- Jquery, Bootstrap JS -->
	<script src="<?= base_url('assets/') ?>vendor/jquery/jquery.min.js"></script>
   <script src="<?= base_url('assets/') ?>vendor/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>