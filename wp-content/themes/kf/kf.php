<?php /* Template Name: KF */
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

	<div class="banner-interna">&nbsp;</div>
	<div class="diagonal">&nbsp;</div>

	<div class="container interna">
		<div class="header">
			<div class="image"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/logo-kf.png"></div>
			<h2>KF Soluções de Engenharia</h2>
		</div>
		<div class="content">
			<?php if ( have_posts() ) : ?>
				<?php while ( have_posts() ) : the_post(); ?>    
				
					<div class="row">
						<div class="col-md-5">
							<div class="image"><img class="img-responsive" src="http://www.placehold.it/400x300"></div>
						</div>
						<div class="col-md-7">
							<?php the_content(); ?>
						</div>
					</div>

				<?php endwhile; ?>
			<?php endif; ?>
		</div>
	</div>

<?php get_footer(); ?>
