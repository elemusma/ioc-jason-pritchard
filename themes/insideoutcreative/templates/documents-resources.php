<?php

/**
 * Template Name: Documents & Resources
 */

 get_header();

 if(is_user_logged_in()):
 // start of resources
if(have_rows('resources_content')): while(have_rows('resources_content')): the_row();
$bgImg = get_sub_field('background_image');
$img = get_sub_field('image');
$title = get_sub_field('title');

echo '<section class="position-relative" style="background:url(' . wp_get_attachment_image_url($bgImg['id'], 'full') . ');background-attachment:fixed;background-size:cover;background-position:bottom;padding:100px 0;min-height:100vh;">';
echo '<div class="position-absolute w-100 h-100" style="background:#707070;top:0;left:0;mix-blend-mode:multiply;pointer-events:none;"></div>';
// echo '<div class="position-absolute w-100 text-center" style="top:50px;left:50px;">';
// echo '<h2 class="h1 text-white">' . $title . '</h2>';
// echo '</div>';
echo '<div class="container">';
echo '<div class="row align-items-center pb-5">';

echo '<div class="col-md-3 text-center">';
echo '<a class="btn-accent-primary" href="' . home_url() . '/resources/" target="">Back to Dashboard</a>';
echo '</div>';

echo '<div class="col-md-7 text-center">';
echo '<h1 class="text-white border-top-bottom p-3">' . $title . '</h1>';
echo '</div>';

echo '</div>';


if(have_rows('links')): 
    echo '<div class="row row-resources justify-content-center">';
    while(have_rows('links')): the_row();
    $image = get_sub_field('image');
    $link = get_sub_field('link');
    $style = get_sub_field('style');
    $classes = get_sub_field('classes');

if($link):
$link_url = $link['url'];
$link_title = $link['title'];
$link_target = $link['target'] ? $link['target'] : '_self';
endif;

echo '<a href="' . esc_url( $link_url ) . '" target="' . esc_attr( $link_target ) . '" class="col-lg-3 col-md-6 col-documents-resources text-center mb-3 text-black d-inline-block" style="">';


echo wp_get_attachment_image($image,'full','',['class'=>'','style'=>'width:90%;height:100px;object-fit:contain;']);

echo '<div class="position-relative align-items-center pt-2 d-flex align-items-center justify-content-center pl-3 pr-3 ' . $classes . '" style="' . $style . 'height:200px;">';
echo '<div class="">';


echo '<h3 class="bold">' . esc_html( $link_title ) . '</h3>';
if(get_sub_field('description')):
echo '<div class="small">';
echo get_sub_field('description');
echo '</div>';

    endif;

echo '</div>';
echo '</div>';
echo '</a>';

endwhile; 
echo '</div>';

endif;

echo '</div>';
echo '</section>';
endwhile; endif;
// end of resources
else:

    echo get_template_part('partials/is-user-logged-in');

endif;

 get_footer();

?>