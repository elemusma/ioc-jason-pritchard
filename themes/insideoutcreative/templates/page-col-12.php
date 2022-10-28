<?php
/**
 * Template Name: Page Col 12
 */
get_header(); 

global $post; 
if ( ! post_password_required( $post ) ) {

if(get_the_content()){

    if(has_post_thumbnail()):
    echo '<section class="pt-5">';

    the_post_thumbnail('full',array('class'=>'w-100 h-100'));

    echo '</section>';
    endif;

echo '<section class="pt-5 pb-5">';
echo '<div class="container">';
echo '<div class="row align-items-center">';

// echo '<div class="col-md-3">';
// if ( $post->post_parent ) {
//     echo '<a class="btn-accent-primary" href="' . get_permalink( $post->post_parent ) . '" target="">Back to ' . get_the_title( $post->post_parent ) . '</a>';
// } else {
//     echo '<a class="btn-accent-primary" href="' . home_url() . '/" target="">Back to Home</a>';
//     }
// echo '</div>';

// echo '<div class="col-md-6 text-center">';
// echo '<h1 class="bold border-top-bottom p-3 d-inline-block mb-0">' . get_the_title() . '</h1>';
// echo '</div>';

echo '<div class="col-12 d-md-flex align-items-center pb-4">';
if ( $post->post_parent ) {
    echo '<a class="btn-accent-primary mr-5 pl-3 pr-3 text-accent" href="' . get_permalink( $post->post_parent ) . '" target="">Back to ' . get_the_title( $post->post_parent ) . '</a>';
} else {
    echo '<a class="btn-accent-primary mr-5 pl-3 pr-3 text-accent" href="' . home_url() . '/" target="">Back to Home</a>';
    }
echo '<h1 class="bold border-top-bottom p-3 d-inline-block mb-0">' . get_the_title() . '</h1>';
echo '</div>';

echo '<div class="col-12">';
if ( have_posts() ) : while ( have_posts() ) : the_post();
the_content();
endwhile; else:
echo '<p>Sorry, no posts matched your criteria.</p>';
endif;
echo '</div>';
echo '</div>';
echo '</div>';
echo '</section>';

echo get_template_part('partials/contact-home');

}

} else {
// we will show password form here

echo '<section class="pt-5 pb-5">';
echo '<div class="container">';
echo '<div class="row">';
echo '<div class="col-md-12">';
echo get_the_password_form();
echo '</div>';
echo '</div>';
echo '</div>';
echo '</section>';
   
}

get_footer();

?>