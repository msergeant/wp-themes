<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title> <?php the_title(); ?> &raquo; <?php bloginfo('name'); ?></title>
	
	<link rel="icon" type="image/png" href="<?php bloginfo('template_url'); ?>/img/favicon.ico" />
	
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/base.css" type="text/css" media="screen" charset="utf-8" />
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/theme.css" type="text/css" media="screen" charset="utf-8" />

	<?php wp_head(); ?>
	
</head>
<body <?php body_class(); ?>>
	<div class="container">
		<div id="header">
			<div id="nav">
			    <ul>
				    <li> <a href="/">Home</a> </li>
    				<li> <a href="/about-us">About Us</a> </li>
    				<li> <a href="/contact">Contact</a> </li>
    				<li> <a href="/services">Services</a> </li>
    			</ul>
			</div>
		</div>
		<div id="content">
			<?php // Content ?>
