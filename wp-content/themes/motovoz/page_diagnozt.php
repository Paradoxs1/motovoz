<?php 
/*
Template name: Диагностика
*/
get_header(); ?>
	<main>
		<section class="diagnoztic-banner">
			<div class="container">
				<p class="section-title"><span>Выездная</span> <span>диагностика</span></p>
				<p><span>перед покупкой в Москве,</span>  <span>или в Санкт-Петербурге</span></p>
			</div>
		</section>
  		<section class="emotion">
   			<div class="container inline-popups">
   				<p class="section-title">Доставляем эмоции!</p>
   				<a href="#popup" class="btn-onlain" data-effect="mfp-3d-unfold">Заказать онлайн</a>
   			</div>
   		</section>
   		<section class="service-top autopark-top diagnoztic">
   			<div class="container">
   				<div class="diagnoz-container">
   				    <?php 
					$q = new WP_Query('post_type=diagnozt&order=ASC');?>
					<?php if ( $q->have_posts() ) { ?>
						<?php while ( $q->have_posts() ) : $q->the_post(); ?>
						  <div class="diagnoz-block clearfix">
                              <div class="diagnoz-img left"><?php the_post_thumbnail('full'); ?></div>
                              <div class="right">
                                  <p class="diagnoz-title"><?php the_title(); ?></p>
                                  <span><?php echo get_post_meta($post->ID, 'name', true); ?></span>
                                  <span><?php echo get_post_meta($post->ID, 'info', true); ?></span>
                                  <span><?php echo get_post_meta($post->ID, 'diagnozt_tel', true); ?></span>
                              </div>
                          </div>
						<?php
						endwhile;
					} ?>
   				</div>
   				<p class="service-content"><?php echo ot_get_option('diagnozt-content'); ?></p>
   			</div>
   		</section>
    </main>
<?php get_footer();



   		