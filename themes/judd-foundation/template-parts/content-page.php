<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package judd-foundation
 */

?>



<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<section class="page-content-area-full">
		<?php the_post_thumbnail(); ?>
	</section>

	<section class="page-content-area">
	
		<h1><?php the_title(); ?></h1>
	
		<div class="entry-content">
		<?php the_content(); ?>
		</div><!-- .entry-content -->

	</section>

	<section class="right-sidebar">

		<?php if( have_rows('right_side_images') ): the_row(); ?>
			<?php while( have_rows('right_side_images') ): the_row(); ?>
				<div class="right-side-images">
		        	<img src="<?php the_sub_field('image'); ?>" class="img-responsive" alt="">
		        </div>
		    <?php endwhile; ?>
		<?php endif; ?>

	</section>

</article>