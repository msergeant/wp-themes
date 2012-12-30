<?php get_header(); ?>

<div class="row">
  <div class="span8">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <h1><?php the_title(); ?></h1>
      <?php the_content(); ?>
    <?php endwhile; else: ?>
       <p><?php _e('Sorry, this page does not exist.'); ?></p>
     <?php endif; ?>
    <?php $category = get_the_category(); 
          if(strtolower($category[0]->cat_name) == 'sounds'){ ?>
              <a href="<?php echo get_permalink( ) . '?autostart=true'; ?>">Copy this link to start automatically</a>
          <?php }
    ?>
  </div>
  <div class="span4">
    <?php get_sidebar(); ?>
  </div>
</div>

<?php get_footer(); ?>
