<?php

function custom_header_products_acrhive() {	
?>
    
   <div class="header-custom-wrapper">
   		<h1>Matuzalem - Molecula vietii</h1>
   </div>
	
<?php
}
add_action( 'woocommerce_header_custom', 'custom_header_products_acrhive', 50);


function woocommerce_button_proceed_to_checkout() {
   $checkout_url = WC()->cart->get_checkout_url();
   ?>
   <a href="<?php echo $checkout_url; ?>" class="checkout-button button alt wc-forward"><?php _e( 'Finalizati comanda', 'woocommerce' ); ?></a>
   <?php
 }