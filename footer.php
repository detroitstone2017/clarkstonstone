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




</body>

</html>





