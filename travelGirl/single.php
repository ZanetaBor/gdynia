<?php
/*

The template for displaying all single posts and attachments

 */
?>

<?php get_header('all-pages'); ?>

<?php the_post(); ?>

<!-- Start Section -- Single-post 
      The Loop used to display the single post--> 
<section class="newest-post">
    <div class="post-center single-post entry">
        <h2><?php the_title(); ?></h2>
        <article class="single-post-content entry">  
            <?php the_post_thumbnail(); ?> 
            <?php the_category(', '); ?>       
            <?php the_content(); ?>   
            <?php the_tags(); ?>
        </article>
<!-- End Section -- Single-post -->  


<!-- Start Navigation --> 
        <div class="pagination">
            <?php
                the_post_navigation();
            ?>
        </div>
      
<!-- End Navigation --> 

    </div>
</section>

<!-- Start Section7 -- Parallax -->
<section id-"section7" class="parallax parallax-bg5">
   <div class="parallax-content"></div>
</section>
<!-- End Section7 -- Parallax -->

<?php get_footer(); ?>