<?php
/**
 * The template for static front page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Food_Hub
 */

get_header();
?>

	<main id="primary" class="site-main">
    <h1>Front page</h1>
		<?php
		while ( have_posts() ) :
			the_post();
			
			the_content();

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
