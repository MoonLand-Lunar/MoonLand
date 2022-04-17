<?php
/**
 * Customizer section options.
 *
 * @package Crypto Compare
 *
 */

function crypto_compare_customizer_theme_settings( $wp_customize ){
	
	$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';	
		
		$wp_customize->add_setting('cryptocompare_footer_copyright_text',array(
			'sanitize_callback'	=> 'crypto_compare_sanitize_text',
			'default'			=> __('Copyright &copy; 2021 | Powered by <a href="//wordpress.org/">WordPress</a> <span class="sep"> | </span> Crypto Compare theme by <a target="_blank" href="//wpfrank.com/">WP Frank</a>', 'crypto-compare'),
			'transport'			=> $selective_refresh,
		));
		
		$wp_customize->add_control('cryptocompare_footer_copyright_text', array(
			'label'			=> esc_html__('Footer Copyright','crypto-compare'),
			'section'		=> 'cryptoairdrop_footer_copyright',
			'priority'		=> 10,
			'type'			=> 'textarea'
		));

}
add_action( 'customize_register', 'crypto_compare_customizer_theme_settings' );

function crypto_compare_sanitize_text( $input ) {
		return wp_kses_post( force_balance_tags( $input ) );
}