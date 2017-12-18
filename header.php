<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="utf-8" /><meta http-equiv="Content-Type" content="<?php bloginfo( 'html_type' ); ?>; charset=<?php bloginfo( 'charset' ); ?>" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<link href='https://plus.google.com/110717148363668903652' rel='author'/>
<link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/favicon.png" />
<title><?php is_home() ? wp_title(' ') : wp_title(' ') ?> | <?php bloginfo('title');?> </title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link href="<?php echo get_template_directory_uri(); ?>/style.css" rel="stylesheet" type="text/css" />
<?php 
	$options=get_option('swuTheme');
	$title_slider_1 = $options['title_slider_1'];
	$title_slider_2 = $options['title_slider_2'];
	$title_slider_3 = $options['title_slider_3'];
	if ((!empty($title_slider_1))OR(!empty($title_slider_2))OR(!empty($title_slider_3))) {
	?>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.9.1.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.featureList-1.0.0.js" type="text/javascript"></script>
	<script type="text/javascript">
		$(document).ready(function() {

			$.featureList(
				$("#tabslide li a"),
				$("#output li"), {
					start_item	:	1
				}
			);

			/*
			
			// Alternative

			
			$('#tabs li a').featureList({
				output			:	'#output li',
				start_item		:	1
			});

			*/

		});

	</script>
	<?php } else { null; } ?>
<?php wp_head(); ?>
</head>
<body>
<div class="container_16">
<div class="grid_16">
	<div id="header">
	<div class="grid_4 alpha"><div id="wrap-logo"><a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><div id="logo"></div></a></div></div>
	<div class="grid_12 omega">
	<?php wp_nav_menu( array( 'container_id' => 'topmenu', 'theme_location' => 'secondary','menu_id'=>'' ,'menu_class'=>'','fallback_cb'=> '' ) ); ?>
	</div>
	</div>
</div>
<div id="wrap_menu" class="grid_16">
	<div class="grid_13 alpha">
	<?php wp_nav_menu( array( 'container_id' => 'menu', 'theme_location' => 'primary','menu_id'=>'navi' ,'menu_class'=>'','fallback_cb'=> 'fallbackmenu' ) ); ?>
	</div>
	<div class="grid_3 omega"><div id="search"><div style="display: table-cell;vertical-align: middle;"><?php get_search_form(); ?></div></div></div>
</div>