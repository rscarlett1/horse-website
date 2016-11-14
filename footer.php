<?php /** * The template for displaying the footer. * * Contains the closing of the #content div and all content after. * * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials * * @package WiroSableng */ ?>

 
<body>
<!-- #page -->
<?php wp_footer(); ?>
 
 
<footer class="footer-mobile">
    <div class="container">
        <div class="row"> 
            <div id="footer-free" class="col-xs-12 col-sm-12 footer-mobile">
              <p class="text-center panel">Free Shipping On Orders Over &#36;100 in New Zealand</p>
            </div><!-- end col 12 -->
        </div>

       <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-4 links footer-mobile">
                <ul>
                    <li><a href="">Blog</a></li>
                    <li><a href="">Contact</a></li>
                    <li><a href="">FAQs</a></li>
                    <li><a href="">Returns and Shipping</a></li>
                    <li><a href="">Testimonials</a></li>
                    <li><a href="">Customer Support</a></li>
                </ul>
            </div><!-- end col sm 3 -->
        
 
   
            <div id="member-align" class="col-xs-12 col-sm-4 col-md-4 footer-mobile">
                <form id="footer-email" class="footer-mobile">
                    <div class="form-group">
                        <h5 class="text-center">Become a Love Of Horses VIP</h5>
                        <label for="exampleInputEmail1">Email address:</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                        <button type="submit" class="btn">Submit</button>
                    </div>
                </form>
            </div><!-- col  -->

            <div id="address" class="col-xs-12 col-sm-4 col-md-4 links footer-mobile">

                <ul>
                    <li><strong>Address:</strong></li>
                    <br>
                    <li>36 California Drive</li>
                    <li>Totara Park</li>
                    <li>Upper Hutt</li>
                    <br>
                    <li>Ph: &#40;04&#41;123 4567</li>
                </ul>
            </div>
    


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