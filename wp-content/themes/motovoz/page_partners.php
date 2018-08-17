<?php 
/*
Template name: Партнеры
*/
get_header(); ?>
	<main>
		<section class="autopark-banner autopark-banner-top">
			<div class="container">
				<p class="section-title"><span>Наши</span> <span>партнеры</span></p>
			</div>
		</section>
        <section class="partners">
            <div class="container">
                <p class="service-content"><?php echo ot_get_option('content'); ?></p>
            </div>
        </section>
    </main>
<?php get_footer();


