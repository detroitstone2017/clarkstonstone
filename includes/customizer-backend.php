<?php
 
// Customizer / WP Methods

add_action('customize_register','sava');
function sava( $wp_customize ) {
    
    // Remove Sections

    $wp_customize->remove_section('colors');
    $wp_customize->remove_section('background_image');
    $wp_customize->remove_section('header_image');


    // Remove Control

    $wp_customize->remove_control('display_header_text');

}

// Remove Customize Pages

add_action('admin_menu', 'remove_customize_pages');
function remove_customize_pages(){
    global $submenu;
    //echo "<pre>";
    //print_r($submenu);
    //echo "</pre>";
    unset($submenu['themes.php'][15]); // remove Header link
    unset($submenu['themes.php'][20]); // remove Background link
}




Kirki::add_config( 'sava', array(
    'capability'    => 'edit_theme_options',
    'option_type'   => 'theme_mod',
    'option_name'   => 'sava',
    'disable_output'    => true ,
) );


/**********************************************
 * Add Panels
 *********************************************/
Kirki::add_panel( 'header_panel_styles', array(
    'priority'    => 10,
    'title'       => __( 'Header', 'sava' ),
    'description' => __( 'Here is the settings for header', 'sava' ),
) );



/**********************************************
 * Add Sections
 *********************************************/

// Logo
Kirki::add_section( 'logo', array(
    'title'          => __( 'Logo', 'sava'),
    'panel'          => 'header_panel_styles', // Not typically needed.
    'priority'       => 160,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
) );

// Header Top Bar Contact Details
Kirki::add_section( 'header_top_bar', array(
    'title'          => __( 'Header Top Bar', 'sava' ),
    'panel'          => 'header_panel_styles', // Not typically needed.
    'priority'       => 160,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
) );

// Header Styles 
Kirki::add_section( 'header', array(
    'title'          => __( 'Header Styles', 'sava' ),
    'panel'          => 'header_panel_styles', // Not typically needed.
    'priority'       => 160,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
) );

// Header Layout 
Kirki::add_section( 'header_section_layout', array(
    'title'          => __( 'Header Layout', 'sava' ),
    'panel'          => 'header_panel_styles', // Not typically needed.
    'priority'       => 160,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
) );

// Header Elements
Kirki::add_section( 'header_elements', array(
    'title'          => __( 'Header Elements', 'sava' ),
    'panel'          => 'header_panel_styles', // Not typically needed.
    'priority'       => 160,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
) );

// Header Stickiness
Kirki::add_section( 'header_stickiness', array(
    'title'          => __( 'Header Stickiness', 'sava' ),
    'panel'          => 'header_panel_styles', // Not typically needed.
    'priority'       => 160,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
) );

// Fonts
Kirki::add_section( 'fonts', array(
    'title'          => esc_attr__( 'Fonts', 'sava' ),
    'priority'       => 50,
    'capability'     => 'edit_theme_options',
) );

// Header Transparency
Kirki::add_section( 'header_transparency', array(
    'title'          => esc_attr__( 'Header Transparency', 'sava' ),
    'priority'       => 10,
    'capability'     => 'edit_theme_options',
    'panel'          => 'header_panel_styles',
) );


// Custom Code Section

Kirki::add_section( 'custom_code', array(
    'title'          => esc_attr__( 'Custom Code', 'sava' ),
    'priority'       => 1,
    'capability'     => 'edit_theme_options',
) );


// Footer
Kirki::add_section( 'footer', array(
    'title'          => esc_attr__( 'Footer', 'sava' ),
    'priority'       => 50,
    'capability'     => 'edit_theme_options',
) );


// Styling
Kirki::add_section( 'layout', array(
    'title'          => __( 'Layout', 'sava'),
    'panel'          => 'header_panel_styles', // Not typically needed.
    'priority'       => 160,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
) );


/**********************************************
 * Add Fields
 *********************************************/

// Logo
Kirki::add_field( '', array(
    'type'        => 'image',
    'setting'     => 'header_logo',
    'label'       => __( 'Site Logo', 'sava' ),
    'section'     => 'logo',
    'priority'    => 10,
    'default'     => get_template_directory_uri() . '/includes/assets/logo.png',
) );

