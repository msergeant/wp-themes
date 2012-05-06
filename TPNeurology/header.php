<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title> <?php the_title(); ?> &raquo; <?php bloginfo('name'); ?></title>
	
	<link rel="icon" type="image/png" href="<?php bloginfo('template_url'); ?>/img/favicon.ico" />
	
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/base.css" type="text/css" media="screen" charset="utf-8" />
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/theme.css" type="text/css" media="screen" charset="utf-8" />
	<?php wp_head(); ?>

    <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/scripts/site.js"></script>
	
</head>
<body <?php body_class(); ?>>
	<div class="container">
		<div id="header">
			<div id="nav">
            <ul class="nav-menu">
                    <li class="nav-menu-head"><h3>About TPN</h3>
                        <ul class="actions">
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
                    </li>
                    <li class="nav-menu-head"><h3>Services</h3>
                        <ul class="actions">
                            <li>
                                <a href="#">TBD</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-menu-head"><h3>Contact Us</h3>
                        <ul class="actions">
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
                    </li>
                </ul>
                </div>
            <div class="logo">
                <a href="/"><img src="<?php echo get_template_directory_uri(); ?>/images/tpn_web.jpg" alt="Tower Plaza Neurology" /></a>
            </div>
			</div>
		</div>
		<div id="content">
            <div class="inner-content">
			<?php // Content ?>
