<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Motovoz
 */

get_header(); ?>
	
	<main>
		<section class="faq">
			<div class="container clearfix">
				<div class="accordeon left">
					<?php 
						$q = new WP_Query('post_type=faq');?>
						<?php if ( $q->have_posts() ) { ?>
							<?php while ( $q->have_posts() ) : $q->the_post(); ?>
								<span><?php the_title(); ?></span>
								<div><?php the_content(); ?></div>
							<?php
							endwhile;
						} ?>
				</div>
				<div class="right">
					<form action="#">
						<p>Задать вопрос</p>
						<?php echo do_shortcode(ot_get_option('forma-faq')); ?>
					</form>
				</div>
			</div>
		</section>
    </main>

<?php get_footer();
