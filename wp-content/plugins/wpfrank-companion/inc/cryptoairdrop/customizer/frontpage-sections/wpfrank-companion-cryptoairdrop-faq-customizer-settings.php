<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 * Frontpage info.
 *
 * @package Crypto AirDrop
 */

defined( 'ABSPATH' ) || exit;

if ( ! class_exists( 'cryptoairdrop_Customize_Homepage_FAQ' ) ) :

	class cryptoairdrop_Customize_Homepage_FAQ extends cryptoairdrop_Customize_Base_Option {

		/**
		 * Arguments for options.
		 *
		 * @return array
		 */
		public function elements() {

			return array(

				'cryptoairdrop_faq_heading'     => array(
					'setting' => array(),
					'control' => array(
						'type'    => 'heading',
						'priority'        => 1,
						'label'   => esc_html__( 'FAQ Options', 'cryptoairdrop' ),
						'section' => 'cryptoairdrop_theme_faq',
					),
				),
					
				// Info Top Enable
				'cryptoairdrop_faq_disabled'            => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'cryptoairdrop_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 3,
						'label'    => esc_html__( 'FAQ Enable/Disable', 'cryptoairdrop' ),
						'section'  => 'cryptoairdrop_theme_faq',
					),
				),

				// Template 2 - Image disable
				'cryptoairdrop_faq_image_disable'     => array(
					'setting' => array(
						'default'			=> 'enable',
						'sanitize_callback'	=> array( 'cryptoairdrop_Customizer_Sanitize', 'sanitize_radio' ),
					),
					'control' => array(
						'type'				=> 'radio_buttonset',
						'priority'			=> 10,
						'label'				=> esc_html__( 'Image Container', 'cryptoairdrop' ),
						'section'			=> 'cryptoairdrop_theme_faq',
						'choices'			=> array(
							'enable'		=> esc_html__( 'Enable', 'cryptoairdrop' ),
							'disable'		=> esc_html__( 'Disable', 'cryptoairdrop' ),
						),
					),
				),
			);
		}
	}

	new cryptoairdrop_Customize_Homepage_FAQ();

endif;