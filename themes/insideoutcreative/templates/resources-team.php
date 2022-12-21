<?php

/**
 * Template Name: Resources - Team
 */

 get_header();

// if(is_user_logged_in()):

    echo '<section class="position-relative">';
echo '<div class="container-fluid">';
echo '<div class="row">';
echo '<div class="col-md-5 z-1 bg-black text-white" style="">';

// echo wp_get_attachment_image(33,'full',"",['class'=>'w-100 h-auto d-block logo-header','style'=>'']);

echo '<div class="p-lg-5 pt-5 pb-5">';
$current_user = wp_get_current_user();

echo '<div class="pl-lg-5 pr-lg-5 pl-md-3 pr-md-3">';

// echo '<div class="divider mb-3"></div>';
    echo '<h1 class="p-3 mb-0 bold border-top-bottom mb-4 text-center" style="font-size:30px;">' . get_the_title() . '</h1>';


// if ( is_user_logged_in() ) {
    // echo '<div class="logged-in-user-dashboard">';
    // echo '<div class="" style="height:13px;"></div>';
    // echo '<a class="btn-accent-primary" href="resources" target="">Go to Dashboard</a>';
    // echo '<p class="mt-2">Click <a href="' . home_url() . '/wp-admin/profile.php">here</a> to edit your profile page (optional).</p>';
    // echo '<div class="" style="height:35px;"></div>';
    // echo '</div>';
// }

if ( have_posts() ) : while ( have_posts() ) : the_post();
the_content();
endwhile;
endif;

echo '</div>';

echo '</div>';

echo '</div>';

echo '<div class="col-md-7 p-0">';
the_post_thumbnail('full',array('class'=>'w-100 h-100 position-absolute d-md-block d-none','style'=>'top:0;left:0;object-fit:cover;'));
the_post_thumbnail('full',array('class'=>'w-100 h-auto position-relative d-md-none d-block','style'=>''));
echo '</div>';

echo '</div>';
echo '</div>';
echo '</section>';

echo '<div class="">';
echo wp_get_attachment_image(43,'full',"",['class'=>'w-100 h-auto d-block','style'=>'']);
echo '</div>';

    if(have_rows('resources_team')): while(have_rows('resources_team')): the_row();

    // echo '<section class="pt-5 pb-5 position-relative bg-black text-white">';
    // echo '<div class="container">';
    // echo '<div class="row justify-content-center">';
    // echo '<div class="col-md-9 text-center">';

    // echo get_sub_field('intro');

    // echo '</div>';
    // echo '</div>';
    // echo '</div>';
    // echo '</section>';

    if(have_rows('team_repeater_new_again')): 
        echo '<div class="team">';
        while(have_rows('team_repeater_new_again')): the_row();
    $imageSide = get_sub_field('image_side');
    $image = get_sub_field('image');


    echo '<div class="team-repeater">';
    echo '<section class="pt-5 pb-5 position-relative">';
    echo '<div class="position-absolute w-100 d-lg-block d-none" style="height:75%;left:0;top:50%;transform:translate(0,-50%);background:#efeff0;"></div>';
    echo '<div class="container">';
    if($imageSide == 'Left'){
        echo '<div class="row justify-content-between align-items-center">';
        // echo '</div>';
    } else {
        echo '<div class="row justify-content-between align-items-center flex-lg-row-reverse text-lg-right right">';
    }
    echo '<div class="col-lg-4">';

    if($image):
    echo wp_get_attachment_image($image['id'],'full','',['class'=>'w-100 h-100']);
    endif;

    echo '</div>';

    echo '<div class="col-1 pt-5 d-lg-none d-block"></div>';
    
    echo '<div class="col-lg-7">';
    echo '<div class="position-absolute w-100 d-lg-none d-block" style="height:60%;left:0;top:50%;transform:translate(0,-50%);background:#efeff0;z-index:-1;"></div>';

    if($imageSide == 'Left'){
    echo '<div class="position-relative pl-lg-5 pl-3 pt-5 pb-5" style="border-left:1px solid var(--accent-primary);">';
    } else {
    echo '<div class="position-relative pr-lg-5 pr-3 pt-5 pb-5" style="border-right:1px solid var(--accent-primary);">';
    // echo '</div>';
    }
    echo '<h2 class="bold font-italic mb-0">' . get_sub_field('name') . '</h2>';
    echo '<h3>' . get_sub_field('job_title') . '</h3>';
    echo get_sub_field('content');
    echo '</div>';

    echo '</div>';

    echo '</div>';
    echo '</div>';
    echo '</section>';

    // echo '<section class="pb-5 position-relative" style="">';
    // echo '<div class="container">';
    // echo '<div class="row">';
    // echo '<div class="col-12 content-col">';

    // echo '<div class="position-relative pb-5" style="border-bottom:2px solid var(--accent-primary);">';
    // echo get_sub_field('content');
    // echo '</div>';

    // echo '</div>';
    // echo '</div>';
    // echo '</div>';
    // echo '</section>';

    echo '</div>';


    endwhile;
    echo '</div>';
 endif;

    endwhile; endif;

// else:

//     echo get_template_part('partials/is-user-logged-in');

// endif;

 get_footer();

?>