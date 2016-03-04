<?php
register_nav_menus(
        array(
                'premier-menu' => __( 'premier menu' ),
                'second-menu' => __( 'Second menu' ),
                'troisieme-menu' => __( 'Troisième Menu' )
        )
);
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
?>


