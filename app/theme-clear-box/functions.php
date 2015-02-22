add_action( 'init', 'register_cpt_code' );

function register_cpt_code() {

    $labels = array( 
        'name' => _x( 'CODE', 'code' ),
        'singular_name' => _x( 'CODE', 'code' ),
        'add_new' => _x( 'Add New', 'code' ),
        'add_new_item' => _x( 'Add New CODE', 'code' ),
        'edit_item' => _x( 'Edit CODE', 'code' ),
        'new_item' => _x( 'New CODE', 'code' ),
        'view_item' => _x( 'View CODE', 'code' ),
        'search_items' => _x( 'Search CODE', 'code' ),
        'not_found' => _x( 'No code found', 'code' ),
        'not_found_in_trash' => _x( 'No code found in Trash', 'code' ),
        'parent_item_colon' => _x( 'Parent CODE:', 'code' ),
        'menu_name' => _x( 'CODE', 'code' ),
    );

    $args = array( 
        'labels' => $labels,
        'hierarchical' => true,
        
        'supports' => array( 'title', 'custom-fields' ),
        'taxonomies' => array( 'post_tag' ),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        
        
        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => true,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => true,
        'capability_type' => 'post'
    );

    register_post_type( 'code', $args );
}