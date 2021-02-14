<?php 

    add_action('init', 'travelGirl_init_posttypes');
    
    function travelGirl_init_posttypes(){
          
    /*
     * Register New Post Type
     */
        $tips_args = array(
            'labels' => array(
                'name' => 'Practical tips',
                'singular_name' => 'Tips',
                'all_items' => 'All tips',
                'add_new' => 'Add new',
                'add_new_item' => 'Add new item',
                'edit_item' => 'Edit item',
                'new_item' => 'New item',
                'view_item' => 'View item',
                'search_items' => 'Search items',
                'not_found' =>  'Not found',
                'not_found_in_trash' => 'Not found in trash', 
                'parent_item_colon' => ''
            ),

            'public' => true,
            'publicly_queryable' => true,
            'show_ui' => true, 
            'query_var' => true,
            'rewrite' => true,
            'capability_type' => 'post',
            'hierarchical' => false,
            'menu_position' => 5,
            'supports' => array(
                'title','editor','author','thumbnail','excerpt','comments','custom-fields', 'post-formats'
            ),
            'has_archive' => true            
        );
        
        register_post_type('tips', $tips_args);
        
    }


    add_action('init', 'travelGirl_init_taxonomies');
    
    function travelGirl_init_taxonomies(){
        
        // Ingredients
        register_taxonomy(
            'categories',
            array('tips'),
            array(
                'hierarchical' => false,
                'labels' => array(
                    'name' => 'Categories',
                    'singular_name' => 'Categories',
                    'search_items' =>  'Search categories',
                    'all_items' => 'All categories',
                    'edit_item' => 'Edit category', 
                    'update_item' => 'Update category',
                    'add_new_item' => 'Add new category',
                    'new_item_name' => 'New category name',
                    'add_or_remove_items' => 'Add or remove category',
                    'menu_name' => 'Categories',
                ),
                'show_ui' => true,           
                'update_count_callback' => '_update_post_term_count',
                'query_var' => true,
        ));
    }

?>      