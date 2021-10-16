<?php
/**
 * The template part for displaying grid layout
 *
 * @package VW Interior Designs
 * @subpackage vw-interior-designs
 * @since VW Interior Designs 1.0
 */
?>
<div class="col-md-6 col-lg-4">
	<article id="post-<?php the_ID(); ?>" <?php post_class('inner-service'); ?>>
	    <div class="post-main-box">
	      	<div class="box-image">
	          	<?php 
		            if(has_post_thumbnail() && get_theme_mod( 'vw_interior_designs_featured_image_hide_show',true) != '') { 
		              the_post_thumbnail(); 
		            }
	          	?>
	        </div>
	        <h3 class="section-title"><a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php echo the_title_attribute(); ?>"><?php the_title();?><span class="screen-reader-text"><?php the_title(); ?></span></a></h3>      
	        <div class="new-text">
	          	<div class="entry-content">
	          		<p>
			          <?php $excerpt = get_the_excerpt(); echo esc_html( vw_interior_designs_string_limit_words( $excerpt, esc_attr(get_theme_mod('vw_interior_designs_excerpt_number','30')))); ?> <?php echo esc_html( get_theme_mod('vw_interior_designs_excerpt_suffix','') ); ?>
			        </p>
	          	</div>
	        </div>
	        <?php if( get_theme_mod('vw_interior_designs_button_text','View More') != ''){ ?>
		        <div class ="video-btn">
		          <i class="<?php echo esc_attr(get_theme_mod('vw_interior_designs_blog_button_icon','fas fa-home')); ?>"></i><a href="<?php echo esc_url( the_permalink() ); ?>"><?php echo esc_html(get_theme_mod('vw_interior_designs_button_text',__('View More','vw-interior-designs')));?><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('vw_interior_designs_button_text',__('View More','vw-interior-designs')));?></span></a>
		        </div>
		    <?php } ?>
	    </div>
	    <div class="clearfix"></div>
  	</article>
</div>