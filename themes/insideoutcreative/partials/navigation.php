<?php 
echo '<div class="blank-space"></div>';
echo '<header class="position-relative pt-3 pb-3 z-3 box-shadow bg-white w-100" style="top:0;left:0;">';

echo '<div class="nav">';
echo '<div class="container">';
echo '<div class="row justify-content-end align-items-center">';
echo '<div class="col-md-3 text-center">';
echo '<a href="' . home_url() . '/resources/">';

$logo = get_field('logo','options'); 
if($logo){
echo wp_get_attachment_image($logo['id'],'full',"",['class'=>'w-100 h-auto m-auto','style'=>'max-width:250px;']); 
}

echo '</a>';
echo '</div>';


echo '<div class="col-md-9">';
echo '<div class="row justify-content-center">';
echo '<div class="col-12">';
    echo get_template_part('partials/icons');
echo '</div>';
echo '</div>';
echo '</div>';

echo '</div>';
echo '</div>';
echo '</div>';

echo '</header>';
?>