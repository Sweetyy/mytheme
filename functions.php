<?php
function image_tag_class($class, $id, $align, $size) {
	return $align;
}
add_filter('get_image_tag_class', 'image_tag_class', 0, 4);

add_filter('nav_menu_css_class', 'my_css_attributes_filter', 100, 1);
add_filter('nav_menu_item_id', 'my_css_attributes_filter', 100, 1);
add_filter('page_css_class', 'my_css_attributes_filter', 100, 1);
function my_css_attributes_filter($var) {
  return is_array($var) ? array_intersect($var, array('current-menu-item')) : '';
}

function custom_excerpt_length( $length ) {
	return 10;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

function register_my_menus() {
  register_nav_menus(
    array(
        'main_nav' => __( 'Main Menu' ),
        'menu_social' => __( 'Social Menu' )
        )
  );
}
add_action( 'init', 'register_my_menus' );

/*$defaults = array(
	'default-color'          => '',
	'default-image'          => '',
	'default-repeat'         => '',
	'default-position-x'     => '',
	'default-attachment'     => '',
	'wp-head-callback'       => '_custom_background_cb',
	'admin-head-callback'    => '',
	'admin-preview-callback' => ''
);
add_theme_support( 'custom-background', $defaults );*/

add_theme_support( 'custom-background', array(
    'wp-head-callback' => 'wp_custom_background_cb',/* wpse_189361_custom_background_cb */
    'default-color'    => '',
    'default-image'    => ''
));

function wp_custom_background_cb() {
    ob_start();

    _custom_background_cb(); // Default handler

    $style = ob_get_clean();
    $style = str_replace( 'body.custom-background', '.bg-custom', $style );

    echo $style;
}
?>

