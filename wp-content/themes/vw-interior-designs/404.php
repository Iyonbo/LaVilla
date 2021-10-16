<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package VW Interior Designs
 */

get_header(); ?>

<main id="maincontent" role="main" class="content-vw">
	<div class="container">
        <div class="page-content">
        	<h1><?php echo esc_html(get_theme_mod('vw_interior_designs_404_page_title',__('404 Not Found','vw-interior-designs')));?></h1>	
			<p class="text-404"><?php echo esc_html(get_theme_mod('vw_interior_designs_404_page_content',__('Looks like you have taken a wrong turn, Dont worry, it happens to the best of us.','vw-interior-designs')));?></p>
			<?php if( get_theme_mod('vw_interior_designs_404_page_button_text','Return to the home page') != ''){ ?>
				<div class="error-btn">
	        		<i class="<?php echo esc_attr(get_theme_mod('vw_interior_designs_404_page_button_icon','fas fa-home')); ?>"></i><a href="<?php echo esc_url(home_url()); ?>"><?php echo esc_html(get_theme_mod('vw_interior_designs_404_page_button_text',__('Return to the home page','vw-interior-designs')));?><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('vw_interior_designs_404_page_button_text',__('Return to the home page','vw-interior-designs')));?></span></a>
				</div>
			<?php } ?>
			<div class="clearfix"></div>
        </div>
	</div>
</main>

<?php get_footer(); ?>