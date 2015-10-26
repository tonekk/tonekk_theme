<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package tonekk theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php if ( 'post' === get_post_type() ) : ?>
      <div class="entry-meta">
        <div class="entry-meta-inner">
          <span class="entry-author-name">tonekk</span> schrieb
          vor <?php tonekk_theme_posted_on(); ?>
        </div>
      </div>
		<?php endif; ?>

		<?php the_title( sprintf( '<h2 class="heading"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

	</header><!-- .entry-header -->

	<div class="entry-content">
      <?php the_content('', true) ?>
	</div><!-- .entry-content -->

  <div class="read-more">
		<?php
      print '<a class="more-link" href="'. get_permalink($post->ID) . '">Weiterlesen</a>';
		?>
  </div>
</article><!-- #post-## -->
