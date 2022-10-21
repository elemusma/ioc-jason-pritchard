<?php
// start of resources
if(have_rows('resources_content', 2)): while(have_rows('resources_content', 2)): the_row();
$bgImg = get_sub_field('background_image');
$img = get_sub_field('image');
$title = get_sub_field('title');

echo '<section class="position-relative" style="background:url(' . wp_get_attachment_image_url($bgImg['id'], 'full') . ');background-attachment:fixed;background-size:cover;">';
echo '<div class="position-absolute w-100 h-100" style="background:#707070;top:0;left:0;mix-blend-mode:multiply;pointer-events:none;"></div>';
echo '<div class="position-absolute" style="top:50px;left:50px;">';
if($img){
    echo wp_get_attachment_image($img['id'],'full','',['class'=>'h-auto','style'=>'width:400px;max-width:90%;']);
}

if($title){
    echo '<h2 class="h1">' . $title . '</h2>';
}
echo '</div>';
echo '<div class="container-fluid">';
echo '<div class="row row-resources justify-content-between">';

if(have_rows('links')): while(have_rows('links')): the_row();
$link = get_sub_field('link');

$link_url = $link['url'];
$link_title = $link['title'];
$link_target = $link['target'] ? $link['target'] : '_self';


echo '<a href="' . esc_url( $link_url ) . '" target="' . esc_attr( $link_target ) . '" class="col-lg-3 col-md-6 col-resources" style="padding-top:150px;padding-bottom:150px;text-decoration:none;">';
echo '<div class="position-absolute bg-accent w-100 h-100 col-resources-overlay" style="top:0;left:0;opacity:0;transition:all .25s ease-in-out;"></div>';

echo '<div class="d-flex justify-content-center position-relative z-3 h-100" style="">';
echo '<div class="p-2 d-inline-block mr-3" style="border-radius:50%;border:1px solid var(--accent-primary);height:35px;width:35px;">';
echo '<div style="width:15px;height:18px;">';
echo '<svg xmlns="http://www.w3.org/2000/svg" fill="white" viewBox="0 0 448 512"><path d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"/></svg>';
echo '</div>';
echo '</div>';

echo '<div class="">';
echo '<span class="col-resources-title h3 text-white">' . esc_html( $link_title ) . '</span>';

echo '<div class="resources-col-description text-white pt-2 small">';
echo get_sub_field('description');
echo '</div>';
echo '</div>';


echo '</div>';
echo '</a>';

endwhile; endif;

echo '</div>';
echo '</div>';
echo '</section>';
endwhile; endif;
// end of resources
?>