<?php
/*

	Template Name: Category

*/
?>


<?php get_header(); ?>
        
    <section id="header">
        <div class="pos-center">
            <h2>Czytaj wszystkie posty o tematyce: <?php echo ucfirst(single_cat_title('', false)); ?></h2>
        </div>
    </section>

    <section class="content">
        <div class="pos-center">
            <div class="wrapper">	
                
                <div class="cat-loop">
                    <?php if(have_posts()) : ?>
                        <?php while(have_posts()) : the_post(); ?>
                        <section class="entry">
                            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                            <p><?php the_excerpt_max_charlength(336); ?></p>
                        </section>
                        <?php endwhile; ?>
                    <?php else : ?>
                        <h4>Niestety nic tutaj nie ma.</h4>
                    <?php endif; ?>      
            </div>

                    <div class="pagination">
                        <ul>
                            <?php
								global $wp_query;
								echo generatePagination(get_query_var('paged'), $wp_query);
							?>
                        </ul>
                    </div>
            </div>
        </div>
    </section>

<? get_footer(); ?>