<?php 
/**
 * Widgets
 */

function footer_widget_init() {

    register_sidebar( [
        'name' => 'Footer 1',
        'id' => 'footer_1',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="c-site-headings--h4">',
        'after_title' => '</h4>',
    ] );

    register_sidebar( [
        'name' => 'Footer 2',
        'id' => 'footer_2',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="c-site-headings--h4">',
        'after_title' => '</h4>',
    ] );

    register_sidebar( [
        'name' => 'Footer 3',
        'id' => 'footer_3',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="c-site-headings--h4">',
        'after_title' => '</h4>',
    ] );

    register_sidebar( [
        'name' => 'Footer 4',
        'id' => 'footer_4',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="c-site-headings--h4">',
        'after_title' => '</h4>',
    ] );
}
add_action( 'widgets_init', 'footer_widget_init' );