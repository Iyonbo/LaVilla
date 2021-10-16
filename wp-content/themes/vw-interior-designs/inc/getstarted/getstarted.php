<?php
//about theme info
add_action( 'admin_menu', 'vw_interior_designs_gettingstarted' );
function vw_interior_designs_gettingstarted() {    	
	add_theme_page( esc_html__('About VW Interior Designs', 'vw-interior-designs'), esc_html__('About VW Interior Designs', 'vw-interior-designs'), 'edit_theme_options', 'vw_interior_designs_guide', 'vw_interior_designs_mostrar_guide');
}

// Add a Custom CSS file to WP Admin Area
function vw_interior_designs_admin_theme_style() {
   wp_enqueue_style('vw-interior-designs-custom-admin-style', esc_url(get_template_directory_uri()) . '/inc/getstarted/getstarted.css');
   wp_enqueue_script('vw-interior-designs-tabs', esc_url(get_template_directory_uri()) . '/inc/getstarted/js/tab.js');
   wp_enqueue_style( 'font-awesome-css', esc_url(get_template_directory_uri()).'/css/fontawesome-all.css' );
}
add_action('admin_enqueue_scripts', 'vw_interior_designs_admin_theme_style');

//guidline for about theme
function vw_interior_designs_mostrar_guide() { 
	//custom function about theme customizer
	$return = add_query_arg( array()) ;
	$theme = wp_get_theme( 'vw-interior-designs' );
?>

<div class="wrapper-info">
    <div class="col-left">
    	<h2><?php esc_html_e( 'Welcome to VW Interior Designs Theme', 'vw-interior-designs' ); ?> <span class="version">Version: <?php echo esc_html($theme['Version']);?></span></h2>
    	<p><?php esc_html_e('All our WordPress themes are modern, minimalist, 100% responsive, seo-friendly,feature-rich, and multipurpose that best suit designers, bloggers and other professionals who are working in the creative fields.','vw-interior-designs'); ?></p>
    </div>
    <div class="col-right">
    	<div class="logo">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstarted/images/final-logo.png" alt="" />
		</div>
		<div class="update-now">
			<h4><?php esc_html_e('Buy VW Interior Designs at 20% Discount','vw-interior-designs'); ?></h4>
			<h4><?php esc_html_e('Use Coupon','vw-interior-designs'); ?> ( <span><?php esc_html_e('vwpro20','vw-interior-designs'); ?></span> ) </h4> 
			<div class="info-link">
				<a href="<?php echo esc_url( VW_INTERIOR_DESIGNS_BUY_NOW ); ?>" target="_blank"> <?php esc_html_e( 'Upgrade to Pro', 'vw-interior-designs' ); ?></a>
			</div>
		</div>
    </div>

    <div class="tab-sec">
		<div class="tab">
			<button class="tablinks" onclick="vw_interior_designs_open_tab(event, 'lite_theme')"><?php esc_html_e( 'Setup With Customizer', 'vw-interior-designs' ); ?></button>
			<button class="tablinks" onclick="vw_interior_designs_open_tab(event, 'block_pattern')"><?php esc_html_e( 'Setup With Block Pattern', 'vw-interior-designs' ); ?></button>
			<button class="tablinks" onclick="vw_interior_designs_open_tab(event, 'gutenberg_editor')"><?php esc_html_e( 'Setup With Gutunberg Block', 'vw-interior-designs' ); ?></button>
		  	<button class="tablinks" onclick="vw_interior_designs_open_tab(event, 'pro_theme')"><?php esc_html_e( 'Get Premium', 'vw-interior-designs' ); ?></button>
		  	<button class="tablinks" onclick="vw_interior_designs_open_tab(event, 'lite_pro')"><?php esc_html_e( 'Support', 'vw-interior-designs' ); ?></button>
		</div>

		<?php
			$vw_interior_designs_plugin_custom_css = '';
			if(class_exists('Ibtana_Visual_Editor_Menu_Class')){
				$vw_interior_designs_plugin_custom_css ='display: block';
			}
		?>
		<div id="lite_theme" class="tabcontent open">
			<?php if(!class_exists('Ibtana_Visual_Editor_Menu_Class')){ 
				$plugin_ins = VW_Interior_Designs_Plugin_Activation_Settings::get_instance();
				$vw_interior_designs_actions = $plugin_ins->recommended_actions;
				?>
				<div class="vw-interior-designs-recommended-plugins">
				    <div class="vw-interior-designs-action-list">
				        <?php if ($vw_interior_designs_actions): foreach ($vw_interior_designs_actions as $key => $vw_interior_designs_actionValue): ?>
				                <div class="vw-interior-designs-action" id="<?php echo esc_attr($vw_interior_designs_actionValue['id']);?>">
			                        <div class="action-inner">
			                            <h3 class="action-title"><?php echo esc_html($vw_interior_designs_actionValue['title']); ?></h3>
			                            <div class="action-desc"><?php echo esc_html($vw_interior_designs_actionValue['desc']); ?></div>
			                            <?php echo wp_kses_post($vw_interior_designs_actionValue['link']); ?>
			                            <a class="ibtana-skip-btn" get-start-tab-id="lite-theme-tab" href="javascript:void(0);"><?php esc_html_e('Skip','vw-interior-designs'); ?></a>
			                        </div>
				                </div>
				            <?php endforeach;
				        endif; ?>
				    </div>
				</div>
			<?php } ?>
			<div class="lite-theme-tab" style="<?php echo esc_attr($vw_interior_designs_plugin_custom_css); ?>">
				<h3><?php esc_html_e( 'Lite Theme Information', 'vw-interior-designs' ); ?></h3>
				<hr class="h3hr">
			  	<p><?php esc_html_e('VW Interior Designs is a stylish, stunning and feature-rich interior design WordPress theme for interior designers, home decorators, furniture stores, architectures, home decor shops and interior designing firms. It is flexible to be used as a blog or as a portfolio by people who have a strong sense and undying passion for decorating homes and spaces with their creative ideas. It implements all the features of a modern website like responsiveness, cross-browser compatibility, multilingual, RTL support and many more to cater the growing demands of people and be in the race of best interior designing theme. It has smartly used banners and sliders to leave a lasting impression on visitors. Proper use of call to action buttons can get the real deal. VW Interior Designs theme is powered by Bootstrap framework for strong foundation. Its user-friendly interface and smooth navigation further facilitates its usage. Social media icons are necessary in websites of this profession to get an easy access to people mobile and tablets. The theme is capable of diverting a good amount of traffic to your website by giving a higher rank in search engine results. Gallery is provided to show off the creative mind you have.
					','vw-interior-designs'); ?></p>
			  	<div class="col-left-inner">
			  		<h4><?php esc_html_e( 'Theme Documentation', 'vw-interior-designs' ); ?></h4>
					<p><?php esc_html_e( 'If you need any assistance regarding setting up and configuring the Theme, our documentation is there.', 'vw-interior-designs' ); ?></p>
					<div class="info-link">
						<a href="<?php echo esc_url( VW_INTERIOR_DESIGNS_FREE_THEME_DOC ); ?>" target="_blank"> <?php esc_html_e( 'Documentation', 'vw-interior-designs' ); ?></a>
					</div>
					<hr>
					<h4><?php esc_html_e('Theme Customizer', 'vw-interior-designs'); ?></h4>
					<p> <?php esc_html_e('To begin customizing your website, start by clicking "Customize".', 'vw-interior-designs'); ?></p>
					<div class="info-link">
						<a target="_blank" href="<?php echo esc_url( admin_url('customize.php') ); ?>"><?php esc_html_e('Customizing', 'vw-interior-designs'); ?></a>
					</div>
					<hr>				
					<h4><?php esc_html_e('Having Trouble, Need Support?', 'vw-interior-designs'); ?></h4>
					<p> <?php esc_html_e('Our dedicated team is well prepared to help you out in case of queries and doubts regarding our theme.', 'vw-interior-designs'); ?></p>
					<div class="info-link">
						<a href="<?php echo esc_url( VW_INTERIOR_DESIGNS_SUPPORT ); ?>" target="_blank"><?php esc_html_e('Support Forum', 'vw-interior-designs'); ?></a>
					</div>
					<hr>
					<h4><?php esc_html_e('Reviews & Testimonials', 'vw-interior-designs'); ?></h4>
					<p> <?php esc_html_e('All the features and aspects of this WordPress Theme are phenomenal. I\'d recommend this theme to all.', 'vw-interior-designs'); ?>  </p>
					<div class="info-link">
						<a href="<?php echo esc_url( VW_INTERIOR_DESIGNS_REVIEW ); ?>" target="_blank"><?php esc_html_e('Reviews', 'vw-interior-designs'); ?></a>
					</div>
			  		<div class="link-customizer">
						<h3><?php esc_html_e( 'Link to customizer', 'vw-interior-designs' ); ?></h3>
						<hr class="h3hr">
						<div class="first-row">
							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-buddicons-buddypress-logo"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[control]=custom_logo') ); ?>" target="_blank"><?php esc_html_e('Upload your logo','vw-interior-designs'); ?></a>
								</div>
								<div class="row-box2">
									<span class="dashicons dashicons-slides"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_interior_designs_slidersettings') ); ?>" target="_blank"><?php esc_html_e('Slider Settings','vw-interior-designs'); ?></a>
								</div>
							</div>
							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-admin-customizer"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_interior_designs_global_typography') ); ?>" target="_blank"><?php esc_html_e('Typography','vw-interior-designs'); ?></a>
								</div>
								<div class="row-box2">
									<span class="dashicons dashicons-format-video"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_interior_designs_video_post_section') ); ?>" target="_blank"><?php esc_html_e('Video Post Section','vw-interior-designs'); ?></a>
								</div>
							</div>
							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-menu"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=nav_menus') ); ?>" target="_blank"><?php esc_html_e('Menus','vw-interior-designs'); ?></a>
								</div>
								<div class="row-box2">
									<span class="dashicons dashicons-screenoptions"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=widgets') ); ?>" target="_blank"><?php esc_html_e('Footer Widget','vw-interior-designs'); ?></a>
								</div>
							</div>

							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-format-gallery"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_interior_designs_post_settings') ); ?>" target="_blank"><?php esc_html_e('Post settings','vw-interior-designs'); ?></a>
								</div>
								 <div class="row-box2">
									<span class="dashicons dashicons-align-center"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_interior_designs_woocommerce_section') ); ?>" target="_blank"><?php esc_html_e('WooCommerce Layout','vw-interior-designs'); ?></a>
								</div> 
							</div>
							
							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-admin-generic"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_interior_designs_left_right') ); ?>" target="_blank"><?php esc_html_e('General Settings','vw-interior-designs'); ?></a>
								</div>
								<div class="row-box2">
									<span class="dashicons dashicons-text-page"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_interior_designs_footer') ); ?>" target="_blank"><?php esc_html_e('Footer Text','vw-interior-designs'); ?></a>
								</div>
							</div>
						</div>
					</div>
			  	</div>
				<div class="col-right-inner">
					<h3 class="page-template"><?php esc_html_e('How to set up Home Page Template','vw-interior-designs'); ?></h3>
				  	<hr class="h3hr">
					<p><?php esc_html_e('Follow these instructions to setup Home page.','vw-interior-designs'); ?></p>
	                <ul>
	                  	<p><span class="strong"><?php esc_html_e('1. Create a new page :','vw-interior-designs'); ?></span><?php esc_html_e(' Go to ','vw-interior-designs'); ?>
					  	<b><?php esc_html_e(' Dashboard >> Pages >> Add New Page','vw-interior-designs'); ?></b></p>

	                  	<p><?php esc_html_e('Name it as "Home" then select the template "Custom Home Page".','vw-interior-designs'); ?></p>
	                  	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstarted/images/home-page-template.png" alt="" />
	                  	<p><span class="strong"><?php esc_html_e('2. Set the front page:','vw-interior-designs'); ?></span><?php esc_html_e(' Go to ','vw-interior-designs'); ?>
					  	<b><?php esc_html_e(' Settings >> Reading ','vw-interior-designs'); ?></b></p>
					  	<p><?php esc_html_e('Select the option of Static Page, now select the page you created to be the homepage, while another page to be your default page.','vw-interior-designs'); ?></p>
	                  	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstarted/images/set-front-page.png" alt="" />
	                  	<p><?php esc_html_e(' Once you are done with this, then follow the','vw-interior-designs'); ?> <a class="doc-links" href="https://www.vwthemesdemo.com/docs/free-vw-interior-designs/" target="_blank"><?php esc_html_e('Documentation','vw-interior-designs'); ?></a></p>
	                </ul>
			  	</div>
			</div>
		</div>

		<div id="block_pattern" class="tabcontent">
			<?php if(!class_exists('Ibtana_Visual_Editor_Menu_Class')){ 
				$plugin_ins = VW_Interior_Designs_Plugin_Activation_Settings::get_instance();
				$vw_interior_designs_actions = $plugin_ins->recommended_actions;
				?>
				<div class="vw-interior-designs-recommended-plugins">
				    <div class="vw-interior-designs-action-list">
				        <?php if ($vw_interior_designs_actions): foreach ($vw_interior_designs_actions as $key => $vw_interior_designs_actionValue): ?>
				                <div class="vw-interior-designs-action" id="<?php echo esc_attr($vw_interior_designs_actionValue['id']);?>">
			                        <div class="action-inner">
			                            <h3 class="action-title"><?php echo esc_html($vw_interior_designs_actionValue['title']); ?></h3>
			                            <div class="action-desc"><?php echo esc_html($vw_interior_designs_actionValue['desc']); ?></div>
			                            <?php echo wp_kses_post($vw_interior_designs_actionValue['link']); ?>
			                            <a class="ibtana-skip-btn" href="javascript:void(0);" get-start-tab-id="gutenberg-editor-tab"><?php esc_html_e('Skip','vw-interior-designs'); ?></a>
			                        </div>
				                </div>
				            <?php endforeach;
				        endif; ?>
				    </div>
				</div>
			<?php } ?>
			<div class="gutenberg-editor-tab" style="<?php echo esc_attr($vw_interior_designs_plugin_custom_css); ?>">
				<div class="block-pattern-img">
				  	<h3><?php esc_html_e( 'Block Patterns', 'vw-interior-designs' ); ?></h3>
					<hr class="h3hr">
					<p><?php esc_html_e('Follow the below instructions to setup Home page with Block Patterns.','vw-interior-designs'); ?></p>
	              	<p><b><?php esc_html_e('Click on Below Add new page button >> Click on "+" Icon >> Click Pattern Tab >> Click on homepage sections >> Publish.','vw-interior-designs'); ?></span></b></p>
	              	<div class="vw-interior-designs-pattern-page">
				    	<a href="javascript:void(0)" class="vw-pattern-page-btn button-primary button"><?php esc_html_e('Add New Page','vw-interior-designs'); ?></a>
				    </div>
	              	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstarted/images/block-pattern.png" alt="" />	
	            </div>	

	            <div class="block-pattern-link-customizer">
	              	<div class="link-customizer-with-block-pattern">
						<h3><?php esc_html_e( 'Link to customizer', 'vw-interior-designs' ); ?></h3>
						<hr class="h3hr">
						<div class="first-row">
							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-buddicons-buddypress-logo"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[control]=custom_logo') ); ?>" target="_blank"><?php esc_html_e('Upload your logo','vw-interior-designs'); ?></a>
								</div>
								<div class="row-box2">
									<span class="dashicons dashicons-networking"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_interior_designs_social_icon_settings') ); ?>" target="_blank"><?php esc_html_e('Social Icons','vw-interior-designs'); ?></a>
								</div>
							</div>
							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-menu"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=nav_menus') ); ?>" target="_blank"><?php esc_html_e('Menus','vw-interior-designs'); ?></a>
								</div>
								
								<div class="row-box2">
									<span class="dashicons dashicons-text-page"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_interior_designs_footer') ); ?>" target="_blank"><?php esc_html_e('Footer Text','vw-interior-designs'); ?></a>
								</div>
							</div>

							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-format-gallery"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_interior_designs_post_settings') ); ?>" target="_blank"><?php esc_html_e('Post settings','vw-interior-designs'); ?></a>
								</div>
								 <div class="row-box2">
									<span class="dashicons dashicons-align-center"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_interior_designs_woocommerce_section') ); ?>" target="_blank"><?php esc_html_e('WooCommerce Layout','vw-interior-designs'); ?></a>
								</div> 
							</div>
							
							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-admin-generic"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_interior_designs_left_right') ); ?>" target="_blank"><?php esc_html_e('General Settings','vw-interior-designs'); ?></a>
								</div>
								 <div class="row-box2">
									<span class="dashicons dashicons-screenoptions"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=widgets') ); ?>" target="_blank"><?php esc_html_e('Footer Widget','vw-interior-designs'); ?></a>
								</div> 
							</div>
						</div>
					</div>	
				</div>		
	        </div>
		</div>

		<div id="gutenberg_editor" class="tabcontent">
			<?php if(!class_exists('Ibtana_Visual_Editor_Menu_Class')){ 
			$plugin_ins = VW_Interior_Designs_Plugin_Activation_Settings::get_instance();
			$vw_interior_designs_actions = $plugin_ins->recommended_actions;
			?>
				<div class="vw-interior-designs-recommended-plugins">
				    <div class="vw-interior-designs-action-list">
				        <?php if ($vw_interior_designs_actions): foreach ($vw_interior_designs_actions as $key => $vw_interior_designs_actionValue): ?>
				                <div class="vw-interior-designs-action" id="<?php echo esc_attr($vw_interior_designs_actionValue['id']);?>">
			                        <div class="action-inner plugin-activation-redirect">
			                            <h3 class="action-title"><?php echo esc_html($vw_interior_designs_actionValue['title']); ?></h3>
			                            <div class="action-desc"><?php echo esc_html($vw_interior_designs_actionValue['desc']); ?></div>
			                            <?php echo wp_kses_post($vw_interior_designs_actionValue['link']); ?>
			                        </div>
				                </div>
				            <?php endforeach;
				        endif; ?>
				    </div>
				</div>
			<?php }else{ ?>
				<h3><?php esc_html_e( 'Gutunberg Blocks', 'vw-interior-designs' ); ?></h3>
				<hr class="h3hr">
				<div class="vw-interior-designs-pattern-page">
			    	<a href="<?php echo esc_url( admin_url( 'admin.php?page=ibtana-visual-editor-templates' ) ); ?>" class="vw-pattern-page-btn ibtana-dashboard-page-btn button-primary button"><?php esc_html_e('Ibtana Settings','vw-interior-designs'); ?></a>
			    </div>

			    <div class="link-customizer-with-guternberg-ibtana">
					<h3><?php esc_html_e( 'Link to customizer', 'vw-interior-designs' ); ?></h3>
					<hr class="h3hr">
					<div class="first-row">
						<div class="row-box">
							<div class="row-box1">
								<span class="dashicons dashicons-buddicons-buddypress-logo"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[control]=custom_logo') ); ?>" target="_blank"><?php esc_html_e('Upload your logo','vw-interior-designs'); ?></a>
							</div>
							<div class="row-box2">
								<span class="dashicons dashicons-networking"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_interior_designs_social_icon_settings') ); ?>" target="_blank"><?php esc_html_e('Social Icons','vw-interior-designs'); ?></a>
							</div>
						</div>
						<div class="row-box">
							<div class="row-box1">
								<span class="dashicons dashicons-menu"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=nav_menus') ); ?>" target="_blank"><?php esc_html_e('Menus','vw-interior-designs'); ?></a>
							</div>
							
							<div class="row-box2">
								<span class="dashicons dashicons-text-page"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_interior_designs_footer') ); ?>" target="_blank"><?php esc_html_e('Footer Text','vw-interior-designs'); ?></a>
							</div>
						</div>

						<div class="row-box">
							<div class="row-box1">
								<span class="dashicons dashicons-format-gallery"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_interior_designs_post_settings') ); ?>" target="_blank"><?php esc_html_e('Post settings','vw-interior-designs'); ?></a>
							</div>
							 <div class="row-box2">
								<span class="dashicons dashicons-align-center"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_interior_designs_woocommerce_section') ); ?>" target="_blank"><?php esc_html_e('WooCommerce Layout','vw-interior-designs'); ?></a>
							</div> 
						</div>
						
						<div class="row-box">
							<div class="row-box1">
								<span class="dashicons dashicons-admin-generic"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_interior_designs_left_right') ); ?>" target="_blank"><?php esc_html_e('General Settings','vw-interior-designs'); ?></a>
							</div>
							 <div class="row-box2">
								<span class="dashicons dashicons-screenoptions"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=widgets') ); ?>" target="_blank"><?php esc_html_e('Footer Widget','vw-interior-designs'); ?></a>
							</div> 
						</div>
					</div>
				</div>
			<?php } ?>
		</div>

		<div id="pro_theme" class="tabcontent">
		  	<h3><?php esc_html_e( 'Premium Theme Information', 'vw-interior-designs' ); ?></h3>
			<hr class="h3hr">
		    <div class="col-left-pro">
		    	<p><?php esc_html_e('TThe interior design WordPress theme is contemporary, mesmerising and highly efficient. It is the perfect fit for interior designers, home decor stores, architectures, furniture shops and for people passionate to design spaces with their innovative ideas. This theme is the best option to get your comfort space for exhibiting your unconventional and awe inspiring ideas with unlimited colours, numerous Google fonts and multiple layouts for header, footer and sidebar having your back to design an impressive website in a matter of minutes. Our developers have done a deep study of the needs of an interior design WordPress theme and then thoughtfully designed it including all the necessary sections. It provides an easily understandable user interface of both front end and back end. It is coded from scratch with Bootstrap framework providing a strong foundation to its base. It is extensively documented to make the best of this theme.','vw-interior-designs'); ?></p>
		    	<div class="pro-links">
			    	<a href="<?php echo esc_url( VW_INTERIOR_DESIGNS_LIVE_DEMO ); ?>" target="_blank"><?php esc_html_e('Live Demo', 'vw-interior-designs'); ?></a>
					<a href="<?php echo esc_url( VW_INTERIOR_DESIGNS_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Buy Pro', 'vw-interior-designs'); ?></a>
					<a href="<?php echo esc_url( VW_INTERIOR_DESIGNS_PRO_DOC ); ?>" target="_blank"><?php esc_html_e('Pro Documentation', 'vw-interior-designs'); ?></a>
				</div>
		    </div>
		    <div class="col-right-pro">
		    	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstarted/images/responsive.png" alt="" />
		    </div>
		    <div class="featurebox">
			    <h3><?php esc_html_e( 'Theme Features', 'vw-interior-designs' ); ?></h3>
				<hr class="h3hr">
				<div class="table-image">
					<table class="tablebox">
						<thead>
							<tr>
								<th></th>
								<th><?php esc_html_e('Free Themes', 'vw-interior-designs'); ?></th>
								<th><?php esc_html_e('Premium Themes', 'vw-interior-designs'); ?></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><?php esc_html_e('Theme Customization', 'vw-interior-designs'); ?></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Responsive Design', 'vw-interior-designs'); ?></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Logo Upload', 'vw-interior-designs'); ?></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Social Media Links', 'vw-interior-designs'); ?></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Slider Settings', 'vw-interior-designs'); ?></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Number of Slides', 'vw-interior-designs'); ?></td>
								<td class="table-img"><?php esc_html_e('4', 'vw-interior-designs'); ?></td>
								<td class="table-img"><?php esc_html_e('Unlimited', 'vw-interior-designs'); ?></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Template Pages', 'vw-interior-designs'); ?></td>
								<td class="table-img"><?php esc_html_e('3', 'vw-interior-designs'); ?></td>
								<td class="table-img"><?php esc_html_e('6', 'vw-interior-designs'); ?></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Home Page Template', 'vw-interior-designs'); ?></td>
								<td class="table-img"><?php esc_html_e('1', 'vw-interior-designs'); ?></td>
								<td class="table-img"><?php esc_html_e('1', 'vw-interior-designs'); ?></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Theme sections', 'vw-interior-designs'); ?></td>
								<td class="table-img"><?php esc_html_e('2', 'vw-interior-designs'); ?></td>
								<td class="table-img"><?php esc_html_e('10', 'vw-interior-designs'); ?></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Contact us Page Template', 'vw-interior-designs'); ?></td>
								<td class="table-img">0</td>
								<td class="table-img"><?php esc_html_e('1', 'vw-interior-designs'); ?></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Blog Templates & Layout', 'vw-interior-designs'); ?></td>
								<td class="table-img">0</td>
								<td class="table-img"><?php esc_html_e('3(Full width/Left/Right Sidebar)', 'vw-interior-designs'); ?></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Page Templates & Layout', 'vw-interior-designs'); ?></td>
								<td class="table-img">0</td>
								<td class="table-img"><?php esc_html_e('2(Left/Right Sidebar)', 'vw-interior-designs'); ?></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Color Pallete For Particular Sections', 'vw-interior-designs'); ?></td>
								<td class="table-img"><i class="fas fa-times"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Global Color Option', 'vw-interior-designs'); ?></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Section Reordering', 'vw-interior-designs'); ?></td>
								<td class="table-img"><i class="fas fa-times"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Demo Importer', 'vw-interior-designs'); ?></td>
								<td class="table-img"><i class="fas fa-times"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Allow To Set Site Title, Tagline, Logo', 'vw-interior-designs'); ?></td>
								<td class="table-img"><i class="fas fa-times"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Enable Disable Options On All Sections, Logo', 'vw-interior-designs'); ?></td>
								<td class="table-img"><i class="fas fa-times"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Full Documentation', 'vw-interior-designs'); ?></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Latest WordPress Compatibility', 'vw-interior-designs'); ?></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Woo-Commerce Compatibility', 'vw-interior-designs'); ?></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Support 3rd Party Plugins', 'vw-interior-designs'); ?></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Secure and Optimized Code', 'vw-interior-designs'); ?></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Exclusive Functionalities', 'vw-interior-designs'); ?></td>
								<td class="table-img"><i class="fas fa-times"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Section Enable / Disable', 'vw-interior-designs'); ?></td>
								<td class="table-img"><i class="fas fa-times"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Section Google Font Choices', 'vw-interior-designs'); ?></td>
								<td class="table-img"><i class="fas fa-times"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Gallery', 'vw-interior-designs'); ?></td>
								<td class="table-img"><i class="fas fa-times"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Simple & Mega Menu Option', 'vw-interior-designs'); ?></td>
								<td class="table-img"><i class="fas fa-times"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Support to add custom CSS / JS ', 'vw-interior-designs'); ?></td>
								<td class="table-img"><i class="fas fa-times"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Shortcodes', 'vw-interior-designs'); ?></td>
								<td class="table-img"><i class="fas fa-times"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Custom Background, Colors, Header, Logo & Menu', 'vw-interior-designs'); ?></td>
								<td class="table-img"><i class="fas fa-times"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Premium Membership', 'vw-interior-designs'); ?></td>
								<td class="table-img"><i class="fas fa-times"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Budget Friendly Value', 'vw-interior-designs'); ?></td>
								<td class="table-img"><i class="fas fa-times"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Priority Error Fixing', 'vw-interior-designs'); ?></td>
								<td class="table-img"><i class="fas fa-times"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Custom Feature Addition', 'vw-interior-designs'); ?></td>
								<td class="table-img"><i class="fas fa-times"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('All Access Theme Pass', 'vw-interior-designs'); ?></td>
								<td class="table-img"><i class="fas fa-times"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Seamless Customer Support', 'vw-interior-designs'); ?></td>
								<td class="table-img"><i class="fas fa-times"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr>
								<td></td>
								<td class="table-img"></td>
								<td class="update-link"><a href="<?php echo esc_url( VW_INTERIOR_DESIGNS_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Upgrade to Pro', 'vw-interior-designs'); ?></a></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>

		<div id="lite_pro" class="tabcontent">
		  	<div class="col-3">
		  		<h4><span class="dashicons dashicons-star-filled"></span><?php esc_html_e('Pro Version', 'vw-interior-designs'); ?></h4>
				<p> <?php esc_html_e('To gain access to extra theme options and more interesting features, upgrade to pro version.', 'vw-interior-designs'); ?></p>
				<div class="info-link">
					<a href="<?php echo esc_url( VW_INTERIOR_DESIGNS_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Get Pro', 'vw-interior-designs'); ?></a>
				</div>
		  	</div>
		  	<div class="col-3">
		  		<h4><span class="dashicons dashicons-cart"></span><?php esc_html_e('Pre-purchase Queries', 'vw-interior-designs'); ?></h4>
				<p> <?php esc_html_e('If you have any pre-sale query, we are prepared to resolve it.', 'vw-interior-designs'); ?></p>
				<div class="info-link">
					<a href="<?php echo esc_url( VW_INTERIOR_DESIGNS_CONTACT ); ?>" target="_blank"><?php esc_html_e('Question', 'vw-interior-designs'); ?></a>
				</div>
		  	</div>
		  	<div class="col-3">		  		
		  		<h4><span class="dashicons dashicons-admin-customizer"></span><?php esc_html_e('Child Theme', 'vw-interior-designs'); ?></h4>
				<p> <?php esc_html_e('For theme file customizations, make modifications in the child theme and not in the main theme file.', 'vw-interior-designs'); ?></p>
				<div class="info-link">
					<a href="<?php echo esc_url( VW_INTERIOR_DESIGNS_CHILD_THEME ); ?>" target="_blank"><?php esc_html_e('About Child Theme', 'vw-interior-designs'); ?></a>
				</div>
		  	</div>

		  	<div class="col-3">
		  		<h4><span class="dashicons dashicons-admin-comments"></span><?php esc_html_e('Frequently Asked Questions', 'vw-interior-designs'); ?></h4>
				<p> <?php esc_html_e('We have gathered top most, frequently asked questions and answered them for your easy understanding. We will list down more as we get new challenging queries. Check back often.', 'vw-interior-designs'); ?></p>
				<div class="info-link">
					<a href="<?php echo esc_url( VW_INTERIOR_DESIGNS_FAQ ); ?>" target="_blank"><?php esc_html_e('View FAQ','vw-interior-designs'); ?></a>
				</div>
		  	</div>

		  	<div class="col-3">
		  		<h4><span class="dashicons dashicons-sos"></span><?php esc_html_e('Support Queries', 'vw-interior-designs'); ?></h4>
				<p> <?php esc_html_e('If you have any queries after purchase, you can contact us. We are eveready to help you out.', 'vw-interior-designs'); ?></p>
				<div class="info-link">
					<a href="<?php echo esc_url( VW_INTERIOR_DESIGNS_SUPPORT ); ?>" target="_blank"><?php esc_html_e('Contact Us', 'vw-interior-designs'); ?></a>
				</div>
		  	</div>
		</div>
	</div>
</div>
<?php } ?>