<?php

if (!class_exists('Rk_Services')) :

    /**
     * Simple RVSoftUni class for its custom functionality.
     */
    class Rk_Services
    {
        public function __construct()
        {
            add_action('init', array($this, 'services_cpt'));
            add_action('init', array($this, 'service_taxonomy'));
        }
        /**
         * Register a custom post type called "Service".
         */
        public function services_cpt()
        {
            $labels = array(
                'name'                  => _x('Services', 'Post type general name', 'rksoftuni'),
                'singular_name'         => _x('Service', 'Post type singular name', 'rksoftuni'),
                'menu_name'             => _x('Services', 'Admin Menu text', 'rksoftuni'),
                'name_admin_bar'        => _x('Service', 'Add New on Toolbar', 'rksoftuni'),
                'add_new'               => __('Add New Service', 'rksoftuni'),
                'add_new_item'          => __('Add New Service', 'rksoftuni'),
                'new_item'              => __('New Service', 'rksoftuni'),
                'edit_item'             => __('Edit Service', 'rksoftuni'),
                'view_item'             => __('View Service', 'rksoftuni'),
                'all_items'             => __('All Services', 'rksoftuni'),
            );

            $args = array(
                'labels'             => $labels,
                'public'             => true,
                'publicly_queryable' => true,
                'show_ui'            => true,
                'show_in_menu'       => true,
                'query_var'          => true,
                'capability_type'    => 'post',
                'has_archive'        => true,
                'hierarchical'       => false,
                'menu_position'      => null,
                'supports'           => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'revisions'),
                'show_in_rest'       => true,

            );

            register_post_type('Service', $args);
        }

        /**
         * Register the 'category' taxonomy for post type 'service', with a rewrite to match book CPT slug.
         */
        public  function service_taxonomy()
        {
            $labels = array(
                'name'          => 'Categories',
                'singular_name' => 'Category',
            );
            $args = array(
                'labels'         => $labels,
                'show_in_rest'   => true,
                'hierarchical'   => true,
            );

            register_taxonomy('service_category', 'service', $args);
        }
    }

    $rk_services_instance = new Rk_Services();
    flush_rewrite_rules();
endif;
