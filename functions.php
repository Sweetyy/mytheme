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
?>


