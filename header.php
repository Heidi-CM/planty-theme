<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<a class="skip-link screen-reader-text" href="#content">
    <?php esc_html_e( 'Skip to content', 'astra' ); ?>
</a>

<div id="page" class="hfeed site">
    <header id="masthead" class="site-header">
        <div class="header-container">
            <!-- Logo -->
            <div class="site-branding">
                <a href="<?php echo esc_url(home_url('/')); ?>">
                    <img class= logo src="<?php echo get_stylesheet_directory_uri(); ?>/Section 19.png" alt="Logo Planty" />
                </a>
            </div>

            <!-- Menu principal -->
            <nav id="site-navigation" class="main-navigation">
                <?php
                ?>
            </nav>

            <!--  menu -->
            <div class="nav">
                <a href="" class="">
                    <p class="text1">
                        <?php echo 'Nous rencontrer'; ?>
                    </p>                
                </a>
                <a href="" class="">
                    <p class="text2">
                        <?php echo 'Admin'; ?>
                    </p>                
                </a>
                <a href="" class="">
                    <p class="text3">
                        <?php echo 'Commander'; ?>
                    </p>                
                </a>
                
            </div>
        </div>
    </header>

    <div id="content" class="site-content">
        <div class="ast-container">
