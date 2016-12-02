<?php
/*
Template Name: Front
*/
get_header(); ?>

<header id="front-hero" role="banner">
  <div class="marketing">
    <div class="tagline">
      <h1><?php bloginfo('name'); ?></h1>
      <h4 class="subheader"><?php bloginfo('description'); ?></h4>
      <a role="button" class="download large button sites-button hide-for-small-only" href="http://198.58.102.79/">Learn More</a>
    </div>
  </div>
</header>

<?php do_action('foundationpress_before_content'); ?>
<?php while (have_posts()) : the_post(); ?>
<section class="intro" role="main">
  <div class="fp-intro">

    <div <?php post_class() ?> id="post-<?php the_ID(); ?>">
      <?php do_action('foundationpress_page_before_entry_content'); ?>
      <div class="entry-content">
        <?php the_content(); ?>
        <div class="row wheel-backgrounds">
          <div class="column medium-4 wheel-bg--bike-shop" title="Bike shop parts, sales, and service">
            <a href="bike-shop">
              <?php echo file_get_contents(get_stylesheet_directory().'/assets/images/icons/wheel-icon.svg'); ?>
            </a>
          </div>
          <div class="column medium-4 wheel-bg--programs" title="Bike co-op programs">
            <a href="programs">
              <?php echo file_get_contents(get_stylesheet_directory().'/assets/images/icons/wheel-icon.svg'); ?>
            </a>
          </div>
          <div class="column medium-4 wheel-bg--volunteer" title="Volunteer application form">
            <a href="volunteer">
              <?php echo file_get_contents(get_stylesheet_directory().'/assets/images/icons/wheel-icon.svg'); ?>
            </a>
          </div>
        </div>
        <div class="row">
          <h2>Program Links</h2>
          <div class="column medium-4 program-link-bg bg--earn-bike" title="Earn a bike by volunteering">
            <a href="programs/earn-a-bike">
              <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/coop/earn-a-bike.jpg'; ?>" alt="Earn a Bike">
              <span class="home-program-link__text">Earn a Bike</span>
            </a>
          </div>
          <div class="column medium-4 program-link-bg bg--fix-bike" title="Get help fixing your bike">
            <a href="programs/fix-your-bike">
              <img src="<?php echo get_stylesheet_directory_uri() .
                '/assets/images/coop/fix-your-bike.jpg'; ?>" alt="Fix Your Bike">
              <span class="home-program-link__text">Fix Your Bike</span>
            </a>
          </div>
              <div class="column medium-4 program-link-bg bg--report-abandoned" title="Report an abandoned bike">
            <a href="programs/report-abandoned-bikes">
              <img src="<?php echo get_stylesheet_directory_uri() .
                '/assets/images/coop/abandoned-bike.jpg'; ?>" alt="Abandoned Bikes">
              <span class="home-program-link__text">Abandoned Bikes</span>
            </a>
          </div>
        </div>
      </div>

      <footer>
        <?php wp_link_pages(array('before' => '<nav id="page-nav"><p>'.__('Pages:', 'foundationpress'), 'after' => '</p></nav>')); ?>
        <p><?php the_tags(); ?></p>
      </footer>
      <?php do_action('foundationpress_page_before_comments'); ?>
      <?php comments_template(); ?>
      <?php do_action('foundationpress_page_after_comments'); ?>
    </div>

  </div>

</section>
<?php endwhile; ?>
<?php do_action('foundationpress_after_content'); ?>

<div class="section-divider">
  <hr />
</div>

<?php get_footer();
