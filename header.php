<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<title><?php bloginfo('description'); ?> | <?php bloginfo('name'); ?></title>

<!-- Google fonts -->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700' rel='stylesheet' type='text/css'>

<!-- font awesome -->
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

<!-- bootstrap -->
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/bootstrap/css/bootstrap.min.css" />

<!-- animate.css 
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/animate/animate.css" /> -->
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/animate/set.css" />

<!-- gallery -->
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/gallery/blueimp-gallery.min.css">

<!-- favicon -->
<link rel="apple-touch-icon" sizes="57x57" href="<?php bloginfo('template_directory'); ?>/images/favicon/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="<?php bloginfo('template_directory'); ?>/images/favicon/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo('template_directory'); ?>/images/favicon/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="<?php bloginfo('template_directory'); ?>/images/favicon/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo('template_directory'); ?>/images/favicon/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="<?php bloginfo('template_directory'); ?>/images/favicon/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="<?php bloginfo('template_directory'); ?>/images/favicon/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="<?php bloginfo('template_directory'); ?>/images/favicon/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('template_directory'); ?>/images/favicon/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="<?php bloginfo('template_directory'); ?>/images/favicon/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('template_directory'); ?>/images/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="<?php bloginfo('template_directory'); ?>/images/favicon/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('template_directory'); ?>/images/favicon/favicon-16x16.png">
<link rel="manifest" href="<?php bloginfo('template_directory'); ?>/images/favicon/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">



<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/style.css">
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style.css">
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/blueimp-gallery.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="topbar animated fadeInLeftBig"></div>

<!-- Header Starts -->
<div class="navbar-wrapper">
      <div class="container">

        <div class="navbar navbar-inverse navbar-fixed-top" role="navigation" id="top-nav">
          <div class="container">
            <div class="navbar-header">
              <!-- Logo Starts -->
              <a class="navbar-brand" href="#home"><img src="<?php bloginfo('template_directory'); ?>/images/main_logo.png" alt="logo" ></a>
              <!-- #Logo Ends -->


              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>

            </div>


            <!-- Nav Starts -->
            <div class="navbar-collapse  collapse">
              <ul class="nav navbar-nav navbar-right scroll">
                 <li class="active"><a href="#home">Home</a></li>
                 <li ><a href="#services">Services</a></li>
                 <li ><a href="#team">Team</a></li>
                 <li ><a href="#community">Community</a></li>
				 <li ><a href="#testimonials">Testimonials</a></li>
                 <li ><a href="#contact">Contact</a></li>
              </ul>
            </div>
            <!-- #Nav Ends -->

          </div>
        </div>

      </div>
    </div>
<!-- #Header Starts -->