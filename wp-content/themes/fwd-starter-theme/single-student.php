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

			<?php
			$domain = get_the_terms(the_post(), 'domain')[0]->slug;
			$args = array(
				'post_type'      => 'student',
				'posts_per_page' => -1,
				'tax_query'      => array(
					array(
						'taxonomy' => 'domain',
						'field'    => 'slug',
						'terms'    => $domain,
					)
				),
			);
			$studentId = get_the_id();
			$query = new WP_Query( $args );
			if ( $query -> have_posts() ) {
				echo "<h4>Other Students</h4>";
				echo "<ul>";
				while ( $query -> have_posts() ) {
					$query -> the_post();
					if (get_the_id() != $studentId) {
						echo '<li><a href="' . get_the_permalink() . '">' . esc_html( get_the_title() ) . '</a></li>';
					}
				}
				echo "</ul>";
			}
			?>

			
		</article>
	</main>

<?php
// get_sidebar();
get_footer();
