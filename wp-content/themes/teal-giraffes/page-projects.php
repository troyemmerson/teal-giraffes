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
    <section class="hero" style="min-height: 40vh;">
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
                                    <div class="placeholder-image" style="height: 200px;"><?php the_title(); ?></div>
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
                                <a href="<?php the_permalink(); ?>" class="btn btn-success btn-sm" style="width: 100%;">Donate to This Project</a>
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
                        <div class="placeholder-image" style="height: 200px;">Namibia 2019</div>
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
                        <div class="placeholder-image" style="height: 200px;">Namibia 2022</div>
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
                        <div class="placeholder-image" style="height: 200px;">Namibia 2025</div>
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
                        <div class="placeholder-image" style="height: 200px;">South Africa 2025</div>
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
                        <a href="<?php echo esc_url( home_url( '/donate/' ) ); ?>" class="btn btn-success btn-sm" style="width: 100%;">Fund This Project</a>
                    </div>
                </div>

                <!-- Placeholder -->
                <div class="card animate-on-scroll" style="overflow: hidden;">
                    <div class="card-image" style="position: relative;">
                        <div class="placeholder-image" style="height: 200px;">Your Project</div>
                        <span style="position: absolute; top: 1rem; left: 1rem; background: var(--color-secondary); color: var(--color-dark); padding: 0.25rem 0.75rem; border-radius: var(--radius-full); font-size: 0.75rem; font-weight: 600;">Apply Now</span>
                    </div>
                    <div class="card-content">
                        <span class="text-muted" style="font-size: 0.875rem;">Your Location</span>
                        <h3 class="card-title">Your Community Could Be Next</h3>
                        <p class="card-text">We're always looking for new communities to partner with. Apply now to be considered.</p>
                        <a href="<?php echo esc_url( home_url( '/apply/' ) ); ?>" class="btn btn-primary btn-sm" style="width: 100%;">Apply for a Program</a>
                    </div>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="section section-light">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">What Participants Say</h2>
                <p class="section-subtitle">Voices from our programs</p>
            </div>

            <div class="grid-3">
                <div class="testimonial animate-on-scroll">
                    <p class="testimonial-text">"The program taught me to see wildlife differently. Instead of enemies destroying my crops, I now see them as neighbors we need to learn to live with."</p>
                    <div class="testimonial-author">
                        <div class="testimonial-avatar"></div>
                        <div>
                            <div class="testimonial-name">Community Farmer</div>
                            <div class="testimonial-role">Namibia Program</div>
                        </div>
                    </div>
                </div>

                <div class="testimonial animate-on-scroll">
                    <p class="testimonial-text">"Learning nonviolent communication changed everything - not just how I deal with wildlife issues, but how I communicate with my family and community."</p>
                    <div class="testimonial-author">
                        <div class="testimonial-avatar"></div>
                        <div>
                            <div class="testimonial-name">Community Leader</div>
                            <div class="testimonial-role">Governance Program</div>
                        </div>
                    </div>
                </div>

                <div class="testimonial animate-on-scroll">
                    <p class="testimonial-text">"The systems thinking approach opened my eyes. I now see how everything is connected and how small changes can make big differences."</p>
                    <div class="testimonial-author">
                        <div class="testimonial-avatar"></div>
                        <div>
                            <div class="testimonial-name">Program Graduate</div>
                            <div class="testimonial-role">Namibia 2023</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center mt-4">
                <a href="<?php echo esc_url( home_url( '/impacts/' ) ); ?>" class="btn btn-secondary btn-lg">See All Impact Stories</a>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="section">
        <div class="container">
            <div style="background: linear-gradient(135deg, var(--color-primary) 0%, var(--color-secondary) 100%); border-radius: var(--radius-xl); padding: 4rem 2rem; text-align: center; color: white; position: relative; overflow: hidden;">
                <div style="position: absolute; top: -50%; right: -20%; width: 60%; height: 200%; background: radial-gradient(ellipse at center, rgba(255,255,255,0.1) 0%, transparent 70%); pointer-events: none;"></div>
                <h2 style="color: white; margin-bottom: 1rem; position: relative;">Want to Support Our Work?</h2>
                <p style="color: rgba(255,255,255,0.9); margin-bottom: 2rem; max-width: 600px; margin-left: auto; margin-right: auto; position: relative;">Your funding helps communities transform their relationships with wildlife and build sustainable futures.</p>
                <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap; position: relative;">
                    <a href="<?php echo esc_url( home_url( '/donate/' ) ); ?>" class="btn btn-white btn-lg">Fund a Community</a>
                    <a href="<?php echo esc_url( home_url( '/apply/' ) ); ?>" class="btn btn-secondary btn-lg" style="border-color: white; color: white;">Apply for a Program</a>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
