<?php
function sportspress_league_term_init() {
	$labels = array(
		'name' => __( 'Leagues', 'sportspress' ),
		'singular_name' => __( 'League', 'sportspress' ),
		'all_items' => __( 'All', 'sportspress' ),
		'edit_item' => __( 'Edit', 'sportspress' ),
		'view_item' => __( 'View', 'sportspress' ),
		'update_item' => __( 'Update', 'sportspress' ),
		'add_new_item' => __( 'Add New', 'sportspress' ),
		'new_item_name' => __( 'Name', 'sportspress' ),
		'parent_item' => __( 'Parent', 'sportspress' ),
		'parent_item_colon' => __( 'Parent:', 'sportspress' ),
		'search_items' =>  __( 'Search', 'sportspress' ),
		'not_found' => __( 'No results found.', 'sportspress' ),
	);
	$args = array(
		'label' => __( 'Leagues', 'sportspress' ),
		'labels' => $labels,
		'public' => true,
		'show_in_nav_menus' => false,
		'show_tagcloud' => false,
		'hierarchical' => true,
		'rewrite' => array( 'slug' => 'league' ),
	);
	$object_types = array( 'sp_event', 'sp_team', 'sp_table', 'sp_player', 'sp_list', 'sp_staff' );
	register_taxonomy( 'sp_league', $object_types, $args );
	foreach ( $object_types as $object_type ):
		register_taxonomy_for_object_type( 'sp_league', $object_type );
	endforeach;
}
add_action( 'init', 'sportspress_league_term_init' );
