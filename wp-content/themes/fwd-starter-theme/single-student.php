<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package FWD_Starter_Theme
 */

get_header();
?>

	<main id="primary" class="site-main">
		<article>
			<a href="<?php the_permalink(); ?>">
				<h3><?php the_title(); ?></h3>
			</a>
			<?php the_content(); ?>

			<?php the_post_thumbnail('featured'); ?>
		</article>
	</main>

<?php
// get_sidebar();
get_footer();
