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
            <p>We Deliver Every Weekday</p>
            <p> &#40;04&#41;123 4567</p>
            <p>My Bag</p>
        </div>
      </div><!-- horse-header -->
    </div><!-- row -->
  </div><!-- container -->



  
    <div id="background-image" class="row">
    
        <div class="col-xs-12 col-sm-0 col-md-4 col-lg-4"></div>

          <div id="header-logo" class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
            <img src="http://localhost/horse/wp-content/uploads/2016/11/logo-horse.png" class="img-responsive" alt="Responsive image">
          </div>

      <div id="header-search" class="text-right col-xs-12 col-sm-6 col-md-4 col-lg-4">
        <div id="custom-search-input" class="text-center">
          <div class="input-group">
              <input type="text" class="  search-query form-control" placeholder="Search" />
              <span class="input-group-btn">
                  <button class="btn btn-danger" type="button">
                      <span class=" glyphicon glyphicon-search"></span>
                  </button>
              </span>
          </div>
        </div>
      </div>
    </div><!-- row -->

      <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
    
      

            
              <ul class="nav navbar-nav navbar-right">
                <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
              </ul>
            
  




  <nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home<span class="sr-only">(current)</span></a></li>
        

        <li class="dropdown">
          <a href="My Store" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">The Store<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Duvet Cover Sets</a></li>
            <li><a href="#">Figurines</a></li>
            <li><a href="#">Wallpaper</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Horse Cushions</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">posters</a></li>
          </ul>
        </li>
      </ul>

       <ul class="nav navbar-nav">
        <li><a href="#">About Us</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

</div><!-- row -->
</div><!-- container -->
</nav>












        

        

  
    </div><!-- container -->
</header><!-- header -->