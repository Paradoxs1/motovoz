<?php 
/*
Template name: Главная
*/
get_header(); ?>
	<main>
		<section class="banner">
			<div class="container">
				<a href="<?php echo home_url(); ?>" class="logo"><img src="<?php bloginfo( 'template_url' ); ?>/img/logo.png" alt="Логотип"></a>
				<p>СПб <span>(812) (921)</span> / Мск <span>(925)</span></p>
				<a href="tel:<?php echo str_replace(array(" ", "(", ")"), "",  ot_get_option('tel')) ?>" class="tel"><?php echo ot_get_option('tel'); ?></a>
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
   		<section class="emotion">
   			<div class="container inline-popups">
   				<p class="section-title">Доставляем эмоции!</p>
   				<a href="#popup" class="btn-onlain" data-effect="mfp-3d-unfold">Заказать онлайн</a>
   			</div>
   		</section>
   		<section class="why">
   			<div class="container">
   				<p class="section-title">Почему выбирают нас?</p>
   				<div class="why-container">
   					<div class="why-block">
   						<p>Доступные<br> цены</p>
   					</div>
   					<div class="why-block">
   						<p>Огромный<br> опыт</p>
   					</div>
   					<div class="why-block">
   						<p>Большой<br> автопарк</p>
   					</div>
   				</div>
   			</div>
   		</section>
   		<section class="time">
   			<div class="container">
   				<p class="section-title">Подача машины:<br> <span>от <span>20</span> до <span>60</span> минут</span></p>
   				<p>(Рекомендуем заказывать машину или за час, или за день заранее)</p>
   			</div>
   		</section>
   		<section class="transportation">
   			<div class="container">
   				<p class="section-title"><?php echo ot_get_option('title-text'); ?></p>
   				<p><?php echo ot_get_option('text'); ?></p>
   			</div>
   		</section>
    </main>

<?php get_footer();


