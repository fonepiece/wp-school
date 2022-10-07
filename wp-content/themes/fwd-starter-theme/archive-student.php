<?php
get_header();
?>

	<main id="primary" class="site-main">

        <?php if ( have_posts() ) : ?>
            <header class="entry-header">
                <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
            </header>

            <section class="home-blog">
                <div class="student-wrapper">
                <?php
                $args = array(
                    'post_type' => 'student',
                    'posts_per_page' => -1,
                    'orderby' => 'title',
                    'order'   => 'ASC',
                );
                $blog_query = new WP_Query( $args );
                if ( $blog_query -> have_posts() ) {
                    while ( $blog_query -> have_posts() ) {
                        $blog_query -> the_post();
                        ?>
                        <article>
                            <a href="<?php the_permalink(); ?>">
                                <h3><?php the_title(); ?></h3>
                            </a>
                            <?php the_excerpt(); ?>

							<?php echo "<div>Domain: <a href='" . get_term_link(get_the_terms($post->ID, 'domain')[0]) . "'>" . get_the_terms($post->ID, 'domain')[0]->name . "</a></div>"; ?>
							<?php the_post_thumbnail('featured'); ?>
                        </article>
                        <?php

                    }
                    wp_reset_postdata();
                }
                ?>
                </div>
            </section>
        <?php endif; ?>

	</main><!-- #primary -->

<?php
get_footer();
