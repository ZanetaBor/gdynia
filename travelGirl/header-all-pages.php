<?php
/**
 * @package WordPress
 * @subpackage Travel Girl
 * @since Travel Girl 1.0
 * 
 * Website Header Template
 * Created by ZanWeb
 * 
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
   <meta charset="<?php bloginfo('charset') ?>" />
   <meta name="viewport" content="width=device-width initial-scale=1, maximum-scale=1" />
   <?php if(is_search()):?>
            <meta name="robots" content="noindex, nofollow" />
   <?php endif; ?>

   <title>  
      <?php if(is_archive()) {
               echo ucfirst(trim(wp_title('', false))) . '-';
      } else
      if(!(is_404()) && (is_single()) || (is_page())) {
         $title=wp_title('', false);
         if(!empty($title)) {
         echo $title . '-';
      }
      } else 
      if(is_404()) {
         echo 'Strona, którą wybrałeś nie istnieje';
      }
      if(is_home()) {
         bloginfo('name');
         echo '-';
         bloginfo('description');
      } else {
         echo bloginfo('name');
      }
      ?>
   </title>

   <!-- Stylesheet -->
   <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
   <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/reset.css">
   <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css">

   <!-- jQuery -->
   <script src="<?php echo TRAVELGIRL_THEME_URL ?>js/script.js"></script>
   
   <!-- pingback -->
   <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

   <!-- Fonts -->
   <link rel="preconnect" href="https://fonts.gstatic.com"> 
   <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@400;600&family=Libre+Baskerville:ital,wght@0,700;1,400&display=swap" rel="stylesheet">

   <!-- Cookie -->
   <script src="http://cookiealert.sruu.pl/CookieAlert-latest.min.js"></script>
   <script>
   CookieAlert.init({
      style: 'light',
      position: 'bottom',
      opacity: '0.5',
      displayTime: 15000,
      cookiePolicy: 'http://jakwylaczyccookie.pl/',
      text: 'Serwis Elegancko w Gdyni wykorzystuje pliki cookies w celach gromadzenia anonimowych informacji statystycznych. Korzystając z witryny wyrażają Państwo zgodę na ich zapis oraz akceptują Państwo <a href="<?php echo home_url() . '/polityka-prywatnosci/' ?>">Politykę prywatności </a> strony internetowej Elegancko w Gdyni.'
   });
   </script>

   <?php wp_head() ?>
</head>

<body <?php body_class()?>>

   <!-- Start Page -->

   <!-- Start Header -->
   <header>
      <div class="all-pages">

   <!-- Logo -- Title -->
         <a href="<?php echo esc_url(home_url('/'));?>" class="logo-link-all-pages"><img src="http://localhost:8888/gdynia/trak/wp-content/uploads/2021/02/logo_opacity.png" alt="logo"></a>
         

      <!-- Start Navigation -->
         <div class="hoverme">
            <a class="menu-link-all-pages" href="#"></a>
            <div class="dropdown-content">
               <nav><?php wp_nav_menu(array('name' => 'Main menu'
               )); ?>
               </nav>
            </div>
         </div>
   <!-- End Navigation -->
   
      </div>
   </header>
   <!-- End Header -->
   
 