<?php
/*
 * CUSTOM POST TYPES 
 */
function fwd_register_custom_post_types() {
    // Staff CPT
    $labels = array(
        'name'               => _x( 'Staffs', 'post type general name' ),
        'singular_name'      => _x( 'Staff', 'post type singular name'),
        'menu_name'          => _x( 'Staffs', 'admin menu' ),
        'name_admin_bar'     => _x( 'Staff', 'add new on admin bar' ),
        'add_new'            => _x( 'Add New', 'staff' ),
        'add_new_item'       => __( 'Add New Staff' ),
        'new_item'           => __( 'New Staff' ),
        'edit_item'          => __( 'Edit Staff' ),
        'view_item'          => __( 'View Staff' ),
        'all_items'          => __( 'All Staffs' ),
        'search_items'       => __( 'Search Staffs' ),
        'parent_item_colon'  => __( 'Parent Staffs:' ),
        'not_found'          => __( 'No staffs found.' ),
        'not_found_in_trash' => __( 'No staffs found in Trash.' ),
        'archives'           => __( 'Staff Archives'),
        'insert_into_item'   => __( 'Insert into staff'),
        'uploaded_to_this_item' => __( 'Uploaded to this staff'),
        'filter_item_list'   => __( 'Filter staffs list'),
        'items_list_navigation' => __( 'Staffs list navigation'),
        'items_list'         => __( 'Staffs list'),
        'featured_image'     => __( 'Staff featured image'),
        'set_featured_image' => __( 'Set staff featured image'),
        'remove_featured_image' => __( 'Remove staff featured image'),
        'use_featured_image' => __( 'Use as featured image'),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'show_in_nav_menus'  => true,
        'show_in_admin_bar'  => true,
        'show_in_rest'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'staffs' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 5,
        'menu_icon'          => 'dashicons-archive',
        'supports'           => array( 'title'),
        'template'           => array(
            array( 'core/paragraph', array( 'placeholder' => 'Enter a short biography...' ) ),
            array( 'core/button', array('text' => 'Link to your portfolio', 'url' => '' ) ),
        ),
        'template_lock' => 'all',
    );
    register_post_type( 'staff', $args );

    // Students CPT
    $labels = array(
        'name'               => _x( 'Students', 'post type general name' ),
        'singular_name'      => _x( 'Student', 'post type singular name'),
        'menu_name'          => _x( 'Students', 'admin menu' ),
        'name_admin_bar'     => _x( 'Student', 'add new on admin bar' ),
        'add_new'            => _x( 'Add New', 'student' ),
        'add_new_item'       => __( 'Add New Student' ),
        'new_item'           => __( 'New Student' ),
        'edit_item'          => __( 'Edit Student' ),
        'view_item'          => __( 'View Student' ),
        'all_items'          => __( 'All Students' ),
        'search_items'       => __( 'Search Students' ),
        'parent_item_colon'  => __( 'Parent Students:' ),
        'not_found'          => __( 'No students found.' ),
        'not_found_in_trash' => __( 'No students found in Trash.' ),
        'archives'           => __( 'Student Archives'),
        'insert_into_item'   => __( 'Insert into student'),
        'uploaded_to_this_item' => __( 'Uploaded to this student'),
        'filter_item_list'   => __( 'Filter students list'),
        'items_list_navigation' => __( 'Students list navigation'),
        'items_list'         => __( 'Students list'),
        'featured_image'     => __( 'Student featured image'),
        'set_featured_image' => __( 'Set student featured image'),
        'remove_featured_image' => __( 'Remove student featured image'),
        'use_featured_image' => __( 'Use as featured image'),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'show_in_nav_menus'  => true,
        'show_in_admin_bar'  => true,
        'show_in_rest'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'students' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 5,
        'menu_icon'          => 'dashicons-archive',
        'supports'           => array( 'title', 'thumbnail', 'editor' ),
        'template'           => array(
            array( 'core/paragraph', array( 'placeholder' => 'Enter a short biography...' ) ),
            array( 'core/button', array('text' => 'Link to your portfolio', 'url' => '' ) ),
        ),
        'template_lock' => 'all',
    );
    register_post_type( 'student', $args );
}    
add_action( 'init', 'fwd_register_custom_post_types' );

/**
 * TAXONOMIES
 */

function fwd_register_taxonomies() {
    // Add Staff Domain taxonomy
    $labels = array(
        'name'              => _x( 'Staff Domains', 'taxonomy general name' ),
        'singular_name'     => _x( 'Staff Domain', 'taxonomy singular name' ),
        'search_items'      => __( 'Search Staff Domains' ),
        'all_items'         => __( 'All Staff Domain' ),
        'parent_item'       => __( 'Parent Staff Domain' ),
        'parent_item_colon' => __( 'Parent Staff Domain:' ),
        'edit_item'         => __( 'Edit Staff Domain' ),
        'view_item'         => __( 'View Staff Domain' ),
        'update_item'       => __( 'Update Staff Domain' ),
        'add_new_item'      => __( 'Add New Staff Domain' ),
        'new_item_name'     => __( 'New Staff Domain Name' ),
        'menu_name'         => __( 'Staff Domain' ),
    );
    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_in_menu'      => true,
        'show_in_nav_menu'  => true,
        'show_in_rest'      => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'staff-domains' ),
    );
    register_taxonomy( 'staff-domains', array( 'staff' ), $args );

    // Add Student domain taxonomy
    $labels = array(
        'name'              => _x( 'Domains', 'taxonomy general name' ),
        'singular_name'     => _x( 'Domain', 'taxonomy singular name' ),
        'search_items'      => __( 'Search Domains' ),
        'all_items'         => __( 'All Domain' ),
        'parent_item'       => __( 'Parent Domain' ),
        'parent_item_colon' => __( 'Parent Domain:' ),
        'edit_item'         => __( 'Edit Domain' ),
        'view_item'         => __( 'View Domain' ),
        'update_item'       => __( 'Update Domain' ),
        'add_new_item'      => __( 'Add New Domain' ),
        'new_item_name'     => __( 'New Domain Name' ),
        'menu_name'         => __( 'Domain' ),
    );
    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_in_menu'      => true,
        'show_in_nav_menu'  => true,
        'show_in_rest'      => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'domains' ),
    );
    register_taxonomy( 'domain', array( 'student' ), $args );
}
add_action( 'init', 'fwd_register_taxonomies');


?>