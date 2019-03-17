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
    <div class="container-fluid logoPanel">
    	<div class="row">
    		<div class="home-header-title text-center text-white">
    			<div class="topTitle">
    				<h2>
    				<?php
    					$url = home_url();
    				?>
    				<a href="<?php echo $url; ?>">Dr Conal Perrett</a>
	    			</h2>
    			</div>
    		</div>
    	</div>
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
    <div class="container-fluid logoPanel">
    	<div class="row">
    		<div class="header-title text-center text-white">
    			<div class="topTitle">
    				<h2>
    				<?php
    					$url = home_url();
    				?>
    				<a href="<?php echo $url; ?>">Dr Conal Perrett</a>
	    			</h2>
    			</div>
    		</div>
    	</div>
    </div>
    <div id="main">

<?php
}
?>

