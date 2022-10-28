<?php
/**
 * Template Name: Page Col 12
 */
get_header(); 

global $post; 
if ( ! post_password_required( $post ) ) {

if(get_the_content()){

    echo '<section class="pt-5">';

    the_post_thumbnail('full',array('class'=>'w-100 h-100'));

    echo '</section>';

echo '<section class="pt-5 pb-5">';
echo '<div class="container">';
echo '<div class="row justify-content-center">';
echo '<div class="col-12 text-center">';
echo '<h1 class="bold border-top-bottom p-3 d-inline-block">' . get_the_title() . '</h1>';
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