<div class="grid_16" id="footer">
<div class="grid_6 alpha">
<div id="footer_left">
<span>Copyright &copy; <?php echo date('Y');?> <a href="<?php bloginfo('siteurl'); ?>" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?> | <?php bloginfo('description'); ?></a> 
<br>
<?php
$options=get_option('swuTheme');
$footer_text = $options['footer_text'];
echo $footer_text;
?>
</span>
</div>
</div>
<div class="grid_4">&nbsp;</div>
<div class="grid_6 omega"><div class="fcred"></div></div>
</div>

</div> <!-- end container_16 -->
<?php wp_footer(); ?>
</body>
</html>