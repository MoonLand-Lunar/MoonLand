<?php
    /**
     * Footer copyright
     */
    $wp_customize->add_setting(
        'cryptoairdrop_footer_copyright_text', array(
        'sanitize_callback'    =>  'wp_kses_post',
        'default'            => __('Copyright &copy; 2021 | Powered by <a href="//wordpress.org/">WordPress</a> <span class="sep"> | </span> Crypto AirDrop theme by <a target="_blank" href="//wpfrank.com/">WP Frank</a>', 'crypto-airdrop'),
        //'transport'            => $selective_refresh,
        )
    );
    
    $wp_customize->add_control(
        'cryptoairdrop_footer_copyright_text', array(
            'label'        => esc_html__('Footer Copyright', 'crypto-airdrop'),
            'section'    => 'cryptoairdrop_footer_copyright',
            'priority'    => 10,
            'type'        =>  'textarea'
        )
    );