// Header Style
Kirki::add_field( '', array(
    'type'        => 'radio-image',
    'setting'     => 'header_layout',
    'label'       => __( 'Header Style', 'sava' ),
    'section'     => 'header_section_layout',
    'default'     => __( 'This is some default text', 'sava' ),
    'priority'    => 10,
    'default'     => 'style-1',
    'choices'     => array(
        'style-1' => get_template_directory_uri() . '/images/customiser/header_style_1.png',
        'style-2' => get_template_directory_uri() . '/images/customiser/header_style_2.png',
        'style-3' => get_template_directory_uri() . '/images/customiser/header_style_3.png',
     ),
) );



// Header Top Bar Background Color
Kirki::add_field( '', array(
    'type'        => 'color',
    'section'     => 'header_top_bar',
    'panel'       => 'header_panel_styles',
    'setting'     => 'header_top_bar_background_color',
    'label'       => __( 'Header Top Bar Background Color', 'sava' ),
    'priority'    => 10,
    'default'     => '#FFFFFF',

) );


// Header Top Bar Primary Color
Kirki::add_field( '', array(
    'type'        => 'color',
    'section'     => 'header_top_bar',
    'panel'       => 'header_panel_styles',
    'setting'     => 'header_top_bar_primary_color',
    'label'       => __( 'Header Top Bar Text Color', 'sava' ),
    'priority'    => 10,
    'default'     => '#000',

) );



// Header Top Bar Primary Color
Kirki::add_field( '', array(
    'type'        => 'color',
    'section'     => 'header_top_bar',
    'panel'       => 'header_panel_styles',
    'setting'     => 'header_top_bar_accent_color',
    'label'       => __( 'Header Top Bar Accent Color', 'sava' ),
    'priority'    => 10,
    'default'     => '#ff3939',

) );



// Header Top Bar Phone Number
Kirki::add_field( '', array(
    'type'        => 'text',
    'setting'     => 'header_top_bar_phone',
    'label'       => __( 'Header Top Bar Phone', 'sava' ),
    'section'     => 'header_top_bar',
    'priority'    => 10,
    'default'  => esc_attr__( '', 'sava' ),
) );

// Header Top Bar Email
Kirki::add_field( '', array(
    'type'        => 'text',
    'setting'     => 'header_top_bar_email',
    'label'       => __( 'Header Top Bar Email', 'sava' ),
    'section'     => 'header_top_bar',
    'default'  => esc_attr__( '', 'sava' ),
    'priority'    => 10,
) );

// Header Top Bar Widget
Kirki::add_field( '', array(
    'type'        => 'switch',
    'setting'     => 'header_top_bar_widget',
    'label'       => __( 'Header Top Bar Widgetsss', 'sava' ),
    'section'     => 'header_top_bar',
    'default'     => false,
    'priority'    => 10,
) );


// Header Top Social Icons
Kirki::add_field( '', array(
    'type'        => 'checkbox',
    'setting'     => 'header_top_social_media',
    'label'       => __( 'Header Top Social Media', 'sava' ),
    'section'     => 'header_top_bar',
    'default'     => 0,
    'priority'    => 10,

) );



// Header Layout
Kirki::add_field( '', array(
    'type'        => 'radio-image',
    'section'     => 'header_section_layout',
    'setting'     => 'header_size',
    'label'       => __( 'Header Layout', 'sava' ),
    'priority'    => 10,
    'default'     => 'wide',
    'choices'     => array(
        'wide'    => get_template_directory_uri() . '/images/customiser/header_style_1.png',
        'boxed'   => get_template_directory_uri() . '/images/customiser/header_style_1.png',  
    ),
) );

// Header Search Icon
Kirki::add_field( '', array(
    'type'        => 'switch',
    'section'     => 'header_elements',
    'panel'       => 'header',
    'setting'     => 'header_search',
    'label'       => __( 'Enable / Disable Search Icon', 'sava' ),
    'priority'    => 10,
    'default'     => true,

) );

