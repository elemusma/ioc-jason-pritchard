<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php 

if(get_field('header', 'options')) { the_field('header', 'options'); }

if(get_field('custom_css')) { 
?> 
<style>
<?php the_field('custom_css'); ?>
</style>
<?php } ?>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php if(get_field('body','options')) { the_field('body','options'); } 
if(!is_front_page()):
?>

<div class="blank-space"></div>
<header class="position-relative pt-3 pb-3 z-3 box-shadow bg-white w-100" style="top:0;left:0;">

<div class="nav">
<div class="container">
<div class="row justify-content-end align-items-center">
<div class="col-md-3 text-center">
<a href="<?php echo home_url(); ?>/resources/">
<?php 
$logo = get_field('logo','options'); 
if($logo){
echo wp_get_attachment_image($logo['id'],'full',"",['class'=>'w-100 h-auto m-auto','style'=>'max-width:250px;']); 
}
?>
</a>
</div>
<?php 
// echo '<div class="col-lg-4">';
    // wp_nav_menu(array(
    // 'menu' => 'Contact',
    // 'menu_class'=>'menu d-flex flex-wrap list-unstyled justify-content-center mb-0'
    // ));
    // echo get_template_part('partials/icons');
// echo '</div>';
?>
<!-- <div class="col-lg-4 col-6 desktop-hidden">
<a id="navToggle" class="nav-toggle">
<div>
<div class="line-1 bg-accent"></div>
<div class="line-2 bg-accent"></div>
<div class="line-3 bg-accent"></div>
</div>
</a>
</div> -->
<div class="col-md-9">
<div class="row justify-content-center">
<div class="col-12">
    <?php echo get_template_part('partials/icons'); ?>
</div>
</div>
</div>
<!-- <div id="navMenuOverlay" class="position-fixed z-2"></div> -->
<!-- <div class="col-md-9 nav-items bg-white desktop-hidden" id="navItems">

<div class="pt-5 pb-5">
<div class="close-menu">
<div>
<span id="navMenuClose" class="close h1">X</span>
</div>
</div>
<a href="<?php echo home_url(); ?>">
<?php 
$logo = get_field('logo','options'); 
if($logo){
echo wp_get_attachment_image($logo['id'],'full',"",['class'=>'w-100 h-auto','style'=>'max-width:250px;']);
}
?>
</a>
</div>
<?php wp_nav_menu(array(
'menu' => 'primary',
'menu_class'=>'menu d-flex flex-wrap list-unstyled justify-content-center mb-0'
)); ?>
</div> -->
</div>
</div>
</div>

</header>
<?php



endif; // end of if is not front page
?>