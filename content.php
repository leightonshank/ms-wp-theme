<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('item'); ?>>

  <div class="content">
    <header class="header">
      <?php
        if ( is_single() ) :
          the_title( '<h1 class="entry-title page-header">', '</h1>' );
        else :
          the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
        endif;
      ?>
    </header>

    <div class="meta">
      Posted <?php the_date() ?> at <?php the_time() ?>
    </div>

    <div class="full description">
      <?php
        /* translators: %s: Name of current post */
        the_content( sprintf(
          __( 'Continue reading %s', 'midnightspaghetti' ),
          the_title( '<span class="screen-reader-text">', '</span>', false )
        ) );

        wp_link_pages( array(
          'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'midnightspaghetti' ) . '</span>',
          'after'       => '</div>',
          'link_before' => '<span>',
          'link_after'  => '</span>',
          'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'midnightspaghetti' ) . ' </span>%',
          'separator'   => '<span class="screen-reader-text">, </span>',
        ) );
      ?>
    </div>

    <?php
      // Author bio.
      /*
      if ( is_single() && get_the_author_meta( 'description' ) ) :
        get_template_part( 'author-bio' );
      endif;
      */
    ?>

    <footer class="extra">
      <?php //midnightspaghetti_entry_meta(); ?>
      <?php edit_post_link( __( 'Edit', 'midnightspaghetti' ), '<span class="edit-link">', '</span>' ); ?>
    </footer>
  </div>
</article><!-- #post-## -->
