<?php
/**
 * 404 Page Template
 *
 * @package Teal_Giraffes
 */

get_header();
?>

<main id="main" class="site-main">
    <section class="section" style="min-height: 60vh; display: flex; align-items: center;">
        <div class="container text-center">
            <div style="font-size: 8rem; font-weight: 800; color: var(--color-primary); line-height: 1; margin-bottom: 1rem;">404</div>
            <h1 style="margin-bottom: 1rem;">Page Not Found</h1>
            <p style="max-width: 500px; margin: 0 auto 2rem;">The page you're looking for doesn't exist or has been moved. Let's get you back on track.</p>
            <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn btn-primary">Back to Home</a>
                <a href="<?php echo esc_url( home_url( '/projects/' ) ); ?>" class="btn btn-secondary">View Projects</a>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
