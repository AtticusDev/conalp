<?php
/**
 * Template part for displaying page content in general.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Conalp
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="container mt-5">
		<div class="row">
			<div class="col text-center">
				<h1 class="underline-gold"><?php the_title(); ?></h1>
			</div>
		</div>
	</div>
	<div class="container mb-5">
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

</article><!-- #post-## -->
