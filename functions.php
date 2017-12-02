<?php
add_theme_support('post-thumbnails');

register_sidebar(array(
    'name' => 'サイドバー1',
    'id' => 'sidebar1'
));

register_sidebar(array(
    'name' => 'サイドバー２',
    'id' => 'sidebar2'
));

$custom_background_defaults = array(
        'default-color' => 'efefef',
        'default-image' => get_bloginfo('template_url') . '/images/bg_wall.gif',
);
add_theme_support( 'custom-background', $custom_background_defaults );
