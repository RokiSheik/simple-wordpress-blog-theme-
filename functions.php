<?php
/**
 * EasyPlate Theme Functions
 */

function easyplate_setup() {
    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );

    // Let WordPress manage the document title.
    add_theme_support( 'title-tag' );

    // Enable support for Post Thumbnails on posts and pages.
    add_theme_support( 'post-thumbnails' );

    // This theme uses wp_nav_menu() in one location.
    register_nav_menus( array(
        'primary' => esc_html__( 'Primary Menu', 'easyplate' ),
    ) );

    // Switch default core markup for search form, comment form, and comments to output valid HTML5.
    add_theme_support( 'html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ) );
}
add_action( 'after_setup_theme', 'easyplate_setup' );

/**
 * Enqueue scripts and styles.
 */
function easyplate_scripts() {
    wp_enqueue_style( 'easyplate-style', get_stylesheet_uri() );
    wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap' );
}
add_action( 'wp_enqueue_scripts', 'easyplate_scripts' );

/**
 * Customizer Settings for Header and Footer
 */
function easyplate_customize_register( $wp_customize ) {
    
    // Header Section
    $wp_customize->add_section( 'easyplate_header_section', array(
        'title'    => __( 'Header Settings', 'easyplate' ),
        'priority' => 30,
    ) );

    // Logo Text/Custom Field
    $wp_customize->add_setting( 'easyplate_logo_text', array(
        'default'   => 'EasyPlate',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( 'easyplate_logo_text', array(
        'label'    => __( 'Logo Text', 'easyplate' ),
        'section'  => 'easyplate_header_section',
        'type'     => 'text',
    ) );

    // Navbar Items (Simple approach: 4 fields for items/urls)
    for ( $i = 1; $i <= 4; $i++ ) {
        // Label
        $wp_customize->add_setting( "easyplate_nav_item_{$i}_label", array( 'default' => '' ) );
        $wp_customize->add_control( "easyplate_nav_item_{$i}_label", array(
            'label'   => __( "Nav Item {$i} Label", 'easyplate' ),
            'section' => 'easyplate_header_section',
            'type'    => 'text',
        ) );
        // URL
        $wp_customize->add_setting( "easyplate_nav_item_{$i}_url", array( 'default' => '#' ) );
        $wp_customize->add_control( "easyplate_nav_item_{$i}_url", array(
            'label'   => __( "Nav Item {$i} URL", 'easyplate' ),
            'section' => 'easyplate_header_section',
            'type'    => 'text',
        ) );
    }

    // Footer Section
    $wp_customize->add_section( 'easyplate_footer_section', array(
        'title'    => __( 'Footer Settings', 'easyplate' ),
        'priority' => 31,
    ) );

    // Footer Description
    $wp_customize->add_setting( 'easyplate_footer_desc', array(
        'default' => 'An intelligent recipe platform powered by AI that takes the guesswork out of meal prep.',
    ) );
    $wp_customize->add_control( 'easyplate_footer_desc', array(
        'label'    => __( 'Footer Description', 'easyplate' ),
        'section'  => 'easyplate_footer_section',
        'type'     => 'textarea',
    ) );

    // Footer Links (Column 1)
    for ( $i = 1; $i <= 3; $i++ ) {
        $wp_customize->add_setting( "easyplate_footer_link_{$i}_label", array( 'default' => '' ) );
        $wp_customize->add_control( "easyplate_footer_link_{$i}_label", array(
            'label'   => __( "Footer Link {$i} Label", 'easyplate' ),
            'section' => 'easyplate_footer_section',
            'type'    => 'text',
        ) );
        $wp_customize->add_setting( "easyplate_footer_link_{$i}_url", array( 'default' => '#' ) );
        $wp_customize->add_control( "easyplate_footer_link_{$i}_url", array(
            'label'   => __( "Footer Link {$i} URL", 'easyplate' ),
            'section' => 'easyplate_footer_section',
            'type'    => 'text',
        ) );
    }
}
add_action( 'customize_register', 'easyplate_customize_register' );
