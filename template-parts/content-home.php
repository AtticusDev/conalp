<?php
/**
 * Template part for displaying page content in home.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Conalp
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="container-fluid home-banner" style="background-image: url('<?php the_post_thumbnail_url(); ?>'); height: 800px; background-color: #0b0918;">
			<div class="container">
				<div class="row justify-content-between">
					<div class="col-sm-12 col-md-4 text-center intro-strap">
						<h1 class="underline"><?php
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
	<div class="container-fluid trans-panel">
	</div>
	</div>
	<div class="container-fluid infoPanel">
		<div class="row">
			<div class="container">
				<div class="row text-center">
				<?php if( have_rows('banner_info') ): 
					 while( have_rows('banner_info') ): the_row(); 
					// vars
					$title = get_sub_field('title');
					$description = get_sub_field('description');
					$link = get_sub_field('link');
				?>

					<div class="col-md-4">
						<h2 class="underline gold"><?php echo $title; ?></h2>
						<?php echo $description; ?>
					</div>

				<?php endwhile;
				endif; ?>



				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="container">
				<div class="row text-center justify-content-center">
					<div class="col-sm-10 col-md-8 col-lg-6 introText">
						<?php
							the_field('introduction');
						?>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="container-fluid">
		<div class="row">
			<div class="container serviceWrapper">
				<div class="row text-center justify-content-center">
					<?php if( have_rows('service_blocks') ): 
						 while( have_rows('service_blocks') ): the_row(); 
						// vars
						$title = get_sub_field('title');
						$link = get_sub_field('link');
						$image = get_sub_field('image');
					?>
					<div class="col-sm-12 col-md-4 col-lg-4 serviceBlock">
						<div class="serviceImage" style="background-image: url('<?php echo $image; ?>'); background-size: cover; background-position: center center;">
							<div class="titleBG"><h3 class="text-white"><?php echo $title ?></h3></div>
						</div>
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
				<h2 class="underline-gold">Contact Dr Conal Perrett</h2>
				<?php
					echo do_shortcode('[gravityform id=1 name=Enquiry title=false description=false]');
				?>
			</div>
		</div>
	</div>


</article><!-- #post-## -->
