<?php
// Get footer options from ACF
$footer_about = tg_get_field( 'footer_about_text', 'Lifting people social challenge democracy resistance, think tank social democratic global health truth dignity civic engagement.', 'option' );
$footer_phone = tg_get_field( 'footer_phone', '+1923456789', 'option' );
$footer_subscribe_text = tg_get_field( 'footer_subscribe_text', 'Design thinking diversification efficient recognize potential communication harness potential governance design.', 'option' );
$footer_copyright = tg_get_field( 'footer_copyright', 'TealGiraffes. All Rights Reserved.', 'option' );

// Get pages for footer navigation
$footer_pages = get_pages( array(
    'number'      => 5,
    'sort_column' => 'menu_order',
    'post_status' => 'publish',
) );
?>

<footer class="site-footer">
    <div class="container">
        <div class="footer-main">
            <!-- About -->
            <div class="footer-about">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site-logo" style="margin-bottom: 1rem;">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="Teal Giraffes Logo">
                </a>
                <p><?php echo esc_html( $footer_about ); ?></p>
                <div class="footer-contact-info">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="display: inline; vertical-align: middle; margin-right: 8px;"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                    Call us <?php echo esc_html( $footer_phone ); ?>
                </div>
            </div>

            <!-- Pages -->
            <div class="footer-widget">
                <h4 class="footer-widget-title">Quick Find</h4>
                <?php
                wp_nav_menu( array(
                    'theme_location' => 'primary',
                    'container'      => false,
                    'menu_class'     => '',
                    'fallback_cb'    => 'teal_giraffes_fallback_menu',
                ) );
                ?>
            </div>

            <!-- Subscribe -->
            <div class="footer-widget">
                <h4 class="footer-widget-title">Subscribe</h4>
                <p style="color: rgba(255,255,255,0.65); font-size: 0.875rem; line-height: 1.6;"><?php echo esc_html( $footer_subscribe_text ); ?></p>
                <form class="footer-subscribe-form" action="#" method="post">
                    <div class="footer-subscribe-input-wrap">
                        <input type="email" name="email" placeholder="Enter your Email" required>
                        <button type="submit" aria-label="Subscribe">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="22" y1="2" x2="11" y2="13"/><polygon points="22 2 15 22 11 13 2 9 22 2"/></svg>
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <div class="footer-bottom">
            <p>&copy; <?php echo date( 'Y' ); ?> <?php echo esc_html( $footer_copyright ); ?></p>
            <a href="#" class="footer-scroll-top" aria-label="Back to top">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="18 15 12 9 6 15"/></svg>
            </a>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
