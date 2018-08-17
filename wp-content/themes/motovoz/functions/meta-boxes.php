<?php

add_action( 'admin_init', 'custom_meta_boxes' );
add_action( 'admin_init', 'driver_meta_boxes' );
add_action( 'admin_init', 'diagnozt_meta_boxes' );
add_action( 'admin_init', 'japon_meta_boxes' );

function custom_meta_boxes() {
  
  $my_meta_box = array(
    'id'          => 'demo_meta_box',
    'title'       => __( 'Demo Meta Box', 'theme-text-domain' ),
    'desc'        => '',
    'pages'       => array( 'post' ),
    'context'     => 'normal',
    'priority'    => 'high',
    'fields'      => array(
      array(
        'label'       => __( 'Conditions', 'theme-text-domain' ),
        'id'          => 'demo_conditions',
        'type'        => 'tab'
      ),
      array(
        'label'       => __( 'Show Gallery', 'theme-text-domain' ),
        'id'          => 'demo_show_gallery',
        'type'        => 'on-off',
        'desc'        => sprintf( __( 'Shows the Gallery when set to %s.', 'theme-text-domain' ), '<code>on</code>' ),
        'std'         => 'off'
      ),
      array(
        'label'       => '',
        'id'          => 'demo_textblock',
        'type'        => 'textblock',
        'desc'        => __( 'Congratulations, you created a gallery!', 'theme-text-domain' ),
        'operator'    => 'and',
        'condition'   => 'demo_show_gallery:is(on),demo_gallery:not()'
      ),
      array(
        'label'       => __( 'Gallery', 'theme-text-domain' ),
        'id'          => 'demo_gallery',
        'type'        => 'gallery',
        'desc'        => sprintf( __( 'This is a Gallery option type. It displays when %s.', 'theme-text-domain' ), '<code>demo_show_gallery:is(on)</code>' ),
        'condition'   => 'demo_show_gallery:is(on)'
      ),
      array(
        'label'       => __( 'More Options', 'theme-text-domain' ),
        'id'          => 'demo_more_options',
        'type'        => 'tab'
      ),
      array(
        'label'       => __( 'Text', 'theme-text-domain' ),
        'id'          => 'demo_text',
        'type'        => 'text',
        'desc'        => __( 'This is a demo Text field.', 'theme-text-domain' )
      ),
      array(
        'label'       => __( 'Textarea', 'theme-text-domain' ),
        'id'          => 'demo_textarea',
        'type'        => 'textarea',
        'desc'        => __( 'This is a demo Textarea field.', 'theme-text-domain' )
      )
    )
  );
  
  if ( function_exists( 'ot_register_meta_box' ) )
    ot_register_meta_box( $my_meta_box );
}


function driver_meta_boxes() {
  
  $driver_meta_box = array(
    'id'          => 'driver_box',
    'title'       => 'Основное (данные о водителе)',
    'desc'        => '',
    'pages'       => array( 'driver' ),
    'context'     => 'normal',
    'priority'    => 'high',
    'fields'      => array(
      array(
        'label'       => 'Основное',
        'id'          => 'main-driver',
        'type'        => 'tab'
      ),
      array(
        'label'       => 'Территория работы',
        'id'          => 'territory',
        'type'        => 'text',
        'desc'        => ''
      ),
      array(
        'label'       => 'Стаж перевозок',
        'id'          => 'experience',
        'type'        => 'text',
        'desc'        => ''
      ),
      array(
        'label'       => 'Возраст',
        'id'          => 'age',
        'type'        => 'text',
        'desc'        => ''
      ),
      array(
        'label'       => 'Достижения',
        'id'          => 'achievements',
        'type'        => 'text',
        'desc'        => ''
      )
    )
  );
  
  if ( function_exists( 'ot_register_meta_box' ) )
    ot_register_meta_box( $driver_meta_box );
}

function diagnozt_meta_boxes() {
  
  $diagnozt_meta_box = array(
    'id'          => 'diagnozt_box',
    'title'       => 'Основное (данные о диагностике)',
    'desc'        => '',
    'pages'       => array( 'diagnozt' ),
    'context'     => 'normal',
    'priority'    => 'high',
    'fields'      => array(
      array(
        'label'       => 'Основное',
        'id'          => 'main-diagnozt',
        'type'        => 'tab'
      ),
      array(
        'label'       => 'Имя',
        'id'          => 'name',
        'type'        => 'text',
        'desc'        => ''
      ),
      array(
        'label'       => 'Информация',
        'id'          => 'info',
        'type'        => 'text',
        'desc'        => ''
      ),
      array(
        'label'       => 'Телефон',
        'id'          => 'diagnozt_tel',
        'type'        => 'text',
        'desc'        => ''
      )
    )
  );
  
  if ( function_exists( 'ot_register_meta_box' ) )
    ot_register_meta_box( $diagnozt_meta_box );
}

function japon_meta_boxes() {
  
  $japon_meta_box = array(
    'id'          => 'japon_box',
    'title'       => 'Контент для Японии',
    'desc'        => '',
    'pages'       => array( 'page' ),
    'context'     => 'normal',
    'priority'    => 'high',
    'fields'      => array(
      array(
        'label'       => 'Контент на странице услуг для Японии',
        'id'          => 'japon-content-service',
        'type'        => 'tab'
      ),
      array(
        'label'       => 'Видео в услугах Японии',
        'id'          => 'video',
        'type'        => 'text',
        'desc'        => 'Вставьте в эту строку код видео'
      ),
      array(
        'label'       => 'Контент в услугах Японии',
        'id'          => 'japon-text-service',
        'type'        => 'textarea',
        'desc'        => ''
      ),
      array(
        'label'       => 'Контент на странице Японкий аукцион',
        'id'          => 'japon-content-auction',
        'type'        => 'tab'
      ),
      array(
        'label'       => 'Контент на странице Японкий аукцион',
        'id'          => 'japon-text-auction',
        'type'        => 'textarea',
        'desc'        => ''
      )
    )
  );
  
  $post_id = isset( $_GET['post'] ) ? $_GET['post'] : ( isset( $_POST['post_ID'] ) ? $_POST['post_ID'] : 0 );
  
  $template_file = get_post_meta($post_id, '_wp_page_template', TRUE);
  
  if ( $template_file == 'page_japon.php' ){
    ot_register_meta_box( $japon_meta_box );
  }
}