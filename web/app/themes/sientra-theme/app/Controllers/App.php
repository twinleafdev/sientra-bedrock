<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class App extends Controller
{
    public function siteName()
    {
        return get_bloginfo('name');
    }

    public static function title()
    {
        if (is_home()) {
            if ($home = get_option('page_for_posts', true)) {
                return get_the_title($home);
            }
            return __('Latest Posts', 'sage');
        }
        if (is_archive()) {
            return get_the_archive_title();
        }
        if (is_search()) {
            return sprintf(__('Search Results for %s', 'sage'), get_search_query());
        }
        if (is_404()) {
            return __('Not Found', 'sage');
        }
        return get_the_title();
    }
    public function primarymenu()
    {
      global $post;
      $parent_id = wp_get_post_parent_id($post);
      $wp_page_template = get_post_meta($parent_id, '_wp_page_template', true);
      $menu = 'primary_navigation';
      // check if augmentation section via page template      
      if( "template-augmentation-home.blade.php" ==  basename( $wp_page_template ) || "template-augmentation-home.blade.php" ==  basename(get_page_template($post)) ) {
        $menu = 'augmentation_navigation';
        add_filter( 'body_class', function( $classes ) {
            return array_merge( $classes, array( 'augmentation' ) );
        } );
      } 
      
      if( "template-reconstruction-home.blade.php" ==  basename( $wp_page_template ) || "template-reconstruction-home.blade.php" ==  basename(get_page_template($post)) )  {
        $menu = 'reconstruction_navigation';
        add_filter( 'body_class', function( $classes ) {
            return array_merge( $classes, array( 'reconstruction' ) );
        } );
      } 
      
      $args = array(
        'theme_location'    => $menu,
        'menu_class'        => 'navbar-nav mx-auto text-right',
        'container_class'   => 'collapse navbar-collapse',
        'container_id'      => 'navbar-main-menu',
        'walker'            => new \App\wp_bootstrap4_navwalker(),
      
      );
      return $args;
    }

}
