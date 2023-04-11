<?php
    /*
    Template Name: Projects
    */
    ?>
<?php require_once('small_header.php'); ?>

<div class="container-fluid maincontainer">
  <div class="container">
    <div class="row">
      <section class="maintext">
      <h3>Latest Projects</h3><!--  custom field for the aboutme content-->
        <?php 
$args = array(
  'category_name' =>  'projects',
 // 'posts_per_page'    =>   1
);
// the query
$the_query = new WP_Query( $args ); ?>
        <?php if ( $the_query->have_posts() ) : ?>
        
        <!-- pagination here --> 
        
        <!-- the loop -->
        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
        <div class="thepost ">
        <?php
                if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                    the_post_thumbnail('thumbnail');
                } ?>
          <h2 class="text-left">
            <?php the_title(); ?>
          </h2>
          <p class="about-text">
            <?php the_excerpt(); ?>
          </p>
          
          <a class="readmore" href="<?php the_permalink(); ?>"> CONTINUE READING</a>
        </div>
     
        <?php endwhile; ?>
    
        <!-- end of the loop --> 
        
        <!-- pagination here -->
        
        <?php wp_reset_postdata(); ?>
        <?php else : ?>
        <p>
          <?php _e( 'Sorry, no posts matched your criteria.' ); ?>
        </p>
        <?php endif; ?>
      </section>
    </div>
  </div>
  <!-- container  --> 
</div>
<!-- container fluid -->
<?php get_footer(); ?>
