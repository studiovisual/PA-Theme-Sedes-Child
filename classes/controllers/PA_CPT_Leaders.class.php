<?php

class PA_CPT_Líderes {

	public function __construct(){
		add_action('init', [$this, 'CreatePostType']);
	}

	function CreatePostType() {
		$labels = array(
			'name'                  => _x( 'Líderes', 'Post Type General Name', 'pa_iasd' ),
			'singular_name'         => _x( 'Líder', 'Post Type Singular Name', 'pa_iasd' ),
			'menu_name'             => __( 'Líderes', 'pa_iasd' ),
			'name_admin_bar'        => __( 'Líderes', 'pa_iasd' ),
			'archives'              => __( 'Líderes', 'pa_iasd' ),
			'attributes'            => __( 'Item Attributes', 'pa_iasd' ),
			'parent_item_colon'     => __( '', 'pa_iasd' ),
			'all_items'             => __( 'Todos os lideres', 'pa_iasd' ),
			'add_new_item'          => __( 'Adicionar novo líder', 'pa_iasd' ),
			'add_new'               => __( 'Adicionar Novo', 'pa_iasd' ),
			'new_item'              => __( 'Novo', 'pa_iasd' ),
			'edit_item'             => __( 'Editar', 'pa_iasd' ),
			'update_item'           => __( 'Atualizar', 'pa_iasd' ),
			'view_item'             => __( 'Visualizar líder', 'pa_iasd' ),
			'view_items'            => __( 'Visualizar lideres', 'pa_iasd' ),
			'search_items'          => __( 'Buscar lideres', 'pa_iasd' ),
			'not_found'             => __( 'Não encontrado', 'pa_iasd' ),
			'not_found_in_trash'    => __( 'Não encontrado na lixeira', 'pa_iasd' ),
			'featured_image'        => __( 'Imagem destacada', 'pa_iasd' ),
			'set_featured_image'    => __( 'Adicionar imagem destacada', 'pa_iasd' ),
			'remove_featured_image' => __( 'Remover imagem destacada', 'pa_iasd' ),
			'use_featured_image'    => __( 'Usar como imagem destacada', 'pa_iasd' ),
			'insert_into_item'      => __( 'Inserir no item', 'pa_iasd' ),
			'uploaded_to_this_item' => __( 'Uploaded to this item', 'pa_iasd' ),
			'items_list'            => __( 'Items list', 'pa_iasd' ),
			'items_list_navigation' => __( 'Items list navigation', 'pa_iasd' ),
			'filter_items_list'     => __( 'Filter items list', 'pa_iasd' ),
		);
		$args = array(
			'label'                 => __( 'Líder', 'pa_iasd' ),
			'labels'                => $labels,
			'supports'              => array( 'title', 'thumbnail', 'revisions' ),
			'hierarchical'          => false,
			'public'                => true,
			'show_ui'               => true,
			'show_in_menu'          => true,
			'menu_position'         => 5,
			'show_in_admin_bar'     => true,
			'show_in_nav_menus'     => true,
			'can_export'            => true,
			'has_archive'           => false,
			'exclude_from_search'   => false,
			'publicly_queryable'    => true,
			'capability_type'       => 'page',
			'show_in_rest'          => true,
		);
		register_post_type( 'lideres', $args );
	}
}

new PA_CPT_Líderes();
