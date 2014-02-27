<?php

function faq_init() {
	register_post_type( 'faq', array(
		'hierarchical'      => false,
		'public'            => true,
		'show_in_nav_menus' => false,
		'show_ui'           => true,
		'supports'          => array( 'title', 'editor' ),
		'has_archive'       => false,
		'query_var'         => true,
		'rewrite'           => true,
		'labels'            => array(
			'name'                => __( 'FAQs', 'faq-cpt' ),
			'singular_name'       => __( 'FAQ', 'faq-cpt' ),
			'all_items'           => __( 'FAQs', 'faq-cpt' ),
			'new_item'            => __( 'New FAQ', 'faq-cpt' ),
			'add_new'             => __( 'Add New', 'faq-cpt' ),
			'add_new_item'        => __( 'Add New FAQ', 'faq-cpt' ),
			'edit_item'           => __( 'Edit FAQ', 'faq-cpt' ),
			'view_item'           => __( 'View FAQ', 'faq-cpt' ),
			'search_items'        => __( 'Search FAQs', 'faq-cpt' ),
			'not_found'           => __( 'No FAQs found', 'faq-cpt' ),
			'not_found_in_trash'  => __( 'No FAQs found in trash', 'faq-cpt' ),
			'parent_item_colon'   => __( 'Parent FAQ', 'faq-cpt' ),
			'menu_name'           => __( 'FAQs', 'faq-cpt' ),
		),
	) );

}
add_action( 'init', 'faq_init' );

function faq_updated_messages( $messages ) {
	global $post;

	$permalink = get_permalink( $post );

	$messages['faq'] = array(
		0 => '', // Unused. Messages start at index 1.
		1 => sprintf( __('FAQ updated. <a target="_blank" href="%s">View FAQ</a>', 'faq-cpt'), esc_url( $permalink ) ),
		2 => __('Custom field updated.', 'faq-cpt'),
		3 => __('Custom field deleted.', 'faq-cpt'),
		4 => __('FAQ updated.', 'faq-cpt'),
		/* translators: %s: date and time of the revision */
		5 => isset($_GET['revision']) ? sprintf( __('FAQ restored to revision from %s', 'faq-cpt'), wp_post_revision_title( (int) $_GET['revision'], false ) ) : false,
		6 => sprintf( __('FAQ published. <a href="%s">View FAQ</a>', 'faq-cpt'), esc_url( $permalink ) ),
		7 => __('FAQ saved.', 'faq-cpt'),
		8 => sprintf( __('FAQ submitted. <a target="_blank" href="%s">Preview FAQ</a>', 'faq-cpt'), esc_url( add_query_arg( 'preview', 'true', $permalink ) ) ),
		9 => sprintf( __('FAQ scheduled for: <strong>%1$s</strong>. <a target="_blank" href="%2$s">Preview FAQ</a>', 'faq-cpt'),
		// translators: Publish box date format, see http://php.net/date
		date_i18n( __( 'M j, Y @ G:i' ), strtotime( $post->post_date ) ), esc_url( $permalink ) ),
		10 => sprintf( __('FAQ draft updated. <a target="_blank" href="%s">Preview FAQ</a>', 'faq-cpt'), esc_url( add_query_arg( 'preview', 'true', $permalink ) ) ),
	);

	return $messages;
}
add_filter( 'post_updated_messages', 'faq_updated_messages' );
