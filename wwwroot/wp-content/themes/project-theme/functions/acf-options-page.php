<?php
/**
 * ACF Options page
 */

if ( function_exists( 'acf_add_options_page' ) ) {
  
    // Main Theme Settings Page
    $parent = acf_add_options_page([
        'page_title' => 'Theme General Options',
        'menu_title' => 'Theme Options',
        'redirect'   => 'Theme Options',
    ]);

    // 
    // Global Options
    // Same options on all languages. e.g., social profiles links
    // 
    acf_add_options_sub_page([

        'page_title'    => 'Global Site Options',
        'menu_title' => __('Global Site Options', 'text-domain'),
        'menu_slug'     => 'theme-general-settings',
        'icon_url'      => 'dashicons-welcome-view-site',
        'capability'    => 'edit_posts',
        'redirect'      => false,
        'parent'     => $parent['menu_slug']
    ]);

    // 
    // Language Specific Options
    // Translatable options specific languages.
    // 
    
    $languages = [
        'en', 
        'es', 
        'de' 
    ];

    foreach ( $languages as $lang ) {
      acf_add_options_sub_page([
        'page_title' => 'Options (' . strtoupper( $lang ) . ')',
        'menu_title' => __('Options (' . strtoupper( $lang ) . ')', 'text-domain'),
        'menu_slug'  => "options-${lang}",
        'post_id'    => $lang,
        'parent'     => $parent['menu_slug']
      ]);
    }
  }
