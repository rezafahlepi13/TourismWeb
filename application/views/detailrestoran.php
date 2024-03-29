<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>WISATA LAMPUNG</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url('assets'); ?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url('assets'); ?>/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url('assets'); ?>/css/font-awesome.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  <?php include('layout/navbar.php'); ?>
   <div class="container">
     <div class="row">
       <div class="col-sm-12 col-md-12">
       <div class="col-sm-9 col-md-9">
         <div class="thumbnail">
            <h4 class="judul"><?php echo $restoran->Nama_Restoran; ?></h4>
          <img src="<?php echo base_url('assets'); ?>/uploads/files/<?php echo $restoran->gambar; ?>" alt="gambar1">
          <div class="caption">
          <?php echo $restoran->Alamat; ?><br/>
          Telp : <?php echo $restoran->Telp; ?>
          </div>
        </div>
       </div>
         <div class="col-sm-3 col-md-3">
            <div class="judul1">
        <img src="<?php echo base_url('assets'); ?>/image/map1.png" alt="gambar1">
        <img src="<?php echo base_url('assets'); ?>/image/kalender1.jpg" alt="gambar1">
        </div>
         </div>
      </div>  
     </div>
   </div>
  </body>
   <script src="<?php echo base_url('assets'); ?>/js/jquery.js"></script>
   <script src="<?php echo base_url('assets'); ?>/js/bootstrap.min.js"></script>
</html>
