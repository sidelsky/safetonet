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
            'quaternary-navigation' => __('Quaternary Navigation'),
            'quinary-navigation' => __('Quinary Navigation'),
            'senary-navigation' => __('Senary Navigation'),
            'septenary-navigation' => __('Septenary Navigation'),
            'octonary-navigation' => __('Octonary Navigation'),
            'nonary-navigation' => __('Nonary Navigation'),
            'denary-navigation' => __('Denary Navigation'),
            'footer_1' => __('Footer 1'),
            'footer_2' => __('Footer 2'),
            'footer_3' => __('Footer 3'),
            'footer_4' => __('Footer 4'),
        ]);
	}
	add_action('init', 'register_menus');