// Header Shopping Cart
Kirki::add_field( '', array(
    'type'        => 'switch',
    'section'     => 'header_elements',
    'panel'       => 'header',
    'setting'     => 'header_cart',
    'label'       => __( 'Enable / Disable Shopping Cart Icon', 'sava' ),
    'priority'    => 10,
    'default'     => false,
) );

// Header Widget Area
Kirki::add_field( '', array(
    'type'        => 'switch',
    'section'     => 'header_elements',
    'panel'       => 'header_panel_styles',
    'setting'     => 'header_widget',
    'label'       => __( 'Header Widget ( Appearance -> Widgets - > Header Widget Area ) ', 'sava' ),
    'priority'    => 10,
    'default'     => true,
) );

// Header Background Color
Kirki::add_field( '', array(
    'type'        => 'color',
    'section'     => 'header',
    'panel'       => 'header_panel_styles',
    'setting'     => 'header_background_color',
    'label'       => __( 'Background Color', 'sava' ),
    'priority'    => 10,
    'default'     => '#FFFFFF',

) );

// Header Primary Color
Kirki::add_field( '', array(
    'type'        => 'color',
    'section'     => 'header',
    'panel'       => 'header_panel_styles',
    'setting'     => 'header_primary_color',
    'label'       => __( 'Text Color', 'sava' ),
    'priority'    => 10,
    'default'     => '#067B82',

) );

// Header Accent Color
Kirki::add_field( '', array(
    'type'        => 'color',
    'section'     => 'header',
    'panel'       => 'header_panel_styles',
    'setting'     => 'header_accent_color',
    'label'       => __( 'Accent Color', 'sava' ),
    'priority'    => 10,
    'default'     => '#169099',   
) );


// Header Height
Kirki::add_field( '', array(
    'type'        => 'slider',
    'section'     => 'header',
    'panel'       => 'header_panel_styles',
    'setting'     => 'header_height',
    'label'       => __( 'Header Height', 'sava' ),
    'priority'    => 10,
    'default'     => '100',
    'choices'     => array(
        'min'  => '0',
        'max'  => '250',
        'step' => 1,
    ),

) );


// Header Stickiness
Kirki::add_field( '', array(
    'type'        => 'switch',
    'section'     => 'header_stickiness',
    'panel'       => 'header_panel_styles',
    'setting'     => 'header_sticky',
    'label'       => __( 'Enable / Disable Sticky Header', 'sava' ),
    'priority'    => 10,
    'default'     => true,
   
) );

// Header Font Size
Kirki::add_field( '', array(
    'type'        => 'slider',
    'section'     => 'header',
    'panel'       => 'header_panel_styles',
    'setting'     => 'header_font_size',
    'label'       => __( 'Header Font Size', 'sava' ),
    'priority'    => 10,
    'default'     => '14',
    'choices'     => array(
        'min'  => '10',
        'max'  => '32',
        'step' => 1,
    ),

) );

// Header Sticky Background Color
Kirki::add_field( '', array(
    'type'        => 'color',
    'section'     => 'header_stickiness',
    'panel'       => 'header_panel_styles',
    'setting'     => 'header_sticky_background_color',
    'label'       => __( 'Header Sticky Background Color', 'sava' ),
    'priority'    => 10,
    'default'     => '#085477',

) );

// Header Sticky Primary Color
Kirki::add_field( '', array(
    'type'        => 'color',
    'section'     => 'header_stickiness',
    'panel'       => 'header_panel_styles',
    'setting'     => 'header_sticky_primary_color',
    'label'       => __( 'Header Sticky Primary Color', 'sava' ),
    'priority'    => 10,
    'default'     => '#FFFFFF',

) );

// Header Sticky Accent Color
Kirki::add_field( '', array(
    'type'        => 'color',
    'section'     => 'header_stickiness',
    'panel'       => 'header_panel_styles',
    'setting'     => 'header_sticky_accent_color',
    'label'       => __( 'Header Sticky Accent Color', 'sava' ),
    'priority'    => 10,
    'default'     => '#169099',

) );

