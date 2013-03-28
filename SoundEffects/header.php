<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?php wp_title('|',1,'right'); ?> <?php bloginfo('name'); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Play these poker sounds at your next home game and you're almost guaranteed to put somebody on tilt.">
    <meta name="author" content="">
    <link rel="icon" type="image/png" href="<?php bloginfo('template_url'); ?>/images/favicon.ico" />

    <!-- the styles -->
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">

    <!-- the HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <?php wp_enqueue_script("jquery"); ?>
    <?php wp_head(); ?>
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="brand" href="<?php echo site_url(); ?>">
          <img src="<?php bloginfo('template_url'); ?>/images/favicon.ico"/>
          <?php bloginfo('name'); ?></a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <?php wp_list_pages(array('title_li' => '', 'include' => 27)); ?>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container">
