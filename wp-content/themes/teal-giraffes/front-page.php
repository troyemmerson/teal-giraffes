<?php
/**
 * Homepage Template
 *
 * @package Teal_Giraffes
 */

get_header();
?>

<main id="main" class="site-main">
    <!-- Hero Section -->
    <section class="hero hero-image" style="background-image: url('https://images.unsplash.com/photo-1509099836639-18ba1795216d?w=1920&q=80');">
        <div class="hero-content">
            <h1 class="hero-title">Learning Based Solutions to <em>Environmental Sustainability</em> Challenges</h1>
            <p class="hero-subtitle">Changing minds and systems for a more sustainable planet through community-led transformation</p>
            <div class="hero-buttons">
                <a href="<?php echo esc_url( home_url( '/about/' ) ); ?>" class="btn btn-secondary btn-lg">Learn More</a>
                <a href="<?php echo esc_url( home_url( '/donate/' ) ); ?>" class="btn btn-primary btn-lg">Fund a Community</a>
            </div>
        </div>
    </section>

    <!-- What We Do Section -->
    <section class="section section-light">
        <div class="container">
            <div class="section-header">
                <span class="section-eyebrow">Our Approach</span>
                <h2 class="section-title">What We Do</h2>
                <p class="section-subtitle">Creating lasting change through education, research, and connection</p>
            </div>

            <div class="grid-3">
                <!-- Feature 1 -->
                <div class="feature-card animate-on-scroll">
                    <div class="feature-icon">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"/><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"/></svg>
                    </div>
                    <h3>Social Learning Programs</h3>
                    <p>Bespoke 8-12 week programs that create community change leaders through systems thinking, nonviolent communication, and sustainability science.</p>
                    <a href="<?php echo esc_url( home_url( '/about/' ) ); ?>" class="btn btn-secondary">Learn More</a>
                </div>

                <!-- Feature 2 -->
                <div class="feature-card animate-on-scroll">
                    <div class="feature-icon">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                    </div>
                    <h3>Community Matchmaking</h3>
                    <p>Connecting community organisations seeking learning programs with donors seeking meaningful projects to fund.</p>
                    <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-secondary">Get in Touch</a>
                </div>

                <!-- Feature 3 -->
                <div class="feature-card animate-on-scroll">
                    <div class="feature-icon">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/></svg>
                    </div>
                    <h3>Research Support</h3>
                    <p>Bridging the gap between communities and researchers to generate evidence-based solutions for environmental challenges.</p>
                    <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-secondary">Contact Us</a>
                </div>
            </div>
        </div>
    </section>

    <!-- The Problem Section -->
    <section class="section">
        <div class="container">
            <div class="two-col">
                <div class="two-col-content animate-on-scroll">
                    <h2>The Challenge We Face</h2>
                    <p>The world is facing multiple environmental crises - climate change, biodiversity loss, land degradation - as well as social challenges like poverty, inequality, and lack of political voice. These problems are "wicked" because they are complex and interconnected.</p>
                    <p>Living alongside wildlife presents particular challenges. When free-roaming wildlife damage crops, prey on livestock, or threaten human safety, conflicts arise - not just between people and wildlife, but between people about how to manage these situations.</p>
                    <a href="<?php echo esc_url( home_url( '/about/' ) ); ?>" class="btn btn-primary mt-3">Learn About Our Approach</a>
                </div>
                <div class="two-col-image animate-on-scroll">
                    <img src="https://images.unsplash.com/photo-1516426122078-c23e76319801?w=600&h=400&fit=crop" alt="Wildlife and community coexistence" style="width: 100%; height: 100%; object-fit: cover; border-radius: var(--radius-lg);">
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="section section-light">
        <div class="container">
            <div class="section-header">
                <span class="section-eyebrow">Testimonials</span>
                <h2 class="section-title">What Participants Say</h2>
                <p class="section-subtitle">Voices from our programs</p>
            </div>

            <div class="testimonial-slider" id="testimonial-slider">
                <div class="testimonial-slider-track">
                    <div class="testimonial-slide active">
                        <div class="testimonial">
                            <p class="testimonial-text">"The program changed how I see wildlife. I now understand that we share this land and can find ways to live together peacefully."</p>
                            <div class="testimonial-author">
                                <div class="testimonial-avatar"></div>
                                <div>
                                    <div class="testimonial-name">Program Participant</div>
                                    <div class="testimonial-role">Namibia 2022</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="testimonial-slide">
                        <div class="testimonial">
                            <p class="testimonial-text">"I learned to communicate without blame. This has helped not just with wildlife issues but with my family and community."</p>
                            <div class="testimonial-author">
                                <div class="testimonial-avatar"></div>
                                <div>
                                    <div class="testimonial-name">Community Leader</div>
                                    <div class="testimonial-role">Namibia 2023</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="testimonial-slide">
                        <div class="testimonial">
                            <p class="testimonial-text">"The systems thinking approach opened my eyes. I now see how everything is connected and how small changes can make big differences."</p>
                            <div class="testimonial-author">
                                <div class="testimonial-avatar"></div>
                                <div>
                                    <div class="testimonial-name">Farmer</div>
                                    <div class="testimonial-role">South Africa 2025</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="testimonial-slider-controls">
                    <button class="testimonial-slider-btn testimonial-slider-prev" aria-label="Previous testimonial">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="15 18 9 12 15 6"/></svg>
                    </button>
                    <div class="testimonial-slider-dots">
                        <button class="testimonial-dot active" data-slide="0" aria-label="Go to testimonial 1"></button>
                        <button class="testimonial-dot" data-slide="1" aria-label="Go to testimonial 2"></button>
                        <button class="testimonial-dot" data-slide="2" aria-label="Go to testimonial 3"></button>
                    </div>
                    <button class="testimonial-slider-btn testimonial-slider-next" aria-label="Next testimonial">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="9 18 15 12 9 6"/></svg>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- How It Works Section -->
    <section class="section">
        <div class="container">
            <div class="section-header">
                <span class="section-eyebrow">Get Started</span>
                <h2 class="section-title">How It Works</h2>
                <p class="section-subtitle">Simple steps to create lasting change</p>
            </div>

            <div class="grid-2" style="gap: 4rem;">
                <!-- For Communities -->
                <div class="animate-on-scroll">
                    <h3 style="color: var(--color-primary); margin-bottom: 1.5rem;">For Communities & NGOs</h3>
                    <div class="process-steps">
                        <div class="process-step">
                            <div class="step-number">1</div>
                            <div class="step-content">
                                <h4>Apply Online</h4>
                                <p>Submit your application describing your community's needs and human-wildlife context.</p>
                            </div>
                        </div>
                        <div class="process-step">
                            <div class="step-number">2</div>
                            <div class="step-content">
                                <h4>Consultation & Design</h4>
                                <p>We meet with you to design a customized program tailored to your community.</p>
                            </div>
                        </div>
                        <div class="process-step">
                            <div class="step-number">3</div>
                            <div class="step-content">
                                <h4>Get Matched With Funders</h4>
                                <p>Your project is listed for donors to discover and support.</p>
                            </div>
                        </div>
                    </div>
                    <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-primary mt-4">Contact Us</a>
                </div>

                <!-- For Donors -->
                <div class="animate-on-scroll">
                    <h3 style="color: var(--color-secondary); margin-bottom: 1.5rem;">For Donors</h3>
                    <div class="process-steps">
                        <div class="process-step">
                            <div class="step-number" style="background: var(--color-secondary);">1</div>
                            <div class="step-content">
                                <h4>Browse Projects</h4>
                                <p>Explore vetted community projects seeking funding support.</p>
                            </div>
                        </div>
                        <div class="process-step">
                            <div class="step-number" style="background: var(--color-secondary);">2</div>
                            <div class="step-content">
                                <h4>Choose Your Impact</h4>
                                <p>Select a project and funding level that resonates with you.</p>
                            </div>
                        </div>
                        <div class="process-step">
                            <div class="step-number" style="background: var(--color-secondary);">3</div>
                            <div class="step-content">
                                <h4>See Your Impact</h4>
                                <p>Receive updates on the community you've helped transform.</p>
                            </div>
                        </div>
                    </div>
                    <a href="<?php echo esc_url( home_url( '/donate/' ) ); ?>" class="btn btn-primary mt-4">Fund a Community</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects Preview Section -->
    <section class="section">
        <div class="container">
            <div class="section-header">
                <span class="section-eyebrow">Featured Work</span>
                <h2 class="section-title">Our Projects</h2>
                <p class="section-subtitle">Communities we've worked with</p>
            </div>

            <div class="grid-3">
                <!-- Project 1 -->
                <div class="card animate-on-scroll">
                    <div class="card-image">
                        <img src="https://images.unsplash.com/photo-1547471080-7cc2caa01a7e?w=400&h=250&fit=crop" alt="Namibia wildlife project" style="width: 100%; height: 100%; object-fit: cover;">
                    </div>
                    <div class="card-content">
                        <span class="card-meta">Namibia</span>
                        <h3 class="card-title">Human-Wildlife Coexistence Program</h3>
                        <p class="card-text">Social learning program focused on transforming conflict into coexistence.</p>
                        <div class="card-footer">
                            <span class="text-muted">2019-2023</span>
                            <a href="#" class="btn btn-secondary btn-sm">Learn More</a>
                        </div>
                    </div>
                </div>

                <!-- Project 2 -->
                <div class="card animate-on-scroll">
                    <div class="card-image">
                        <img src="https://images.unsplash.com/photo-1500382017468-9049fed747ef?w=400&h=250&fit=crop" alt="Sustainable agriculture in Namibia" style="width: 100%; height: 100%; object-fit: cover;">
                    </div>
                    <div class="card-content">
                        <span class="card-meta">Namibia</span>
                        <h3 class="card-title">Sustainable Agriculture Leadership</h3>
                        <p class="card-text">Leadership program for sustainable farming practices and environmental stewardship.</p>
                        <div class="card-footer">
                            <span class="text-muted">2025</span>
                            <a href="#" class="btn btn-secondary btn-sm">Learn More</a>
                        </div>
                    </div>
                </div>

                <!-- Project 3 -->
                <div class="card animate-on-scroll">
                    <div class="card-image">
                        <img src="https://images.unsplash.com/photo-1540573133985-87b6da6d54a9?w=400&h=250&fit=crop" alt="Human-baboon coexistence project" style="width: 100%; height: 100%; object-fit: cover;">
                    </div>
                    <div class="card-content">
                        <span class="card-meta">South Africa</span>
                        <h3 class="card-title">Human-Baboon Coexistence</h3>
                        <p class="card-text">Addressing urban-wildlife interface challenges through community education.</p>
                        <div class="card-footer">
                            <span class="text-muted">2025</span>
                            <a href="#" class="btn btn-secondary btn-sm">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center mt-4">
                <a href="<?php echo esc_url( home_url( '/projects/' ) ); ?>" class="btn btn-primary btn-lg">View All Projects</a>
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
    <section class="section">
        <div class="container">
            <div class="cta-box">
                <h2>Ready to Make a Difference?</h2>
                <p>Whether you're a community seeking support or a donor looking to fund meaningful change, we're here to help.</p>
                <div class="btn-group">
                    <a href="<?php echo esc_url( home_url( '/about/' ) ); ?>" class="btn btn-secondary btn-lg">Learn More</a>
                    <a href="<?php echo esc_url( home_url( '/donate/' ) ); ?>" class="btn btn-primary btn-lg">Fund a Community</a>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
