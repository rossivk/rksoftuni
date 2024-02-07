<footer>
    <!-- Footer Starts -->
    <div class="footer">

        <div class="container">
            <div class="social spacer text-center">
                <a href="#"><i class="fa fa-facebook fa-2x"></i></a> <a href="#"><i class="fa fa-dribbble fa-2x"></i></a> <a href="#"><i class="fa fa-twitter fa-2x"></i></a> <a href="#"><i class="fa fa-linkedin fa-2x"></i></a>
            </div>
            <div class="row">
                <div class="">
                    <?php
                    if (is_active_sidebar('footer-left')) {
                        get_sidebar('footer-left');
                    };
                    ?>
                </div>
                <div class=" col-sm-4">
                    <?php wp_nav_menu(array(
                        'theme_location'   => 'footer_menu',
                        'menu_class'       => 'footer-menu text-center',
                    )); ?>
                </div>
                <div class="">
                    <?php
                    if (is_active_sidebar('footer-right')) {
                        get_sidebar('footer-right');
                    };
                    ?>
                </div>
            </div>


            <div class="text-center spacer">
                Powered by: <a href="http://thebootstrapthemes.com">www.thebootstrapthemes.com</a>
            </div>
        </div>

    </div>
    <!-- # Footer Ends -->
    <a href="#home" class="gototop "><i class="fa fa-angle-up  fa-3x"></i></a>

    <?php wp_footer(); ?>
</footer>

</body>

</html>