// Header Sticky Height
Kirki::add_field( '', array(
    'type'        => 'slider',
    'section'     => 'header_stickiness',
    'panel'       => 'header_panel_styles',
    'setting'     => 'header_sticky_height',
    'label'       => __( 'Header Sticky Height', 'sava' ),
    'priority'    => 10,
    'default'     => '65',
    'choices'     => array(
        'min'  => '0',
        'max'  => '250',
        'step' => 1,
    ),

) );

// Header Transparency
Kirki::add_field( '', array(
    'type'        => 'switch',
    'settings'    => 'header_transparent',
    'label'       => esc_attr__( 'Transparent Header', 'sava' ),
    'description' => __( 'Global Option', 'sava' ),
    'help'        => __( 'This option here will be inherited by all pages that do not have a different setting applied individually for the header.', 'sava' ),
    'section'     => 'header_transparency',
    'default'     => false,
    'priority'    => 10,
) );


Kirki::add_field( '', array(
    'type'        => 'radio-buttonset',
    'settings'    => 'header_transparent_scheme',
    'label'       => esc_attr__( 'Default Color Scheme', 'sava' ),
    'description' => __( 'for the Transparent Header', 'sava' ),     
    'help'        => __( 'The transparent header comes with two different color schemes: Light and Dark. For both you can choose to have a different color for the header content (navigation, icons, etc) and even a different logo. The option here sets the one you want to use as the default. The other can be set as an exception to be used by some pages only.', 'sava' ),
    'section'     => 'header_transparency',
    'default'     => 'dark',
    'priority'    => 10,
    'choices'     => array(
        'light'   => esc_attr__( 'Light', 'sava' ),
        'dark'    => esc_attr__( 'Dark', 'sava' ),
    ),
) );


Kirki::add_field( '', array(
    'type'        => 'color',
    'settings'    => 'header_transparent_light_color',
    'label'       => esc_attr__( 'Light Scheme: Color', 'sava' ),
    'help'        => __( 'If the page you are working on has a dark background, using a dark color for the menu items would make it unreadable and that is where the Light color scheme comes in. (E.g.: White text on a Black background.)' , 'sava' ),
    'section'     => 'header_transparency',
    'default'     => '#fff',
    'priority'    => 10,
) );

Kirki::add_field( '', array(
    'type'        => 'image',
    'settings'    => 'header_transparent_light_logo',
    'label'       => __( 'Light Scheme: Alternative Logo', 'sava' ),
    'section'     => 'header_transparency',
    'default'     => '',
    'priority'    => 10,
) );

Kirki::add_field( '', array(
    'type'        => 'color',
    'settings'    => 'header_transparent_dark_color',
    'label'       => esc_attr__( 'Dark Scheme: Color', 'sava' ),
    'help'        => __( 'If the page you are working on has a light backgeround, using a light color for the menu items as well would make it unreadable and that is where the Dark color scheme comes in. (E.g.: Black text on a White background.)' , 'sava' ),
    'section'     => 'header_transparency',
    'default'     => '#000',
    'priority'    => 10,
) );

Kirki::add_field( '', array(
    'type'        => 'image',
    'settings'    => 'header_transparent_dark_logo',
    'label'       => __( 'Dark Scheme: Alternative Logo', 'sava' ),
    'section'     => 'header_transparency',
    'default'     => '',
    'priority'    => 10,
) );


// Styling


Kirki::add_section( 'styling', array(
    'title'          => esc_attr__( 'Styling', 'getbowtied' ),
    'priority'       => 50,
    'capability'     => 'edit_theme_options',
) );


    Kirki::add_field( '', array(
        'type'        => 'color',
        'settings'    => 'bg_color',
        'label'       => esc_attr__( 'Global Page Background Color', 'getbowtied' ),
        'section'     => 'styling',
        'default'     => '#f2f2f2',
        'priority'    => 10,
    ) );


    Kirki::add_field( '', array(
        'type'        => 'color',
        'settings'    => 'accent_color',
        'label'       => esc_attr__( 'Accent Color', 'getbowtied' ),
        'section'     => 'styling',
        'default'     => '#ff3939',
        'priority'    => 10,
    ) );


    Kirki::add_field( '', array(
        'type'        => 'color',
        'settings'    => 'primary_color',
        'label'       => esc_attr__( 'Base Font Color', 'getbowtied' ),
        'section'     => 'styling',
        'default'     => '#000',
        'priority'    => 10,
    ) );


    Kirki::add_field( '', array(
        'type'        => 'radio-image',
        'settings'    => 'body_layout',
        'label'       => esc_attr__( 'Layout', 'getbowtied' ),
        'section'     => 'styling',
        'default'     => 'boxed',
        'priority'    => 10,
        'choices'     => array(
            'full_width'    => get_template_directory_uri() . '/images/customiser/body_full_width.png',
            'boxed'         => get_template_directory_uri() . '/images/customiser/body_boxed.png',
        ),
    ) );


