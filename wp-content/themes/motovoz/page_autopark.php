<?php 
/*
Template name: Автопарк
*/
get_header(); ?>
	<main>
		<section class="autopark-banner autopark-banner-top">
			<div class="container">
				<p class="section-title"><span>Наш</span> <span>автопарк</span></p>
			</div>
		</section>
   		<section class="service-top autopark-top">
   			<div class="container">
   				<p class="service-content"><?php echo ot_get_option('autopark-text-top'); ?></p>
   				<div class="autopark-container">
   				    <?php 
					$q = new WP_Query('post_type=cars');?>
					<?php if ( $q->have_posts() ) { ?>
						<?php while ( $q->have_posts() ) : $q->the_post(); ?>
							<div class="autopark-block" >
                               <?php the_post_thumbnail('full'); ?>
                               <p><?php the_title(); ?></p>
                            </div>
						<?php
						endwhile;
					} ?>
   				</div>
   			</div>
   		</section>
   		<section class="autopark-banner autopark-banner-middle">
			<div class="container">
				<p class="section-title"><span>Наши</span> <span>Водители</span></p>    
			</div>
		</section>
   		<section class="service-top autopark-top">
   			<div class="container">
   				<p class="service-content"><?php echo ot_get_option('autopark-text-bottom'); ?></p>
   				<div class="driver-container">
   				    <?php 
					$q = new WP_Query('post_type=driver');?>
					<?php if ( $q->have_posts() ) { ?>
						<?php while ( $q->have_posts() ) : $q->the_post(); ?>
							  <div class="driver-block clearfix">
                                  <div class="driver-img left"><?php the_post_thumbnail('full'); ?></div>
                                  <div class="right">
                                      <p class="driver-title"><?php the_title(); ?></p>
                                      <span><?php echo get_post_meta($post->ID, 'territory', true); ?></span>
                                      <span><?php echo get_post_meta($post->ID, 'experience', true); ?></span>
                                      <span><?php echo get_post_meta($post->ID, 'age', true); ?></span>
                                      <span><?php echo get_post_meta($post->ID, 'achievements', true); ?></span>
                                  </div>
                              </div>
						<?php
						endwhile;
					} ?>
   				</div>
   			</div>
   		</section>
    </main>
<?php get_footer();


