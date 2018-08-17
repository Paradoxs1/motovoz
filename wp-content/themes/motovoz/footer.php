<?php ?>
   <footer>
        <div class="container">
         	<div class="footer-small">
         		<div class="clearfix">
         			<?php wp_nav_menu( array(
					  'theme_location'  => 'footer_menu-left',
					  'menu'            => '', 
					  'container'       => false, 
					  'container_class' => '', 
					  'container_id'    => '',
					  'menu_class'      => '', 
					  'menu_id'         => '',
					  'echo'            => true,
					  'fallback_cb'     => 'wp_page_menu',
					  'before'          => '',
					  'after'           => '',
					  'link_before'     => '',
					  'link_after'      => '',
					  'items_wrap'      => '<ul class="left">%3$s</ul>',
					  'depth'           => 0,
					  'walker'          => '',
					 ) ); ?>
					<?php wp_nav_menu( array(
					  'theme_location'  => 'footer_menu-right',
					  'menu'            => '', 
					  'container'       => false, 
					  'container_class' => '', 
					  'container_id'    => '',
					  'menu_class'      => '', 
					  'menu_id'         => '',
					  'echo'            => true,
					  'fallback_cb'     => 'wp_page_menu',
					  'before'          => '',
					  'after'           => '',
					  'link_before'     => '',
					  'link_after'      => '',
					  'items_wrap'      => '<ul class="right">%3$s</ul>',
					  'depth'           => 0,
					  'walker'          => '',
					 ) ); ?>
					<div class="footer-logo">
						<a href="<?php echo home_url(); ?>" ><img src="<?php bloginfo( 'template_url' ); ?>/img/logo-footer.png" alt="Логотип"></a><br>
						<span><?php echo ot_get_option('copyright'); ?></span>
					</div>
         		</div>
         		<p><?php echo ot_get_option('text_footer'); ?></p>
         		<div class="social-footer">
         			<a href="https://twitter.com" class="tw"></a>
         			<a href="https://vk.com" class="vk"></a>
         			<a href="https://www.facebook.com" class="fb"></a>
         			<a href="https://www.instagram.com/" class="inst"></a>
         		</div>
         	</div>
        </div>
    </footer>
    
   <div id="popup" class="white-popup mfp-with-anim mfp-hide">
        <form action="#" method="post" class="popup-form" id="modal-form">
            <p class="popup-title">Заказать онлайн</p>
            <?php echo do_shortcode(ot_get_option('form-onlain')); ?>
        </form>
    </div>
   
   <?php wp_footer(); ?>
   
</body>
</html>