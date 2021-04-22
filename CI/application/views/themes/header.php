<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <title>GOTRASH</title>
    <link href="<?php echo base_url()?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="<?php echo base_url()?>assets/asie/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
 
    <!-- Custom styles for this template -->
    <link href="<?php echo base_url()?>assets/custom.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/jquery/jquery-ui.css" rel="stylesheet">
 
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="<?php echo base_url()?>assets/asie/js/ie-emulation-modes-warning.js"></script>
 
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	
	<!-- Favicons -->
  <link href="<?php echo base_url()?>assets/img/favicon.png" rel="icon">
  <link href="<?php echo base_url()?>assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo base_url()?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url()?>assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="<?php echo base_url()?>assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?php echo base_url()?>assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="<?php echo base_url()?>assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="<?php echo base_url()?>assets/vendor/venobox/venobox.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?php echo base_url()?>assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Eterna - v2.2.1
  * Template URL: https://bootstrapmade.com/eterna-free-multipurpose-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  </head>
 
  <body>
 
    <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-none d-lg-block">
    <div class="container d-flex">
      <div class="contact-info mr-auto">
        <i class="icofont-envelope"></i><a href="mailto:contact@example.com">gotrash@gmail.com</a>
        <i class="icofont-phone"></i> +62 812 345 678
      </div>
      <div class="social-links">
        <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
        <a href="#" class="facebook"><i class="icofont-facebook"></i></a>
        <a href="#" class="instagram"><i class="icofont-instagram"></i></a>
        <a href="#" class="skype"><i class="icofont-skype"></i></a>
        <a href="#" class="linkedin"><i class="icofont-linkedin"></i></i></a>
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container d-flex">

      <div class="logo mr-auto">
        <h1 class="text-light"><a href="index.php"><img src="<?php echo base_url()?>assets/images/GOTRASH5.png" alt="" class="img-fluid"></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="../assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="<?php echo base_url();?>">Home</a></li>

          <li class="drop-down"><a href="http://localhost/CI/shopping/">Sampah</a>
            <ul>
              <li><a href="<?php echo base_url();?>shopping/index/1">Kaca</a></li>
              <li><a href="<?php echo base_url();?>shopping/index/2">Kertas</a></li>

              <li><a href="<?php echo base_url();?>shopping/index/3">Metal</a>
                
              </li>
            </ul>
          </li>

          <li><a href="http://localhost/CI/shopping/">Semua</a></li>
		  <li><a href="<?php echo base_url('auth'); ?>">Login</a></li>
          
          <li><a href="http://localhost/CI/shopping/tampil_cart"><img src="<?php echo base_url()?>assets/images/kerabat.png" alt="" width="30px" height="30px"></a></li>
          

        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->
 
    <!-- Begin page content -->
<div class="container">
 
<div class="row">
 
        <div class="col-lg-3">
 
          <div class="list-group">
          	<a class="list-group-item"><strong>KATEGORI</strong></a>
            <a href="<?php echo base_url()?>shopping/" class="list-group-item">Semua</a>
          	<?php
		          	foreach ($kategori as $row)
						{
			?>
            <a href="<?php echo base_url()?>shopping/index/<?php echo $row['id'];?>" class="list-group-item"><?php echo $row['nama_kategori'];?></a>
            <?php
						}
			?>
          </div><br>
 
           <div class="list-group">
           <a href="<?php echo base_url()?>shopping/tampil_cart" class="list-group-item"><strong><i class="glyphicon glyphicon-shopping-cart"></i> KERANJANG BELANJA</strong></a>
          <?php 
 
            $cart= $this->cart->contents();
 
// If cart is empty, this will show below message.
            if(empty($cart)) {
                ?>
                <a class="list-group-item">Keranjang Belanja Kosong</a>
                <?php
            }
            else
                {
                    $grand_total = 0;
                    foreach ($cart as $item)
                        {
                            $grand_total+=$item['subtotal'];
                ?>
                <a class="list-group-item"><?php echo $item['name']; ?> (<?php echo $item['qty']; ?> x <?php echo number_format($item['price'],0,",","."); ?>)=<?php echo number_format($item['subtotal'],0,",","."); ?></a>
                <?php
                        }
                ?>
 
                <?php
                }
 ?>
            </div>
        </div>
        <!-- /.col-lg-3 -->
 
        <div class="col-lg-9">
 
<div class="row">