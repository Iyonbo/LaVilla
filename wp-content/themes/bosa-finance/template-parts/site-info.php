<?php
/**
 * Template part for displaying site info
 *
 * @package Bosa Finance 1.0.0
 */

?>

<div class="site-info">
	<?php echo wp_kses_post( html_entity_decode( esc_html__( 'Copyright &copy; ' , 'bosa-finance' ) ) );
		echo esc_html( date( 'Y' ) );
		printf( esc_html__( ' Bosa finance. Powered by', 'bosa-finance' ) );
	?>
	<a href="<?php echo esc_url( __( '//bosathemes.com', 'bosa-finance' ) ); ?>" target="_blank">
		<?php
			printf( esc_html__( 'Bosa Themes', 'bosa-finance' ) );
		?>
	</a>
</div><!-- .site-info -->