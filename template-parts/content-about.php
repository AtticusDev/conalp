<?php
/**
 * Template part for displaying page content in about.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Conalp
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="container-fluid about-banner" style="background-image: url('<?php the_post_thumbnail_url(); ?>');  background-color: #0b0918;">
			<div class="container">
				<div class="row justify-content-end">
					<div class="col-sm-12 col-md-6 text-center intro-strap">
						<p>
						<?php
							the_content();
						?>
						</p>
					</div>

				</div>
			</div>
	</div>
	<div class="container">
		<div class="row">
				<?php if( have_rows('two_col_block') ): 
					 while( have_rows('two_col_block') ): the_row(); 
					// vars
				 	$colonetitle = get_sub_field('col_one_title');
					$colone = get_sub_field('col_one');
				 	$coltwotitle = get_sub_field('col_two_title');
					$coltwo = get_sub_field('col_two');
				?>

					<div class="col-md-6">
						<h2 class="blockTitles"><?php echo $colonetitle; ?></h2>
						<?php echo $colone; ?>
					</div>
					<div class="col-md-6">
						<h2 class="blockTitles"><?php echo $coltwotitle; ?></h2>
						<?php echo $coltwo; ?>
					</div>

				<?php endwhile;
				endif; ?>
		</div>
	</div>
	<div class="container-fluid" style="background-color: #f6f6f6;">
		<div class="row">
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center pt-4 pb-4">
						<h2 class="underline-gold"><?php the_field('gmc_title'); ?></h2>
						<?php the_field('gmc_block') ?>
					</div>
				</div>
			</div>
		</div>
	</div>

</article><!-- #post-## -->
