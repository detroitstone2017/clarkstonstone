

<?php



global $custom_footer_text;



?>

  <div class="upload-overlay">
        <div class="upload-form">
            <span class="btn-close-upload"><i class="fa fa-times"></i></span>
            <?php echo do_shortcode('[contact-form-7 id="10487" title="Upload"]'); ?>
        </div>
    </div>




<footer class="site-footer">



    <div class="footer-style-3">
    

        <div class="row">

            <div class="large-12">

                <?php dynamic_sidebar('footer-widget-area'); ?>

            </div>
            
        </div>


    </div>



    <div class="footer-text">

        <div class="row">

            <div class="large-12 columns">

               <?php echo $custom_footer_text;  ?>

            </div>

        </div>

    </div>



</footer>