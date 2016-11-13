<?php /** * The template for displaying the footer. * * Contains the closing of the #content div and all content after. * * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials * * @package WiroSableng */ ?>

 
 
<!-- #page -->
<?php wp_footer(); ?>
 
 
<footer>
    <div class="container">
        <div class="row"> 
            <div id="footer-free" class="col-sm-12">
            <a href="/"></a>
            <?php if ( ot_get_option( 'Navbar_logo_horse' ) ) { ?>
            <img src="<?php echo esc_url( ot_get_option( 'Navbar_logo_horse' ) ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
            <?php } ?>

            <p class="text-center panel">Free Shipping On Orders Over &#36;100 in New Zealand</p>
            </div><!-- end col 12 -->
        </div>

       <div class="row">
            <div id="links" class="col-sm-3">
                <?php wp_nav_menu( array( 'menu' => 'ul',
                    'theme_location'    => 'secondary',
                    'menu_class'         => 'list-unstyled list-inline',
                    ));
                    ?>
                <ul>
                    <li><a href="">Blog</a></li>
                    <li><a href="">Contact</a></li>
                    <li><a href="">FAQs</a></li>
                    <li><a href="">Returns and Shipping</a></li>
                    <li><a href="">Testimonials</a></li>
                    <li><a href="">Customer Support</a></li>
                </ul>
            </div><!-- end col sm 3 -->
        
 
   
            <div class="col-sm-6">
            
                <p>Become a Love Of Horses VIP</p>

                <form>
                    <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                    <button type="submit" class="btn">Submit</button>
                    </div>
                </form>
            </div><!-- col  -->
    


        </div><!-- row -->
    </div><!-- container -->
</footer>
 
 
    <!-- BOOTSTRAP CORE JAVASCRIPT -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php bloginfo('template_directory') ?>/assets/js/jquery-2.2.4.min.js"></script>
    <script src="<?php bloginfo('template_directory') ?>/assets/js/bootstrap.min.js"></script>
</body>
</html>