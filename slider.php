<?php 
	$options=get_option('swuTheme');
	$title_slider_1 = $options['title_slider_1'];
	$title_slider_2 = $options['title_slider_2'];
	$title_slider_3 = $options['title_slider_3'];
	$thumb_slider_1 = $options['thumb_slider_1'];
	$thumb_slider_2 = $options['thumb_slider_2'];
	$thumb_slider_3 = $options['thumb_slider_3'];
	$ket_slider_1 = $options['ket_slider_1'];
	$ket_slider_2 = $options['ket_slider_2'];
	$ket_slider_3 = $options['ket_slider_3'];
	$link_post_slider_1 = get_permalink($options['id_post_slider_1']);
	$link_post_slider_2 = get_permalink($options['id_post_slider_2']);
	$link_post_slider_3 = get_permalink($options['id_post_slider_3']);
	$gbr_slider_1 = $options['gbr_slider_1'];
	$gbr_slider_2 = $options['gbr_slider_2'];
	$gbr_slider_3 = $options['gbr_slider_3'];
	if ((!empty($title_slider_1))OR(!empty($title_slider_2))OR(!empty($title_slider_3))) {
	?>
	<div id="feature_list">
			<ul id="tabslide">
				<li>
					<a href="javascript:;">
						<div style="background:url(<?php echo $thumb_slider_1; ?>) center center no-repeat;" class="thumb" /></div>
						<h3><?php echo $title_slider_1; ?></h3>
						<span><?php echo $ket_slider_1; ?></span>
					</a>
				</li>
				<li>
					<a href="javascript:;">
						<div style="background:url(<?php echo $thumb_slider_2; ?>) center center no-repeat;" class="thumb" /></div>
						<h3><?php echo $title_slider_2; ?></h3>
						<span><?php echo $ket_slider_2; ?></span>
					</a>
				</li>
				<li>
					<a href="javascript:;">
						<div style="background:url(<?php echo $thumb_slider_3; ?>) center center no-repeat;" class="thumb" /></div>
						<h3><?php echo $title_slider_3; ?></h3>
						<span><?php echo $ket_slider_3; ?></span>
					</a>
				</li>
			</ul>
			<ul id="output">
				<li>
				<div style="background:url(<?php echo $gbr_slider_1; ?>) center center no-repeat;" class="gbr"/></div>
					<?php if (!empty($options['id_post_slider_1'])) {?><a href="<?php echo $link_post_slider_1; ?>">Selengkapnya</a>
					<?php } else { null; } ?>
				</li>
				<li>
					<div style="background:url(<?php echo $gbr_slider_2; ?>) center center no-repeat;" class="gbr"/></div>
					<?php if (!empty($options['id_post_slider_2'])) {?><a href="<?php echo $link_post_slider_1; ?>">Selengkapnya</a>
					<?php } else { null; } ?>
				</li>
				<li>
					<div style="background:url(<?php echo $gbr_slider_3; ?>) center center no-repeat;" class="gbr"/></div>
					<?php if (!empty($options['id_post_slider_3'])) {?><a href="<?php echo $link_post_slider_1; ?>">Selengkapnya</a>
					<?php } else { null; } ?>
				</li>
			</ul>

		</div>
		<?php } else { null; } ?>