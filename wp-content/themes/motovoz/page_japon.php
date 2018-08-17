<?php 
/*
Template name: Япония
*/
get_header(); ?>
	<main>
		<section class="banner japon-banner">
			<div class="container">
				<a href="/" class="logo"><img src="<?php bloginfo( 'template_url' ); ?>/img/logo-japon-head.png" alt="Логотип"></a>
				<p><span>931</span><a href="tel:<?php echo str_replace(array(" ", "(", ")"), "",  ot_get_option('tel')) ?>" class="tel"><?php echo ot_get_option('tel'); ?></a></p>
			</div>
		</section>
       	<section class="emotion">
   			<div class="container inline-popups">
   				<p class="section-title">Доставляем эмоции!</p>
   				<a href="#popup" class="btn-onlain" data-effect="mfp-3d-unfold">Заказать онлайн</a>
   			</div>
   		</section>
        <?php if (get_post_meta($post->ID, 'video', true) ) { ?>
            <section class="japon">
                <div class="container container-video">
                    <div class="video-responsive">
                      <?php echo get_post_meta($post->ID, 'video', true); ?>
                    </div>
                </div>
            </section>
        <?php  } ?>
        <?php if (get_post_meta($post->ID, 'japon-text-service', true) ) { ?>
            <section class="japon">
                <div class="container">
                    <p class="service-content">
                      <?php echo get_post_meta($post->ID, 'japon-text-service', true); ?>
                    </p>
                </div>
            </section>
        <?php  } ?>
        <?php if (get_post_meta($post->ID, 'japon-text-auction', true) ) { ?>
            <section class="japon">
                <div class="container">
                    <p class="service-content">
                      <?php echo get_post_meta($post->ID, 'japon-text-auction', true); ?>
                    </p>
                </div>
            </section>
        <?php  } ?>
    </main>
<?php get_footer();