// Fonts

Kirki::add_field( '', array(
    'type'        => 'slider',
    'settings'    => 'font_size',
    'label'       => __( 'Base Font Size', 'sava' ),
    'help'        => esc_attr__( 'The Base Font Size refers to the size applied to the paragraph text. All other elements, such as headings, links, buttons, etc will adjusted automatically to keep the hierarchy of font sizes based on this one size. Easy-peasy!', 'sava' ),
    'section'     => 'fonts',
    'default'     => 14,
    'priority'    => 10,
    'choices'     => array(
        'min'  => 8,
        'max'  => 32,
        'step' => 1
    ),
) );


Kirki::add_field( '', array(
    'type'        => 'radio-buttonset',
    'settings'    => 'default_theme_fonts',
    'label'       => esc_attr__( 'Font Source', 'sava' ),
    'section'     => 'fonts',
    'default'     => 'default_fonts',
    'priority'    => 10,
    'choices'     => array(
        'default_fonts' => esc_attr__( 'Theme Defaults', 'sava' ),
        'google_fonts'  => esc_attr__( 'Google Webfonts', 'sava' ),
    ),
) );


Kirki::add_field( '', array(
    'type'     => 'select',
    'settings' => 'main_font',
    'label'    => esc_attr__( 'Main Font', 'sava' ),
    'description' => __( 'Used for titles and Headings.', 'sava' ),
    'section'  => 'fonts',
    'priority' => 10,
    'choices'  => Kirki_Fonts::get_font_choices(),
    'default'     => 'serif',
    'active_callback'    => array(
        array(
            'setting'  => 'default_theme_fonts',
            'operator' => '==',
            'value'    => 'google_fonts',     
        ),
    ),
) );

Kirki::add_field( '', array(
    'type'        => 'multicheck',
    'settings'    => 'main_font_variants',
    'label'    => esc_attr__( 'Main Font Variants', 'sava' ),
    'section'     => 'fonts',
    'priority'    => 10,
    'choices'     => Kirki_Fonts::get_all_variants(),
    'default'     => array('regular', '700'),
    'active_callback'    => array(
        array(
            'setting'  => 'default_theme_fonts',
            'operator' => '==',
            'value'    => 'google_fonts',           
        ),
    ),
) );


Kirki::add_field( '', array(
    'type'     => 'select',
    'settings' => 'secondary_font',
    'label'    => esc_attr__( 'Secondary Font', 'sava' ),
    'description' => __( 'Used for body / paragraph text.', 'sava' ),
    'section'  => 'fonts',
    'priority' => 10,
    'choices'  => Kirki_Fonts::get_font_choices(),
    'default'     => 'serif',
    'active_callback'    => array(
        array(
            'setting'  => 'default_theme_fonts',
            'operator' => '==',
            'value'    => 'google_fonts',           
        ),
    ),
) );

Kirki::add_field( '', array(
    'type'        => 'multicheck',
    'settings'    => 'secondary_font_variants',
    'label'    => esc_attr__( 'Secondary Font Variants', 'sava' ),
    'section'     => 'fonts',
    'priority'    => 10,
    'choices'     => Kirki_Fonts::get_all_variants(),
    'default'     => array('regular', '700'),
    'active_callback'    => array(
        array(
            'setting'  => 'default_theme_fonts',
            'operator' => '==',
            'value'    => 'google_fonts',           
        ),
    ),
) );


