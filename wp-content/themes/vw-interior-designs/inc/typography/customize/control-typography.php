<?php
/**
 * Typography control class.
 *
 * @since  1.0.0
 * @access public
 */

class VW_Interior_Designs_Control_Typography extends WP_Customize_Control {

	/**
	 * The type of customize control being rendered.
	 *
	 * @since  1.0.0
	 * @access public
	 * @var    string
	 */
	public $type = 'typography';

	/**
	 * Array 
	 *
	 * @since  1.0.0
	 * @access public
	 * @var    string
	 */
	public $l10n = array();

	/**
	 * Set up our control.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  object  $manager
	 * @param  string  $id
	 * @param  array   $args
	 * @return void
	 */
	public function __construct( $manager, $id, $args = array() ) {

		// Let the parent class do its thing.
		parent::__construct( $manager, $id, $args );

		// Make sure we have labels.
		$this->l10n = wp_parse_args(
			$this->l10n,
			array(
				'color'       => esc_html__( 'Font Color', 'vw-interior-designs' ),
				'family'      => esc_html__( 'Font Family', 'vw-interior-designs' ),
				'size'        => esc_html__( 'Font Size',   'vw-interior-designs' ),
				'weight'      => esc_html__( 'Font Weight', 'vw-interior-designs' ),
				'style'       => esc_html__( 'Font Style',  'vw-interior-designs' ),
				'line_height' => esc_html__( 'Line Height', 'vw-interior-designs' ),
				'letter_spacing' => esc_html__( 'Letter Spacing', 'vw-interior-designs' ),
			)
		);
	}

	/**
	 * Enqueue scripts/styles.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function enqueue() {
		wp_enqueue_script( 'vw-interior-designs-ctypo-customize-controls' );
		wp_enqueue_style(  'vw-interior-designs-ctypo-customize-controls' );
	}

	/**
	 * Add custom parameters to pass to the JS via JSON.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function to_json() {
		parent::to_json();

		// Loop through each of the settings and set up the data for it.
		foreach ( $this->settings as $setting_key => $setting_id ) {

			$this->json[ $setting_key ] = array(
				'link'  => $this->get_link( $setting_key ),
				'value' => $this->value( $setting_key ),
				'label' => isset( $this->l10n[ $setting_key ] ) ? $this->l10n[ $setting_key ] : ''
			);

			if ( 'family' === $setting_key )
				$this->json[ $setting_key ]['choices'] = $this->get_font_families();

			elseif ( 'weight' === $setting_key )
				$this->json[ $setting_key ]['choices'] = $this->get_font_weight_choices();

			elseif ( 'style' === $setting_key )
				$this->json[ $setting_key ]['choices'] = $this->get_font_style_choices();
		}
	}

	/**
	 * Underscore JS template to handle the control's output.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function content_template() { ?>

		<# if ( data.label ) { #>
			<span class="customize-control-title">{{ data.label }}</span>
		<# } #>

		<# if ( data.description ) { #>
			<span class="description customize-control-description">{{{ data.description }}}</span>
		<# } #>

		<ul>

		<# if ( data.family && data.family.choices ) { #>

			<li class="typography-font-family">

				<# if ( data.family.label ) { #>
					<span class="customize-control-title">{{ data.family.label }}</span>
				<# } #>

				<select {{{ data.family.link }}}>

					<# _.each( data.family.choices, function( label, choice ) { #>
						<option value="{{ choice }}" <# if ( choice === data.family.value ) { #> selected="selected" <# } #>>{{ label }}</option>
					<# } ) #>

				</select>
			</li>
		<# } #>

		<# if ( data.weight && data.weight.choices ) { #>

			<li class="typography-font-weight">

				<# if ( data.weight.label ) { #>
					<span class="customize-control-title">{{ data.weight.label }}</span>
				<# } #>

				<select {{{ data.weight.link }}}>

					<# _.each( data.weight.choices, function( label, choice ) { #>

						<option value="{{ choice }}" <# if ( choice === data.weight.value ) { #> selected="selected" <# } #>>{{ label }}</option>

					<# } ) #>

				</select>
			</li>
		<# } #>

		<# if ( data.style && data.style.choices ) { #>

			<li class="typography-font-style">

				<# if ( data.style.label ) { #>
					<span class="customize-control-title">{{ data.style.label }}</span>
				<# } #>

				<select {{{ data.style.link }}}>

					<# _.each( data.style.choices, function( label, choice ) { #>

						<option value="{{ choice }}" <# if ( choice === data.style.value ) { #> selected="selected" <# } #>>{{ label }}</option>

					<# } ) #>

				</select>
			</li>
		<# } #>

		<# if ( data.size ) { #>

			<li class="typography-font-size">

				<# if ( data.size.label ) { #>
					<span class="customize-control-title">{{ data.size.label }} (px)</span>
				<# } #>

				<input type="number" min="1" {{{ data.size.link }}} value="{{ data.size.value }}" />

			</li>
		<# } #>

		<# if ( data.line_height ) { #>

			<li class="typography-line-height">

				<# if ( data.line_height.label ) { #>
					<span class="customize-control-title">{{ data.line_height.label }} (px)</span>
				<# } #>

				<input type="number" min="1" {{{ data.line_height.link }}} value="{{ data.line_height.value }}" />

			</li>
		<# } #>

		<# if ( data.letter_spacing ) { #>

			<li class="typography-letter-spacing">

				<# if ( data.letter_spacing.label ) { #>
					<span class="customize-control-title">{{ data.letter_spacing.label }} (px)</span>
				<# } #>

				<input type="number" min="1" {{{ data.letter_spacing.link }}} value="{{ data.letter_spacing.value }}" />

			</li>
		<# } #>

		</ul>
	<?php }

	/**
	 * Returns the available fonts.  Fonts should have available weights, styles, and subsets.
	 *
	 * @todo Integrate with Google fonts.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return array
	 */
	public function get_fonts() { return array(); }

