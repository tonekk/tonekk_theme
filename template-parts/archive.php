<?php
/**
 * Template part for displaying the archive
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package tonekk theme
 */

?>

<div class="tonekk-archive-wrapper">
  <div class="tonekk-archive-line"></div>
  <div class="tonekk-archive">

    <h1 class="tonekk-archive-title">Archiv</h1>

    <?php while ( have_posts() ) : the_post(); ?>
      <?php the_title( sprintf( '<h2 class="underlined-title tonekk-archive-entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
    <?php endwhile; ?>
  </div>
</div>

</main><!-- #main -->
</div><!-- #primary -->
