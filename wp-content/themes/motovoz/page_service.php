<?php 
/*
Template name: Услуги
*/
get_header(); ?>
	<main class="service-page">
		<section class="service-banner service-banner-top">
			<div class="container">
				<p class="section-title"><span>перевозка</span> <span>между</span> <span>столицами</span></p>
				<p>от двери до двери</p>
			</div>
		</section>
   		<section class="service-top">
   			<div class="container">
   				<p class="service-content"><?php echo ot_get_option('service-text-top'); ?></p>
   				<div class="service-container">
   					<div class="service-top-block">
   						<img src="<?php bloginfo( 'template_url' ); ?>/img/service-top.png" alt="Услуги">
   						<p>Регулярные<br> рейсы</p>
   					</div>
   					<div class="service-top-block">
   						<img src="<?php bloginfo( 'template_url' ); ?>/img/service-top2.png" alt="Услуги">
   						<p>Любые<br> объёмы перевозок</p>
   					</div>
   					<div class="service-top-block">
   						<img src="<?php bloginfo( 'template_url' ); ?>/img/service-top3.png" alt="Услуги">
   						<p>Удобное Вам время загрузки и выгрузки</p>
   					</div>
   				</div>
   			</div>
   		</section>
   		<section class="service-banner service-banner-middle">
			<div class="container">
				<p class="section-title"><span>Терминал</span> <span>Мотовоз</span> <span>Москва</span></p>    
			</div>
		</section>
   		<section class="service-map">
   			<div class="container clearfix">
   				<div class="left">
   					<img src="<?php bloginfo( 'template_url' ); ?>/img/motosave.png" alt="Картинка"><br>
					<p><?php echo ot_get_option('service-adress-top'); ?></p> 
  					<p><?php echo ot_get_option('service-site-top'); ?></p>
  					<p><?php echo ot_get_option('service-phone-top'); ?></p>
  					<p><?php echo ot_get_option('service-mode-top'); ?></p>
   				</div>
   				<div class="right">
   					<div id="map"></div>
   				</div>
   			</div>
   		</section>
   		<section class="service-banner service-banner-middle service-banner-middle2">
			<div class="container">
				<p class="section-title"><span>Терминал</span> <span>Мотовоз</span> <span>СПБ</span></p>    
			</div>
		</section>
   		<section class="service-map">
   			<div class="container clearfix">
   				<div class="left">
   					<img src="<?php bloginfo( 'template_url' ); ?>/img/moto.jpg" alt="Картинка"><br>
					<p><?php echo ot_get_option('service-adress-bottom'); ?></p> 
  					<p><?php echo ot_get_option('service-site-bottom'); ?></p>
  					<p><?php echo ot_get_option('service-phone-bottom'); ?></p>
  					<p><?php echo ot_get_option('service-mode-bottom'); ?></p>
   				</div>
   				<div class="right">
   					<div id="map2"></div>
   				</div>
   			</div>
   		</section>
   		<section class="emotion">
   			<div class="container inline-popups">
   				<p class="section-title">Доставляем эмоции!</p>
   				<a href="#popup" class="btn-onlain" data-effect="mfp-3d-unfold">Заказать онлайн</a>
   			</div>
   		</section>
   		<section class="service-banner service-banner-bottom">
			<div class="container">
				<p class="section-title"><span>перевозка</span> <span>авто</span></p>    
			</div>
		</section>
   		<section class="main-bottom">
   			<div class="container">
   				<div class="clearfix">
   					<div class="left">
   						<div class="main-bottom-img">
   							<p>20 </p><span>тыс/руб</span>
   						</div>
						<p>Перевозка<br> автомобиля<br> <span>Из Москвы в СПб<br> и обратно</span></p>
					</div>
					<div class="right">
						<img src="<?php bloginfo( 'template_url' ); ?>/img/main-bottom-bg.png" alt="Перевозка">
					</div>
   				</div>
   				<p class="service-content"><?php echo ot_get_option('service-text-bottom'); ?></p>
   			</div>
   		</section>
    </main>

<?php get_footer();


