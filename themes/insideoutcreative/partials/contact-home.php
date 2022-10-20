<?php

// start of contact
if(have_rows('contact_content',2)): while(have_rows('contact_content',2)): the_row();
echo '<section class="pt-5 pb-5 position-relative" style="background:#010101;">';
echo '<div class="container">';
echo '<div class="row justify-content-start align-items-center">';

echo '<div class="col-md-6">';
echo get_sub_field('content');
echo '</div>';

echo '<div class="col-md-4">';

// echo '<div class="d-flex align-items-center justify-content-end pt-5">';
// echo '<span class="text-white h5">Connect With Me</span>';
// echo '</div>';

echo get_template_part('partials/si');

// echo '<div class="d-flex align-items-center justify-content-start pt-3">';
// echo '<span class="text-white h5">Text Jason Directly</span>';
// echo '</div>';
echo '<div class="d-flex align-items-center justify-content-start pt-3">';

echo '<div class="mr-4" style="width:25px;">';
echo '<svg xmlns="http://www.w3.org/2000/svg" fill="white" viewBox="0 0 512 512"><path d="M493.4 24.6l-104-24c-11.3-2.6-22.9 3.3-27.5 13.9l-48 112c-4.2 9.8-1.4 21.3 6.9 28l60.6 49.6c-36 76.7-98.9 140.5-177.2 177.2l-49.6-60.6c-6.8-8.3-18.2-11.1-28-6.9l-112 48C3.9 366.5-2 378.1.6 389.4l24 104C27.1 504.2 36.7 512 48 512c256.1 0 464-207.5 464-464 0-11.2-7.7-20.9-18.6-23.4z"/></svg>';
echo '</div>';

echo '<a href="tel:+1' . get_field('phone','options') . '" class="h3 text-white">' . get_field('phone','options') . '</a>';

echo '</div>';

// echo '<div class="d-flex align-items-center justify-content-end pt-2">';

// echo '<div class="mr-4" style="width:25px;">';
// echo '<svg xmlns="http://www.w3.org/2000/svg" fill="white" viewBox="0 0 384 512"><path d="M172.268 501.67C26.97 291.031 0 269.413 0 192 0 85.961 85.961 0 192 0s192 85.961 192 192c0 77.413-26.97 99.031-172.268 309.67-9.535 13.774-29.93 13.773-39.464 0zM192 272c44.183 0 80-35.817 80-80s-35.817-80-80-80-80 35.817-80 80 35.817 80 80 80z"/></svg>';
// echo '</div>';

// echo '<span" class="text-gray">' . get_field('address','options') . '</span>';

// echo '</div>';

echo '</div>';

echo '</div>';
echo '</div>';
echo '</section>';
endwhile; endif;
// end of contact

?>