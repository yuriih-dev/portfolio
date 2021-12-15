<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Dekha
 */

?>
<!-- START FOOTER -->
<div class="footer">
	<div class="container">
			<div class="row">
				<div class="col-sm-6">

					<?php

						if(is_active_sidebar( 'f-left' )){
							dynamic_sidebar( 'f-left' );
						}
					
					?>
				</div> <!-- End Col -->
				<div class="col-sm-6">	
					<?php						
					if(is_active_sidebar( 'r-left' )){
							dynamic_sidebar( 'r-left' );
						}	
					?>					
				</div> <!-- End Col -->
			</div>
		</div>						
	</div>	
	<?php wp_footer(); ?>
	</body>
</html>	
