<?php get_header(); ?>
<div class="grid_16"><?php get_template_part('slider','index'); ?></div>
<div class="grid_16"><?php get_template_part('ribbon','index'); ?></div>
<div class="grid_16" id="konten">
<div class="grid_5 alpha"><div id="sidebar-kiri">
<div class="sidebar">
<!-- Sidebar widgets -->
<ul>
<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar('Sidebar Kiri') ) : else : ?>
	<?php endif; ?>
</ul>
<div class="konten_box">
<?php 
	
	$slug2 = 'pmb';
	$category2 = get_category_by_slug($slug2);
	?><div class="hentry-left">Menu</div>
	<ul>
	<?php
	if (query_posts('cat='.$category2->cat_ID.'&showposts='.$showposts2.'&orderby=title&order=ASC')) : while (have_posts()) : the_post(); 
	?>
	<a href="<?php the_permalink() ?>" rel="bookmark"><li class="list-box"><?php the_title(); ?></li></a>
	<?php endwhile; wp_reset_query();?>
	</ul>
<?php endif; ?>
<div class="clear"></div>
</div>
</div>

</div></div>
<div class="grid_11 omega"><div id="konten_single_kanan">
<?php query_posts('p=296'); if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="post clearfix" id="post-<?php the_ID(); ?>">

<div class="title">
<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
</div>
<div class="entry">
	<?php the_content('Read the rest of this entry &raquo;'); ?>
	<div class="clear"></div>
</div>

</div>

<?php comments_template(); ?>

<?php endwhile; else: ?>

		<h1 class="title">Not Found</h1>
		<p>I'm Sorry,  you are looking for something that is not here. Try a different search.</p>

<?php endif; ?>
</div></div>

</div>
<?php get_footer(); ?>