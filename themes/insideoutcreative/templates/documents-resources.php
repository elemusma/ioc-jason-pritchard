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

echo '<section class="position-relative" style="background:url(' . wp_get_attachment_image_url($bgImg['id'], 'full') . ');background-attachment:fixed;background-size:cover;background-position:bottom;padding:100px 0;height:100vh;">';
echo '<div class="position-absolute w-100 h-100" style="background:#707070;top:0;left:0;mix-blend-mode:multiply;pointer-events:none;"></div>';
// echo '<div class="position-absolute w-100 text-center" style="top:50px;left:50px;">';
// echo '<h2 class="h1 text-white">' . $title . '</h2>';
// echo '</div>';
echo '<div class="container">';
echo '<div class="row align-items-center pb-5">';

echo '<div class="col-md-3 text-center">';
echo '<a class="btn-accent-primary text-white" href="' . home_url() . '/resources/" target="">Back to Dashboard</a>';
echo '</div>';

echo '<div class="col-md-7 text-center">';
echo '<h1 class="text-white border-top-bottom p-3">' . $title . '</h1>';
if(get_sub_field('description')):
echo get_sub_field('description');
endif;
echo '</div>';

echo '</div>';


if(have_rows('links')): 
    echo '<div class="row row-resources justify-content-center">';
    while(have_rows('links')): the_row();
$link = get_sub_field('link');

$link_url = $link['url'];
$link_title = $link['title'];
$link_target = $link['target'] ? $link['target'] : '_self';

echo '<a href="' . esc_url( $link_url ) . '" target="' . esc_attr( $link_target ) . '" class="col-lg-3 col-md-6 col-documents-resources text-center mb-3 text-black bold" style="">';
echo '<div class="position-relative h-100 d-flex align-items-center justify-content-center pl-3 pr-3 pt-2 pb-2" style="background:rgba(255,255,255,.5);border:1px solid #d4d2d0;border-radius:15px;">';
echo esc_html( $link_title );
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