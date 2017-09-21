<?php
/*
Plugin Name: Filmes Reviews
Plugin URI:  https://aerowebsite.wordpress.com/
Description: Basic WordPress Plugin painel
Version:     1.0.2
Author:      aerowebsite.wordpress.com/
Author URI:  https://aerowebsite.wordpress.com/
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: wp-painel
*/

/**
 * Panel Custom
 */
class Filmes_reviews{
	private static $instance;
	
	public static function getInstance(){
		if (self::$instance == NULL) {
			self::$instance = new self();
		}
	
	return self::$instance;
	}

	private function __construct(){
		add_action( 'init', array($this,'cpt_filmes'));
    }

    // Register Custom Filme Review
	function cpt_filmes(){

		$labels = array(
			'name'                  => _( 'Filmes Reviews', 'text_domain' ),
			'singular_name'         => _( 'Filme Review', 'text_domain' ),
			'menu_name'             => __( 'Filmes Reviews', 'text_domain' ),
			'name_admin_bar'        => __( 'Filme Review', 'text_domain' ),
			'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
			'all_items'             => __( 'Todos Items', 'text_domain' ),
			'add_new_item'          => __( 'Adicionar Novo Item', 'text_domain' ),
			'add_new'               => __( 'Adicionar Novo', 'text_domain' ),
			'new_item'              => __( 'Novo Item', 'text_domain' ),
			'edit_item'             => __( 'Editar Item', 'text_domain' ),
			'update_item'           => __( 'Atualizar Item', 'text_domain' ),
			'view_item'             => __( 'Vizualizar Item', 'text_domain' ),
			'view_items'            => __( 'Vizualizar Items', 'text_domain' ),
			'search_items'          => __( 'Buscar Item', 'text_domain' ),
			'not_found'             => __( 'Não encontrado', 'text_domain' ),
			'not_found_in_trash'    => __( 'Nada encontrado na lixeira', 'text_domain' ),
			'featured_image'        => __( 'Featured Image', 'text_domain' ),
			'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
			'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
			'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
			'insert_into_item'      => __( 'Inserir item', 'text_domain' ),
			'uploaded_to_this_item' => __( 'Uploaded para este item', 'text_domain' ),
			'items_list'            => __( 'Listagem de Items', 'text_domain' ),
			'items_list_navigation' => __( 'Items', 'text_domain' ),
			'filter_items_list'     => __( 'Filtrar items', 'text_domain' ),
		);
		$args = array(
			'label'                 => __( 'Filme Review', 'text_domain' ),
			'description'           => __( 'Post para cadastro de reviews', 'text_domain' ),
			'labels'                => $labels,
			'supports'              => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'custom-fields' ),
			'taxonomies'            => array( 'classificacao', 'nota', 'genero' ),
			'hierarchical'          => false,
			'public'                => true,
			'show_ui'               => true,
			'show_in_menu'          => true,
			'menu_position'         => 5,
			'show_in_admin_bar'     => true,
			'show_in_nav_menus'     => true,
			'can_export'            => true,
			'has_archive'           => true,		
			'exclude_from_search'   => false,
			'publicly_queryable'    => true,
			'capability_type'       => 'page',
		);
		register_post_type( 'filmes_reviews', $args );
	}

	// function add_css() {
	// 	wp_register_style( 'painel-person', plugins_url( 'css/painel-person.css', __FILE__ ) );
	// 	wp_enqueue_style( 'painel-person' );
	// }
}

Filmes_reviews::getInstance();

