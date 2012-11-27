<?php get_header(); ?>
<?php query_posts( array('category_name'=>'sounds')); ?>

<div class="row">
  <div class="span8">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
      <?php the_content(); ?>
    <?php endwhile; else: ?>
       <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
     <?php endif; ?>
  </div>
  <div class="span4">
    <?php get_sidebar(); ?>
  </div>
</div>

<?php get_footer(); ?>
