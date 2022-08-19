<?php 
if(have_rows('icons','options')): 
    echo '<div class="row align-items-center">';
    while(have_rows('icons','options')): the_row(); 
    $svg = get_sub_field('svg');
    $link = get_sub_field('link');
    $link_url = $link['url'];
    $link_title = $link['title'];
    $link_target = $link['target'] ? $link['target'] : '_self';
echo '<div class="col-md">';

if($link_url == '#'){
    echo '<div class="d-flex align-items-center">';
    echo '<div class="mr-3" style="width:20px;">';
    echo $svg;
    echo '</div>';
    echo '<span class="small">' . $link_title . '</span>';
    echo '</div>';
} else {
    echo '<a href="' . $link_url . '" target="' . $link_target . '" class="d-flex align-items-center">';
    echo '<div class="mr-3" style="width:20px;">';
    echo $svg;
    echo '</div>';
    echo '<span class="small text-black">' . $link_title . '</span>';
    echo '</a>';
}

echo '</div>';


endwhile; 

    echo '</div>';
endif; 
?>