Kirki::add_field( '', array(
    'type'        => 'toggle',
    'settings'    => 'use_main_font_subsets',
    'label'       => __( 'Include Subsets', 'sava' ),
    'section'     => 'fonts',
    'default'     => '0',
    'priority'    => 10,
    'active_callback'    => array(
        array(
            'setting'  => 'default_theme_fonts',
            'operator' => '==',
            'value'    => 'google_fonts',
        ),
    ),
) );

Kirki::add_field( '', array(
    'type'        => 'multicheck',
    'settings'    => 'google_fonts_subsets',
    'label'       => __( 'Font Subsets', 'sava' ),
    'section'     => 'fonts',
    'priority'    => 10,
    'choices'     => Kirki_Fonts::get_google_font_subsets(),
    'active_callback'    => array(
        array(
            'setting'  => 'use_main_font_subsets',
            'operator' => '==',
            'value'    => 1,           
        ),
    ),
) );


// Social Media


Kirki::add_field( '', array(
    'type'        => 'text',
    'settings'    => 'facebook_link',
    'label'       => esc_attr__( 'Facebook', 'sava' ),
    'section'     => 'header_top_bar',
    'default'     => '',
    'priority'    => 10,

    'active_callback'    => array(
            array(
                'setting'  => 'header_top_social_media',
                'operator' => '==',
                'value'    => 1,           
            ),
    ),
) );

Kirki::add_field( '', array(
    'type'        => 'text',
    'settings'    => 'twitter_link',
    'label'       => esc_attr__( 'Twitter', 'sava' ),
    'section'     => 'header_top_bar',
    'default'     => '',
    'priority'    => 10,
    'active_callback'    => array(
            array(
                'setting'  => 'header_top_social_media',
                'operator' => '==',
                'value'    => 1,           
            ),
    ),
) );

Kirki::add_field( '', array(
    'type'        => 'text',
    'settings'    => 'pinterest_link',
    'label'       => esc_attr__( 'Pinterest', 'sava' ),
    'section'     => 'header_top_bar',
    'default'     => '',
    'priority'    => 10,
    'active_callback'    => array(
            array(
                'setting'  => 'header_top_social_media',
                'operator' => '==',
                'value'    => 1,        
            ),
    ),
) );

Kirki::add_field( '', array(
    'type'        => 'text',
    'settings'    => 'linkedin_link',
    'label'       => esc_attr__( 'LinkedIn', 'sava' ),
    'section'     => 'header_top_bar',
    'default'     => '',
    'priority'    => 10,
    'active_callback'    => array(
            array(
                'setting'  => 'header_top_social_media',
                'operator' => '==',
                'value'    => 1,          
            ),
    ),
) );

Kirki::add_field( '', array(
    'type'        => 'text',
    'settings'    => 'googleplus_link',
    'label'       => esc_attr__( 'Google+', 'sava' ),
    'section'     => 'header_top_bar',
    'default'     => '',
    'priority'    => 10,
    'active_callback'    => array(
            array(
                'setting'  => 'header_top_social_media',
                'operator' => '==',
                'value'    => 1,          
            ),
    ),
) );

Kirki::add_field( '', array(
    'type'        => 'text',
    'settings'    => 'rss_link',
    'label'       => esc_attr__( 'RSS', 'sava' ),
    'section'     => 'header_top_bar',
    'default'     => '',
    'priority'    => 10,
    'active_callback'    => array(
            array(
                'setting'  => 'header_top_social_media',
                'operator' => '==',
                'value'    => 1,           
            ),
    ),
) );

Kirki::add_field( '', array(
    'type'        => 'text',
    'settings'    => 'tumblr_link',
    'label'       => esc_attr__( 'Tumblr', 'sava' ),
    'section'     => 'header_top_bar',
    'default'     => '',
    'priority'    => 10,
    'active_callback'    => array(
            array(
                'setting'  => 'header_top_social_media',
                'operator' => '==',
                'value'    => 1,          
            ),
    ),
) );

Kirki::add_field( '', array(
    'type'        => 'text',
    'settings'    => 'instagram_link',
    'label'       => esc_attr__( 'Instagram', 'sava' ),
    'section'     => 'header_top_bar',
    'default'     => '',
    'priority'    => 10,
    'active_callback'    => array(
            array(
                'setting'  => 'header_top_social_media',
                'operator' => '==',
                'value'    => 1,            
            ),
    ),
) );

