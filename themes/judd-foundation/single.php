<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package judd-foundation
 */

get_header(); ?>

<?php
while ( have_posts() ) : the_post();
	get_template_part( 'template-parts/content', 'single' );


endwhile; // End of the loop.
?>

<?php
get_footer();