<?php
/**
 * Template Name: The Problem
 *
 * @package Teal_Giraffes
 */

get_header();
?>

<main id="main" class="site-main">
    <!-- Page Hero -->
    <section class="page-hero page-hero-image" style="background-image: url('https://images.unsplash.com/photo-1516426122078-c23e76319801?w=1920&q=80');">
        <div class="container">
            <h1>The Problem</h1>
            <p>Understanding the complex challenges at the intersection of people, wildlife, and the environment</p>
        </div>
    </section>

    <!-- The Challenge -->
    <section class="section">
        <div class="container">
            <div class="two-col">
                <div class="two-col-content animate-on-scroll">
                    <span class="section-eyebrow">The Challenge</span>
                    <h2>Wicked Problems Require New Thinking</h2>
                    <p>The world is facing multiple environmental crises - climate change, biodiversity loss, land degradation - as well as social challenges like poverty, inequality, and lack of political voice. These problems are "wicked" because they are complex and interconnected.</p>
                    <p>Living alongside wildlife presents particular challenges. When free-roaming wildlife damage crops, prey on livestock, or threaten human safety, conflicts arise - not just between people and wildlife, but between people about how to manage these situations.</p>
                </div>
                <div class="two-col-image animate-on-scroll">
                    <img src="https://images.unsplash.com/photo-1516426122078-c23e76319801?w=600&h=400&fit=crop" alt="Wildlife and community coexistence" style="width: 100%; height: 100%; object-fit: cover; border-radius: var(--radius-lg);">
                </div>
            </div>
        </div>
    </section>

    <!-- Why It Matters -->
    <section class="section section-light">
        <div class="container">
            <div class="two-col">
                <div class="two-col-image animate-on-scroll">
                    <img src="https://images.unsplash.com/photo-1474511320723-9a56873571b7?w=600&h=400&fit=crop" alt="Community and environmental challenges" style="width: 100%; height: 100%; object-fit: cover; border-radius: var(--radius-lg);">
                </div>
                <div class="two-col-content animate-on-scroll">
                    <span class="section-eyebrow">Why It Matters</span>
                    <h2>Communities at the Frontline</h2>
                    <p>Rural communities in developing countries bear the greatest burden of human-wildlife conflict. They often lack the resources, knowledge, and political voice to address these challenges effectively.</p>
                    <p>Traditional top-down conservation approaches frequently fail because they don't account for the complex social dynamics and lived experiences of the people most affected.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- The Gap -->
    <section class="section">
        <div class="container">
            <div class="section-header">
                <span class="section-eyebrow">The Gap</span>
                <h2 class="section-title">What's Missing</h2>
                <p class="section-subtitle">Current approaches often overlook the human dimension of environmental challenges</p>
            </div>

            <div class="grid-3">
                <div class="feature-card animate-on-scroll">
                    <div class="feature-icon">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>
                    </div>
                    <h3>Systems Disconnect</h3>
                    <p>Environmental problems are treated in isolation, ignoring the interconnected social, economic, and ecological systems they exist within.</p>
                </div>

                <div class="feature-card animate-on-scroll">
                    <div class="feature-icon">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><line x1="17" y1="11" x2="23" y2="11"/></svg>
                    </div>
                    <h3>Community Exclusion</h3>
                    <p>The people most affected by environmental challenges are rarely given a meaningful role in designing and implementing solutions.</p>
                </div>

                <div class="feature-card animate-on-scroll">
                    <div class="feature-icon">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"/><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"/></svg>
                    </div>
                    <h3>Knowledge Gap</h3>
                    <p>There is a disconnect between scientific research and the practical knowledge communities need to create lasting change.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="section">
        <div class="container">
            <div class="cta-box">
                <h2>There Is a Better Way</h2>
                <p>Teal Giraffes bridges this gap through social learning programs that empower communities to create their own solutions.</p>
                <div class="btn-group">
                    <a href="<?php echo esc_url( home_url( '/about/' ) ); ?>" class="btn btn-secondary btn-lg">Our Approach</a>
                    <a href="<?php echo esc_url( home_url( '/projects/' ) ); ?>" class="btn btn-primary btn-lg">See Our Work</a>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
