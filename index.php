<?php get_header(); ?>
<div class="grid_16"><?php get_template_part('slider','index'); ?></div>
<div class="grid_16"><?php get_template_part('ribbon','index'); ?></div>
<div class="grid_16" id="konten">
<div class="grid_9 alpha"><div id="konten_kiri"><?php get_sidebar('kiribesar'); ?></div>
<div class="grid_5 alpha"><div id="sidebar-kiri"><?php get_sidebar('kiri'); ?></div></div>
<div class="grid_4 omega"><div id="sidebar-kanan"><?php get_sidebar('kanan'); ?></div></div></div>
<div class="grid_7 omega"><div id="konten_kanan"><?php get_template_part('loop','index'); ?></div></div>
</div>
<?php get_footer(); ?>