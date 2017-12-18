<?php 

/* CUSTOM MENUS */	

register_nav_menus( array(
		'primary' => __( 'Menu Tengah', '' ),
	) );
register_nav_menus( array(
		'secondary' => __( 'Menu Atas', '' ),
	) );
function fallbackmenu(){ ?>
			<div id="navi">
				<ul><li></li></ul>
			</div>
<?php }	

/* FEATURED THUMBNAILS */

if ( function_exists( 'add_theme_support' ) ) { // Added in 2.9
	add_theme_support( 'post-thumbnails' );
	add_image_size( 'top_feature', 960, 350, true );
	add_image_size( 'index_box', 200, 200, true );

}


function nu_post($post) {
//add .new-post-today to post_class() if newer than 24hrs

    if( date('U') - get_the_time('U', $post) < 3*24*60*60 )
    return '&nbsp;<img src="'. get_template_directory_uri().'/img/new.gif" />';
}
function my_custom_login_logo() {
    echo '<style type="text/css">
	body { background: #a3a8ad url('.get_bloginfo('template_url').'/img/background-1.png) 0 0 repeat-x !important; }
        h1 a { background-image:url('.get_bloginfo('template_url').'/img/login.png) !important; }
    </style>';
}
add_action('login_head', 'my_custom_login_logo');
function my_custom_login_url() {
  return site_url();
}
add_filter( 'login_headerurl', 'my_custom_login_url', 10, 4 );

function excerpt($limit) {
  $excerpt = explode(' ', get_the_excerpt(), $limit);
  if (count($excerpt)>=$limit) {
    array_pop($excerpt);
    $excerpt = implode(" ",$excerpt).'...';
  } else {
    $excerpt = implode(" ",$excerpt);
  }	
  $excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
  return $excerpt;
}
if ( function_exists( 'add_theme_support' ) )

add_theme_support( 'post-thumbnails' );

// WIDGeT OPTIONS
if ( function_exists('register_sidebar') ) {
	register_sidebar(array(
		'name'=>'Sidebar Kiri Besar',
		'before_widget' => '<li>', // Removes <li>
		'after_widget' => '</li>', // Removes </li>
		'before_title' => '<h2>', // Replaces <h2>
		'after_title' => '</h2>', // Replaces </h2>
	));
        register_sidebar(array(
		'name'=>'Sidebar Kanan Besar',
		'before_widget' => '<li>', // Removes <li>
		'after_widget' => '</li>', // Removes </li>
		'before_title' => '<h2>', // Replaces <h2>
		'after_title' => '</h2>', // Replaces </h2>
	));
	register_sidebar(array(
		'name'=>'Sidebar Kiri',
		'before_widget' => '<li>', // Removes <li>
		'after_widget' => '</li>', // Removes </li>
		'before_title' => '<h2>', // Replaces <h2>
		'after_title' => '</h2>', // Replaces </h2>
	));
	register_sidebar(array(
		'name'=>'Sidebar Kanan',
		'before_widget' => '<li>', // Removes <li>
		'after_widget' => '</li>', // Removes </li>
		'before_title' => '<h2>', // Replaces <h2>
		'after_title' => '</h2>', // Replaces </h2>
	));
	register_sidebar(array(
			'name'=>'Sidebar Single',
			'before_widget' => '<li>', // Removes <li>
		'after_widget' => '</li>', // Removes </li>
		'before_title' => '<h2>', // Replaces <h2>
		'after_title' => '</h2>', // Replaces </h2>
	));
	}
// Check that the user is allowed to update options


function setup_theme_admin_menus() {
    add_menu_page('Theme settings', 'SWU Option', 'manage_options', 
        'swu_settings', 'theme_settings_page');
    	
    add_submenu_page('tut_theme_settings', 
        'Front Page Elements', 'Halaman Depan', 'manage_options', 
        'swu_settings', 'theme_front_page_settings'); 
}

function theme_settings_page() {

}
function theme_front_page_settings() {
?>
<?php
$options = get_option('swuTheme');
if (isset($_POST['data'])&&isset($_POST['title'])&&isset($_POST['show'])&&isset($_POST['order'])) {
$options['cat'] = $_POST['data'];
$options['catTitle'] = $_POST['title'];
$options['show'] = $_POST['show'];
$options['order'] = $_POST['order'];
$options['more_text'] = $_POST['more_text'];
$options['cat2'] = $_POST['data2'];
$options['catTitle2'] = $_POST['title2'];
$options['show2'] = $_POST['show2'];
$options['order2'] = $_POST['order2'];
$options['more_text2'] = $_POST['more_text2'];
$options['cat3'] = $_POST['data3'];
$options['catTitle3'] = $_POST['title3'];
$options['show3'] = $_POST['show3'];
$options['order3'] = $_POST['order3'];
$options['more_text3'] = $_POST['more_text3'];
$options['title_slider_1'] = $_POST['title_slider_1'];
$options['title_slider_2'] = $_POST['title_slider_2'];
$options['title_slider_3'] = $_POST['title_slider_3'];
$options['thumb_slider_1'] = $_POST['thumb_slider_1'];
$options['thumb_slider_2'] = $_POST['thumb_slider_2'];
$options['thumb_slider_3'] = $_POST['thumb_slider_3'];
$options['ket_slider_1'] = $_POST['ket_slider_1'];
$options['ket_slider_2'] = $_POST['ket_slider_2'];
$options['ket_slider_3'] = $_POST['ket_slider_3'];
$options['id_post_slider_1'] = $_POST['id_post_slider_1'];
$options['id_post_slider_2'] = $_POST['id_post_slider_2'];
$options['id_post_slider_3'] = $_POST['id_post_slider_3'];
$options['gbr_slider_1'] = $_POST['gbr_slider_1'];
$options['gbr_slider_2'] = $_POST['gbr_slider_2'];
$options['gbr_slider_3'] = $_POST['gbr_slider_3'];
$options['footer_text'] = $_POST['footer_text'];
$options['slug_single1'] = $_POST['slug_single1'];
$options['slug_single2'] = $_POST['slug_single2'];
update_option('swuTheme', $options);
}
if ( !current_user_can( 'manage_options' ) )  {wp_die( __( 'You do not have sufficient permissions to access this page.' ) );}
?>
 <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/jquery-ui.css" />
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.9.1.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-ui.js" type="text/javascript"></script>
  <script>
  $(function() {
    $( "#tabs" ).tabs();
  });
  </script>

    <div class="wrap">
        <?php screen_icon('themes'); ?> <h2>SWU Options</h2>
		<br>
		<form method="POST" action="">
<div id="tabs">
  <ul>
    <li style="display:inline"><a href="#tabs-1">Halaman Depan</a></li>
    <li style="display:inline"><a href="#tabs-2">Slider</a></li>
    <li style="display:inline"><a href="#tabs-3">Footer</a></li>
	<li style="display:inline"><a href="#tabs-4">Sidebar Single</a></li>
  </ul>
  <div id="tabs-1">
	<p><h1>Kotak Kiri</h1>
	<table class="form-table">
                <tr valign="top">
					<th scope="row">
                        <label for="title2">Title</label> 
                    </th>
                    <td><input type="text" name="title2" value="<?php echo $options['catTitle2'];?>" size="25" />
                    </td>
                </tr>
				<tr valign="top">
                    <th scope="row">
                        <label for="slug2">Category Slug</label> 
                    </th>
                    <td><input type="text" name="data2" value="<?php echo $options['cat2'];?>" size="25" />
                    </td>
				 </tr>
				<tr valign="top">
                    <th scope="row">
                        <label for="show2">Showposts</label> 
                    </th>
                    <td><input type="text" name="show2" value="<?php echo $options['show2'];?>" size="25" />
                    </td>
                </tr>
				<tr valign="top">
                    <th scope="row">
                        <label for="order2">Order (ASC/DESC)</label> 
                    </th>
                    <td><input type="text" name="order2" value="<?php echo $options['order2'];?>" size="25" />
                    </td>
                </tr>
				<tr valign="top">
                    <th scope="row">
                        <label for="more_text2">More Text</label> 
                    </th>
                    <td><input type="text" name="more_text2" value="<?php echo $options['more_text2'];?>" size="25" />
                    </td>
                </tr>
            </table>
	</p>
	<p><h1>Kotak Tengah</h1>
	<table class="form-table">
                <tr valign="top">
					<th scope="row">
                        <label for="title3">Title</label> 
                    </th>
                    <td><input type="text" name="title3" value="<?php echo $options['catTitle3'];?>" size="25" />
                    </td>
                </tr>
				<tr valign="top">
                    <th scope="row">
                        <label for="slug3">Category Slug</label> 
                    </th>
                    <td><input type="text" name="data3" value="<?php echo $options['cat3'];?>" size="25" />
                    </td>
				 </tr>
				<tr valign="top">
                    <th scope="row">
                        <label for="show3">Showposts</label> 
                    </th>
                    <td><input type="text" name="show3" value="<?php echo $options['show3'];?>" size="25" />
                    </td>
                </tr>
				<tr valign="top">
                    <th scope="row">
                        <label for="order3">Order (ASC/DESC)</label> 
                    </th>
                    <td><input type="text" name="order3" value="<?php echo $options['order3'];?>" size="25" />
                    </td>
                </tr>
				<tr valign="top">
                    <th scope="row">
                        <label for="more_text3">More Text</label> 
                    </th>
                    <td><input type="text" name="more_text3" value="<?php echo $options['more_text3'];?>" size="25" />
                    </td>
                </tr>
            </table>
	</p>
	<p><h1>Kotak Kanan</h1>
	<table class="form-table">
                <tr valign="top">
					<th scope="row">
                        <label for="title">Title</label> 
                    </th>
                    <td><input type="text" name="title" value="<?php echo $options['catTitle'];?>" size="25" />
                    </td>
                </tr>
				<tr valign="top">
                    <th scope="row">
                        <label for="slug">Category Slug</label> 
                    </th>
                    <td><input type="text" name="data" value="<?php echo $options['cat'];?>" size="25" />
                    </td>
				 </tr>
				<tr valign="top">
                    <th scope="row">
                        <label for="show">Showposts</label> 
                    </th>
                    <td><input type="text" name="show" value="<?php echo $options['show'];?>" size="25" />
                    </td>
                </tr>
				<tr valign="top">
                    <th scope="row">
                        <label for="order">Order (ASC/DESC)</label> 
                    </th>
                    <td><input type="text" name="order" value="<?php echo $options['order'];?>" size="25" />
                    </td>
                </tr>
				<tr valign="top">
                    <th scope="row">
                        <label for="more_text">More Text</label> 
                    </th>
                    <td><input type="text" name="more_text" value="<?php echo $options['more_text'];?>" size="25" />
                    </td>
                </tr>
            </table>
	</p>
  </div>
  <div id="tabs-2">
    <p><table class="form-table">				 
				<tr valign="top" style="background:#ddd">
                    <th scope="row">
                        <label for="title_slider_1">Judul Slider 1</label>
                    </th>
                    <td><input type="text" name="title_slider_1" value="<?php echo $options['title_slider_1'];?>" size="25" />
                    </td>
				 </tr>
				 <tr valign="top">
                    <th scope="row">
                        <label for="thumb_slider_1">Thumb Slider 1</label>
                    </th>
                    <td><input type="text" name="thumb_slider_1" value="<?php echo $options['thumb_slider_1'];?>" size="75" />
                    </td>
				 </tr>
				 <tr valign="top">
                    <th scope="row">
                        <label for="ket_slider_1">Konten Slider 1</label>
                    </th>
                    <td><input type="text" name="ket_slider_1" value="<?php echo $options['ket_slider_1'];?>" size="37" />
                    </td>
				 </tr>
				 <tr valign="top">
                    <th scope="row">
                        <label for="id_post_slider_1">ID Link Slider 1</label>
                    </th>
                    <td><input type="text" name="id_post_slider_1" value="<?php echo $options['id_post_slider_1'];?>" size="37" />
                    </td>
				 </tr>
				 <tr valign="top">
                    <th scope="row">
                        <label for="gbr_slider_1">Gambar Slider 1 (653x240)</label>
                    </th>
                    <td><input type="text" name="gbr_slider_1" value="<?php echo $options['gbr_slider_1'];?>" size="75" />
                    </td>
				 </tr>
				
				 <tr valign="top" style="background:#ddd">
                    <th scope="row">
                        <label for="title_slider_2">Judul Slider 2</label>
                    </th>
                    <td><input type="text" name="title_slider_2" value="<?php echo $options['title_slider_2'];?>" size="25" />
                    </td>
				 </tr>
				 <tr valign="top">
                    <th scope="row">
                        <label for="thumb_slider_2">Thumb Slider 2</label>
                    </th>
                    <td><input type="text" name="thumb_slider_2" value="<?php echo $options['thumb_slider_2'];?>" size="75" />
                    </td>
				 </tr>
				 <tr valign="top">
                    <th scope="row">
                        <label for="ket_slider_2">Konten Slider 2</label>
                    </th>
                    <td><input type="text" name="ket_slider_2" value="<?php echo $options['ket_slider_2'];?>" size="37" />
                    </td>
				 </tr>
				 <tr valign="top">
                    <th scope="row">
                        <label for="id_post_slider_2">ID Link Slider 2</label>
                    </th>
                    <td><input type="text" name="id_post_slider_2" value="<?php echo $options['id_post_slider_2'];?>" size="37" />
                    </td>
				 </tr>
				 <tr valign="top">
                    <th scope="row">
                        <label for="gbr_slider_2">Gambar Slider 2 (653x240)</label>
                    </th>
                    <td><input type="text" name="gbr_slider_2" value="<?php echo $options['gbr_slider_2'];?>" size="75" />
                    </td>
				 </tr>
				 
				 <tr valign="top" style="background:#ddd">
                    <th scope="row">
                        <label for="title_slider_3">Judul Slider 3</label>
                    </th>
                    <td><input type="text" name="title_slider_3" value="<?php echo $options['title_slider_3'];?>" size="25" />
                    </td>
				 </tr>
				 <tr valign="top">
                    <th scope="row">
                        <label for="thumb_slider_3">Thumb Slider 3</label>
                    </th>
                    <td><input type="text" name="thumb_slider_3" value="<?php echo $options['thumb_slider_3'];?>" size="75" />
                    </td>
				 </tr>
				 <tr valign="top">
                    <th scope="row">
                        <label for="ket_slider_3">Konten Slider 3</label>
                    </th>
                    <td><input type="text" name="ket_slider_3" value="<?php echo $options['ket_slider_3'];?>" size="37" />
                    </td>
				 </tr>
				 <tr valign="top">
                    <th scope="row">
                        <label for="id_post_slider_3">ID Link Slider 3</label>
                    </th>
                    <td><input type="text" name="id_post_slider_3" value="<?php echo $options['id_post_slider_3'];?>" size="37" />
                    </td>
				 </tr>
				 <tr valign="top">
                    <th scope="row">
                        <label for="gbr_slider_3">Gambar Slider 3 (653x240)</label>
                    </th>
                    <td><input type="text" name="gbr_slider_3" value="<?php echo $options['gbr_slider_3'];?>" size="75" />
                    </td>
				 </tr>
            </table>
	</p>
  </div>
  <div id="tabs-3">
    <p><table class="form-table">
				<tr valign="top" style="background:#ddd">
                    <th scope="row">
                        <label for="footer_text">Footer Text</label> 
                    </th>
                    <td>
			<textarea rows="10" name="footer_text" cols="70"><?php echo $options['footer_text'];?></textarea>
                    </td>
                </tr>
            </table>
	</p></div>
	<div id="tabs-4">
    <p><table class="form-table">
				<tr valign="top">
                    <th scope="row">
                        <label for="slug_single1">Slug_single1</label>
                    </th>
                    <td><input type="text" name="slug_single1" value="<?php echo $options['slug_single1'];?>" size="37" />
                    </td>
				 </tr>
				 <tr valign="top">
                    <th scope="row">
                        <label for="slug_single2">Slug_single2</label>
                    </th>
                    <td><input type="text" name="slug_single2" value="<?php echo $options['slug_single2'];?>" size="75" />
                    </td>
				 </tr>
            </table>
	</p></div>
</div>
        
<?php submit_button('simpan'); ?>
        </form>
    </div>
<?php



}


// This tells WordPress to call the function named "setup_theme_admin_menus"
// when it's time to create the menu pages.
add_action("admin_menu", "setup_theme_admin_menus");