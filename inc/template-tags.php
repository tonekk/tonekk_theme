<?php
/**
 * Custom template tags for this theme.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package tonekk theme
 */

if ( ! function_exists( 'tonekk_theme_posted_on' ) ) :
/**
 * Prints HTML with meta information for the current post-date/time and author.
 */
function tonekk_theme_posted_on() {
  $posted_on = sprintf(
    esc_html_x( '%s', 'post date', 'tonekk_theme' ), human_time_diff( get_post_time('U'), current_time('timestamp') )
  );

  echo $posted_on;
}
endif;

if ( ! function_exists( 'tonekk_theme_entry_footer' ) ) :
/**
 * Prints HTML with meta information for the categories, tags and comments.
 */
function tonekk_theme_entry_footer() {
  // Hide category and tag text for pages.
  if ( 'post' === get_post_type() ) {

    /* translators: used between list items, there is a space after the comma */
    $tags_list = get_the_tag_list( '', esc_html__( '', 'tonekk_theme' ) );
    if ( $tags_list ) {
      printf( '<div class="tags-links">' . esc_html__( '%1$s', 'tonekk_theme' ) . '</div>', $tags_list ); // WPCS: XSS OK.
    }
  }

  edit_post_link( esc_html__( 'Edit', 'tonekk_theme' ), '<span class="edit-link">', '</span>' );
}
endif;

/**
 * Returns true if a blog has more than 1 category.
 *
 * @return bool
 */
function tonekk_theme_categorized_blog() {
	if ( false === ( $all_the_cool_cats = get_transient( 'tonekk_theme_categories' ) ) ) {
		// Create an array of all the categories that are attached to posts.
		$all_the_cool_cats = get_categories( array(
			'fields'     => 'ids',
			'hide_empty' => 1,

			// We only need to know if there is more than one category.
			'number'     => 2,
		) );

		// Count the number of categories that are attached to the posts.
		$all_the_cool_cats = count( $all_the_cool_cats );

		set_transient( 'tonekk_theme_categories', $all_the_cool_cats );
	}

	if ( $all_the_cool_cats > 1 ) {
		// This blog has more than 1 category so tonekk_theme_categorized_blog should return true.
		return true;
	} else {
		// This blog has only 1 category so tonekk_theme_categorized_blog should return false.
		return false;
	}
}

/**
 * Flush out the transients used in tonekk_theme_categorized_blog.
 */
function tonekk_theme_category_transient_flusher() {
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}
	// Like, beat it. Dig?
	delete_transient( 'tonekk_theme_categories' );
}
add_action( 'edit_category', 'tonekk_theme_category_transient_flusher' );
add_action( 'save_post',     'tonekk_theme_category_transient_flusher' );
