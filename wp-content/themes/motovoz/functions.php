<?php

add_filter( 'ot_theme_mode', '__return_true' );
add_filter( 'ot_show_new_layout', '__return_false' );
add_filter('ot_show_pages', '__return_true' );

function theme_options_parent($parent){
	$parent = '';
	return $parent;
}
add_filter('ot_theme_options_parent_slug', 'theme_options_parent', 20);

require( trailingslashit( get_template_directory() ) . 'option-tree/ot-loader.php' );
require( trailingslashit( get_template_directory() ) . '/functions/theme-options.php' );
require( trailingslashit( get_template_directory() ) . '/functions/meta-boxes.php' );

function motovoz_setup() {
	
	load_theme_textdomain( 'motovoz', get_template_directory() . '/languages' );

	add_theme_support( 'automatic-feed-links' );

	add_theme_support( 'title-tag' );

	add_theme_support( 'post-thumbnails' );
	
	register_nav_menus( array(
	  'main_menu' => 'Главное меню',
	  'footer_menu-left' => 'Меню в подвале слева',
	  'footer_menu-right' => 'Меню в подвале справа',
	 ) );

	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	add_theme_support( 'custom-background', apply_filters( 'motovoz_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	add_theme_support( 'customize-selective-refresh-widgets' );
}
add_action( 'after_setup_theme', 'motovoz_setup' );


add_action('init', 'register_post_types');
function register_post_types(){
    register_post_type('cars', array(
		'label'  => null,
		'labels' => array(
			'name'               => 'Техника',
			'singular_name'      => 'Техника',
			'add_new'            => 'Добавить машину',
			'add_new_item'       => 'Добавление новой машины',
			'edit_item'          => 'Редактирование машин',
			'new_item'           => 'Новая машина',
			'view_item'          => 'Смотреть машину',
			'search_items'       => 'Искать машину',
			'not_found'          => 'Не найдено',
			'not_found_in_trash' => 'Не найдено в корзине',
			'parent_item_colon'  => '',
			'menu_name'          => 'Техника',
		),
		'description'         => '',
		'public'              => true,
		'publicly_queryable'  => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => null,
		'menu_icon'           => 'dashicons-admin-network', 
		'hierarchical'        => false,
		'supports'            => array('title','editor', 'thumbnail'),
		'taxonomies'          => array(),
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
        'capability_type'    => 'page',
	) );
  
  register_post_type('driver', array(
		'label'  => null,
		'labels' => array(
			'name'               => 'Водители',
			'singular_name'      => 'Водитель',
			'add_new'            => 'Добавить водителя',
			'add_new_item'       => 'Добавление нового водителя',
			'edit_item'          => 'Редактирование данных о водителе',
			'new_item'           => 'Новый водитель',
			'view_item'          => 'Смотреть данные водителя',
			'search_items'       => 'Искать водителя',
			'not_found'          => 'Не найдено',
			'not_found_in_trash' => 'Не найдено в корзине',
			'parent_item_colon'  => '',
			'menu_name'          => 'Водители',
		),
		'description'         => '',
		'public'              => true,
		'publicly_queryable'  => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => null,
		'menu_icon'           => 'dashicons-admin-users', 
		'hierarchical'        => true,
		'supports'            => array('title','editor', 'thumbnail'),
		'taxonomies'          => array('Главное'),
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
        'capability_type'    => 'page',
	) );
  
  register_post_type('diagnozt', array(
		'label'  => null,
		'labels' => array(
			'name'               => 'Диагностик',
			'singular_name'      => 'Диагностик',
			'add_new'            => 'Добавить диагностика',
			'add_new_item'       => 'Добавление нового диагностика',
			'edit_item'          => 'Редактирование данных о диагностике',
			'new_item'           => 'Новый диагностик',
			'view_item'          => 'Смотреть данные о диагностике',
			'search_items'       => 'Искать диагностика',
			'not_found'          => 'Не найдено',
			'not_found_in_trash' => 'Не найдено в корзине',
			'parent_item_colon'  => '',
			'menu_name'          => 'Диагностик',
		),
		'description'         => '',
		'public'              => true,
		'publicly_queryable'  => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => null,
		'menu_icon'           => 'dashicons-search', 
		'hierarchical'        => true,
		'supports'            => array('title','editor', 'thumbnail'),
		'taxonomies'          => array('Главное'),
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
        'capability_type'    => 'page',
	) );
  
  register_post_type('price', array(
		'label'  => null,
		'labels' => array(
			'name'               => 'Цены',
			'singular_name'      => 'Цена',
			'add_new'            => 'Добавить цены',
			'add_new_item'       => 'Добавление цены',
			'edit_item'          => 'Редактирование данных о ценах',
			'new_item'           => 'Новая цена',
			'view_item'          => 'Смотреть данные о ценах',
			'search_items'       => 'Искать цены',
			'not_found'          => 'Не найдено',
			'not_found_in_trash' => 'Не найдено в корзине',
			'parent_item_colon'  => '',
			'menu_name'          => 'Цены',
		),
		'description'         => '',
		'public'              => true,
		'publicly_queryable'  => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => null,
		'menu_icon'           => 'dashicons-list-view', 
		'hierarchical'        => true,
		'supports'            => array('title','editor', 'thumbnail'),
		'taxonomies'          => array(),
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
        'capability_type'    => 'page',
	) );
	
	register_post_type('faq', array(
		'label'  => null,
		'labels' => array(
			'name'               => 'FAQ',
			'singular_name'      => 'Faq',
			'add_new'            => 'Добавить faq',
			'add_new_item'       => 'Добавить faq',
			'edit_item'          => 'Редактировать faq',
			'new_item'           => 'Новый faq',
			'view_item'          => 'Смотреть faq',
			'search_items'       => 'Искать faq',
			'not_found'          => 'Не найдено',
			'not_found_in_trash' => 'Не найдено в корзине',
			'parent_item_colon'  => '',
			'menu_name'          => 'FAQ',
		),
		'description'         => '',
		'public'              => true,
		'publicly_queryable'  => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => null,
		'menu_icon'           => 'dashicons-lightbulb', 
		'hierarchical'        => true,
		'supports'            => array('title','editor', 'thumbnail'),
		'taxonomies'          => array(),
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
        'capability_type'    => 'page',
	) );
}

function motovoz_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'motovoz_content_width', 640 );
}
add_action( 'after_setup_theme', 'motovoz_content_width', 0 );

