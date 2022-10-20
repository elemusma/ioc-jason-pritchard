<?php get_header();

// start of header
echo '<section class="position-relative">';
echo '<div class="container-fluid">';
echo '<div class="row">';
echo '<div class="col-md-5 p-0 text-center">';

echo wp_get_attachment_image(43,'full',"",['class'=>'w-100 h-auto d-block','style'=>'']);

$logo = get_field('logo','options'); 
if($logo){
echo wp_get_attachment_image($logo['id'],'full',"",['class'=>'w-100 h-auto p-5','style'=>'']);
}

echo '<div class="divider m-auto"></div>';

echo '<div class="p-lg-5 pt-5 pb-5">';


echo '<div class="pl-lg-5 pr-lg-5 pl-md-3 pr-md-3">';
echo '<h1 class="pt-3 pb-3 mb-0 bold" style="font-size:30px;">' . get_the_title() . '</h1>';

if ( have_posts() ) : while ( have_posts() ) : the_post();
the_content();
endwhile;
endif;



if(have_rows('header_content')): while(have_rows('header_content')): the_row();

$link = get_sub_field('link');

$link_url = $link['url'];
$link_title = $link['title'];
$link_target = $link['target'] ? $link['target'] : '_self';
// echo '<a class="bg-accent btn" href="' . esc_url( $link_url ) . '" target="' . esc_attr( $link_target ) . '">' . esc_html( $link_title ) . '</a>';
// 


if($link_url == '#' ){
    echo  '<span class="btn-accent-primary join-today open-modal" id="join-today">' . esc_html( $link_title ) . '</span>';

    echo '<div class="modal-content join-today position-fixed w-100 h-100 z-3" style="opacity:0;">';
    echo '<div class="bg-overlay"></div>';
    echo '<div class="bg-content text-left">';
    echo '<div class="bg-content-inner">';
    echo '<div class="close" id="">X</div>';
    echo '<div>';
    echo get_sub_field('popup');
    echo '</div>';
    echo '</div>';

    echo '</div>';
    echo '</div>';

} else {
    echo  '<a class="btn-accent-primary" id="" href="' . esc_url( $link_url ) . '" target="' . esc_attr( $link_target ) . '">' . esc_html( $link_title ) . '</a>';
}

endwhile; endif;

echo '</div>';

echo '</div>';

echo wp_get_attachment_image(43,'full',"",['class'=>'w-100 h-auto d-block','style'=>'']);

echo '</div>';

echo '<div class="col-md-7 p-0">';
the_post_thumbnail('full',array('class'=>'w-100 h-100 d-md-block d-none img-featured','style'=>'top:0;left:0;'));
// the_post_thumbnail('full',array('class'=>'position-absolute d-md-block d-none img-featured','style'=>'top:50%;left:50%;transform:translate(-50%, -50%);object-fit:contain;'));
the_post_thumbnail('full',array('class'=>'w-100 h-auto position-relative d-md-none d-block','style'=>''));
echo '</div>';

echo '</div>';
echo '</div>';
echo '</section>';
// end of header

// start of intro
if(have_rows('intro_content')): while(have_rows('intro_content')): the_row();
$image = get_sub_field('image_divider');
echo '<section class="pt-3 pb-3 position-relative" style="box-shadow:0 5px 5px #c0c1c0;">';
echo '<div class="container-fluid">';
echo '<div class="row align-items-center">';
echo '<div class="col-md-5 p-0">';
echo '<div class="pl-lg-5 pr-lg-5">';
echo '<div class="pl-lg-5 pr-lg-5 pl-md-3 pr-md-3">';
echo wp_get_attachment_image($image['id'],'full',"",['class'=>'d-block mt-1 mb-md-1 mb-4 ml-md-0 ml-3','style'=>'width:85px;height:18px;object-fit:contain;']);
echo '</div>';
echo '</div>';
echo '</div>';

