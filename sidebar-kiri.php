<div class="sidebar">
<!-- Sidebar widgets -->
<ul>
<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar('Sidebar Kiri') ) : else : ?>
	<?php endif; ?>
</ul>
<div class="clear"></div>
<div class="konten_box">
<?php 
	$options=get_option('swuTheme');
	$slug2 = $options['cat2'];
	$catTitle2 = $options['catTitle2'];
	$showposts2 = $options['show2'];
	$order2 = $options['order2'];
	$more_text2 = $options['more_text2'];
	$category2 = get_category_by_slug($slug2);
	?><a href="<?php echo get_category_link( $category2->cat_ID ); ?>">
	<div class="hentry-left"><?php echo $catTitle2; ?></div></a>
	<ul>
	<?php
	if (query_posts('cat='.$category2->cat_ID.'&showposts='.$showposts2.'&order='.$order2)) : while (have_posts()) : the_post(); 
	?>
	<a href="<?php the_permalink() ?>" rel="bookmark"><li class="list-box"><?php the_title(); ?><?php echo nu_post('$post->ID'); ?></li></a>
	<?php endwhile; wp_reset_query();?>
	</ul>
<div class="more_text"><a href="<?php echo get_category_link( $category2->cat_ID ); ?>"><?php echo $more_text2; ?></a></div>
<?php endif; ?>
<div class="clear"></div>
</div>
</div>