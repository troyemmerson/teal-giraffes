<footer class="site-footer">
    <div class="container">
        <div class="footer-main">
            <!-- About -->
            <div class="footer-about">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site-logo" style="margin-bottom: 1rem;">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="Teal Giraffes Logo">
                </a>
                <p>Learning based solutions to environmental sustainability challenges. Changing minds and systems for a more sustainable planet.</p>
                <div class="footer-social">
                    <a href="#" aria-label="Facebook">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/></svg>
                    </a>
                    <a href="#" aria-label="Twitter">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"/></svg>
                    </a>
                    <a href="#" aria-label="LinkedIn">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"/><rect x="2" y="9" width="4" height="12"/><circle cx="4" cy="4" r="2"/></svg>
                    </a>
                    <a href="#" aria-label="Instagram">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"/><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"/><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"/></svg>
                    </a>
                </div>
            </div>

            <!-- Quick Links -->
            <div class="footer-widget">
                <h4 class="footer-widget-title">Quick Links</h4>
                <ul>
                    <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/about/' ) ); ?>">About Us</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/projects/' ) ); ?>">Our Projects</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/apply/' ) ); ?>">Apply for Program</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Contact</a></li>
                </ul>
            </div>

            <!-- Programs -->
            <div class="footer-widget">
                <h4 class="footer-widget-title">Programs</h4>
                <ul>
                    <li><a href="#">Social Learning Programs</a></li>
                    <li><a href="#">Research Support</a></li>
                    <li><a href="#">Community Matchmaking</a></li>
                    <li><a href="#">Fund a Community</a></li>
                </ul>
            </div>

            <!-- Contact -->
            <div class="footer-widget">
                <h4 class="footer-widget-title">Contact</h4>
                <ul>
                    <li>
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="display: inline; vertical-align: middle; margin-right: 8px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                        info@tealgiraffes.org
                    </li>
                    <li>
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="display: inline; vertical-align: middle; margin-right: 8px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
                        Global Operations
                    </li>
                </ul>
            </div>
        </div>

        <div class="footer-bottom">
            <p>&copy; <?php echo date( 'Y' ); ?> Teal Giraffes. All rights reserved.</p>
            <p>
                <a href="#">Privacy Policy</a> | <a href="#">Terms of Service</a>
            </p>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
