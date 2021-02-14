<?
/*

Template Name: Archives
The template for displaying Archive pages

*/
?>

<?php get_header('all-pages'); ?>

<section class="post-archive post-archive">
    <div class="wrapper post-center post-archive">
        <h2>Wszystkie posty:</h2>

<!-- Search form --> 
        <form role="search" method="get" id="searchform" class="searchform" action="<?php bloginfo("url"); ?>">
            <label class="screen-reader-text" for="s">Szukaj:</label>
            <input type="text" value="" name="s" id="s" />
            <input type="submit" id="searchsubmit" value="Szukaj" /> 
        </form>   
<!-- Search form --> 

        <?php
            $new_Query = new WP_Query(array(
                'posts_per_page'  => 100,
                'orerby'          => 'post_date',
                'order'           => 'DESC',
                'post_status'     => 'publish'
            )); ?>

<!-- The Loop used to display all posts--> 
        <div class="tiles"> 
        <?php  if($new_Query->have_posts()) :
                while($new_Query->have_posts()) : $new_Query->the_post();
                    ?>
                     <section <?php post_class('entry'); ?>>
                        <a class="tile-link single-post-archive" href="<?php the_permalink(); ?>">  
                            <?php the_post_thumbnail(); ?> 
                            <h3><?php the_title(); ?></h3>
                            <p class="tile-text"><?php the_excerpt_max_charlength(250); ?> </p>
                        </a>
                     </section>
                  <?php endwhile; ?>
            <?php endif; ?>
        </div> 
    </div>
</section>

<!-- Start Section7 -- Parallax -->
<section id-"section7" class="parallax parallax-bg5">
   <div class="parallax-content"></div>
</section>
<!-- End Section7 -- Parallax -->

<?php get_footer(); ?>