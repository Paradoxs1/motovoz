<?php 
/*
Template name: Цены
*/
get_header(); ?>
	<main>
		<?php 
          $q = new WP_Query('post_type=price');?>
          <?php if ( $q->have_posts() ) { ?>
              <?php while ( $q->have_posts() ) : $q->the_post(); ?>
                     
                  <?php the_content(); ?>
                 
              <?php
              endwhile;
          } ?>
    </main>
<?php get_footer();


