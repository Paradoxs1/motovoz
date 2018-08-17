<?php
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="format-detection" content="telephone=no">
<meta name="description" content="">
<meta name="keywords" content="">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header>
		<div class="container">
            <?php if(!is_front_page()){ ?>
                <a href="/" class="logo-inner"><img src="<?php bloginfo( 'template_url' ); ?>/img/logo-inner.png" alt="Логотип"></a>
            <?php } ?>
		    <div class="clearfix">
		        <div class="lang right">
                    <a href="/english">Eng</a>
			    </div>
              <div class="menu">
                  <div class="toggle-block">
                      <span>Меню</span>
                      <a href="#" class="toggle-mnu hidden-lg"><span></span></a>
                  </div>
                  <?php wp_nav_menu( array(
                        'theme_location'  => 'main_menu',
                        'menu'            => '', 
                        'container'       => false, 
                        'container_class' => '', 
                        'container_id'    => '',
                        'menu_class'      => '', 
                        'menu_id'         => 'menu',
                        'echo'            => true,
                        'fallback_cb'     => 'wp_page_menu',
                        'before'          => '',
                        'after'           => '',
                        'link_before'     => '',
                        'link_after'      => '',
                        'items_wrap'      => '<ul id="menu">%3$s</ul>',
                        'depth'           => 0,
                        'walker'          => '',
                       ) ); ?>
              </div>
			</div>
		</div>
	</header>