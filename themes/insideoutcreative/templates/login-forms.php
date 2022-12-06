<?php

/**
 * Template Name: Login Forms
 */

 get_header();

 echo '<section class="position-relative">';
echo '<div class="container-fluid">';
echo '<div class="row">';
echo '<div class="col-md-5 p-0">';

echo wp_get_attachment_image(43,'full',"",['class'=>'w-100 h-auto d-block','style'=>'']);

echo '<div class="pl-lg-5 pr-lg-5" style="padding-top:150px;padding-bottom:150px;">';
$current_user = wp_get_current_user();

echo '<div class="pl-lg-5 pr-lg-5 pl-md-3 pr-md-3">';
if ( is_user_logged_in() ) {
    echo '<h1 class="pt-3 pb-3 mb-0 bold" style="font-size:30px;">Welcome, ' . $current_user->display_name . '</h1>';
} else {
    echo '<h1 class="pt-3 pb-3 mb-0 bold" style="font-size:30px;">' . get_the_title() . '</h1>';
}
echo '<div class="divider mb-3"></div>';

if ( is_user_logged_in() ) {
    echo '<div class="logged-in-user-dashboard">';
    echo '<div class="" style="height:13px;"></div>';
    echo '<a class="btn-accent-primary" href="resources" target="">Let\'s Get Started!</a>';
    echo '<p class="mt-2">Click <a href="' . home_url() . '/wp-admin/profile.php">here</a> to edit your profile page (optional).</p>';
    echo '<div class="" style="height:35px;"></div>';
    echo '</div>';
}

if ( have_posts() ) : while ( have_posts() ) : the_post();
the_content();
endwhile;
endif;

echo '</div>';

echo '</div>';

echo wp_get_attachment_image(43,'full',"",['class'=>'w-100 h-auto d-block','style'=>'']);

echo '</div>';

echo '<div class="col-md-7 p-0">';
the_post_thumbnail('full',array('class'=>'w-100 h-100 position-absolute d-md-block d-none','style'=>'top:0;left:0;object-fit:cover;'));
the_post_thumbnail('full',array('class'=>'w-100 h-auto position-relative d-md-none d-block','style'=>''));
echo '</div>';

echo '</div>';
echo '</div>';
echo '</section>';

 get_footer();

?>