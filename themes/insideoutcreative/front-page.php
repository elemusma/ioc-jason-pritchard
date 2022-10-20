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
echo wp_get_attachment_image($image['id'], 'full','',['class'=>'w-100 h-100 img-portfolio','style'=>'object-fit:contain;max-height:150px;'] );
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

// start of contact
if(have_rows('contact_content')): while(have_rows('contact_content')): the_row();
echo '<section class="pt-5 pb-5 position-relative" style="background:#010101;">';
echo '<div class="container">';
echo '<div class="row justify-content-between align-items-center">';

echo '<div class="col-md-6">';
echo get_sub_field('content');
echo '</div>';

echo '<div class="col-md-4">';

echo '<div class="d-flex align-items-center justify-content-end pt-5">';
echo '<span class="text-white h5">Connect With Me</span>';
echo '</div>';

echo get_template_part('partials/si');

echo '<div class="d-flex align-items-center justify-content-end pt-5">';
echo '<span class="text-white h5">Text Jason Directly</span>';
echo '</div>';
echo '<div class="d-flex align-items-center justify-content-end pt-1">';

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