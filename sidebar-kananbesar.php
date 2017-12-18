<div class="sidebar">

<!-- Sidebar widgets -->
<ul>
<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar('Sidebar Kanan Besar') ) : else : ?>
	<?php endif; ?>
</ul>
<div class="clear"></div>
<?php get_template_part('loop','index'); ?>
</div>