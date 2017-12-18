<div class="sidebar">
<!-- Sidebar widgets -->
<ul>
<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar('Sidebar Kanan') ) : else : ?>
	<?php endif; ?>
</ul>
<div class="clear"></div>
<div class="konten_box">
<?php 
	$options=get_option('swuTheme');
	$slug3 = $options['cat3'];
	$catTitle3 = $options['catTitle3'];
	$showposts3 = $options['show3'];
	$order3 = $options['order3'];
	$more_text3 = $options['more_text3'];
	$category3 = get_category_by_slug($slug3);
	?><a href="<?php echo get_category_link( $category3->cat_ID ); ?>">
	<div class="hentry-left"><?php echo $catTitle3; ?></div></a>
	<ul>
	<?php
	if (query_posts('cat='.$category3->cat_ID.'&showposts='.$showposts3.'&order='.$order3)) : while (have_posts()) : the_post(); 
	?>
	<a href="<?php the_permalink() ?>" rel="bookmark"><li class="list-box"><?php the_title(); ?><?php echo nu_post('$post->ID'); ?></li></a>
	<?php endwhile; wp_reset_query();?>
	</ul>

<div class="more_text"><a href="<?php echo get_category_link( $category3->cat_ID ); ?>"><?php echo $more_text3; ?></a></div>
<?php endif; ?><div class="clear"></div>
</div>
</div>