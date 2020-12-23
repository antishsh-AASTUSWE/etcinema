
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>CIniET</title>

    <!-- Bootstrap core CSS -->
    

    <!-- Custom styles for this template -->
    
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/bootstrap.min.css" >
<script src="<?php echo base_url()?>assets/js/jquery-3.2.1.slim.min.js" ></script>
<script src="<?php echo base_url()?>assets/js/popper.min.js"></script>
<script src="<?php echo base_url()?>assets/js/bootstrap.min.js" ></script>
<!-- Include the plugin's CSS and JS: -->
<script type="text/javascript" src="<?php echo base_url()?>assets/js/bootstrap-multiselect.min.js"></script>
<link rel="stylesheet" href="<?php echo base_url()?>assets/css/bootstrap-multiselect.css" type="text/css"/>
<link href="<?php echo base_url()?>assets/css/cover.css" rel="stylesheet">



  </head>

  <body>

    <div class="site-wrapper">

      <div class="site-wrapper-inner">

        <div class="cover-container">

          <div class="masthead clearfix">
            <div class="inner">
              <h3 class="masthead-brand">Cover</h3>
              <nav>
              <nav class="nav-menu d-none d-lg-block">
        <ul class="nav masthead-nav">
        <?php if(isset($nav)) {?>            
            <?php foreach($nav as $row){?>
        
          <li><a class="active" href="<?php echo site_url($row['url']);?>"><?php echo $row['nav']?></a></li>
      
    <?php }}?>
                
              </nav>
            </div>
          </div>


          
         