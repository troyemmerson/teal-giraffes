<?php
/**
 * Template Name: Contact Page
 *
 * @package Teal_Giraffes
 */

get_header();
?>

<main id="main" class="site-main">
    <!-- Hero Section -->
    <section class="hero hero-image" style="min-height: 50vh; background-image: url('https://images.unsplash.com/photo-1577896851231-70ef18881754?w=1920&q=80');">
        <div class="hero-content">
            <h1 class="hero-title">Contact Us</h1>
            <p class="hero-subtitle">Get in touch with our team - we'd love to hear from you</p>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="section">
        <div class="container">
            <div class="grid-2" style="gap: 4rem;">
                <!-- Contact Info -->
                <div class="animate-on-scroll">
                    <h2 class="mb-2">Let's Connect</h2>
                    <p>Whether you have questions about our programs, want to explore partnership opportunities, or just want to learn more about our work - we'd love to hear from you.</p>

                    <div style="margin-top: 2rem;">
                        <div style="display: flex; gap: 1rem; margin-bottom: 1.5rem; padding: 1.25rem; background: var(--color-gray-50); border-radius: var(--radius-lg);">
                            <div style="width: 50px; height: 50px; background: var(--color-primary); border-radius: var(--radius); display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                            </div>
                            <div>
                                <h4 style="margin-bottom: 0.25rem;">Email</h4>
                                <p style="margin: 0;"><a href="mailto:info@tealgiraffes.org" style="color: var(--color-primary);">info@tealgiraffes.org</a></p>
                            </div>
                        </div>

                        <div style="display: flex; gap: 1rem; margin-bottom: 1.5rem; padding: 1.25rem; background: var(--color-gray-50); border-radius: var(--radius-lg);">
                            <div style="width: 50px; height: 50px; background: var(--color-primary); border-radius: var(--radius); display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
                            </div>
                            <div>
                                <h4 style="margin-bottom: 0.25rem;">Location</h4>
                                <p style="margin: 0;">Working with communities worldwide</p>
                            </div>
                        </div>

                        <div style="display: flex; gap: 1rem; padding: 1.25rem; background: var(--color-gray-50); border-radius: var(--radius-lg);">
                            <div style="width: 50px; height: 50px; background: var(--color-primary); border-radius: var(--radius); display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                            </div>
                            <div>
                                <h4 style="margin-bottom: 0.5rem;">Follow Us</h4>
                                <div style="display: flex; gap: 0.5rem;">
                                    <a href="#" style="display: flex; align-items: center; justify-content: center; width: 30px; height: 30px; background: var(--color-primary); border-radius: var(--radius-full); color: white; transition: transform 0.2s ease;" onmouseover="this.style.transform='translateY(-2px)'" onmouseout="this.style.transform='translateY(0)'">
                                        <svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/></svg>
                                    </a>
                                    <a href="#" style="display: flex; align-items: center; justify-content: center; width: 30px; height: 30px; background: var(--color-primary); border-radius: var(--radius-full); color: white; transition: transform 0.2s ease;" onmouseover="this.style.transform='translateY(-2px)'" onmouseout="this.style.transform='translateY(0)'">
                                        <svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"/></svg>
                                    </a>
                                    <a href="#" style="display: flex; align-items: center; justify-content: center; width: 30px; height: 30px; background: var(--color-primary); border-radius: var(--radius-full); color: white; transition: transform 0.2s ease;" onmouseover="this.style.transform='translateY(-2px)'" onmouseout="this.style.transform='translateY(0)'">
                                        <svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"/><rect x="2" y="9" width="4" height="12"/><circle cx="4" cy="4" r="2"/></svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="animate-on-scroll">
                    <form class="contact-form" action="#" method="post" style="background: white; padding: 2.5rem; border-radius: var(--radius-lg); box-shadow: var(--shadow-lg);">
                        <h3 style="margin-bottom: 1.5rem;">Send us a Message</h3>

                        <div class="grid-2" style="gap: 1rem;">
                            <div class="form-group">
                                <label class="form-label">Your Name *</label>
                                <input type="text" name="name" class="form-control" required placeholder="John Doe">
                            </div>

                            <div class="form-group">
                                <label class="form-label">Email Address *</label>
                                <input type="email" name="email" class="form-control" required placeholder="john@example.com">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Subject *</label>
                            <select name="subject" class="form-control" required>
                                <option value="">Select a topic...</option>
                                <option value="general">General Inquiry</option>
                                <option value="programs">Learning Programs</option>
                                <option value="research">Research Support</option>
                                <option value="donation">Donation/Funding</option>
                                <option value="partnership">Partnership Opportunity</option>
                                <option value="media">Media/Press</option>
                                <option value="other">Other</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Message *</label>
                            <textarea name="message" class="form-control" required placeholder="How can we help you?" rows="5"></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary btn-lg" style="width: 100%;">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="section section-light">
        <div class="container container-narrow">
            <div class="section-header">
                <h2 class="section-title">Frequently Asked Questions</h2>
            </div>

            <div style="display: flex; flex-direction: column; gap: 1rem;">
                <div class="animate-on-scroll" style="background: white; padding: 1.5rem; border-radius: var(--radius-lg); box-shadow: var(--shadow-sm);">
                    <h4 style="margin-bottom: 0.75rem; display: flex; align-items: center; gap: 0.75rem;">
                        <span style="width: 28px; height: 28px; background: var(--color-primary); color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 0.875rem; flex-shrink: 0;">?</span>
                        How long are your programs?
                    </h4>
                    <p style="margin: 0; padding-left: 2.75rem;">Our social learning programs typically run for 8-12 weeks, with weekly sessions of approximately 4 hours each. This allows participants time to process, reflect, and apply what they learn.</p>
                </div>

                <div class="animate-on-scroll" style="background: white; padding: 1.5rem; border-radius: var(--radius-lg); box-shadow: var(--shadow-sm);">
                    <h4 style="margin-bottom: 0.75rem; display: flex; align-items: center; gap: 0.75rem;">
                        <span style="width: 28px; height: 28px; background: var(--color-primary); color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 0.875rem; flex-shrink: 0;">?</span>
                        Who can apply for a program?
                    </h4>
                    <p style="margin: 0; padding-left: 2.75rem;">Any community organization working on human-wildlife coexistence or environmental sustainability challenges can apply. We work with NGOs, community groups, and conservation organizations.</p>
                </div>

                <div class="animate-on-scroll" style="background: white; padding: 1.5rem; border-radius: var(--radius-lg); box-shadow: var(--shadow-sm);">
                    <h4 style="margin-bottom: 0.75rem; display: flex; align-items: center; gap: 0.75rem;">
                        <span style="width: 28px; height: 28px; background: var(--color-primary); color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 0.875rem; flex-shrink: 0;">?</span>
                        How is funding handled?
                    </h4>
                    <p style="margin: 0; padding-left: 2.75rem;">We act as mediators between funders and community organizations. Once your project is approved, it's listed on our platform for donors to discover and fund. We help with budgeting and financial management.</p>
                </div>

                <div class="animate-on-scroll" style="background: white; padding: 1.5rem; border-radius: var(--radius-lg); box-shadow: var(--shadow-sm);">
                    <h4 style="margin-bottom: 0.75rem; display: flex; align-items: center; gap: 0.75rem;">
                        <span style="width: 28px; height: 28px; background: var(--color-primary); color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 0.875rem; flex-shrink: 0;">?</span>
                        What is nonviolent communication?
                    </h4>
                    <p style="margin: 0; padding-left: 2.75rem;">Nonviolent communication (NVC) is a communication approach that promotes empathic connection. We use "giraffe language" that identifies universal needs and communicates with compassion, rather than "jackal language" that blames and criticizes.</p>
                </div>

                <div class="animate-on-scroll" style="background: white; padding: 1.5rem; border-radius: var(--radius-lg); box-shadow: var(--shadow-sm);">
                    <h4 style="margin-bottom: 0.75rem; display: flex; align-items: center; gap: 0.75rem;">
                        <span style="width: 28px; height: 28px; background: var(--color-primary); color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 0.875rem; flex-shrink: 0;">?</span>
                        Do participants receive certificates?
                    </h4>
                    <p style="margin: 0; padding-left: 2.75rem;">Yes! Participants who attend at least 70% of the sessions receive a certificate of participation on completion of the program. In each of our programs, at least 80% of participants have received a certificate.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-banner" style="background-image: url('https://images.unsplash.com/photo-1564760055775-d63b17a55c44?w=1920&q=80');">
        <div class="container">
            <div class="cta-banner-content">
                <h2>Ready to Get Started?</h2>
                <p>Whether you're a community seeking support or a donor looking to fund meaningful change, we're here to help.</p>
                <div class="btn-group">
                    <a href="<?php echo esc_url( home_url( '/about/' ) ); ?>" class="btn btn-primary btn-lg">Learn More</a>
                    <a href="<?php echo esc_url( home_url( '/donate/' ) ); ?>" class="btn btn-secondary btn-lg">Fund a Community</a>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
