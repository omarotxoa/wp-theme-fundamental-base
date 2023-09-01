<?php

function sd_customize_register( $wp_customize ) {
    $wp_customize->add_section( 'footer' , array(
        'title'      => 'Footer',
        'priority'   => 20,
    ) );
    
    $wp_customize->add_setting( 'footer_text' , array(
        'default'     => 'copyright',
        'transport'   => 'postMessage',
    ) );
    
    $wp_customize->add_control( 'footer_text', array(
        'label' => 'Footer Text',
        'section'	=> 'footer',
        'type'	 => 'text',
    ) );
}  
add_action( 'customize_register', 'sd_customize_register' );

?>