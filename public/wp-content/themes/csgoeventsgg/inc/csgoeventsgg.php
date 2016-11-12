<?php
add_action('init', 'events_init');
function events_init()
{
    // Events post type
    $events_labels = array(
        'name' => _x('Events', 'post type general name'),
        'singular_name' => _x('Event', 'post type singular name'),
        'all_items' => __('All Events'),
        'add_new' => _x('Add new Event', 'event'),
        'add_new_item' => __('Add new Event'),
        'edit_item' => __('Edit Event'),
        'new_item' => __('New Event'),
        'view_item' => __('View Event'),
        'search_items' => __('Search in Events'),
        'not_found' =>  __('No Events found'),
        'not_found_in_trash' => __('No Events found in trash'),
        'parent_item_colon' => ''
    );

    $events_args = array(
        'labels' => $events_labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => 5,
        'supports' => array('title','custom-fields','thumbnail'),
        'has_archive' => false,
        'show_in_rest' => true,
        'rest_base' => 'events-api',
        'rest_controller_class' => 'WP_REST_Posts_Controller'
    );
    register_post_type('events',$events_args);

    // Regions taxonomy
    $regions_labels = array(
        'name' => _x( 'Regions', 'taxonomy general name' ),
        'singular_name' => _x( 'Region', 'taxonomy singular name' ),
        'search_items' =>  __( 'Search in Regions' ),
        'popular_items' => __( 'Popular Regions' ),
        'all_items' => __( 'All Regions' ),
        'most_used_items' => null,
        'parent_item' => null,
        'parent_item_colon' => null,
        'edit_item' => __( 'Edit Region' ),
        'update_item' => __( 'Update Region' ),
        'add_new_item' => __( 'Add new Region' ),
        'new_item_name' => __( 'New Region' ),
        'separate_items_with_commas' => __( 'Separate Regions with commas' ),
        'add_or_remove_items' => __( 'Add or remove Regions' ),
        'choose_from_most_used' => __( 'Choose from the most used Regions' ),
        'menu_name' => __( 'Regions' )
    );
    register_taxonomy('regions','events',array(
        'hierarchical' => false,
        'labels' => $regions_labels,
        'show_ui' => true,
        'update_count_callback' => '_update_post_term_count',
        'query_var' => true,
        'rewrite' => array('slug' => 'regions'),
        'show_in_rest' => true,
        'rest_base' => 'regions-api',
        'rest_controller_class' => 'WP_REST_Terms_Controller'
    ));

    // Type taxonomy
    $types_labels = array(
        'name' => _x( 'Types', 'taxonomy general name' ),
        'singular_name' => _x( 'Type', 'taxonomy singular name' ),
        'search_items' =>  __( 'Search in Types' ),
        'popular_items' => __( 'Popular Types' ),
        'all_items' => __( 'All Types' ),
        'most_used_items' => null,
        'parent_item' => null,
        'parent_item_colon' => null,
        'edit_item' => __( 'Edit Type' ),
        'update_item' => __( 'Update Type' ),
        'add_new_item' => __( 'Add new Type' ),
        'new_item_name' => __( 'New Type' ),
        'separate_items_with_commas' => __( 'Separate Types with commas' ),
        'add_or_remove_items' => __( 'Add or remove Types' ),
        'choose_from_most_used' => __( 'Choose from the most used Types' ),
        'menu_name' => __( 'Types' )
    );
    register_taxonomy('types','events',array(
        'hierarchical' => false,
        'labels' => $types_labels,
        'show_ui' => true,
        'update_count_callback' => '_update_post_term_count',
        'query_var' => true,
        'rewrite' => array('slug' => 'types'),
        'show_in_rest' => true,
        'rest_base' => 'types-api',
        'rest_controller_class' => 'WP_REST_Terms_Controller'
    ));

    // Hosts taxonomy
    $hosts_labels = array(
        'name' => _x( 'Hosts', 'taxonomy general name' ),
        'singular_name' => _x( 'Host', 'taxonomy singular name' ),
        'search_items' =>  __( 'Search in Hosts' ),
        'popular_items' => __( 'Popular Hosts' ),
        'all_items' => __( 'All Hosts' ),
        'most_used_items' => null,
        'parent_item' => null,
        'parent_item_colon' => null,
        'edit_item' => __( 'Edit Host' ),
        'update_item' => __( 'Update Host' ),
        'add_new_item' => __( 'Add new Host' ),
        'new_item_name' => __( 'New Host' ),
        'separate_items_with_commas' => __( 'Separate Hosts with commas' ),
        'add_or_remove_items' => __( 'Add or remove Hosts' ),
        'choose_from_most_used' => __( 'Choose from the most used Hosts' ),
        'menu_name' => __( 'Hosts' )
    );
    register_taxonomy('hosts','events',array(
        'hierarchical' => false,
        'labels' => $hosts_labels,
        'show_ui' => true,
        'update_count_callback' => '_update_post_term_count',
        'query_var' => true,
        'rewrite' => array('slug' => 'hosts'),
        'show_in_rest' => true,
        'rest_base' => 'hosts-tax-api',
        'rest_controller_class' => 'WP_REST_Terms_Controller'
    ));
}
add_action('init', 'hosts_init');
function hosts_init()
{
    // Hosts post type
    $hosts_labels = array(
        'name' => _x('Hosts', 'post type general name'),
        'singular_name' => _x('Host', 'post type singular name'),
        'all_items' => __('All Hosts'),
        'add_new' => _x('Add new Host', 'Host'),
        'add_new_item' => __('Add new Host'),
        'edit_item' => __('Edit Host'),
        'new_item' => __('New Host'),
        'view_item' => __('View Host'),
        'search_items' => __('Search in Hosts'),
        'not_found' =>  __('No Hosts found'),
        'not_found_in_trash' => __('No Hosts found in trash'),
        'parent_item_colon' => ''
    );

    $hosts_args = array(
        'labels' => $hosts_labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => 5,
        'supports' => array('title','custom-fields','thumbnail'),
        'has_archive' => false,
        'show_in_rest' => true,
        'rest_base' => 'hosts-api',
        'rest_controller_class' => 'WP_REST_Posts_Controller'
    );
    register_post_type('hosts',$hosts_args);
}
add_action('init', 'maps_init');
function maps_init()
{
    // Maps post type
    $maps_labels = array(
        'name' => _x('Maps', 'post type general name'),
        'singular_name' => _x('Map', 'post type singular name'),
        'all_items' => __('All Maps'),
        'add_new' => _x('Add new Map', 'Map'),
        'add_new_item' => __('Add new Map'),
        'edit_item' => __('Edit Map'),
        'new_item' => __('New Map'),
        'view_item' => __('View Map'),
        'search_items' => __('Search in Maps'),
        'not_found' =>  __('No Maps found'),
        'not_found_in_trash' => __('No Maps found in trash'),
        'parent_item_colon' => ''
    );

    $maps_args = array(
        'labels' => $maps_labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => 5,
        'supports' => array('title','custom-fields','thumbnail'),
        'has_archive' => false,
        'show_in_rest' => true,
        'rest_base' => 'maps-api',
        'rest_controller_class' => 'WP_REST_Posts_Controller'
    );
    register_post_type('maps',$maps_args);
}
add_action('init', 'sponsors_init');
function sponsors_init()
{
    // Maps post type
    $sponsors_labels = array(
        'name' => _x('Sponsors', 'post type general name'),
        'singular_name' => _x('Sponsor', 'post type singular name'),
        'all_items' => __('All Sponsors'),
        'add_new' => _x('Add new Sponsor', 'Sponsor'),
        'add_new_item' => __('Add new Sponsor'),
        'edit_item' => __('Edit Sponsor'),
        'new_item' => __('New Sponsor'),
        'view_item' => __('View Sponsor'),
        'search_items' => __('Search in Sponsors'),
        'not_found' =>  __('No Sponsors found'),
        'not_found_in_trash' => __('No Sponsors found in trash'),
        'parent_item_colon' => ''
    );

    $sponsors_args = array(
        'labels' => $sponsors_labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => 5,
        'supports' => array('title','custom-fields','thumbnail'),
        'has_archive' => false,
        'show_in_rest' => true,
        'rest_base' => 'sponsors-api',
        'rest_controller_class' => 'WP_REST_Posts_Controller'
    );
    register_post_type('sponsors',$sponsors_args);
}
add_action('init', 'alerts_init');
function alerts_init()
{
    // Maps post type
    $alerts_labels = array(
        'name' => _x('Alerts', 'post type general name'),
        'singular_name' => _x('Alert', 'post type singular name'),
        'all_items' => __('All Alerts'),
        'add_new' => _x('Add new Alert', 'Alert'),
        'add_new_item' => __('Add new Alert'),
        'edit_item' => __('Edit Alert'),
        'new_item' => __('New Alert'),
        'view_item' => __('View Alert'),
        'search_items' => __('Search in Alerts'),
        'not_found' =>  __('No Alerts found'),
        'not_found_in_trash' => __('No Alerts found in trash'),
        'parent_item_colon' => ''
    );

    $alerts_args = array(
        'labels' => $alerts_labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => 5,
        'supports' => array('title','custom-fields','thumbnail'),
        'has_archive' => false,
        'show_in_rest' => true,
        'rest_base' => 'alerts-api',
        'rest_controller_class' => 'WP_REST_Posts_Controller'
    );
    register_post_type('alerts',$alerts_args);
}
?>
