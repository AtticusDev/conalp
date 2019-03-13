<?php
/**
 * Template part for displaying page content in contact.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Conalp
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="container mb-5 mt-5">
		<div class="row justify-content-center">
			<div class="col-md-8 text-center">
				<h1 class="underline-gold">Contact Dr Conal Perrett</h1>
				<?php
					echo do_shortcode('[gravityform id=1 name=Enquiry title=false description=false]');
				?>
			</div>
		</div>
	</div>
	<div class="container mb-5">
		<div class="row justify-content-center">
			<div class="col-md-8 text-center">
				<?php the_content(); ?>
			</div>
		</div>
	</div>

</article><!-- #post-## -->
