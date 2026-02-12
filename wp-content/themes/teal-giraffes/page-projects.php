<?php
/**
 * Template Name: Projects Page
 *
 * @package Teal_Giraffes
 */

get_header();
?>

<main id="main" class="site-main">
    <!-- Hero Section -->
    <section class="hero hero-image" style="min-height: 50vh; background-image: url('https://images.unsplash.com/photo-1547471080-7cc2caa01a7e?w=1920&q=80');">
        <div class="hero-content">
            <h1 class="hero-title">Our Projects</h1>
            <p class="hero-subtitle">Communities we've partnered with to create lasting change</p>
        </div>
    </section>

    <!-- Projects Grid -->
    <section class="section">
        <div class="container">

            <?php
            // Check if Give plugin is active
            if ( function_exists( 'give_get_forms' ) ) :
                // Get Give forms (projects)
                $forms = give_get_forms( array(
                    'posts_per_page' => -1,
                    'post_status'    => 'publish',
                ) );

                if ( $forms->have_posts() ) :
            ?>
                <div class="grid-3" style="gap: 2rem;">
                    <?php while ( $forms->have_posts() ) : $forms->the_post();
                        // Get goal and income
                        $goal = give_get_meta( get_the_ID(), '_give_set_goal', true );
                        $income = give_get_meta( get_the_ID(), '_give_form_earnings', true );
                        $goal_amount = give_get_meta( get_the_ID(), '_give_set_goal', true ) === 'enabled' ? give_get_meta( get_the_ID(), '_give_goal_amount', true ) : 0;
                        $progress = $goal_amount > 0 ? min( 100, ( $income / $goal_amount ) * 100 ) : 0;
                    ?>
                        <div class="card animate-on-scroll" style="overflow: hidden;">
                            <?php if ( has_post_thumbnail() ) : ?>
                                <div class="card-image" style="position: relative;">
                                    <?php the_post_thumbnail( 'card', array( 'style' => 'width: 100%; height: 200px; object-fit: cover;' ) ); ?>
                                    <span style="position: absolute; top: 1rem; left: 1rem; background: var(--color-warning); color: var(--color-dark); padding: 0.25rem 0.75rem; border-radius: var(--radius-full); font-size: 0.75rem; font-weight: 600;">Seeking Funding</span>
                                </div>
                            <?php else : ?>
                                <div class="card-image" style="position: relative;">
                                    <img src="https://images.unsplash.com/photo-1516426122078-c23e76319801?w=400&h=200&fit=crop" alt="<?php the_title(); ?>" style="width: 100%; height: 200px; object-fit: cover;">
                                    <span style="position: absolute; top: 1rem; left: 1rem; background: var(--color-warning); color: var(--color-dark); padding: 0.25rem 0.75rem; border-radius: var(--radius-full); font-size: 0.75rem; font-weight: 600;">Seeking Funding</span>
                                </div>
                            <?php endif; ?>
                            <div class="card-content">
                                <h3 class="card-title"><?php the_title(); ?></h3>
                                <?php if ( has_excerpt() ) : ?>
                                    <p class="card-text"><?php echo get_the_excerpt(); ?></p>
                                <?php endif; ?>
                                <?php if ( $goal_amount > 0 ) : ?>
                                    <div style="margin-bottom: 1rem;">
                                        <div style="display: flex; justify-content: space-between; font-size: 0.875rem; margin-bottom: 0.5rem;">
                                            <span>Raised: <?php echo give_currency_filter( give_format_amount( $income ) ); ?></span>
                                            <span style="color: var(--color-primary); font-weight: 600;">Goal: <?php echo give_currency_filter( give_format_amount( $goal_amount ) ); ?></span>
                                        </div>
                                        <div class="progress-bar">
                                            <div class="progress-fill" style="width: <?php echo esc_attr( $progress ); ?>%;"></div>
                                        </div>
                                    </div>
                                <?php endif; ?>
                                <a href="<?php the_permalink(); ?>" class="btn btn-primary btn-sm" style="width: 100%;">Donate to This Project</a>
                            </div>
                        </div>
                    <?php endwhile; wp_reset_postdata(); ?>
                </div>
            <?php else : ?>
                <!-- No Give forms found -->
                <p class="text-center text-muted">No projects currently seeking funding. Check back soon!</p>
            <?php endif; ?>

            <?php else : ?>
            <!-- Give plugin not active - show static projects -->
            <div class="grid-3" style="gap: 2rem;">
                <!-- Project 1: Namibia 2019 -->
                <div class="card animate-on-scroll" style="overflow: hidden;">
                    <div class="card-image" style="position: relative;">
                        <img src="https://images.unsplash.com/photo-1547471080-7cc2caa01a7e?w=400&h=200&fit=crop" alt="Namibia wildlife project 2019" style="width: 100%; height: 200px; object-fit: cover;">
                        <span style="position: absolute; top: 1rem; left: 1rem; background: var(--color-success); color: white; padding: 0.25rem 0.75rem; border-radius: var(--radius-full); font-size: 0.75rem; font-weight: 600;">Completed</span>
                    </div>
                    <div class="card-content">
                        <span class="text-muted" style="font-size: 0.875rem;">Namibia</span>
                        <h3 class="card-title">Human-Wildlife Coexistence Program</h3>
                        <p class="card-text">Social learning program focused on transforming conflict into coexistence in rural Namibian communities.</p>
                        <div style="display: flex; justify-content: space-between; align-items: center; font-size: 0.875rem; color: var(--color-text-muted);">
                            <span>2019</span>
                            <span>Funder: Volkswagen Foundation</span>
                        </div>
                    </div>
                </div>

                <!-- Project 2: Namibia 2022/2023 -->
                <div class="card animate-on-scroll" style="overflow: hidden;">
                    <div class="card-image" style="position: relative;">
                        <img src="https://images.unsplash.com/photo-1489392191049-fc10c97e64b6?w=400&h=200&fit=crop" alt="Namibia leadership program 2022" style="width: 100%; height: 200px; object-fit: cover;">
                        <span style="position: absolute; top: 1rem; left: 1rem; background: var(--color-success); color: white; padding: 0.25rem 0.75rem; border-radius: var(--radius-full); font-size: 0.75rem; font-weight: 600;">Completed</span>
                    </div>
                    <div class="card-content">
                        <span class="text-muted" style="font-size: 0.875rem;">Namibia</span>
                        <h3 class="card-title">Innovation in Leadership & Governance</h3>
                        <p class="card-text">Leadership program building governance capacity for sustainable community-based conservation.</p>
                        <div style="display: flex; justify-content: space-between; align-items: center; font-size: 0.875rem; color: var(--color-text-muted);">
                            <span>2022/2023</span>
                            <span>Funder: Volkswagen Foundation</span>
                        </div>
                    </div>
                </div>

                <!-- Project 3: Namibia 2025 -->
                <div class="card animate-on-scroll" style="overflow: hidden;">
                    <div class="card-image" style="position: relative;">
                        <img src="https://images.unsplash.com/photo-1500382017468-9049fed747ef?w=400&h=200&fit=crop" alt="Namibia sustainable agriculture 2025" style="width: 100%; height: 200px; object-fit: cover;">
                        <span style="position: absolute; top: 1rem; left: 1rem; background: var(--color-primary); color: white; padding: 0.25rem 0.75rem; border-radius: var(--radius-full); font-size: 0.75rem; font-weight: 600;">In Progress</span>
                    </div>
                    <div class="card-content">
                        <span class="text-muted" style="font-size: 0.875rem;">Namibia</span>
                        <h3 class="card-title">Leadership for Sustainable Agriculture</h3>
                        <p class="card-text">Empowering farmers with sustainable practices that benefit both livelihoods and wildlife.</p>
                        <div style="margin-bottom: 1rem;">
                            <div style="display: flex; justify-content: space-between; font-size: 0.875rem; margin-bottom: 0.5rem;">
                                <span>Progress</span>
                                <span style="color: var(--color-primary);">45%</span>
                            </div>
                            <div class="progress-bar">
                                <div class="progress-fill" style="width: 45%;"></div>
                            </div>
                        </div>
                        <div style="font-size: 0.875rem; color: var(--color-text-muted);">
                            Funder: Namibia Nature Foundation
                        </div>
                    </div>
                </div>

                <!-- Project 4: South Africa 2025 -->
                <div class="card animate-on-scroll" style="overflow: hidden;">
                    <div class="card-image" style="position: relative;">
                        <img src="https://images.unsplash.com/photo-1540573133985-87b6da6d54a9?w=400&h=200&fit=crop" alt="South Africa baboon coexistence 2025" style="width: 100%; height: 200px; object-fit: cover;">
                        <span style="position: absolute; top: 1rem; left: 1rem; background: var(--color-warning); color: var(--color-dark); padding: 0.25rem 0.75rem; border-radius: var(--radius-full); font-size: 0.75rem; font-weight: 600;">Seeking Funding</span>
                    </div>
                    <div class="card-content">
                        <span class="text-muted" style="font-size: 0.875rem;">South Africa</span>
                        <h3 class="card-title">Human-Baboon Coexistence Program</h3>
                        <p class="card-text">Addressing urban-wildlife interface challenges in Cape Town through community education.</p>
                        <div style="margin-bottom: 1rem;">
                            <div style="display: flex; justify-content: space-between; font-size: 0.875rem; margin-bottom: 0.5rem;">
                                <span>Funding</span>
                                <span style="color: var(--color-warning);">25%</span>
                            </div>
                            <div class="progress-bar">
                                <div class="progress-fill" style="width: 25%;"></div>
                            </div>
                        </div>
                        <a href="<?php echo esc_url( home_url( '/donate/' ) ); ?>" class="btn btn-primary btn-sm" style="width: 100%;">Fund This Project</a>
                    </div>
                </div>

                <!-- Placeholder -->
                <div class="card animate-on-scroll" style="overflow: hidden;">
                    <div class="card-image" style="position: relative;">
                        <img src="https://images.unsplash.com/photo-1531206715517-5c0ba140b2b8?w=400&h=200&fit=crop" alt="Join our community projects" style="width: 100%; height: 200px; object-fit: cover;">
                        <span style="position: absolute; top: 1rem; left: 1rem; background: var(--color-secondary); color: var(--color-dark); padding: 0.25rem 0.75rem; border-radius: var(--radius-full); font-size: 0.75rem; font-weight: 600;">Get Involved</span>
                    </div>
                    <div class="card-content">
                        <span class="text-muted" style="font-size: 0.875rem;">Your Location</span>
                        <h3 class="card-title">Want to Learn More?</h3>
                        <p class="card-text">We're always looking for new communities to partner with. Contact us to learn more.</p>
                        <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-primary btn-sm" style="width: 100%;">Contact Us</a>
                    </div>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </section>

    <!-- CTA -->
    <section class="cta-banner" style="background-image: url('https://images.unsplash.com/photo-1564760055775-d63b17a55c44?w=1920&q=80');">
        <div class="container">
            <div class="cta-banner-content">
                <h2>Want to Support Our Work?</h2>
                <p>Your funding helps communities transform their relationships with wildlife and build sustainable futures.</p>
                <div class="btn-group">
                    <a href="<?php echo esc_url( home_url( '/donate/' ) ); ?>" class="btn btn-primary btn-lg">Fund a Community</a>
                    <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-secondary btn-lg">Contact Us</a>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
