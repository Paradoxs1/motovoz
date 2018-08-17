<?php
/*
Template name: English
*/
get_header(); ?>
	<main>
		<section class="banner">
			<div class="container">
				<a href="/" class="logo"><img src="<?php bloginfo( 'template_url' ); ?>/img/logo.png" alt="Логотип"></a>
				<div class="phone-block">
					<p><span>Saint-Petersburg</span> <a href="tel:<?php echo str_replace(array(" ", "(", ")"), "",  ot_get_option('tel-english-top')) ?>"><?php echo ot_get_option('tel-english-top'); ?></a></p>
					<p><span>Moscow</span> <a href="tel:<?php echo str_replace(array(" ", "(", ")"), "",  ot_get_option('tel-english-bottom')) ?>"><?php echo ot_get_option('tel-english-bottom'); ?></a></p>
				</div>
			</div>
		</section>
   		<section class="service">
   			<div class="container">
   				<p class="section-title">Выберите услугу:</p>
   				<div class="service-container">
   					<a href="/perevozka-mototsiklov-i-avtomobilej" class="service-block">
						<img src="<?php bloginfo( 'template_url' ); ?>/img/service.png" alt="Услуга">
						<p>Перевозка  мотоциклов  и автомобилей</p>
					</a>
  					<a href="/perevozka-mezhdu-stolitsami" class="service-block">
						<img src="<?php bloginfo( 'template_url' ); ?>/img/service2.png" alt="Услуга">
						<p>Перевозка между  столицами</p>
					</a>
  					<a href="/diagnostika" class="service-block">
						<img src="<?php bloginfo( 'template_url' ); ?>/img/service3.png" alt="Услуга">
						<p>Диагностика  перед покупкой</p>
					</a>
  					<a href="/uchyot" class="service-block">
						<img src="<?php bloginfo( 'template_url' ); ?>/img/service4.png" alt="Услуга">
						<p>Постановка на учет  в МРЭО</p>
					</a>
  					<a href="/yaponiya" class="service-block">
						<img src="<?php bloginfo( 'template_url' ); ?>/img/service5.png" alt="Услуга">
						<p>Перевозка  в страны восходящего солнца</p>
					</a>
   				</div>
   			</div>
   		</section>
   		<section class="english">
   			<div class="container">
   				<p class="service-content"><?php echo ot_get_option('english-text'); ?></p>
   			</div>
   		</section>
    </main>
<?php get_footer();

