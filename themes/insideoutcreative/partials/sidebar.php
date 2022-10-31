<?php 
echo '<div class="col-md-3 sidebar order-2 order-md-1">';
echo '<div class="card p-3 mb-2">';
get_search_form();
echo '</div>';

// echo '<div class="card p-3 mt-2 mb-2">';
// echo '<h3>Categories</h3>';
// echo '<ul>';
// wp_list_categories( array('taxonomy' => 'product_cat', 'title_li'  => '') );
// echo '</ul>';
// echo '</div>';

echo '<div class="card p-3 mt-2 mb-2">';
echo '<h3 class="teko">Training Library</h3>';

$recentBlog = new WP_Query(array(
'posts_per_page' => 10,
'post_type' => 'post',
'post__not_in' => [get_the_ID()]
)); 
echo '<ul>';
while($recentBlog->have_posts()){
$recentBlog->the_post(); ?>
<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
<?php } wp_reset_postdata(); ?>
</ul>
</div>

</div>