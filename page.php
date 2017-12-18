<?php get_header(); ?>
<div class="grid_16"><?php get_template_part('slider','index'); ?></div>
<div class="grid_16"><?php get_template_part('ribbon','index'); ?></div>
<div class="grid_16" id="konten">
<div class="grid_11 alpha"><div id="konten_single">
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
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
<div class="grid_5 omega"><div id="sidebar-single"><?php get_sidebar('single'); ?></div></div>

</div>
<?php get_footer(); ?>