<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package tonekk theme
 */

get_header(); ?>

  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">


    <?php if ( is_home() && ! is_front_page() ) : ?>
      <header>
        <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
      </header>
    <?php endif; ?>


    <?php
      $recentPost = new WP_Query('showposts=1');
      while ( $recentPost->have_posts() ) : $recentPost->the_post();
        get_template_part( 'template-parts/content', get_post_format() );
      endwhile;
    ?>

    <?php
      get_template_part( 'template-parts/archive');
    ?>

    </main><!-- #main -->
  </div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