if(have_rows('icons')):
echo '<div class="col-md-7">';
echo '<div class="row">';
while(have_rows('icons')): the_row();
$svg = get_sub_field('svg');
    $link = get_sub_field('link');
    $link_url = $link['url'];
    $link_title = $link['title'];
    $link_target = $link['target'] ? $link['target'] : '_self';
echo '<div class="col-md-3">';

if($link_url == '#'){
    echo '<div class="d-flex align-items-center">';
    echo '<div class="mr-3" style="width:20px;">';
    echo $svg;
    echo '</div>';
    echo '<span>' . $link_title . '</span>';
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
echo '</div>';
endif;

echo '</div>';
echo '</div>';
echo '</section>';
endwhile; endif;
// end of intro

// start of quote
if(have_rows('quote_content')): while(have_rows('quote_content')): the_row();
echo '<section class="pt-5 pb-5 position-relative" style="">';
echo '<div class="container">';
echo '<div class="row justify-content-center">';
echo '<div class="col-md-6">';
echo get_sub_field('content');
echo '</div>';
echo '</div>';
echo '</div>';
echo '</section>';
endwhile; endif;
// end of quote


// start of about
if(have_rows('about_content')): while(have_rows('about_content')): the_row();
$image = get_sub_field('image');
echo '<section class="pt-5 pb-5 position-relative bg-black" style="">';
echo '<div class="container">';
echo '<div class="row justify-content-end">';
echo '<div class="col-md-6 text-gray" style="font-size:120%;">';
echo get_sub_field('content');
echo '</div>';
echo '<div class="col-md-6">';
echo wp_get_attachment_image($image['id'],'full',"",['class'=>'w-100 h-auto d-block','style'=>'']);
echo '</div>';
echo '</div>';
echo '</div>';
echo '</section>';
endwhile; endif;
// end of about


// start of gallery
if(have_rows('gallery_content')): while(have_rows('gallery_content')): the_row();
$gallery = get_sub_field('gallery');

echo '<section class="pt-5 pb-5 position-relative" style="">';
echo '<div class="container">';
echo '<div class="row justify-content-center align-items-center">';

if( $gallery ): 
foreach( $gallery as $image ):
echo '<div class="col-lg-3 col-md-4 col-6 col col-portfolio mt-3 mb-3 overflow-h">';
echo '<div class="position-relative">';
// echo '<a href="' . wp_get_attachment_image_url($image['id'], 'full') . '" data-lightbox="image-set">';
echo wp_get_attachment_image($image['id'], 'full','',['class'=>'w-100 h-100 img-portfolio','style'=>'object-fit:contain;max-height:150px;filter:grayscale(1);'] );
// echo '</a>';
echo '</div>';
echo '</div>';
endforeach; 
endif;

echo '</div>';
echo '</div>';
echo '</section>';
endwhile; endif;
// end of gallery

echo get_template_part('partials/section-resources');
echo get_template_part('partials/contact-home');


// how to use new image hover effect
// echo '<div class="col-6 col-intro-gallery col mb-1 p-1 overflow-h">';
// echo '<div class="position-relative img-hover w-100">';
// echo '<a href="' . wp_get_attachment_image_url($image['id'], 'full') . '" data-lightbox="image-set">';
// echo wp_get_attachment_image($image['id'], 'full','',['class'=>'w-100 image-intro-gallery','style'=>'object-fit:cover;']);
// echo '</a>';
// echo '</div>';
// echo '</div>';

// // popup trigger
// echo '<span class="btn bg-white text-accent apply-now open-modal" id="apply-now" style="">Apply Now</span>';

// // popup content
// echo '<div class="modal-content apply-now position-fixed w-100 h-100 z-3" style="opacity:0;">';
// echo '<div class="bg-overlay"></div>';
// echo '<div class="bg-content">';
// echo '<div class="bg-content-inner">';
// echo '<div class="close" id="">X</div>';
// echo '<div>';
// echo get_field('popup_content');
// echo '</div>';
// echo '</div>';

// echo '</div>';
// echo '</div>';

get_footer(); ?>