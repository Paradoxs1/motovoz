<?php 
/*
Template name: Учёт
*/
get_header(); ?>
	<main>
		<section class="record-banner record-banner-top">
			<div class="container">
				<p class="section-title"><span>Постановка</span> <span>на учёт</span></p>
			</div>
		</section>
   		<section class="record">
   			<div class="container">
   				<p class="record-content"><?php echo ot_get_option('record-text-top'); ?></p>
   			</div>
   		</section>
   		<section class="emotion">
   			<div class="container inline-popups">
   				<p class="section-title">Доставляем эмоции!</p>
   				<a href="#popup" class="btn-onlain" data-effect="mfp-3d-unfold">Заказать онлайн</a>
   			</div>
   		</section>
   		<section class="record-banner record-banner-bottom">
			<div class="container">
				<p class="section-title"><span>Постановка</span> <span>на учёт</span></p>
				<p>без вашего присутствия</p>   
			</div>
		</section>
   		<section class="record">
   			<div class="container">
   				<div class="record-container">
   					<div class="record-block">
   						<img src="<?php bloginfo( 'template_url' ); ?>/img/record.png" alt="Картинка">
   					    <p>Погрузка мотоцикла</p>
   					</div>
   					<div class="record-block">
   						<img src="<?php bloginfo( 'template_url' ); ?>/img/record2.png" alt="Картинка">
   					    <p>3-4 часа ожидания</p>
   					</div>
   					<div class="record-block">
   						<img src="<?php bloginfo( 'template_url' ); ?>/img/record3.png" alt="Картинка">
   					    <p>мотоцикл с номерами уже у вас</p>
   					</div>
   				</div>
   				<p class="record-content"><?php echo ot_get_option('record-text-bottom'); ?></p>
   			</div>
   		</section>
    </main>
<?php get_footer();


