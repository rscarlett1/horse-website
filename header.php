<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until
 
 
 
<div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WiroSableng
 */
 
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <!-- bootstrap core css -->

    <link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/style.css" rel="stylesheet">
    <!-- font-awesome -->
    <link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- Raleway font -->
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,700' rel='stylesheet' type='text/css'>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
      <?php if ( ot_get_option( 'Favicon_horse' ) ) { ?>
    <link rel="shortcut icon" href="<?php echo ot_get_option( 'Favicon_horse' ); ?>" />
    <?php } ?>
      <?php wp_head(); ?>
  </head>
 
  <body <?php body_class(); ?>>
 
 
  

        <!-- HEADER -->
 
 <!--  -->

  <div class="container-fluid">
    <div class="row">
      <div id="horse-header">
          <div id="top-header" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <p >We Deliver Every Weekday</p>
            <p> &#40;04&#41;123 4567</p>
            <p>My Bag</p>
        </div>
      </div><!-- horse-header -->
    </div><!-- row -->
  </div><!-- container -->

  <div class="container">
    <div class="row">
      <div class="text-center col-xs-12 col-sm-offset-4 col-sm-4">
        <img src="http://localhost/horse/wp-content/uploads/2016/11/logo-horse.png" class="img-responsive" alt="Responsive image">
      </div>
    

    <div id="custom-search-input">
      <div class="input-group text-right col-xs-12 col-sm-4">
          <input type="text" class="  search-query form-control" placeholder="Search" />
          <span class="input-group-btn">
              <button class="btn btn-danger" type="button">
                  <span class=" glyphicon glyphicon-search"></span>
              </button>
          </span>
      </div>
    </div>
    </div><!-- row -->
  </div><!-- container -->
  


           
  <nav class="navbar navbar-green">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span> 
        </button>
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">Page 1</a></li>
        <li><a href="#">Page 2</a></li> 
        <li><a href="#">Page 3</a></li> 
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>












        

        

  
    </div><!-- container -->
</header><!-- header -->