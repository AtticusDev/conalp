<?php
/**
 * Template part for displaying page content in service.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Conalp
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="container-fluid about-banner" style="background-image: url('<?php the_post_thumbnail_url(); ?>');  background-color: #ffffff;">
			<div class="container">
				<div class="row justify-content-left">
					<div class="col-sm-12 col-md-4 service-strap">
						<h1 class="underline-gold-left">
							<?php
							the_title();
							?>
						</h1>
						<p>
							<?php
								the_content();
							?>
						</p>
					</div>

				</div>
			</div>
	</div>
	<div class="container-fluid pt-5 pb-5" style="background-color: #f6f6f6;">
		<div class="row">
			<div class="container">
				<div class="row">
					<div class="col text-center">
						<h2 class="underline-gold"><?php the_title(); ?> treatments</h2> 
					</div>
				</div>
				<div class="row justify-content-center text-center">
						<?php if( have_rows('skin_cancer_treatment') ): 
							 while( have_rows('skin_cancer_treatment') ): the_row(); 
							// vars
						 	$title = get_sub_field('title');
							$link = get_sub_field('link');
						?>

							<div class="col-md-6">
								<a href="<?php echo $link; ?>" class="btn treatmentBlock">
									<?php echo $title; ?>
								</a>
							</div>

						<?php endwhile;
						endif; ?>
				</div>
			</div>
		</div>
	</div>
	<div class="container mb-5 mt-5">
		<div class="row justify-content-center">
			<div class="col-md-8 text-center">
				<h2 class="underline-gold">Enquire about <?php the_title(); ?></h2>
				<?php
					echo do_shortcode('[gravityform id=1 name=Enquiry title=false description=false]');
				?>
			</div>
		</div>
	</div>



</article><!-- #post-## -->
