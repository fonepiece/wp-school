<?php
get_header();
?>

	<main id="primary" class="site-main">

		<?php if ( have_posts() ) : ?>
            <header class="entry-header">
                <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
            </header>

			<?php while ( have_posts() ) : the_post() ?>
				<article>
					<a href="<?php the_permalink(); ?>">
						<h3><?php the_title(); ?></h3>
					</a>
					<?php the_post_thumbnail('featured'); ?>
					<?php the_excerpt(); ?>
				</article>

			<?php endwhile; ?>
		<?php
			the_posts_navigation();
		endif;
		?>
	</main>

<?php
get_sidebar();
get_footer();
