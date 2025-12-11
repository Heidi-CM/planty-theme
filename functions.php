<?php
/**
 * Astra child - Planty Heïdi Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Astra child - Planty Heïdi
 * @since 1.0.0
 */

/**
 * Define Constants
 */
define( 'CHILD_THEME_ASTRA_CHILD_PLANTY_HEIDI_VERSION', '1.0.0' );

/**
 * Enqueue styles
 */
function child_enqueue_styles() {

	wp_enqueue_style( 'astra-child-planty-heidi-theme-css', get_stylesheet_directory_uri() . '/style.css', array('astra-theme-css'), CHILD_THEME_ASTRA_CHILD_PLANTY_HEIDI_VERSION, 'all' );

}

add_action( 'wp_enqueue_scripts', 'child_enqueue_styles', 15 );

function planty_add_admin_link($items, $args) {

if ($args->theme_location == 'Menu principal' && is_user_logged_in()) {

        $admin_link = '<li class="menu-item"><a href="' . admin_url() . '">Admin</a></li>';

        $items .= $admin_link;
    }

    return $items;
}
add_filter('wp_nav_menu_items', 'planty_add_admin_link', 10, 2);


/**
 * Ajoute un lien "Admin" dans le menu "Principal"
 * visible uniquement pour les utilisateurs connectés.
 */
function ajouter_lien_admin_menu_principal( $items, $args ) {

    // Récupérer l'objet de menu, quel que soit le type de $args->menu (ID, objet, string)
    $menu_obj = null;

    if ( ! empty( $args->menu ) ) {

        if ( is_object( $args->menu ) ) {
            // $args->menu est déjà un objet de type WP_Term
            $menu_obj = $args->menu;

        } else {
            // $args->menu est un ID ou un nom → on demande à WP l'objet complet
            $menu_obj = wp_get_nav_menu_object( $args->menu );
        }
    }

    // Si on a bien un menu, on vérifie son nom
    $is_principal = ( $menu_obj && isset( $menu_obj->name ) && $menu_obj->name === 'Principal' );

    // On ajoute le lien seulement :
    // - si c'est le menu "Principal"
    // - et si l'utilisateur est connecté
    if ( $is_principal && is_user_logged_in() ) {

        $items .= '<li class="menu-item menu-item-admin">
            <a href="' . esc_url( admin_url() ) . '">Admin</a>
        </li>';
    }

    return $items;
}
add_filter( 'wp_nav_menu_items', 'ajouter_lien_admin_menu_principal', 10, 2 );
