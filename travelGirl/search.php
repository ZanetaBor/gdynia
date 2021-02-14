<?php get_header('all-pages'); ?>

<section class="post-archive post-archive">
    <div class="wrapper post-center post-archive">
        <h2>Znalezione posty ze słowem: <?php echo get_search_query(); ?></h2>
        <div class="tiles"> 
        <?php
        global $post;
        $args = array( 's' => esc_html( get_search_query( false ) ), 'posts_per_page' => 32 );
        $myposts = get_posts( $args );
        foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
            <section <?php post_class('entry'); ?>>
                <a class="tile-link single-post-archive" href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail(); ?> 
                    <h3><?php the_title(); ?></h3>
                    <p class="tile-text"><?php the_excerpt_max_charlength(250); ?> </p>
                </a>
            </section>
        <?php endforeach;
        wp_reset_postdata();?>
        </div>
    </div>
</section>

<!-- Start Section7 -- Parallax -->
<section id-"section7" class="parallax parallax-bg5">
   <div class="parallax-content"></div>
</section>
<!-- End Section7 -- Parallax -->

<?php get_footer(); ?>