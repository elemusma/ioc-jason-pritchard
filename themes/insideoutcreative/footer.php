<footer class="pt-5 pb-5" style="background:#171719;">
<section class="">
<div class="container">
<div class="row justify-content-between align-items-center">
<div class="col-md-3 text-center">
<a href="<?php echo home_url(); ?>/resources/">
<?php $logo = get_field('logo','options'); $logoFooter = get_field('logo_footer','options'); 
if($logoFooter){
echo wp_get_attachment_image($logoFooter['id'],'full',"",['class'=>'w-100 h-auto']); 
} elseif($logo) {
echo wp_get_attachment_image($logo['id'],'full',"",['class'=>'w-100 h-auto']);
}
?>
</a>
</div>
<?php
echo '<div class="col-md-7">';
wp_nav_menu(array(
'menu' => 'footer',
'menu_class'=>'menu d-flex flex-wrap list-unstyled justify-content-start text-white text-uppercase'
)); 
echo wp_get_attachment_image(85,'full','',['class'=>'h-auto','style'=>'width:200px']);
echo '</div>';
?>

</div>
</div>
</section>

</footer>
<?php if(get_field('footer', 'options')) { the_field('footer', 'options'); } ?>
<?php wp_footer(); ?>
</body>
</html>