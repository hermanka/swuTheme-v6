<?php 
	$options=get_option('swuTheme');
	$slug = $options['cat'];
	$catTitle = $options['catTitle'];
	$showposts = $options['show'];
	$order = $options['order'];
	$more_text = $options['more_text'];
	$category = get_category_by_slug($slug);
	?><a href="<?php echo get_category_link( $category->cat_ID ); ?>">
	<div class="hentry-left"><?php echo $catTitle; ?></div></a>
	<?php
	if (query_posts('cat='.$category->cat_ID.'&showposts='.$showposts.'&order='.$order)) : while (have_posts()) : the_post(); 
	$images =& get_children( 'post_type=attachment&post_mime_type=image&post_parent=' . $post->ID );
	$firstImageSrc = wp_get_attachment_image_src(array_pop(array_keys($images)));
	echo "<div class=\"hentry\">";
	if ( empty($images) ) {	null; } 
	else { 	
	echo "<div class=\"thumbnail featured\"><div class=\"thumbnail-in featured\" style=\"background:url($firstImageSrc[0]) center no-repeat\">".nu_post('$post->ID')."</div></div>";
	}  ?>
	<div class="sticky-header">
	<h2 class="entry-title">
	<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a>
	</h2></div><!-- .sticky-header -->
	<div class="entry-summary"><p><?php echo excerpt(25); ?></p></div>
	</div><!-- .hentry post-->
    <?php endwhile; wp_reset_query();?>

<div class="more_text"><a href="<?php echo get_category_link( $category->cat_ID ); ?>"><?php echo $more_text; ?></a></div>
<?php endif; ?>
<div class="clear"></div>