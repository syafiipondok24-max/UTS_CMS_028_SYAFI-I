<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header class="site-header">
    <div class="header-inner">
        <div class="site-branding">
            <?php if ( has_custom_logo() ) { the_custom_logo(); } ?>
            <a class="site-title" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                <?php bloginfo( 'name' ); ?>
            </a>
            <p class="site-description"><?php bloginfo( 'description' ); ?></p>
        </div>
        <nav class="main-navigation" aria-label="<?php esc_attr_e( 'Menu utama', 'syafii-starter' ); ?>">
            <?php
            wp_nav_menu( array(
                'theme_location' => 'primary',
                'container'      => false,
                'fallback_cb'    => 'wp_page_menu',
            ) );
            ?>
        </nav>
    </div>
</header>
