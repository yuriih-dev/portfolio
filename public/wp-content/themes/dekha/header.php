<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Dekha
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
	<head>
		<!-- Meta -->
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<?php wp_head(); ?>
	</head>
	<body data-spy="scroll" data-offset="80" <?php body_class(); ?>>
		<!-- START PRELOADER -->
			<div class="preloader">
				<div class="spinner">
					<div class="double-bounce1"></div>
					<div class="double-bounce2"></div>
				</div>
			</div>
		<!-- END PRELOADER -->
		
		<!-- START NAVBAR -->
			<div class="navbar navbar-default navbar-fixed-top menu-top">
				<div class="container">
					<div class="logo">
					<?php
						the_custom_logo();
						if ( is_front_page() && is_home() ) :
							?>
							<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><p><?php bloginfo( 'name' ); ?></p></a>
							<?php
						else :
							?>
							<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><p><?php bloginfo( 'name' ); ?></p></a></p>
							<?php
						endif;
						$dekha_description = get_bloginfo( 'description', 'display' );
						if ( $dekha_description || is_customize_preview() ) :
							?>
							<p class="site-description"><?php echo $dekha_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
						<?php endif; ?>
						<div class="mobile-nav"></div>
					</div>
					<?php echo dekha_nav_menu();?>
					 
				</div><!--- END CONTAINER -->
			</div> 
		<!-- END NAVBAR -->			
		