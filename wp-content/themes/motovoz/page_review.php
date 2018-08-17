<?php 
/*
Template name: Отзывы
*/
get_header(); ?>
	<main>
		<section class="review">
			<div class="container clearfix">
				<div class="link-review">
					<a href="#commentform">Оставить отзыв</a>
				</div>
				<?php while (have_posts()) : the_post(); ?>
				  <?php comments_template(); ?>
				<?php endwhile; ?>
			</div>
		</section>
    </main>
<?php get_footer();


