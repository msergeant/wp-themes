<?php /* Template Name: Page*/ ?>

<?php get_header(); ?>

<?php if (have_posts()): while (have_posts()): the_post(); ?>

    <?php $pageImage = get_template_directory()."/images/".$wp_query->get_queried_object()->post_name.".jpg";  ?>
    <?php $pageImageUrl = get_template_directory_uri()."/images/".$wp_query->get_queried_object()->post_name.".jpg";  ?>
    <?php $pageImage = str_replace(" ", "-", $pageImage); ?>
    <?php $pageImageUrl = str_replace(" ", "-", $pageImageUrl); ?>

    <?php if (file_exists($pageImage)): ?>
        <img src="<?php echo $pageImageUrl; ?>" alt="<?php the_title() ?>" />
	<?php endif; ?>

	<h1><?php the_title(); ?></h1>
	
	<div class="meat">
		<?php echo the_content(); ?>
	</div>
	
	<?php if(comments_open()): ?>
		<div id="comments">
			<?php comments_template(); ?>
		</div>
	<?php endif; ?>

<?php endwhile; endif; get_footer(); ?>