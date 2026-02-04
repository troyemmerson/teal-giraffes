<?php
/**
 * Template Name: Donate Page
 *
 * @package Teal_Giraffes
 */

get_header();
?>

<main id="main" class="site-main">
    <!-- Hero Section -->
    <section class="hero" style="min-height: 50vh;">
        <div class="hero-content">
            <h1 class="hero-title">Fund a Community in Need</h1>
            <p class="hero-subtitle">Your support transforms communities and creates lasting change for people and wildlife</p>
            <div class="hero-buttons">
                <a href="#projects-seeking-funding" class="btn btn-primary btn-lg">View Projects</a>
                <a href="#donate-form" class="btn btn-secondary btn-lg">Donate Now</a>
            </div>
        </div>
    </section>

    <!-- Funding Options -->
    <section class="section">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Ways to Give</h2>
                <p class="section-subtitle">Choose how you want to make an impact</p>
            </div>

            <div class="grid-3">
                <!-- Option 1: Fund a Program -->
                <div class="feature-card animate-on-scroll" style="text-align: left;">
                    <div class="feature-icon" style="margin: 0 0 1.5rem 0; background: var(--color-success);">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"/><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"/></svg>
                    </div>
                    <h3>Fund a Learning Program</h3>
                    <p>Support a complete 8-12 week social learning program for a community. Programs typically cost $10,000 - $25,000 depending on size and location.</p>
                    <ul style="list-style: none; padding: 0; margin-bottom: 1.5rem; font-size: 0.9375rem;">
                        <li style="display: flex; gap: 0.5rem; margin-bottom: 0.5rem;">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="var(--color-success)"><path d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z"/></svg>
                            <span>Full program funding</span>
                        </li>
                        <li style="display: flex; gap: 0.5rem; margin-bottom: 0.5rem;">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="var(--color-success)"><path d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z"/></svg>
                            <span>Regular impact updates</span>
                        </li>
                        <li style="display: flex; gap: 0.5rem;">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="var(--color-success)"><path d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z"/></svg>
                            <span>Recognition in reports</span>
                        </li>
                    </ul>
                    <a href="#projects-seeking-funding" class="btn btn-primary">View Projects</a>
                </div>

                <!-- Option 2: Program + Evaluation -->
                <div class="feature-card animate-on-scroll" style="text-align: left;">
                    <div class="feature-icon" style="margin: 0 0 1.5rem 0;">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                    </div>
                    <h3>Program + Evaluation</h3>
                    <p>Fund a program plus follow-up evaluation at 1 or 2 years. We've found that program impacts can increase over time as participants share their knowledge.</p>
                    <ul style="list-style: none; padding: 0; margin-bottom: 1.5rem; font-size: 0.9375rem;">
                        <li style="display: flex; gap: 0.5rem; margin-bottom: 0.5rem;">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="var(--color-success)"><path d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z"/></svg>
                            <span>Everything in basic funding</span>
                        </li>
                        <li style="display: flex; gap: 0.5rem; margin-bottom: 0.5rem;">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="var(--color-success)"><path d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z"/></svg>
                            <span>1-2 year follow-up evaluation</span>
                        </li>
                        <li style="display: flex; gap: 0.5rem;">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="var(--color-success)"><path d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z"/></svg>
                            <span>Long-term impact measurement</span>
                        </li>
                    </ul>
                    <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-primary">Contact Us</a>
                </div>

                <!-- Option 3: Fund Research -->
                <div class="feature-card animate-on-scroll" style="text-align: left;">
                    <div class="feature-icon" style="margin: 0 0 1.5rem 0; background: linear-gradient(135deg, var(--color-secondary) 0%, var(--color-primary-light) 100%);">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/></svg>
                    </div>
                    <h3>Fund a Research Project</h3>
                    <p>Support research that helps communities better understand and manage their human-wildlife challenges with evidence-based solutions.</p>
                    <ul style="list-style: none; padding: 0; margin-bottom: 1.5rem; font-size: 0.9375rem;">
                        <li style="display: flex; gap: 0.5rem; margin-bottom: 0.5rem;">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="var(--color-success)"><path d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z"/></svg>
                            <span>Support community-driven research</span>
                        </li>
                        <li style="display: flex; gap: 0.5rem; margin-bottom: 0.5rem;">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="var(--color-success)"><path d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z"/></svg>
                            <span>Published findings & reports</span>
                        </li>
                        <li style="display: flex; gap: 0.5rem;">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="var(--color-success)"><path d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z"/></svg>
                            <span>Actionable recommendations</span>
                        </li>
                    </ul>
                    <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-secondary">Inquire About Research</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Impact Section -->
    <section class="section section-primary">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title" style="color: white;">Your Impact</h2>
                <p class="section-subtitle">What your donation makes possible</p>
            </div>

            <div class="stats-grid">
                <div class="stat-item animate-on-scroll">
                    <div class="stat-number">$50</div>
                    <div class="stat-label">Provides learning materials for one participant</div>
                </div>
                <div class="stat-item animate-on-scroll">
                    <div class="stat-number">$250</div>
                    <div class="stat-label">Sponsors one week of program sessions</div>
                </div>
                <div class="stat-item animate-on-scroll">
                    <div class="stat-number">$1,000</div>
                    <div class="stat-label">Fully supports one participant through the program</div>
                </div>
                <div class="stat-item animate-on-scroll">
                    <div class="stat-number">$10,000</div>
                    <div class="stat-label">Funds a complete community program</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects Seeking Funding -->
    <section class="section section-light" id="projects-seeking-funding">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Projects Seeking Funding</h2>
                <p class="section-subtitle">Choose a community to support</p>
            </div>

                <!-- Give plugin not active - show placeholder -->
                <div class="grid-2" style="gap: 2rem;">
                    <div class="card animate-on-scroll" style="overflow: hidden;">
                        <div class="card-image" style="height: 200px;">
                            <img src="https://images.unsplash.com/photo-1540573133985-87b6da6d54a9?w=400&h=200&fit=crop" alt="Human-baboon coexistence in South Africa" style="width: 100%; height: 100%; object-fit: cover;">
                        </div>
                        <div class="card-content">
                            <span style="display: inline-block; background: var(--color-warning); color: var(--color-dark); padding: 0.25rem 0.75rem; border-radius: var(--radius-full); font-size: 0.75rem; font-weight: 600; margin-bottom: 0.75rem;">Seeking Funding</span>
                            <h3 class="card-title">Human-Baboon Coexistence - South Africa</h3>
                            <p class="card-text">Addressing urban-wildlife conflicts in Cape Town through community education and systems thinking.</p>
                            <div style="margin: 1rem 0;">
                                <div style="display: flex; justify-content: space-between; font-size: 0.8125rem; margin-bottom: 0.375rem;">
                                    <span>Raised: $5,000</span>
                                    <span style="color: var(--color-primary); font-weight: 600;">Goal: $20,000</span>
                                </div>
                                <div class="progress-bar">
                                    <div class="progress-fill" style="width: 25%;"></div>
                                </div>
                            </div>
                            <a href="#donate-form" class="btn btn-primary btn-sm">Donate to This Project</a>
                        </div>
                    </div>

                    <div class="card animate-on-scroll" style="overflow: hidden;">
                        <div class="card-image" style="height: 200px;">
                            <img src="https://images.unsplash.com/photo-1531206715517-5c0ba140b2b8?w=400&h=200&fit=crop" alt="Community gathering" style="width: 100%; height: 100%; object-fit: cover;">
                        </div>
                        <div class="card-content">
                            <span style="display: inline-block; background: var(--color-primary); color: white; padding: 0.25rem 0.75rem; border-radius: var(--radius-full); font-size: 0.75rem; font-weight: 600; margin-bottom: 0.75rem;">Get Involved</span>
                            <h3 class="card-title">Want to Learn More?</h3>
                            <p class="card-text">We're always looking for new communities to partner with. Contact us to learn about our programs.</p>
                            <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-primary btn-sm" style="margin-top: 0.5rem;">Contact Us</a>
                        </div>
                    </div>
                </div>

            <div class="text-center mt-4">
                <p class="text-muted"> <a href="<?php echo esc_url( home_url( '/projects/' ) ); ?>" class="btn btn-primary">View all projects</a></p>
            </div>
        </div>
    </section>

    <!-- Other Ways to Help -->
    <section class="section">
        <div class="container">
            <div class="cta-box" style="background: linear-gradient(135deg, var(--color-primary) 0%, var(--color-secondary) 100%);">
                <div style="position: absolute; top: -50%; right: -20%; width: 60%; height: 200%; background: radial-gradient(ellipse at center, rgba(255,255,255,0.1) 0%, transparent 70%); pointer-events: none;"></div>
                <h2 style="color: white; margin-bottom: 1rem; position: relative;">Other Ways to Help</h2>
                <p style="color: rgba(255,255,255,0.9); margin-bottom: 2rem; max-width: 600px; margin-left: auto; margin-right: auto; position: relative;">Can't donate right now? There are other ways you can support our mission.</p>
                <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap; position: relative;">
                    <a href="#" class="btn btn-secondary">Share Our Work</a>
                    <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-secondary" style="border-color: white; color: white;">Volunteer</a>
                    <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-secondary" style="border-color: white; color: white;">Corporate Partnership</a>
                </div>
            </div>
        </div>
    </section>
</main>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const amountButtons = document.querySelectorAll('.donation-amount');
    const customGroup = document.getElementById('custom-amount-group');

    amountButtons.forEach(function(btn) {
        btn.addEventListener('click', function() {
            // Remove active class from all buttons
            amountButtons.forEach(function(b) {
                b.classList.remove('btn-primary');
                b.classList.add('btn-secondary');
            });

            // Add active class to clicked button
            this.classList.remove('btn-secondary');
            this.classList.add('btn-primary');

            // Show/hide custom amount field
            if (this.dataset.amount === 'custom') {
                customGroup.style.display = 'block';
            } else {
                customGroup.style.display = 'none';
            }
        });
    });
});
</script>

<?php
get_footer();