function motovoz_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'motovoz' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'motovoz' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'motovoz_widgets_init' );

function motovoz_style() {
    wp_enqueue_style( 'magnific-popup', get_template_directory_uri() . '/css/magnific-popup.css');
    wp_enqueue_style( 'popup', get_template_directory_uri() . '/css/popup.css');
	wp_enqueue_style( 'animate', get_template_directory_uri() . '/css/animate.min.css');
    wp_enqueue_style( 'motovoz-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'motovoz_style' );

function motovoz_scripts() {
	wp_enqueue_script( 'mask', get_template_directory_uri() . '/js/jquery.mask.min.js', array ('jquery'), '', true );
	wp_enqueue_script( 'prefixfree', get_template_directory_uri() . '/js/prefixfree.min.js', array ('jquery'), '', true );
	wp_enqueue_script( 'waypoints', get_template_directory_uri() . '/js/waypoints.min.js', array ('jquery'), '', true );
	wp_enqueue_script( 'animated', get_template_directory_uri() . '/js/animated.js', array ('jquery'), '', true );
	wp_enqueue_script( 'magnific-popup', get_template_directory_uri() . '/js/jquery.magnific-popup.min.js', array ('jquery'), '', true );
	wp_enqueue_script('ymaps', 'https://api-maps.yandex.ru/2.1/?lang=ru_RU');
    wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js',  array ('jquery'), '', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'motovoz_scripts' );

function my_formatter($content) {
	$new_content = '';
	$pattern_full = '{(\[raw\].*?\[/raw\])}is';
	$pattern_contents = '{\[raw\](.*?)\[/raw\]}is';
	$pieces = preg_split($pattern_full, $content, -1, PREG_SPLIT_DELIM_CAPTURE);
	foreach ($pieces as $piece) {
		if (preg_match($pattern_contents, $piece, $matches)) {
			$new_content .= $matches[1];
		} else {
			$new_content .= wptexturize(wpautop($piece));
		}
	}
	return $new_content;
}
remove_filter('the_content', 'wpautop');
remove_filter('the_content', 'wptexturize');
add_filter('the_content', 'my_formatter', 99);

//require get_template_directory() . '/inc/custom-header.php';
//require get_template_directory() . '/inc/template-tags.php';
//require get_template_directory() . '/inc/extras.php';
//require get_template_directory() . '/inc/customizer.php';
//require get_template_directory() . '/inc/jetpack.php';


/* Custom form */
add_filter('comment_form_default_fields', 'extend_comment_custom_default_fields');
function extend_comment_custom_default_fields($fields) {

	$commenter = wp_get_current_commenter();
	$req = get_option( 'require_name_email' );
	$aria_req = ( $req ? " aria-required='true'" : '' );

	$fields[ 'author' ] = '<p class="comment-form-author">'.
	  ''.
	  '<input id="author" name="author" placeholder="Ваше имя" type="text" value="'. esc_attr( $commenter['comment_author'] ) .
	  '" size="30" tabindex="1"' . $aria_req . ' /></p>';

	$fields[ 'email' ] = '<p class="comment-form-email">'.
	  ''.
	  '<input id="email" name="email" placeholder="E-mail" type="text" value="'. esc_attr( $commenter['comment_author_email'] ) .
	  '" size="30"  tabindex="2"' . $aria_req . ' /></p>';
	
	
	$fields[ 'phone' ] = '<p class="comment-form-phone">'.
	  ''.
	  '<input id="phone" class="phone" placeholder="Номер телефона" name="phone" type="text" size="30"/></p>';
	
	$fields[ 'link' ] = '<p class="comment-form-link">'.
	  ''.
	  '<input id="link" name="link" placeholder="Ссылка для видео" type="text" size="30"/></p>';
  return $fields;
}




add_action( 'comment_post', 'save_extend_comment_meta_data' );
function save_extend_comment_meta_data( $comment_id ){

	if( !empty( $_POST['phone'] ) ){
		$phone = sanitize_text_field($_POST['phone']);
		add_comment_meta( $comment_id, 'phone', $phone );
	}

	if( !empty( $_POST['link'] ) ){
		$title = sanitize_text_field($_POST['link']);
		add_comment_meta( $comment_id, 'link', $title );
	}

}

add_filter( 'comment_text', 'modify_extend_comment');
function modify_extend_comment( $text ){

  $plugin_url_path = WP_PLUGIN_URL;

  if( $commentlink = get_comment_meta( get_comment_ID(), 'link', true ) ) {
	$commentlink = '<p class="hide">' . esc_attr( $commentlink ) . '</p>';
	$text = $commentlink . $text;
  } 
	if( $commenphone = get_comment_meta( get_comment_ID(), 'phone', true ) ) {
	$commenphone = '<p class="hide">' . esc_attr( $commenphone ) . '</p>';
	$text = $commenphone . $text;
  }
return $text;
}

add_filter('comment_form_default_fields','remove_comment_fields');
function remove_comment_fields($fields) {
    unset($fields['url']);
    return $fields;
}

function sort_comment_fields( $fields ){
    $new_fields = array();
    $myorder = array('author','phone','email','comment', 'link' ); // порядок полей
 
    foreach( $myorder as $key ){
        $new_fields[ $key ] = $fields[ $key ];
        unset( $fields[ $key ] );
    }
 
    if( $fields )
        foreach( $fields as $key => $val )
            $new_fields[ $key ] = $val;
    return $new_fields;
}
add_filter('comment_form_fields', 'sort_comment_fields' );
/* Custom form */






function mytheme_comment($comment, $args, $depth) {
   $GLOBALS['comment'] = $comment; ?>
   <div class="review-block" id="li-comment-<?php comment_ID() ?>">
    
     <div class="review-top clearfix">
		<?php printf(__('<p class="left">%s</p>'), get_comment_author_link()) ?>
		<span class="right"><?php echo get_comment_date(); ?></span>
	</div>
	<div class="review-content">
		<?php comment_text() ?>
		
<!--
Эти элементы закрываются в файле "front-function" темы comment-images-reloaded-->

	</div>
</div>

<!--
Эти элементы закрываются в файле "front-function" темы comment-images-reloaded
-->
      

<?php
        }	








