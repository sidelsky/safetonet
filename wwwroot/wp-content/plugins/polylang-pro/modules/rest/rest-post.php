<?php

/**
 * Expose terms language and translations in the REST API
 *
 * @since 2.2
 */
class PLL_REST_Post extends PLL_REST_Translated_Object {

	/**
	 * Constructor
	 *
	 * @since 2.2
	 *
	 * @param object $model         Instance of PLL_Model
	 * @param array  $content_types Array of arrays with post types as keys and options as values
	 */
	public function __construct( &$model, $content_types ) {
		parent::__construct( $model, $content_types );

		$this->type = 'post';
		$this->id   = 'ID';

		foreach ( array_keys( $content_types ) as $post_type ) {
			add_filter( "rest_prepare_{$post_type}", array( $this, 'prepare_response' ), 10, 3 );
		}
	}

	/**
	 * Allows to share the post slug across languages
	 * Modifies the REST response accordingly
	 *
	 * @since 2.3
	 *
	 * @param object $response The response object.
	 * @param object $post     Post object.
	 * @param object $request  Request object.
	 */
	public function prepare_response( $response, $post, $request ) {
		global $wpdb;
		$data = $response->get_data();

		if ( ! empty( $data['slug'] ) && in_array( $request->get_method(), array( 'POST', 'PUT' ) ) ) {
			$params = $request->get_params();

			$requested_slug = empty( $params['slug'] ) ? sanitize_title( $post->post_title ) : $params['slug'];

			if ( $post->post_name !== $requested_slug ) {
				$slug = wp_unique_post_slug( $requested_slug, $post->ID, $post->post_status, $post->post_type, $post->post_parent );
				if ( $slug !== $data['slug'] && $wpdb->update( $wpdb->posts, array( 'post_name' => $slug ), array( 'ID' => $post->ID ) ) ) {
					$data['slug'] = $slug;
					$response->set_data( $data );
				}
			}
		}
		return $response;
	}
}
