<?php

/**

 * The template for displaying the footer

 *

 * Contains the closing of the #content div and all content after.

 *

 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials

 *

 * @package WordPress

 * @subpackage Twenty_Seventeen

 * @since 1.0

 * @version 1.0

 */



    global $custom_footer_layout;

?>



                </div><!-- .site-content -->



    		</div><!-- .page-wrapper -->



        <!-- OffCanvas Aside Content Left -->

        <div class="offcanvas_aside offcanvas_aside_left">

            <div class="offcanvas_aside_content">

            	<?php //get_template_part( 'offcanvas', 'left' ); ?>

            </div>

        </div>



        <!-- OffCanvas Aside Content Right -->

        <div class="offcanvas_aside offcanvas_aside_right ">        

            <div class="offcanvas_aside_content">

            	<?php get_template_part( 'template-parts/offcanvas/offcanvas', 'right' ); ?>

            </div>

        </div>



        <?php get_template_part( 'template-parts/footers/footer', $custom_footer_layout ); ?>



        <?php //if ($sava_debug_is_on) get_template_part( 'debug' ); ?>



    <?php wp_footer(); ?>


    <div class="freequote-overlay">
        <div class="freequote-form">
            <span class="custom-form-close-btn-1"><a href="#" class="close-thik"></a></span>
            <?php echo do_shortcode('[contact-form-7 id="10456" title="Contact"]'); ?>
        </div>
    </div>


    <div class="map-overlay">
        <span class="close-map-btn"><a href="#" class="close-thik"></a></span>
        <div class="map-container">
            <iframe style="border: 0;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11725.05926592956!2d-83.4160151!3d42.7192854!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd17bc17606db09!2sClarkston+Stone+%26+Tile+Inc.!5e0!3m2!1sen!2sus!4v1478769877325" width="100%" height="100%" frameborder="0" allowfullscreen="allowfullscreen"></iframe>
        </div>
    </div>





</body>

</html>





