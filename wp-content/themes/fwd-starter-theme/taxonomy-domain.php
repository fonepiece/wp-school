<?php
get_header();
?>

	<main id="primary" class="site-main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header><!-- .page-header -->

			<?php while ( have_posts() ) : the_post(); ?>
			<article>
				<a href="<?php the_permalink(); ?>">
					<h3><?php the_title(); ?></h3>
				</a>
				<?php the_content(); ?>

				<?php the_post_thumbnail('featured'); ?>
			</article>
			<?php
			endwhile;
			


		endif;
		?>

	</main><!-- #primary -->

<?php
get_sidebar();
get_footer();
