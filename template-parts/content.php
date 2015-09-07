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

		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
			the_content( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'tonekk_theme' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );
		?>

		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'tonekk_theme' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php tonekk_theme_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
