<?
/*

      Template Name: Main Page
      The main template file.


*/
?>

<?php get_header(); ?>


<!-- Start Section1 -- Parallax -->
<section id-"section1" class="parallax parallax-bg1">
   <div class="parallax-content"></div>
</section>
<!-- End Section1 -- Parallax -->


<!-- Start Section2 -- Floating-box -->
<section id-"section2">

   <!--  Start the Loop
            Include the floating box -->
   <?php 
      if(have_posts()) : 
         while(have_posts()) : the_post(); 
            the_content(); 
         endwhile; 
      endif; 
   ?> 
</section>  
<!-- End Section2 -- Floating-box -->


<!-- Start Section3 -- Parallax -->
<section id-"section3" class="parallax parallax-bg2">
   <div class="parallax-content"></div>
</section>
<!-- End Section3 -- Parallax -->


<!-- Start Section4 -- Search-category 
      Displays or retrieves the HTML list of categories-->       
<section id="section4">
   <div class="search-category">
      <h3>W którą dziś stronę idziemy?</h3>
      <ul>
         <?php wp_list_categories( array(
        'orderby'    => 'name',
        'show_count' => true, ) ); ?> 
      </ul>
   </div>
</section>
<!-- End Section4 -- Search-category --> 


<!-- Start Section5 -- Parallax -->
<section id-"section7" class="parallax parallax-bg3">
   <div class="parallax-content"></div>
</section>
<!-- End Section5 -- Parallax -->


<!-- Start Section6 -- Newest-post 
      The Loop used to display newest posts--> 
<section id="section6" class="newest-post">
      <div class="wrapper post-center newest-post">
         <h2>Najnowsze posty:</h2>
         <?php 
            $new_Query = new WP_Query(array(
               'posts_per_page'  => 4,
               'orerby'          => 'post_date',
               'order'           => 'DESC',
               'post_status'     => 'publish'
            )); ?>
            <div class="tiles">  
               <?php 
               if($new_Query->have_posts()) :
                  while($new_Query->have_posts()) :
                     $new_Query->the_post(); ?>
                     <section <?php post_class('entry'); ?>>
                        <a class="tile-link" href="<?php the_permalink(); ?>">
                           <?php the_post_thumbnail(); ?> 
                           <h3><?php the_title(); ?></h3>
                           <p class="tile-text"><?php the_excerpt_max_charlength(250); ?></p>
                        </a>
                     </section>
                  <?php endwhile; ?> 
            </div>
            <a class="all-posts-link" href="<?php echo home_url() . '/co-zobaczyc/' ?>">Wszystkie posty</a>
               <?php endif; ?>
      </div>
</section>
<!-- End Section6 -- Newest-post --> 


<!-- Start Section7 -- Parallax -->
<section id-"section7" class="parallax parallax-bg5">
   <div class="parallax-content"></div>
</section>
<!-- End Section7 -- Parallax -->


<?php get_footer(); ?>
      