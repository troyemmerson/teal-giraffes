<?php
/**
 * Template Name: About Page
 *
 * @package Teal_Giraffes
 */

get_header();
?>

<main id="main" class="site-main">
    <!-- Hero Section -->
    <section class="hero hero-image" style="min-height: 50vh; background-image: url('https://images.unsplash.com/photo-1516426122078-c23e76319801?w=1920&q=80');">
        <div class="hero-content">
            <h1 class="hero-title">Who We Are</h1>
            <p class="hero-subtitle">Teal Giraffes - Transforming human-wildlife conflict into coexistence through learning and compassion</p>
        </div>
    </section>

    <!-- Mission Section -->
    <section class="section">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Our Mission</h2>
                <p class="section-subtitle">Teal Giraffes was created with three goals in mind</p>
            </div>

            <div class="grid-3">
                <div class="feature-card animate-on-scroll">
                    <div class="feature-icon">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"/><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"/></svg>
                    </div>
                    <h3>Bespoke Learning Programs</h3>
                    <p>To create bespoke learning programs for community organisations to address environmental sustainability problems</p>
                </div>

                <div class="feature-card animate-on-scroll">
                    <div class="feature-icon">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                    </div>
                    <h3>Research Connections</h3>
                    <p>To provide a platform for community organisations and researchers to connect with each other to assist communities with their research needs</p>
                </div>

                <div class="feature-card animate-on-scroll">
                    <div class="feature-icon">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg>
                    </div>
                    <h3>Funding Connections</h3>
                    <p>To provide a platform for donors and funders to connect with community organisations and researchers to fund a learning program or research project</p>
                </div>
            </div>
        </div>
    </section>

    <!-- What's in the Name Section -->
    <section class="section section-light">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">What's in the Name?</h2>
            </div>

            <div class="grid-2" style="gap: 3rem;">
                <!-- Giraffe -->
                <div class="animate-on-scroll" style="text-align: center; padding: 2rem;">
                    <div style="width: 120px; height: 120px; background: var(--color-primary); border-radius: 50%; margin: 0 auto 1.5rem; display: flex; align-items: center; justify-content: center;">
                        <svg width="60" height="60" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg>
                    </div>
                    <h3 style="color: var(--color-primary); font-size: 1.75rem; margin-bottom: 1rem;">Giraffe</h3>
                    <p style="font-size: 1.0625rem;">Giraffe speaks to the metaphor used in nonviolent communication to refer to compassionate or empathic communication - in contrast to "Jackal language" which is judgemental and critical.</p>
                    <p style="font-size: 1.0625rem; margin-top: 1rem;">The reference to giraffe language underscores the basis of our programs to create <strong>change leaders who lead with empathy and consideration</strong> for both people, wildlife, and the environment.</p>
                    <div style="background: white; padding: 1rem; border-radius: var(--radius); margin-top: 1.5rem; border-left: 4px solid var(--color-primary);">
                        <p style="margin: 0; font-style: italic; color: var(--color-text-light);">Giraffes have the biggest heart of any land mammal and see things from a higher perspective.</p>
                    </div>
                </div>

                <!-- Teal -->
                <div class="animate-on-scroll" style="text-align: center; padding: 2rem;">
                    <div style="width: 120px; height: 120px; background: var(--color-primary); border-radius: 50%; margin: 0 auto 1.5rem; display: flex; align-items: center; justify-content: center;">
                        <svg width="60" height="60" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2"><circle cx="12" cy="12" r="10"/><circle cx="12" cy="12" r="6"/><circle cx="12" cy="12" r="2"/></svg>
                    </div>
                    <h3 style="color: var(--color-primary); font-size: 1.75rem; margin-bottom: 1rem;">Teal</h3>
                    <p style="font-size: 1.0625rem;">Teal refers to one of the five colour types of governance structure based on the work of Frederick Laloux published in his book <em>"Reinventing Organisations"</em>.</p>
                    <p style="font-size: 1.0625rem; margin-top: 1rem;"><strong>TEAL</strong> is the most recent type of organisation structure, viewing organisations as complex systems with values of freedom, independence, equality, collaboration, trust, responsibility, reaching one's full potential, and contributing to making the world a better place.</p>
                    <div style="background: white; padding: 1rem; border-radius: var(--radius); margin-top: 1.5rem; border-left: 4px solid var(--color-primary);">
                        <p style="margin: 0; font-style: italic; color: var(--color-text-light);">Self-organising teams with no hierarchical structure, where each team is responsible for doing specific tasks collaboratively.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Founder Section -->
    <section class="challenge-section" style="background-image: url('https://images.unsplash.com/photo-1474511320723-9a56873571b7?w=1920&q=80');">
        <div class="container">
            <div class="two-col" style="gap: 4rem; align-items: center;">
                <div class="two-col-image animate-on-scroll">
                    <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?w=400&h=400&fit=crop" alt="Dr. Ruth Kansky - Founder" style="aspect-ratio: 1; border-radius: var(--radius-lg); border: 4px solid rgba(255,255,255,0.3); width: 100%; object-fit: cover;">
                </div>
                <div class="two-col-content animate-on-scroll" style="color: white;">
                    <h2 style="color: white; margin-bottom: 0.5rem;">Meet the Founder</h2>
                    <h3 style="color: var(--color-secondary); margin-bottom: 1.5rem;">Dr. Ruth Kansky</h3>
                    <p style="color: rgba(255,255,255,0.9);">Ruth Kansky is the director and founder of Teal Giraffes. With extensive research experience in human-wildlife coexistence across multiple continents, she combines scientific rigor with practical community-based approaches.</p>
                    <p style="color: rgba(255,255,255,0.9);">Her work has been published in leading conservation journals and has directly informed the development of our innovative social learning programs.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Approach Section -->
    <section class="section section-light">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Our Approach</h2>
                <p class="section-subtitle">Four integrated frameworks that drive lasting change</p>
            </div>

            <div class="grid-2">
                <!-- Systems Thinking -->
                <div class="feature-card animate-on-scroll" style="text-align: left;">
                    <h3 style="display: flex; align-items: center; gap: 0.75rem;">
                        <span style="width: 40px; height: 40px; background: var(--color-primary); color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4"/><path d="M12 8h.01"/></svg>
                        </span>
                        Systems Thinking
                    </h3>
                    <p>We recognize that problems occur within wider contexts with many interconnected parts. Like the blind men and the elephant, we need to see the whole system - not just individual pieces - to understand and address complex challenges.</p>
                </div>

                <!-- Learning Based Approaches -->
                <div class="feature-card animate-on-scroll" style="text-align: left;">
                    <h3 style="display: flex; align-items: center; gap: 0.75rem;">
                        <span style="width: 40px; height: 40px; background: var(--color-primary); color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"/><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"/></svg>
                        </span>
                        Learning Together
                    </h3>
                    <p>Many brains contribute more than one. We form social learning groups of up to 20 participants who learn together and collaborate to find solutions, then share their knowledge with the wider community.</p>
                </div>

                <!-- Nonviolent Communication -->
                <div class="feature-card animate-on-scroll" style="text-align: left;">
                    <h3 style="display: flex; align-items: center; gap: 0.75rem;">
                        <span style="width: 40px; height: 40px; background: var(--color-primary); color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg>
                        </span>
                        Nonviolent Communication
                    </h3>
                    <p>Our pioneering approach uses "giraffe language" - communication that promotes empathic connection between people. This increases tolerance, understanding, and collaboration while reducing conflict.</p>
                </div>

                <!-- Sustainability Science -->
                <div class="feature-card animate-on-scroll" style="text-align: left;">
                    <h3 style="display: flex; align-items: center; gap: 0.75rem;">
                        <span style="width: 40px; height: 40px; background: var(--color-primary); color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/></svg>
                        </span>
                        Sustainability Science
                    </h3>
                    <p>We bring awareness to global environmental challenges and how they impact local systems. This allows participants to see the bigger picture and plan for a sustainable future for both people and wildlife.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Newsletter Section -->
    <section class="newsletter">
        <div class="container">
            <h2>Stay Connected</h2>
            <p>Hear updates on our work, individual stories, new programs and their impacts</p>
            <form class="newsletter-form" action="#" method="post">
                <input type="email" name="email" placeholder="Enter your email" required>
                <button type="submit">Subscribe</button>
            </form>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-banner" style="background-image: url('https://images.unsplash.com/photo-1564760055775-d63b17a55c44?w=1920&q=80');">
        <div class="container">
            <div class="cta-banner-content">
                <h2>Join Our Mission</h2>
                <p>Whether you're a community seeking support, a researcher looking to collaborate, or a donor wanting to make an impact - we'd love to hear from you.</p>
                <div class="btn-group">
                    <a href="<?php echo esc_url( home_url( '/donate/' ) ); ?>" class="btn btn-primary btn-lg">Fund a Community</a>
                    <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-secondary btn-lg">Get in Touch</a>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
