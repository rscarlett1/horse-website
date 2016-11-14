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

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

    
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
<header>        
 
  <div class="container-fluid">
    <div class="row">
      <div id="horse-header">
            <div id="top-header" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <p>We Deliver Every Weekday</p>
            <p> &#40;04&#41;123 4567</p>
            <p>My Bag</p>
        </div>
      </div><!-- horse-header -->
    </div><!-- row -->
  </div><!-- container fluid -->
    

  <div id="background-image">
    <div class="container-fluid">
      <div class="row">
        <div class="col-xs-12 col-sm-0 col-md-4 col-lg-4">
      </div>

      <div id="header-logo" class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
        <img src="http://localhost/horse/wp-content/uploads/2016/11/logo-horse.png" class="img-responsive" alt="Responsive image">
      </div>

      <div class="text-right col-xs-12 col-sm-6 col-md-4 col-lg-4">
        <div id="custom-search-input" class="text-center">
          <div id="header-search" class="input-group">
            <input type="text" class="  search-query form-control" placeholder="Search" />
              <span class="input-group-btn">
                  <button class="btn btn-danger" type="button">
                    <span class=" glyphicon glyphicon-search"></span>
                  </button>
              </span>
          </div><!-- input-group -->
         </div><!-- custom search input -->
        </div><!-- header search -->
      </div><!-- row -->
    </div><!-- container-fluid -->
    






    <nav id="master" class="navbar">
      <div  class="container-fluid">
        <div class="row">
          <div class="col-xs-10 col-sm-10 col-md-10 col-md-10>
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
              </div>

              <div id="nav-style"class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                      <li class="active"><a href="#">Home</a></li>
                      <li> <a href="#">About Us</a></li>

                      <li> <a href="#" class="dropdown-toggle" data-toggle="dropdown">My Store<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                           <li> <a href="#">Duvet Cover Sets</a></li>
                          <li> <a href="#">Figurines</a></li>
                          <li> <a href="#">Horse Cushions</a></li>
                          <li> <a href="#">Wall Paper</a></li>
                        </ul>
                      </li>

                      <li> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Customer Support<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                           <li> <a href="#">Past Orders</a></li>
                          <li> <a href="#">Edit Profile</a></li>
                        </ul>
                      </li>

                      <li> <a href="#">Contact Us</a></li>
                          

                      <li> <a href="#" class="dropdown-toggle" data-toggle="dropdown">My Account<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                           <li> <a href="#">Past Orders</a></li>
                          <li> <a href="#">Edit Profile</a></li>
                        </ul>
                      </li>
                    </ul>
                      
                    <div class="col-sm-2 col-md-2 col-lg-2 sign-up-right">
                    <ul>
                      <li>
                        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                      </li>
                    </ul>
                   </div> 
            </div><!-- collapse -->
          </div><!-- xs 12 -->
        </div><!-- row -->
      </div><!-- container-fluid-nav -->
    </nav>
  </div><!-- background-image -->
        




</header><!-- header -->