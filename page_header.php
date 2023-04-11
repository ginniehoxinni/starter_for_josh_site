<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="<?php bloginfo('charset'); ?>"> 
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="description" content="<?php bloginfo('description'); ?>">
<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/images/favicon.ico">
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@800&display=swap" rel="stylesheet"> 
<!-- <link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="responsive.css" /> -->
<title>
    <?php
              if (function_exists('is_tag') && is_tag()) {
                 single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
              elseif (is_archive()) {
                 wp_title(''); echo ' Archive - '; }
              elseif (is_search()) {
                 echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
              elseif (!(is_404()) && (is_single()) || (is_page())) {
                 wp_title(''); echo ' - '; }
              elseif (is_404()) {
                 echo 'Not Found - '; }
              if (is_home()) {
                 bloginfo('name'); echo ' - '; bloginfo('description'); }
              else {
                  bloginfo('name'); }
              if ($paged>1) {
                 echo ' - page '. $paged; }
           ?>
</title>

</head>
<body>
<header class="container-fluid" style="background-size:cover; height:40vh; background-image: url(<?php the_field('projectheaderbackgroundimage') ?>);">
        <div class="container">
    <nav class="navbar navbar-expand-md  navbar-dark">
        <!-- Brand -->
        <a class="navbar-brand" href="#"><span class="josh">JOSH</span><span class="orange">WHITKIN</span></a>
      
        <!-- Toggler/collapsible Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
      
               <?php 

wp_nav_menu( array(
  'theme_location'  => 'primary',
  'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
  'container'       => 'div',
  'container_class' => 'collapse navbar-collapse',
  'container_id'    => 'bs-example-navbar-collapse-1',
  'menu_class'      => 'navbar-nav ml-auto',
  'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
  'walker'          => new WP_Bootstrap_Navwalker(),
) );

?>
      </nav> 
   
<div class="smallpage-tag"><!-- div that holds the content in the middle of the page-->
<h1 class="smallpage-title"><?php the_field('projectsheadertitle'); ?> </h1>
              </div><!-- container-->
        
</div><!-- container-->

<!-- very important that this is added-->
<?php wp_head(); ?> 
</header>
