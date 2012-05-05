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
                <h3>About TPN</h3>
                <ul class="nav-menu">
                	<li>
                		<a href="#">Our Story</a>
                	</li>
                	<li>
                		<a href="#">Meet Dr. Sergeant</a>
                	</li>
                	<li>
                		<a href="#">Accepted Insurances</a>
                	</li>
                </ul>
                <h3>Services</h3>
                <ul class="nav-menu">
                	<li>
                		<a href="#">TBD</a>
                	</li>
                </ul>
                <h3>Contact Us</h3>
                <ul class="nav-menu">
                	<li>
                		<a href="#">Contact Info</a>
                	</li>
                	<li>
                		<a href="#">Directions</a>
                	</li>
                	<li>
                		<a href="#">Office Hours</a>
                	</li>
                </ul>
			</div>
            <div class="logo">
            </div>
		</div>
		<div id="content">
			<?php // Content ?>
