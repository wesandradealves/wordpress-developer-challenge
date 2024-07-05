<?php

if (function_exists("acf_add_options_page")) {
    acf_add_options_page(array(
        'menu_slug' => 'theme-settings',
        'page_title' => 'Theme Settings',
        'active' => true,
        'menu_title' => 'Theme Settings',
        'capability' => 'edit_posts',
        'parent_slug' => '',
        'position' => -1,
        'icon_url' => 'dashicons-admin-generic',
        'redirect' => true,
        'post_id' => 'options',
        'autoload' => false,
        'update_button' => 'Update',
        'updated_message' => 'Options Updated',
    ));
}

add_action( 'acf/include_fields', function() {
	if ( ! function_exists( 'acf_add_local_field_group' ) ) {
		return;
	}

	acf_add_local_field_group( array(
	'key' => 'group_668799684ba1d',
	'title' => 'Películas',
	'fields' => array(
		array(
			'key' => 'field_66879968fe124',
			'label' => 'Tempo de duração',
			'name' => 'bx_play_video_duration',
			'aria-label' => '',
			'type' => 'number',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'acfe_save_meta' => 0,
			'default_value' => '',
			'acfe_settings' => array(
				'66879cb290256' => array(
					'acfe_settings_location' => '',
					'acfe_settings_settings' => '',
				),
			),
			'acfe_validate' => array(
				'66879cb490257' => array(
					'acfe_validate_location' => '',
					'acfe_validate_rules_and' => '',
					'acfe_validate_error' => '',
				),
			),
			'min' => 1,
			'max' => '',
			'acfe_permissions' => '',
			'placeholder' => '',
			'step' => '',
			'prepend' => '',
			'append' => '',
			'show_column' => 1,
			'show_column_sortable' => 1,
			'show_column_weight' => 1000,
			'allow_quickedit' => 0,
			'allow_bulkedit' => 0,
		),
		array(
			'key' => 'field_66879984fe125',
			'label' => 'Embed',
			'name' => 'bx_play_video_ID',
			'aria-label' => '',
			'type' => 'url',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'acfe_save_meta' => 0,
			'default_value' => '',
			'placeholder' => '',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'pelicula',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'acf_after_title',
	'style' => 'seamless',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
	'show_in_rest' => 0,
	'acfe_display_title' => '',
	'acfe_autosync' => '',
	'acfe_permissions' => '',
	'acfe_form' => 1,
	'acfe_meta' => array(
		'668799d5fe127' => array(
			'acfe_meta_key' => 'bx_play_like_count',
			'acfe_meta_value' => '0',
		),
	),
	'acfe_note' => '',
) );

	acf_add_local_field_group( array(
	'key' => 'group_6687903eb8dd2',
	'title' => 'Theme Settings',
	'fields' => array(
		array(
			'key' => 'field_668790443acce',
			'label' => 'Settings',
			'name' => 'settings',
			'aria-label' => '',
			'type' => 'group',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'acfe_save_meta' => 0,
			'layout' => 'block',
			'acfe_seamless_style' => 0,
			'acfe_group_modal' => 0,
			'sub_fields' => array(
				array(
					'key' => 'field_668790683accf',
					'label' => 'Logo',
					'name' => 'logo',
					'aria-label' => '',
					'type' => 'image',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'acfe_save_meta' => 0,
					'uploader' => '',
					'return_format' => 'url',
					'acfe_thumbnail' => 0,
					'min_width' => '',
					'min_height' => '',
					'min_size' => '',
					'max_width' => '',
					'max_height' => '',
					'max_size' => '',
					'mime_types' => '',
					'preview_size' => 'medium',
					'library' => 'all',
				),
			),
			'acfe_group_modal_close' => 0,
			'acfe_group_modal_button' => '',
			'acfe_group_modal_size' => 'large',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'options_page',
				'operator' => '==',
				'value' => 'theme-settings',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'left',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
	'show_in_rest' => 0,
	'acfe_display_title' => '',
	'acfe_autosync' => '',
	'acfe_form' => 0,
	'acfe_meta' => '',
	'acfe_note' => '',
) );
} );

add_action( 'init', function() {
	register_post_type( 'pelicula', array(
	'labels' => array(
		'name' => 'Películas',
		'singular_name' => 'Pelicula',
		'menu_name' => 'Películas',
		'all_items' => 'All Películas',
		'edit_item' => 'Edit Pelicula',
		'view_item' => 'View Pelicula',
		'view_items' => 'View Películas',
		'add_new_item' => 'Add New Pelicula',
		'new_item' => 'New Pelicula',
		'parent_item_colon' => 'Parent Pelicula:',
		'search_items' => 'Search Películas',
		'not_found' => 'No películas found',
		'not_found_in_trash' => 'No películas found in Trash',
		'archives' => 'Pelicula Archives',
		'attributes' => 'Pelicula Attributes',
		'insert_into_item' => 'Insert into pelicula',
		'uploaded_to_this_item' => 'Uploaded to this pelicula',
		'filter_items_list' => 'Filter películas list',
		'filter_by_date' => 'Filter películas by date',
		'items_list_navigation' => 'Películas list navigation',
		'items_list' => 'Películas list',
		'item_published' => 'Pelicula published.',
		'item_published_privately' => 'Pelicula published privately.',
		'item_reverted_to_draft' => 'Pelicula reverted to draft.',
		'item_scheduled' => 'Pelicula scheduled.',
		'item_updated' => 'Pelicula updated.',
		'item_link' => 'Pelicula Link',
		'item_link_description' => 'A link to a pelicula.',
	),
	'public' => true,
	'show_in_rest' => true,
	'menu_position' => -1,
	'menu_icon' => 'dashicons-video-alt2',
	'supports' => array(
		0 => 'title',
		1 => 'editor',
		2 => 'excerpt',
		3 => 'thumbnail',
	),
	'taxonomies' => array(
		0 => 'video_type',
	),
	'has_archive' => 'peliculas',
	'rewrite' => array(
		'feeds' => false,
	),
	'delete_with_user' => false,
) );
} );

add_action( 'init', function() {
	register_taxonomy( 'video_type', array(
	0 => 'pelicula',
), array(
	'labels' => array(
		'name' => 'Tipos de vídeo',
		'singular_name' => 'Tipo de vídeo',
		'menu_name' => 'Categoria',
		'all_items' => 'All Categoria',
		'edit_item' => 'Edit Categoria',
		'view_item' => 'View Categoria',
		'update_item' => 'Update Categoria',
		'add_new_item' => 'Add New Categoria',
		'new_item_name' => 'New Categoria Name',
		'search_items' => 'Search Categoria',
		'popular_items' => 'Popular Categoria',
		'separate_items_with_commas' => 'Separate categoria with commas',
		'add_or_remove_items' => 'Add or remove categoria',
		'choose_from_most_used' => 'Choose from the most used categoria',
		'not_found' => 'No categoria found',
		'no_terms' => 'No categoria',
		'items_list_navigation' => 'Categoria list navigation',
		'items_list' => 'Categoria list',
		'back_to_items' => '← Go to categoria',
		'item_link' => 'Categoria Link',
		'item_link_description' => 'A link to a categoria',
	),
	'public' => true,
	'show_in_menu' => true,
	'show_in_rest' => true,
	'show_admin_column' => true,
	'sort' => true,
) );
} );

