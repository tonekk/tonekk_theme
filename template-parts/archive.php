<?php
/**
 * Template part for displaying the archive
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package tonekk theme
 */

?>

<div class="archive-wrapper">
  <div class="archive-line"></div>
  <div class="archive">

    <h1 class="archive-title">Archiv</h1>

    <?php while ( have_posts() ) : the_post(); ?>
      <?php the_title( sprintf( '<h2 class="underlined-title archive-entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
    <?php endwhile; ?>
  </div>
</div>

</main><!-- #main -->
</div><!-- #primary -->
