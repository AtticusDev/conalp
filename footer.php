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
				<h2 class="underline">Dr Conal Perrett</h2>
				<p>+44 (0) 20 7034 8057 &nbsp;&nbsp;|&nbsp;&nbsp; info@thedevonshireclinic.co.uk</p>
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
