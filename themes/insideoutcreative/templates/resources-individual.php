<?php

/**
 * Template Name: Resources Individual
 */

 get_header();

 if(is_user_logged_in()):
//  start of header
echo '<section class="pt-5 pb-5">';
echo '<div class="container">';
echo '<div class="row justify-content-start align-items-center">';

echo '<div class="col-md-3 text-center">';
echo '<a class="btn-accent-primary" href="' . home_url() . '/resources/" target="">Back to Dashboard</a>';
echo '</div>';

echo '<div class="col-md-6 text-center">';
echo '<h1 class="text-black d-inline-block p-3 text-uppercase bold border-top-bottom" style="border-top:4px solid var(--accent-primary);border-bottom:4px solid var(--accent-primary);">' . get_the_title() . '</h1>';
echo '</div>';


echo '</div>';
echo '</div>';
echo '</section>';
//  end of header

echo '<section class="">';
    echo '<div class="container">';
    echo '<div class="row pt-4">';
    echo '<div class="col-12 pb-2">';
            echo '<h2 class="bold">NEW RELEASES</h2>';

            echo '<div class="videos-carousel owl-carousel owl-theme">';
            $homepageServices = new WP_Query(array(
                'posts_per_page'=>6,
                'post_type'=>'videos',
            ));
            while($homepageServices->have_posts()){
                $homepageServices->the_post();

                echo '<a href="' . get_the_permalink() . '" class="">';
                echo '<div class="position-relative overflow-h img-hover w-100">';
                the_post_thumbnail('full',array('class'=>'w-100','style'=>'height:140px;object-fit:cover;'));
                echo '</div>';
                echo '<h6 class="pt-4">' . get_the_title() . '</h6>';

                echo '</a>';

            } wp_reset_postdata();

    echo '</div>';

    echo '<div class="bg-accent w-100 mt-4 bg-accent-divider" style="height:2px;"></div>';

    echo '</div>';
    echo '</div>';
    echo '</div>';
echo '</section>';

// start of content
if(have_rows('sections')):
    echo '<section class="pb-5">';
    echo '<div class="container">';
        while(have_rows('sections')): the_row();
        $videos = get_sub_field('videos');
            echo '<div class="row pt-4 row-resources">';

            echo '<div class="col-12 pb-2">';
            echo '<h2 class="bold">' . get_sub_field('title') . '</h2>';
            echo get_sub_field('content');
            

                if( $videos ):
                    echo '<div class="videos-carousel owl-carousel owl-theme">';
                    foreach( $videos as $post ): 
                        // Setup this post for WP functions (variable must be named $post).
                        setup_postdata($post);

                        echo '<a href="' . get_the_permalink() . '" class="">';
                        echo '<div class="position-relative overflow-h img-hover w-100">';
                        the_post_thumbnail('full',array('class'=>'w-100','style'=>'height:140px;object-fit:cover;'));
                        echo '</div>';
                        echo '<h6 class="pt-4">' . get_the_title() . '</h6>';

                        echo '</a>';
                    endforeach;
                    // Reset the global post object so that the rest of the page works correctly.
                    wp_reset_postdata();
                    echo '</div>';
                endif;
            echo '</div>';

            echo '<div class="bg-accent w-100 mt-4 bg-accent-divider" style="height:2px;"></div>';
            echo '</div>';
        endwhile;
    echo '</div>';
    echo '</section>';
endif;
// end of content
else:

    echo get_template_part('partials/is-user-logged-in');

endif;

 get_footer();

?>