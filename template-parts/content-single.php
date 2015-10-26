<?php
/**
 * Template part for displaying single posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package tonekk theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
    <div class="entry-meta">
      <div class="entry-meta-inner">
        <span class="entry-author-name">tonekk</span> schrieb
        vor <?php tonekk_theme_posted_on(); ?>
      </div>
    </div>

		<?php the_title( '<h1 class="heading entry-title">', '</h1>' ); ?>

	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
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

