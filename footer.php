<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Conalp
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="container">
			<div class="site-info text-center text-white">
    			<h2 class="underline topTitle">
    				<?php
    					$url = home_url();
    				?>
    				<a href="<?php echo $url; ?>">Dr Conal Perrett</a></h2>
				<p><a href="tel:+44 (0) 20 7034 8057">+44 (0) 20 7034 8057</a> &nbsp;&nbsp;|&nbsp;&nbsp; <a href="mailto:info@thedevonshireclinic.co.uk">info@thedevonshireclinic.co.uk</a></p>
				&copy; <?php bloginfo( 'name' );
						echo ' - ';
						echo date("Y"); ?>
			</div><!-- .site-info -->
		</div><!--  .container -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
