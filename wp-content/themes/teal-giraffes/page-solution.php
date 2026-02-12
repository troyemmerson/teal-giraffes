<?php
/**
 * Template Name: Our Solution Page
 *
 * @package Teal_Giraffes
 */

get_header();
?>

<main id="main" class="site-main">
    <!-- Hero Section -->
    <section class="hero hero-image" style="min-height: 50vh; background-image: url('https://images.unsplash.com/photo-1531206715517-5c0ba140b2b8?w=1920&q=80');">
        <div class="hero-content">
            <h1 class="hero-title">Our Solution</h1>
            <p class="hero-subtitle">Bespoke learning programs that transform human-wildlife conflict into coexistence</p>
        </div>
    </section>

    <!-- Three Goals Section -->
    <section class="section">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">What We Do</h2>
                <p class="section-subtitle">At Teal Giraffes we have three goals</p>
            </div>

            <div class="grid-3">
                <div class="feature-card animate-on-scroll">
                    <div class="feature-icon">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"/><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"/></svg>
                    </div>
                    <h3>Bespoke Learning Programs</h3>
                    <p>Create customized learning programs for community organisations to address environmental sustainability problems with a focus on human-wildlife systems.</p>
                </div>

                <div class="feature-card animate-on-scroll">
                    <div class="feature-icon">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                    </div>
                    <h3>Community-Researcher Connections</h3>
                    <p>Provide a platform for community organisations and researchers to connect with each other to assist communities with their research needs.</p>
                </div>

                <div class="feature-card animate-on-scroll">
                    <div class="feature-icon">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg>
                    </div>
                    <h3>Donor-Community Matchmaking</h3>
                    <p>Connect donors and funders with community organisations and researchers to fund learning programs and research projects.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Coexistence Definition Section -->
    <section class="challenge-section" style="background-image: url('https://images.unsplash.com/photo-1547471080-7cc2caa01a7e?w=1920&q=80');">
        <div class="container">
            <div class="section-header" style="max-width: 100%;">
                <h2 class="section-title" style="color: white;">Our Vision of Coexistence</h2>
                <p class="section-subtitle" style="color: rgba(255,255,255,0.9);">We aim to transform human-wildlife conflict into human-wildlife coexistence</p>
            </div>

            <div class="grid-3" style="gap: 2rem;">
                <div class="animate-on-scroll" style="background: rgba(255,255,255,0.1); padding: 2rem; border-radius: var(--radius-lg); text-align: center;">
                    <div style="width: 60px; height: 60px; background: rgba(255,255,255,0.2); border-radius: 50%; margin: 0 auto 1rem; display: flex; align-items: center; justify-content: center;">
                        <svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                    </div>
                    <h4 style="color: white; margin-bottom: 0.5rem;">Respectful Collaboration</h4>
                    <p style="color: rgba(255,255,255,0.9); margin: 0;">Stakeholders collaborate in a respectful manner to manage human-wildlife interactions</p>
                </div>

                <div class="animate-on-scroll" style="background: rgba(255,255,255,0.1); padding: 2rem; border-radius: var(--radius-lg); text-align: center;">
                    <div style="width: 60px; height: 60px; background: rgba(255,255,255,0.2); border-radius: 50%; margin: 0 auto 1rem; display: flex; align-items: center; justify-content: center;">
                        <svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                    </div>
                    <h4 style="color: white; margin-bottom: 0.5rem;">Motivated Communities</h4>
                    <p style="color: rgba(255,255,255,0.9); margin: 0;">Communities are motivated to implement strategies to reduce negative impacts from wildlife</p>
                </div>

                <div class="animate-on-scroll" style="background: rgba(255,255,255,0.1); padding: 2rem; border-radius: var(--radius-lg); text-align: center;">
                    <div style="width: 60px; height: 60px; background: rgba(255,255,255,0.2); border-radius: 50%; margin: 0 auto 1rem; display: flex; align-items: center; justify-content: center;">
                        <svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/></svg>
                    </div>
                    <h4 style="color: white; margin-bottom: 0.5rem;">Sustainable Solutions</h4>
                    <p style="color: rgba(255,255,255,0.9); margin: 0;">Solutions emerge that align with both human and wildlife wellbeing and environmental sustainability</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Four Frameworks Section -->
    <section class="section">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Our Four Frameworks</h2>
                <p class="section-subtitle">The integrated approaches that make our programs effective</p>
            </div>

            <div class="grid-2" style="gap: 2rem;">
                <!-- Systems Thinking -->
                <div class="feature-card animate-on-scroll" style="text-align: left; padding: 2rem;">
                    <h3 style="display: flex; align-items: center; gap: 0.75rem; margin-bottom: 1rem;">
                        <span style="width: 50px; height: 50px; background: var(--color-primary); color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><circle cx="12" cy="12" r="6"/><circle cx="12" cy="12" r="2"/></svg>
                        </span>
                        Systems Thinking
                    </h3>
                    <p>System thinking is an approach that emerged as a solution to dealing with "wicked" or complex problems. The problem is investigated with recognition that it occurs within a wider context or system where there are many moving parts that interact in complex and often unpredictable ways.</p>
                    <div style="background: var(--color-gray-50); padding: 1rem; border-radius: var(--radius); margin-top: 1rem; border-left: 4px solid var(--color-primary);">
                        <p style="margin: 0; font-style: italic; color: var(--color-text-light);">"Systems thinking is a discipline for seeing wholes rather than parts, for seeing patterns of change rather than static snapshots, and for understanding the subtle interconnectedness that gives living systems their unique character"</p>
                        <p style="margin: 0.5rem 0 0 0; font-weight: 600; color: var(--color-primary);">- Peter Senge</p>
                    </div>
                    <p style="margin-top: 1rem;">Like the six blind men feeling an elephant - each person feels a different part thinking the tail is a rope, the trunk is a snake, or the tusks are spears - unable to see that the relationships and interconnections between different parts make up the whole "system".</p>
                </div>

                <!-- Learning Based Approaches -->
                <div class="feature-card animate-on-scroll" style="text-align: left; padding: 2rem;">
                    <h3 style="display: flex; align-items: center; gap: 0.75rem; margin-bottom: 1rem;">
                        <span style="width: 50px; height: 50px; background: var(--color-primary); color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"/><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"/></svg>
                        </span>
                        Learning Based Approaches
                    </h3>
                    <p>Learning together and from each other is often proposed as a useful approach to address complex problems because many brains can contribute to understanding an issue and proposing solutions compared to the one brain of a leader.</p>
                    <div style="background: var(--color-gray-50); padding: 1rem; border-radius: var(--radius); margin-top: 1rem;">
                        <h4 style="margin: 0 0 0.5rem 0;">Program Structure:</h4>
                        <ul style="list-style: none; padding: 0; margin: 0;">
                            <li style="display: flex; gap: 0.5rem; margin-bottom: 0.5rem;">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="var(--color-success)"><path d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z"/></svg>
                                <span>Groups of up to 20 participants</span>
                            </li>
                            <li style="display: flex; gap: 0.5rem; margin-bottom: 0.5rem;">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="var(--color-success)"><path d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z"/></svg>
                                <span>8-12 weekly sessions, 4 hours each</span>
                            </li>
                            <li style="display: flex; gap: 0.5rem; margin-bottom: 0.5rem;">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="var(--color-success)"><path d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z"/></svg>
                                <span>Time to process, reflect, and apply</span>
                            </li>
                            <li style="display: flex; gap: 0.5rem;">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="var(--color-success)"><path d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z"/></svg>
                                <span>Certificates for 70%+ attendance</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Nonviolent Communication -->
                <div class="feature-card animate-on-scroll" style="text-align: left; padding: 2rem;">
                    <h3 style="display: flex; align-items: center; gap: 0.75rem; margin-bottom: 1rem;">
                        <span style="width: 50px; height: 50px; background: var(--color-primary); color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg>
                        </span>
                        Nonviolent Communication
                    </h3>
                    <p>The most innovative component of our approach is combining training in nonviolent communication. This tool was developed by clinical psychologist Marshall Rosenberg in the 1960s.</p>
                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1rem; margin-top: 1rem;">
                        <div style="background: #fee2e2; padding: 1rem; border-radius: var(--radius);">
                            <h4 style="color: var(--color-danger); margin: 0 0 0.5rem 0;">"Jackal" Language</h4>
                            <p style="margin: 0; font-size: 0.9375rem;">Blaming, criticising, and judging words that create disconnection between people</p>
                        </div>
                        <div style="background: #d1fae5; padding: 1rem; border-radius: var(--radius);">
                            <h4 style="color: var(--color-success); margin: 0 0 0.5rem 0;">"Giraffe" Language</h4>
                            <p style="margin: 0; font-size: 0.9375rem;">Identifies universal needs, listens and communicates with compassion</p>
                        </div>
                    </div>
                    <p style="margin-top: 1rem;"><strong>Key Innovation:</strong> We've adapted this tool to increase empathy, tolerance, and non-monetary value for wildlife - resulting in multiple positive impacts beyond human-wildlife coexistence.</p>
                </div>

                <!-- Environmental Sustainability -->
                <div class="feature-card animate-on-scroll" style="text-align: left; padding: 2rem;">
                    <h3 style="display: flex; align-items: center; gap: 0.75rem; margin-bottom: 1rem;">
                        <span style="width: 50px; height: 50px; background: var(--color-primary); color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/></svg>
                        </span>
                        Environmental Sustainability
                    </h3>
                    <p>Bringing awareness to wider global environmental sustainability problems and how they are impacting the specific human-wildlife system of interest is another focus of our programs.</p>
                    <p>This allows participants to:</p>
                    <ul style="list-style: none; padding: 0; margin: 1rem 0 0 0;">
                        <li style="display: flex; gap: 0.5rem; margin-bottom: 0.5rem;">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="var(--color-success)"><path d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z"/></svg>
                            <span>See the bigger picture of global challenges</span>
                        </li>
                        <li style="display: flex; gap: 0.5rem; margin-bottom: 0.5rem;">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="var(--color-success)"><path d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z"/></svg>
                            <span>Understand how climate change, pollution, and population growth impact their systems</span>
                        </li>
                        <li style="display: flex; gap: 0.5rem;">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="var(--color-success)"><path d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z"/></svg>
                            <span>Plan for the future with sustainability in mind</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Approach Section -->
    <section class="section section-light">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Our Approach</h2>
                <p class="section-subtitle">Empowering grassroots change leaders</p>
            </div>

            <div class="two-col" style="gap: 3rem;">
                <div class="two-col-content animate-on-scroll">
                    <p>Our programs target communities who share landscapes with wildlife and we recruit <strong>volunteers who would like to be change leaders</strong> in their communities.</p>
                    <p>These change leaders promote societal transformation towards sustainable human-wildlife social-ecological systems where people and wildlife share the landscape in mutual coexistence.</p>
                    <h4 style="margin: 0 0 0.75rem 0; color: var(--color-primary);">Why Grassroots Focus?</h4>
                    <p style="margin: 0;">While we often invite other stakeholders such as those already in leadership positions, these people are often not available for the 2-3 month program. Our approach focuses on individual grassroots farmers and community members to empower and up-skill them to become new leaders and lead the change.</p>
                </div>
                <div class="two-col-image animate-on-scroll">
                    <img src="https://images.unsplash.com/photo-1531206715517-5c0ba140b2b8?w=600&h=400&fit=crop" alt="Community leaders in discussion" style="width: 100%; height: 100%; object-fit: cover; border-radius: var(--radius-lg);">
                </div>
            </div>
        </div>
    </section>

    <!-- How We Select Section -->
    <section class="section">
        <div class="container container-narrow">
            <div class="section-header">
                <h2 class="section-title">How We Select Communities to Fund</h2>
            </div>

            <div class="process-steps animate-on-scroll">
                <div class="process-step">
                    <div class="step-number">1</div>
                    <div class="step-content">
                        <h4>Application</h4>
                        <p>Any organisation can apply for one of our programs by filling in the online application form.</p>
                    </div>
                </div>
                <div class="process-step">
                    <div class="step-number">2</div>
                    <div class="step-content">
                        <h4>Assessment</h4>
                        <p>We assess the needs and funding requirements of the organisation and the community they serve, then design the relevant social learning program and research needs.</p>
                    </div>
                </div>
                <div class="process-step">
                    <div class="step-number">3</div>
                    <div class="step-content">
                        <h4>Evaluation</h4>
                        <p>We evaluate the credibility of the organisation and create a project budget.</p>
                    </div>
                </div>
                <div class="process-step">
                    <div class="step-number">4</div>
                    <div class="step-content">
                        <h4>Matchmaking</h4>
                        <p>We upload the project onto our website for potential funders to select to fund. We act as mediators between funders and community organisations.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Evidence Based Section -->
    <section class="challenge-section" style="background-image: url('https://images.unsplash.com/photo-1532094349884-543bc11b234d?w=1920&q=80');">
        <div class="container">
            <div class="section-header" style="max-width: 100%;">
                <h2 class="section-title" style="color: white;">Evidence-Based Content</h2>
                <p class="section-subtitle" style="color: rgba(255,255,255,0.9);">Our programs are grounded in rigorous scientific research</p>
            </div>

            <div class="two-col" style="color: white; gap: 3rem;">
                <div class="animate-on-scroll">
                    <p style="color: rgba(255,255,255,0.9);">Our research investigated factors that determine why some people are more tolerant than others towards living near different wildlife species. We measured:</p>
                    <ul style="list-style: none; padding: 0; color: rgba(255,255,255,0.9); margin: 1rem 0;">
                        <li>&#8226; Willingness to tolerate some wildlife damage</li>
                        <li>&#8226; Willingness to tolerate proximity of wildlife</li>
                        <li>&#8226; Willingness to refrain from killing wildlife</li>
                        <li>&#8226; Willingness to support wildlife population increases</li>
                    </ul>
                    <p style="color: rgba(255,255,255,0.9);">We tested these in <strong>9 countries</strong> with <strong>12 species</strong> in <strong>23 cases</strong>.</p>
                </div>
                <div class="animate-on-scroll">
                    <div style="background: rgba(255,255,255,0.1); padding: 1.5rem; border-radius: var(--radius-lg);">
                        <h4 style="color: white; margin-bottom: 1rem;">Key Findings</h4>
                        <p style="color: rgba(255,255,255,0.9); margin-bottom: 1rem;">The two most consistent factors driving tolerance were:</p>
                        <div style="display: flex; gap: 1rem; flex-direction: column;">
                            <div style="display: flex; gap: 0.75rem; align-items: flex-start;">
                                <span style="width: 28px; height: 28px; background: var(--color-secondary); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-weight: 700; flex-shrink: 0;">1</span>
                                <span style="color: rgba(255,255,255,0.9);">The extent a person had <strong>empathy</strong> for the wildlife species</span>
                            </div>
                            <div style="display: flex; gap: 0.75rem; align-items: flex-start;">
                                <span style="width: 28px; height: 28px; background: var(--color-secondary); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-weight: 700; flex-shrink: 0;">2</span>
                                <span style="color: rgba(255,255,255,0.9);">The extent a person perceived <strong>non-monetary benefits</strong> (cultural value, beauty, appreciation of existence)</span>
                            </div>
                        </div>
                        <p style="color: rgba(255,255,255,0.9); margin-top: 1rem; margin-bottom: 0;">These findings directly informed our inclusion of nonviolent communication training to increase empathy for animals.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-banner" style="background-image: url('https://images.unsplash.com/photo-1564760055775-d63b17a55c44?w=1920&q=80');">
        <div class="container">
            <div class="cta-banner-content">
                <h2>Ready to Transform Your Community?</h2>
                <p>Whether you're a community seeking support or a donor looking to fund meaningful change, we're here to help.</p>
                <div class="btn-group">
                    <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-primary btn-lg">Contact Us</a>
                    <a href="<?php echo esc_url( home_url( '/donate/' ) ); ?>" class="btn btn-secondary btn-lg">Fund a Community</a>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