Kirki::add_field( '', array(
    'type'        => 'text',
    'settings'    => 'youtube_link',
    'label'       => esc_attr__( 'Youtube', 'sava' ),
    'section'     => 'header_top_bar',
    'default'     => '',
    'priority'    => 10,
    'active_callback'    => array(
            array(
                'setting'  => 'header_top_social_media',
                'operator' => '==',
                'value'    => 1,           
            ),
    ),
) );

Kirki::add_field( '', array(
    'type'        => 'text',
    'settings'    => 'vimeo_link',
    'label'       => esc_attr__( 'Vimeo', 'sava' ),
    'section'     => 'header_top_bar',
    'default'     => '',
    'priority'    => 10,
    'active_callback'    => array(
            array(
                'setting'  => 'header_top_social_media',
                'operator' => '==',
                'value'    => 1,            
            ),
    ),
) );

Kirki::add_field( '', array(
    'type'        => 'text',
    'settings'    => 'behance_link',
    'label'       => esc_attr__( 'Behance', 'sava' ),
    'section'     => 'header_top_bar',
    'default'     => '',
    'priority'    => 10,
    'active_callback'    => array(
            array(
                'setting'  => 'header_top_social_media',
                'operator' => '==',
                'value'    => 1,           
            ),
    ),
) );

Kirki::add_field( '', array(
    'type'        => 'text',
    'settings'    => 'dribbble_link',
    'label'       => esc_attr__( 'Dribbble', 'sava' ),
    'section'     => 'header_top_bar',
    'default'     => '',
    'priority'    => 10,
    'active_callback'    => array(
            array(
                'setting'  => 'header_top_social_media',
                'operator' => '==',
                'value'    => 1,           
            ),
    ),
) );

Kirki::add_field( '', array(
    'type'        => 'text',
    'settings'    => 'flickr_link',
    'label'       => esc_attr__( 'Flickr', 'sava' ),
    'section'     => 'header_top_bar',
    'default'     => '',
    'priority'    => 10,
    'active_callback'    => array(
            array(
                'setting'  => 'header_top_social_media',
                'operator' => '==',
                'value'    => 1,            
            ),
    ),
) );

Kirki::add_field( '', array(
    'type'        => 'text',
    'settings'    => 'git_link',
    'label'       => esc_attr__( 'Git', 'sava' ),
    'section'     => 'header_top_bar',
    'default'     => '',
    'priority'    => 10,
    'active_callback'    => array(
            array(
                'setting'  => 'header_top_social_media',
                'operator' => '==',
                'value'    => 1,            
            ),
    ),
) );

Kirki::add_field( '', array(
    'type'        => 'text',
    'settings'    => 'skype_link',
    'label'       => esc_attr__( 'Skype', 'sava' ),
    'section'     => 'header_top_bar',
    'default'     => '',
    'priority'    => 10,
    'active_callback'    => array(
            array(
                'setting'  => 'header_top_social_media',
                'operator' => '==',
                'value'    => 1,           
            ),
    ),
) );

Kirki::add_field( '', array(
    'type'        => 'text',
    'settings'    => 'weibo_link',
    'label'       => esc_attr__( 'Weibo', 'sava' ),
    'section'     => 'header_top_bar',
    'default'     => '',
    'priority'    => 10,
    'active_callback'    => array(
            array(
                'setting'  => 'header_top_social_media',
                'operator' => '==',
                'value'    => 1,           
            ),
    ),
) );

Kirki::add_field( '', array(
    'type'        => 'text',
    'settings'    => 'foursquare_link',
    'label'       => esc_attr__( 'Foursquare', 'sava' ),
    'section'     => 'header_top_bar',
    'default'     => '',
    'priority'    => 10,
    'active_callback'    => array(
            array(
                'setting'  => 'header_top_social_media',
                'operator' => '==',
                'value'    => 1,            
            ),
    ),
) );