	/**
	 * Returns the available font families.
	 *
	 * @todo Pull families from `get_fonts()`.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return array
	 */
	function get_font_families() {

		return array(
			'' => __( 'No Fonts', 'vw-interior-designs' ),
        'Abril Fatface' => __( 'Abril Fatface', 'vw-interior-designs' ),
        'Acme' => __( 'Acme', 'vw-interior-designs' ),
        'Anton' => __( 'Anton', 'vw-interior-designs' ),
        'Architects Daughter' => __( 'Architects Daughter', 'vw-interior-designs' ),
        'Arimo' => __( 'Arimo', 'vw-interior-designs' ),
        'Arsenal' => __( 'Arsenal', 'vw-interior-designs' ),
        'Arvo' => __( 'Arvo', 'vw-interior-designs' ),
        'Alegreya' => __( 'Alegreya', 'vw-interior-designs' ),
        'Alfa Slab One' => __( 'Alfa Slab One', 'vw-interior-designs' ),
        'Averia Serif Libre' => __( 'Averia Serif Libre', 'vw-interior-designs' ),
        'Bangers' => __( 'Bangers', 'vw-interior-designs' ),
        'Boogaloo' => __( 'Boogaloo', 'vw-interior-designs' ),
        'Bad Script' => __( 'Bad Script', 'vw-interior-designs' ),
        'Bitter' => __( 'Bitter', 'vw-interior-designs' ),
        'Bree Serif' => __( 'Bree Serif', 'vw-interior-designs' ),
        'BenchNine' => __( 'BenchNine', 'vw-interior-designs' ),
        'Cabin' => __( 'Cabin', 'vw-interior-designs' ),
        'Cardo' => __( 'Cardo', 'vw-interior-designs' ),
        'Courgette' => __( 'Courgette', 'vw-interior-designs' ),
        'Cherry Swash' => __( 'Cherry Swash', 'vw-interior-designs' ),
        'Cormorant Garamond' => __( 'Cormorant Garamond', 'vw-interior-designs' ),
        'Crimson Text' => __( 'Crimson Text', 'vw-interior-designs' ),
        'Cuprum' => __( 'Cuprum', 'vw-interior-designs' ),
        'Cookie' => __( 'Cookie', 'vw-interior-designs' ),
        'Chewy' => __( 'Chewy', 'vw-interior-designs' ),
        'Days One' => __( 'Days One', 'vw-interior-designs' ),
        'Dosis' => __( 'Dosis', 'vw-interior-designs' ),
        'Droid Sans' => __( 'Droid Sans', 'vw-interior-designs' ),
        'Economica' => __( 'Economica', 'vw-interior-designs' ),
        'Fredoka One' => __( 'Fredoka One', 'vw-interior-designs' ),
        'Fjalla One' => __( 'Fjalla One', 'vw-interior-designs' ),
        'Francois One' => __( 'Francois One', 'vw-interior-designs' ),
        'Frank Ruhl Libre' => __( 'Frank Ruhl Libre', 'vw-interior-designs' ),
        'Gloria Hallelujah' => __( 'Gloria Hallelujah', 'vw-interior-designs' ),
        'Great Vibes' => __( 'Great Vibes', 'vw-interior-designs' ),
        'Handlee' => __( 'Handlee', 'vw-interior-designs' ),
        'Hammersmith One' => __( 'Hammersmith One', 'vw-interior-designs' ),
        'Inconsolata' => __( 'Inconsolata', 'vw-interior-designs' ),
        'Indie Flower' => __( 'Indie Flower', 'vw-interior-designs' ),
        'IM Fell English SC' => __( 'IM Fell English SC', 'vw-interior-designs' ),
        'Julius Sans One' => __( 'Julius Sans One', 'vw-interior-designs' ),
        'Josefin Slab' => __( 'Josefin Slab', 'vw-interior-designs' ),
        'Josefin Sans' => __( 'Josefin Sans', 'vw-interior-designs' ),
        'Kanit' => __( 'Kanit', 'vw-interior-designs' ),
        'Lobster' => __( 'Lobster', 'vw-interior-designs' ),
        'Lato' => __( 'Lato', 'vw-interior-designs' ),
        'Lora' => __( 'Lora', 'vw-interior-designs' ),
        'Libre Baskerville' => __( 'Libre Baskerville', 'vw-interior-designs' ),
        'Lobster Two' => __( 'Lobster Two', 'vw-interior-designs' ),
        'Merriweather' => __( 'Merriweather', 'vw-interior-designs' ),
        'Monda' => __( 'Monda', 'vw-interior-designs' ),
        'Montserrat' => __( 'Montserrat', 'vw-interior-designs' ),
        'Muli' => __( 'Muli', 'vw-interior-designs' ),
        'Marck Script' => __( 'Marck Script', 'vw-interior-designs' ),
        'Noto Serif' => __( 'Noto Serif', 'vw-interior-designs' ),
        'Open Sans' => __( 'Open Sans', 'vw-interior-designs' ),
        'Overpass' => __( 'Overpass', 'vw-interior-designs' ),
        'Overpass Mono' => __( 'Overpass Mono', 'vw-interior-designs' ),
        'Oxygen' => __( 'Oxygen', 'vw-interior-designs' ),
        'Orbitron' => __( 'Orbitron', 'vw-interior-designs' ),
        'Patua One' => __( 'Patua One', 'vw-interior-designs' ),
        'Pacifico' => __( 'Pacifico', 'vw-interior-designs' ),
        'Padauk' => __( 'Padauk', 'vw-interior-designs' ),
        'Playball' => __( 'Playball', 'vw-interior-designs' ),
        'Playfair Display' => __( 'Playfair Display', 'vw-interior-designs' ),
        'PT Sans' => __( 'PT Sans', 'vw-interior-designs' ),
        'Philosopher' => __( 'Philosopher', 'vw-interior-designs' ),
        'Permanent Marker' => __( 'Permanent Marker', 'vw-interior-designs' ),
        'Poiret One' => __( 'Poiret One', 'vw-interior-designs' ),
        'Quicksand' => __( 'Quicksand', 'vw-interior-designs' ),
        'Quattrocento Sans' => __( 'Quattrocento Sans', 'vw-interior-designs' ),
        'Raleway' => __( 'Raleway', 'vw-interior-designs' ),
        'Rubik' => __( 'Rubik', 'vw-interior-designs' ),
        'Rokkitt' => __( 'Rokkitt', 'vw-interior-designs' ),
        'Russo One' => __( 'Russo One', 'vw-interior-designs' ),
        'Righteous' => __( 'Righteous', 'vw-interior-designs' ),
        'Slabo' => __( 'Slabo', 'vw-interior-designs' ),
        'Source Sans Pro' => __( 'Source Sans Pro', 'vw-interior-designs' ),
        'Shadows Into Light Two' => __( 'Shadows Into Light Two', 'vw-interior-designs'),
        'Shadows Into Light' => __( 'Shadows Into Light', 'vw-interior-designs' ),
        'Sacramento' => __( 'Sacramento', 'vw-interior-designs' ),
        'Shrikhand' => __( 'Shrikhand', 'vw-interior-designs' ),
        'Tangerine' => __( 'Tangerine', 'vw-interior-designs' ),
        'Ubuntu' => __( 'Ubuntu', 'vw-interior-designs' ),
        'VT323' => __( 'VT323', 'vw-interior-designs' ),
        'Varela Round' => __( 'Varela Round', 'vw-interior-designs' ),
        'Vampiro One' => __( 'Vampiro One', 'vw-interior-designs' ),
        'Vollkorn' => __( 'Vollkorn', 'vw-interior-designs' ),
        'Volkhov' => __( 'Volkhov', 'vw-interior-designs' ),
        'Yanone Kaffeesatz' => __( 'Yanone Kaffeesatz', 'vw-interior-designs' )
		);
	}

	/**
	 * Returns the available font weights.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return array
	 */
	public function get_font_weight_choices() {

		return array(
			'' => esc_html__( 'No Fonts weight', 'vw-interior-designs' ),
			'100' => esc_html__( 'Thin',       'vw-interior-designs' ),
			'300' => esc_html__( 'Light',      'vw-interior-designs' ),
			'400' => esc_html__( 'Normal',     'vw-interior-designs' ),
			'500' => esc_html__( 'Medium',     'vw-interior-designs' ),
			'700' => esc_html__( 'Bold',       'vw-interior-designs' ),
			'900' => esc_html__( 'Ultra Bold', 'vw-interior-designs' ),
		);
	}

	/**
	 * Returns the available font styles.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return array
	 */
	public function get_font_style_choices() {

		return array(
			'normal'  => esc_html__( 'Normal', 'vw-interior-designs' ),
			'italic'  => esc_html__( 'Italic', 'vw-interior-designs' ),
			'oblique' => esc_html__( 'Oblique', 'vw-interior-designs' )
		);
	}
}
