<?php

//  The template for displaying 404 pages (Not Found)
 
 ?>

<?php get_header(); ?>

<!-- Start Section1 -- Parallax -->
<section id-"section1" class="parallax parallax-bg1">
   <div class="parallax-content"></div>
</section>
<!-- End Section1 -- Parallax -->

<section id="error404" class="content">
    <div class="pos-center wrapper error">
        <h3>404</h3>
        <div class="message"><h3>Strona, której szukasz nie istnieje! </h3><a href="<?php echo esc_url(home_url('/'));?>">Przejdź do strony głównej</a></div>
    </div>
</section>

<!-- Start Section7 -- Parallax -->
<section id-"section7" class="parallax parallax-bg5">
   <div class="parallax-content"></div>
</section>
<!-- End Section7 -- Parallax -->

<?php get_footer(); ?>