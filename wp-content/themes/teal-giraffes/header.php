<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="site-header" id="site-header">
    <div class="container">
        <div class="header-inner">
            <!-- Logo -->
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site-logo">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="Teal Giraffes Logo">
            </a>

            <!-- Navigation -->
            <nav class="main-nav" id="main-nav">
                <?php
                wp_nav_menu( array(
                    'theme_location' => 'primary',
                    'container'      => false,
                    'menu_class'     => '',
                    'fallback_cb'    => 'teal_giraffes_fallback_menu',
                ) );
                ?>
            </nav>

            <!-- Mobile Menu Toggle -->
            <button class="menu-toggle" id="menu-toggle" aria-label="Toggle menu">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
    </div>
</header>

<?php
/**
 * Fallback menu if no menu is assigned
 */
function teal_giraffes_fallback_menu() {
    ?>
    <ul>
        <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
        <li><a href="<?php echo esc_url( home_url( '/about/' ) ); ?>">About</a></li>
        <li><a href="<?php echo esc_url( home_url( '/projects/' ) ); ?>">Projects</a></li>
        <li class="menu-btn-donate"><a href="<?php echo esc_url( home_url( '/donate/' ) ); ?>">Donate</a></li>
        <li class="menu-btn-contact"><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Contact Us</a></li>
    </ul>
    <?php
}
?>
