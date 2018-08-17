<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Motovoz
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
		<section class="japon">
                <div class="container">
                    <div class="service-content">
							<?php
								the_post();
								the_content(); 
							?>
                     </div>
                </div>
            </section>
	</main>
<?php get_footer();
