<?php
get_header();
?>

<main id="primary" class="site-main">

    <?php while ( have_posts() ) : the_post(); ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

            <header class="entry-header">
                <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
            </header>

            <div class="entry-content">
                <?php the_content(); ?>

                <div class="staff-links">

                <?php
                //Output Navigation.
                $args = array(
                    'post_type'      => 'staff',
                    'posts_per_page' => -1,
                );
                $query = new WP_Query( $args );
                echo "<ul>";
                if ( $query -> have_posts() ) {
                    while ( $query -> have_posts() ) {
                        $query -> the_post();
                        echo '<li><a href="#'. esc_attr( get_the_ID() ) .'">'. esc_html( get_the_title() ) .'</a></li>';
                    }
                    wp_reset_postdata();
                }
                echo "</ul>";
                ?>
            </div>

            
            <?php
            $terms = get_terms(
                array(
                    'taxonomy' => 'staff-domains'
                )
            );
            if($terms && !is_wp_error($terms) ){
                foreach($terms as $term){
                    $args = array(
                        'post_type'      => 'staff',
                        'posts_per_page' => -1,
                        'order'          => 'ASC',
                        'orderby'        => 'title',
                        'tax_query'      => array(
                            array(
                                'taxonomy' => 'staff-domains',
                                'field'    => 'slug',
                                'terms'    => $term->slug,
                            )
                        ),
                    );
                    $query = new WP_Query( $args );

                    if ( $query -> have_posts() ) {
                        // Output Term name.
                        echo '<h2>' . esc_html( $term->name ) . '</h2>';
                    
                        // Output Content.
                        while ( $query -> have_posts() ) {
                            $query -> the_post();
                    
                            if ( function_exists( 'get_field' ) ) {
                                echo '<h3 id="'. esc_attr( get_the_ID() ) .'">'. esc_html( get_the_title() ) .'</h3>';

                                if ( get_field( 'biography' ) ) {
                                    the_field( 'biography' );
                                }

                                if ($term->slug === 'faculty') {
                                    if ( get_field( 'courses' ) ) {
                                        echo "<div>";
                                        echo "Courses:";
                                        the_field( 'courses' );
                                        echo "</div>";
                                    }
                                    if ( get_field( 'website' ) ) {
                                        ?>
                                        <div>
                                            Website:
                                            <a href="<?php echo the_field( 'website' ); ?>">
                                                <?php echo the_field( 'website' ); ?>
                                            </a>
                                        </div>
                                        <?php
                                    }
                                }
                            }
                        }
                        wp_reset_postdata();
                    }
                }
            }
            ?>
        </article>

    <?php endwhile; ?>
</main>

<?php
get_sidebar();
get_footer();
