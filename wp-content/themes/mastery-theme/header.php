<?php
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/main.css">
	<?php wp_head(); ?>
</head>
<body>
<zf-offcanvas position="left" id="menu" class="dark">
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus ratione consequuntur soluta, modi ut, incidunt vero temporibus, animi obcaecati praesentium voluptatum tenetur excepturi, molestiae ipsam optio nisi? Dolorem, eius quod?</p>
</zf-offcanvas>

<div class="grid-frame vertical">
	<div class="dark title-bar">
		<div class="center title">Mastery</div>
		<span class="left"><a zf-open="menu">Menu</a></span>
		<span class="right"><a href="#">My Videos</a></span>
	</div>