Kirki::add_field( '', array(
    'type'        => 'text',
    'settings'    => 'soundcloud_link',
    'label'       => esc_attr__( 'Soundcloud', 'sava' ),
    'section'     => 'header_top_bar',
    'default'     => '',
    'priority'    => 10,
    'active_callback'    => array(
            array(
                'setting'  => 'header_top_social_media',
                'operator' => '==',
                'value'    => 1,           
            ),
    ),
) );



// Custom Code

Kirki::add_field( '', array(
    'type'        => 'code',
    'settings'    => 'custom_css',
    'label'       => esc_attr__( 'Custom CSS', 'sava' ),
    'section'     => 'custom_code',
    'default'     => '',
    'priority'    => 10,
    'choices'     => array(
        'language' => 'css',
        'theme'    => 'monokai',
        'height'   => 150,
    ),
) );

Kirki::add_field( '', array(
    'type'        => 'code',
    'settings'    => 'header_js',
    'label'       => esc_attr__( 'Header JavaScript Code', 'sava' ),
    'section'     => 'custom_code',
    'description' => 'Tracking code (e.g. Google analytics) or arbitrary JavaScript ',
    'default'     => '',
    'priority'    => 10,
    'choices'     => array(
        'language' => 'javascript',
        'theme'    => 'monokai',
        'height'   => 150,
    ),
) );

Kirki::add_field( '', array(
    'type'        => 'code',
    'settings'    => 'footer_js',
    'label'       => esc_attr__( 'Footer JavaScript Code', 'sava' ),
    'section'     => 'custom_code',
    'default'     => '',
    'priority'    => 10,
    'choices'     => array(
        'language' => 'javascript',
        'theme'    => 'monokai',
        'height'   => 150,
    ),
) );



// footer
  Kirki::add_field( '', array(
        'type'        => 'radio-image',
        'settings'    => 'footer_layout',
        'label'       => esc_attr__( 'Footer Layout', 'sava' ),
        'section'     => 'footer',
        'default'     => 'style-1',
        'priority'    => 10,
        'choices'     => array(
            'style-1' => get_template_directory_uri() . '/images/customiser/footer_style_1.png',
            'style-2' => get_template_directory_uri() . '/images/customiser/footer_style_2.png',
            'style-3' => get_template_directory_uri() . '/images/customiser/footer_style_3.png',
        ),
    ) );

    Kirki::add_field( '', array(
        'type'        => 'color',
        'settings'    => 'footer_background_color',
        'label'       => esc_attr__( 'Background Color', 'sava' ),
        'section'     => 'footer',
        'default'     => '#085477',
        'priority'    => 10,
    ) );


    Kirki::add_field( '', array(
        'type'        => 'color',
        'settings'    => 'footer_font_color',
        'label'       => esc_attr__( 'Text Color', 'sava' ),
        'section'     => 'footer',
        'default'     => '#067B82',
        'priority'    => 10,
    ) );

    Kirki::add_field( '', array(
        'type'        => 'color',
        'settings'    => 'footer_links_color',
        'label'       => esc_attr__( 'Links Color', 'sava' ),
        'section'     => 'footer',
        'default'     => '#FFF',
        'priority'    => 10,
    ) );


    Kirki::add_field( '', array(
        'type'        => 'color',
        'settings'    => 'footer_accent_color',
        'label'       => esc_attr__( 'Accent Color', 'sava' ),
        'section'     => 'footer',
        'default'     => '#169099',
        'priority'    => 10,
    ) );


    Kirki::add_field( '', array(
        'type'     => 'textarea',
        'settings' => 'footer_text',
        'label'    => __( 'Footer Text', 'sava' ),
        'section'  => 'footer',
        'default'  => __( '© 2016 sava Wordpress Theme by <a href="https://www.adriansava.ro" target="_blank">Adrian Sava</a>.', 'sava' ),
        'priority' => 10,
    ) );


       Kirki::add_field( '', array(
        'type'        => 'slider',
        'settings'    => 'footer_font_size',
        'label'       => esc_attr__( 'Font Size', 'sava' ),
        'section'     => 'footer',
        'priority'    => 10,
        'default'     => '14',
        'choices'     => array(
            'min'  => '10',
            'max'  => '32',
            'step' => 1,
        ),
    ) );



 
?>