<?php
/**
 * The template for page calculadora.
 *
 * @package VW Interior Designs
 */

get_header(); ?>

<?php do_action( 'vw_interior_designs_page_top' ); ?>

<main id="maincontent" role="main" class="content-vw">
    <!-- <h1>Hola</h1> -->
    <div class="middle-align container">
		<?php $vw_interior_designs_theme_lay = get_theme_mod( 'vw_interior_designs_page_layout','One Column');
            if($vw_interior_designs_theme_lay == 'One Column'){ ?>
                <?php while ( have_posts() ) : the_post();
                    get_template_part( 'template-parts/content-calculadora'); 
                endwhile; ?>
        <?php }?>
    </div>
    <div class="clear"></div>
</main>

<?php do_action( 'vw_interior_designs_page_bottom' ); ?>

<?php get_footer(); ?>