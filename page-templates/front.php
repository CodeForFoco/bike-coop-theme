<?php
/*
Template Name: Front
*/
get_header(); ?>

<?php do_action('foundationpress_before_content'); ?>
<?php do_action( 'full_width_slider', $post ); ?>
<?php while (have_posts()) : the_post(); ?>
<section class="" role="main">
  <div class="fp-intro">
    <div <?php post_class() ?> id="post-<?php the_ID(); ?>">
      <?php do_action('foundationpress_page_before_entry_content'); ?>
      <div class="entry-content">
        <?php the_content(); ?>
	      <footer>
	        <?php wp_link_pages(array('before' => '<nav id="page-nav"><p>'.__('Pages:', 'foundationpress'), 'after' => '</p></nav>')); ?>
	        <p><?php the_tags(); ?></p>
	      </footer>
	      <?php do_action('foundationpress_page_before_comments'); ?>
	      <?php comments_template(); ?>
	      <?php do_action('foundationpress_page_after_comments'); ?>
    	</div>
    </div>
  </div>
</section>
<?php endwhile; ?>
<?php do_action('foundationpress_after_content'); ?>
<?php get_footer();
