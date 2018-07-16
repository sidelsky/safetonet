<?php
    /**
     * Register menus
     */
    function register_menus()
    {
		register_nav_menus([
            'primary-navigation' => __('Primary Navigation'),
            'secondary-navigation' => __('Secondary Navigation'),
            'tertiary-navigation' => __('Tertiary Navigation'),
            'quaternary-navigation' => __('Quaternary Navigation')
        ]);
	}
	add_action('init', 'register_menus');