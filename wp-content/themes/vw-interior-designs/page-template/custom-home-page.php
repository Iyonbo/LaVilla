<?php
/**
 * Template Name: Custom Home
 */

get_header(); ?>

<main id="maincontent" role="main">
  <?php do_action( 'vw_interior_designs_before_slider' ); ?>

  <?php if( get_theme_mod( 'vw_interior_designs_slider_hide_show', false) != '' || get_theme_mod( 'vw_interior_designs_resp_slider_hide_show', false) != '') { ?>
    <section id="slider">
      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" data-bs-interval="<?php echo esc_attr(get_theme_mod( 'vw_interior_designs_slider_speed',4000)) ?>">
        <?php $vw_interior_designs_slider_pages = array();
          for ( $count = 1; $count <= 4; $count++ ) {
            $mod = intval( get_theme_mod( 'vw_interior_designs_slider_page' . $count ));
            if ( 'page-none-selected' != $mod ) {
              $vw_interior_designs_slider_pages[] = $mod;
            }
          }
          if( !empty($vw_interior_designs_slider_pages) ) :
            $args = array(
              'post_type' => 'page',
              'post__in' => $vw_interior_designs_slider_pages,
              'orderby' => 'post__in'
            );
            $query = new WP_Query( $args );
            if ( $query->have_posts() ) :
              $i = 1;
        ?>     
        <div class="carousel-inner" role="listbox">
          <?php  while ( $query->have_posts() ) : $query->the_post(); ?>
            <div <?php if($i == 1){echo 'class="carousel-item active"';} else{ echo 'class="carousel-item"';}?>>
              <?php the_post_thumbnail(); ?>
              <div class="carousel-caption">
                <div class="inner_carousel">
                  <h1><a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
                   <p><?php $excerpt = get_the_excerpt(); echo esc_html( vw_interior_designs_string_limit_words( $excerpt, esc_attr(get_theme_mod('vw_interior_designs_slider_excerpt_number','30')))); ?></p>
                   <?php if( get_theme_mod('vw_interior_designs_slider_button_text','VIEW MORE') != ''){ ?>
                    <div class="more-btn">
                      <i class="<?php echo esc_attr(get_theme_mod('vw_interior_designs_slider_button_icon','fas fa-home')); ?>"></i><a href="<?php echo esc_url(get_permalink()); ?>"><?php echo esc_html(get_theme_mod('vw_interior_designs_slider_button_text',__('VIEW MORE','vw-interior-designs')));?><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('vw_interior_designs_slider_button_text',__('VIEW MORE','vw-interior-designs')));?></span></a>
                    </div>
                  <?php } ?>
                </div>
              </div>
            </div>
          <?php $i++; endwhile; 
          wp_reset_postdata();?>
        </div>
        <?php else : ?>
            <div class="no-postfound"></div>
        <?php endif;
        endif;?>
        <a class="carousel-control-prev" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev" role="button">
          <span class="carousel-control-prev-icon w-auto h-auto" aria-hidden="true"><i class="fas fa-chevron-left"></i></span>
          <span class="screen-reader-text"><?php esc_html_e( 'Previous','vw-interior-designs' );?></span>
        </a>
        <a class="carousel-control-next" data-bs-target="#carouselExampleCaptions" data-bs-slide="next" role="button">
          <span class="carousel-control-next-icon w-auto h-auto" aria-hidden="true"><i class="fas fa-chevron-right"></i></span>
          <span class="screen-reader-text"><?php esc_html_e( 'Next','vw-interior-designs' );?></span>
        </a>
      </div>  
      <div class="clearfix"></div>
    </section>
  <?php } ?>

  <div class="home-header1">
    <?php get_template_part('template-parts/header/navigation'); ?>
  </div>

  <?php do_action( 'vw_interior_designs_after_slider' ); ?>

  <?php if( get_theme_mod( 'vw_interior_designs_video_section') != '') { ?>
    <section id="video-section">
      <div class="container">
        <?php $args = array( 'name' => get_theme_mod('vw_interior_designs_video_section',''));
          $query = new WP_Query( $args );
          if ( $query->have_posts() ) :
            while ( $query->have_posts() ) : $query->the_post(); ?>
            <div class="row">
              <div class="col-md-6 col-lg-5">
                <div class="video-content">
                  <h2><?php the_title(); ?></h2>
                  <hr>
                  <p><?php $excerpt = get_the_excerpt(); echo esc_html( vw_interior_designs_string_limit_words( $excerpt, esc_attr(get_theme_mod('vw_interior_designs_videopost_excerpt_number','30')))); ?></p>
                  <?php if( get_theme_mod('vw_interior_designs_video_button_text','View More') != ''){ ?>
                    <div class ="video-btn">
                      <i class="<?php echo esc_attr(get_theme_mod('vw_interior_designs_video_text_icon','fas fa-home')); ?>"></i><a href="<?php echo esc_url(get_permalink()); ?>"><?php echo esc_html(get_theme_mod('vw_interior_designs_video_button_text',__('View More','vw-interior-designs')));?><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('vw_interior_designs_video_button_text',__('View More','vw-interior-designs')));?></span></a>
                    </div>
                  <?php } ?>
                </div>
              </div>
              <div class="col-md-6 col-lg-7">
                <div class="video-box">
                  <?php
                    $content = apply_filters( 'the_content', get_the_content() );
                    $video = false;

                    // Only get video from the content if a playlist isn't present.
                    if ( false === strpos( $content, 'wp-playlist-script' ) ) {
                      $video = get_media_embedded_in_content( $content, array( 'video', 'object', 'embed', 'iframe' ) );
                    }
                  ?>
                  <?php
                    if ( ! is_single() ) {
                      // If not a single post, highlight the video file.
                      if ( ! empty( $video ) ) {
                        foreach ( $video as $video_html ) {
                          echo '<div class="entry-video">';
                            echo $video_html;
                          echo '</div>';
                        }
                      }
                      elseif(has_post_thumbnail()) { 
                        the_post_thumbnail(); 
                      }
                    }; 
                  ?>
                </div>
              </div>
            </div>
          <?php endwhile; 
          wp_reset_postdata();?>
          <?php else : ?>
            <div class="no-postfound"></div>
          <?php
        endif; ?>
      </div>
    </section>
  <?php }?>

  <?php do_action( 'vw_interior_designs_after_articles' ); ?>

  <div class="content-vw">
    <div class="container">
      <?php while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
      <?php endwhile; // end of the loop. ?>
    </div>
  </div>
</main>

<?php get_footer(); ?>