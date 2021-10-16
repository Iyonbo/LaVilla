<?php
/**
 * The template part for displaying image layout
 *
 * @package VW Interior Designs
 * @subpackage vw-interior-designs
 * @since VW Interior Designs 1.0
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class('inner-service'); ?>>
    <div class="entry-content">
        <h1><?php the_title();?></h1>
        <div class="entry-attachment">
            <div class="attachment">
                <?php vw_interior_designs_the_attached_image(); ?>
            </div>

            <?php if ( has_excerpt() ) : ?>
                <div class="entry-caption">
                    <div class="entry-content"><p><?php $excerpt = get_the_excerpt(); echo esc_html( vw_interior_designs_string_limit_words( $excerpt, esc_attr(get_theme_mod('vw_interior_designs_excerpt_number','30')))); ?></p></div>
                </div>
            <?php endif; ?>
        </div>
        <?php
            the_content();
            wp_link_pages( array(
                'before' => '<div class="page-links">' . __( 'Pages:', 'vw-interior-designs' ),
                'after'  => '</div>',
            ) );
        ?>
    </div>
    <?php edit_post_link( __( 'Edit', 'vw-interior-designs' ), '<footer class="entry-meta"><span class="edit-link">', '</span></footer>' ); ?>
    <div class="clearfix"></div>
</article>