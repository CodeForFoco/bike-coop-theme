<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

<div id="post-<?php the_ID(); ?>" <?php post_class('blogpost-entry'); ?>>
	<?php if( !has_post_thumbnail()): ?>
	<hr />
	<?php endif; ?>
	<header>
		<?php if(has_post_thumbnail()): ?>
		<div class="thumbnail-wrapper">
			<a href="<?php the_permalink(); ?>" title="View <?php the_title(); ?>">
				<img class="img-fluid img-responsive" src="<?php echo get_the_post_thumbnail_url(); ?>" />
			</a>
		</div>
		<?php endif ?>
		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		<?php foundationpress_entry_meta(); ?>
	</header>
	<div class="entry-content">
		<?php the_excerpt( __( 'Continue reading...', 'foundationpress' ) ); ?>
	</div>
	<footer>
		<?php $tag = get_the_tags(); if ( $tag ) { ?><p><?php the_tags(); ?></p><?php } ?>
	</footer>
</div>
