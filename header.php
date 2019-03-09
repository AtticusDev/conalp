<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Conalp
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
    <nav class="slide-menu" id="test-menu-right">
		<?php
				        $args = array(
			              'theme_location' => 'primary',
			              'depth'      => 3,
			              'container'  => false,
			              'menu_class'     => 'navbar-nav',
		/*	              'walker'     => new Bootstrap_Walker_Nav_Menu()*/
			              );
			            if (has_nav_menu('primary')) {
			              wp_nav_menu($args);
			            }
		?>
	</nav>

<?php
if ( is_page_template( 'templates/home.php' ) ) {
?>

    <div class="controls">
		<button class="hamburger hamburger--collapse slide-menu-control openbtn" type="button" data-target="test-menu-right" data-action="toggle">
		  <span class="hamburger-box">
		    <span class="hamburger-inner"></span>
		  </span>
		</button>
    </div>

<?php
} else {
	?>

    <div class="controls">
		<button class="hamburger hamburger--collapse slide-menu-control openbtn" type="button" data-target="test-menu-right" data-action="toggle">
		  <span class="hamburger-box">
		    <span class="hamburger-inner"></span>
		  </span>
		</button>
    </div>
    <div class="container-fluid">
    	<div class="row">
    		<div class="col header-title text-center text-white">
    			<h2 class="underline">Conal Perrett</h2>
    		</div>
    	</div>
    </div>
<?php
}
?>

<!--	<header id="masthead" class="site-header" role="banner">
	    <nav class="navbar navbar-expand-lg navbar-light bg-light">
	    	<div class="container">
			   <div class="navbar-brand mb-0"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></div>
				<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
				</button>
		   		<div class="collapse navbar-collapse" id="navbarNav">
	            <?php
	            $args = array(
	              'theme_location' => 'primary',
	              'depth'      => 2,
	              'container'  => false,
	              'menu_class'     => 'navbar-nav',
	              'walker'     => new Bootstrap_Walker_Nav_Menu()
	              );
	            if (has_nav_menu('primary')) {
	              wp_nav_menu($args);
	            }
	            ?>
	          </div>

	        </div>
		</nav>
	</header> #masthead 

	<div id="content" class="site-content">
-->