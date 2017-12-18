<div class="sidebar">
<!-- Sidebar widgets -->
<ul>
<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar('Sidebar Single') ) : else : ?>
	<?php endif; ?>
</ul>
<?php 
	$options=get_option('swuTheme');
	$slug = $options['slug_single1'];
	$catTitle = $options['catTitle'];
	$showposts = $options['show'];
	$order = $options['order'];
	$more_text = $options['more_text'];
	$category = get_category_by_slug($slug);
	$slug2 = $options['slug_single2'];
	$catTitle2 = $options['catTitle2'];
	$showposts2 = $options['show2'];
	$order2 = $options['order2'];
	$more_text2 = $options['more_text2'];
	$category2 = get_category_by_slug($slug2);
	?>
<div class="konten_box">
<a href="<?php echo get_category_link( $category->cat_ID ); ?>">
	<div class="hentry-left"><?php echo $catTitle; ?></div></a>
	<ul>
	<?php
	if (query_posts('cat='.$category->cat_ID.'&showposts='.$showposts.'&order='.$order)) : while (have_posts()) : the_post(); 
	?>
	<a href="<?php the_permalink() ?>" rel="bookmark"><li class="list-box"><?php the_title(); ?></li></a>
	<?php endwhile; wp_reset_query();?>
	
<div class="more_text"><a href="<?php echo get_category_link( $category->cat_ID ); ?>"><?php echo $more_text; ?></a></div>
<?php endif; ?>
</ul>
<div class="clear"></div>
</div>
<div class="clear"></div>
<div class="konten_box">
<a href="<?php echo get_category_link( $category2->cat_ID ); ?>">
	<div class="hentry-left"><?php echo $catTitle2; ?></div></a>
	<ul>
	<?php
	if (query_posts('cat='.$category2->cat_ID.'&showposts='.$showposts2.'&order='.$order2)) : while (have_posts()) : the_post(); 
	?>
	<a href="<?php the_permalink() ?>" rel="bookmark"><li class="list-box"><?php the_title(); ?></li></a>
	<?php endwhile; wp_reset_query();?>
	
<div class="more_text"><a href="<?php echo get_category_link( $category2->cat_ID ); ?>"><?php echo $more_text2; ?></a></div>
<?php endif; ?>
</ul>
<div class="clear"></div>
</div>
<div class="clear"></div>
</div>