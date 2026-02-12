/**
 * Teal Giraffes - Main JavaScript
 */

(function() {
    'use strict';

    // DOM Ready
    document.addEventListener('DOMContentLoaded', function() {
        initMobileMenu();
        initHeaderScroll();
        initSmoothScroll();
        initAnimateOnScroll();
        initTestimonialSlider();
        initScrollToTop();
    });

    /**
     * Mobile Menu Toggle
     */
    function initMobileMenu() {
        const toggle = document.getElementById('menu-toggle');
        const nav = document.getElementById('main-nav');

        if (!toggle || !nav) return;

        toggle.addEventListener('click', function() {
            nav.classList.toggle('is-open');
            toggle.classList.toggle('is-active');
        });

        // Close on link click
        nav.querySelectorAll('a').forEach(function(link) {
            link.addEventListener('click', function() {
                nav.classList.remove('is-open');
                toggle.classList.remove('is-active');
            });
        });

        // Close on escape
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape' && nav.classList.contains('is-open')) {
                nav.classList.remove('is-open');
                toggle.classList.remove('is-active');
            }
        });
    }

    /**
     * Header Scroll Effect
     */
    function initHeaderScroll() {
        const header = document.getElementById('site-header');
        if (!header) return;

        let lastScroll = 0;

        window.addEventListener('scroll', function() {
            const currentScroll = window.pageYOffset;

            if (currentScroll > 10) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }

            lastScroll = currentScroll;
        });
    }

    /**
     * Smooth Scroll for Anchor Links
     */
    function initSmoothScroll() {
        document.querySelectorAll('a[href^="#"]').forEach(function(anchor) {
            anchor.addEventListener('click', function(e) {
                const href = this.getAttribute('href');
                if (href === '#') return;

                const target = document.querySelector(href);
                if (target) {
                    e.preventDefault();
                    const offset = 80;
                    const targetPosition = target.getBoundingClientRect().top + window.pageYOffset - offset;

                    window.scrollTo({
                        top: targetPosition,
                        behavior: 'smooth'
                    });
                }
            });
        });
    }

    /**
     * Testimonial Slider
     */
    function initTestimonialSlider() {
        var slider = document.getElementById('testimonial-slider');
        if (!slider) return;

        var slides = slider.querySelectorAll('.testimonial-slide');
        var dots = slider.querySelectorAll('.testimonial-dot');
        var prevBtn = slider.querySelector('.testimonial-slider-prev');
        var nextBtn = slider.querySelector('.testimonial-slider-next');
        var currentSlide = 0;
        var autoplayInterval;

        function goToSlide(index) {
            if (index < 0) index = slides.length - 1;
            if (index >= slides.length) index = 0;

            slides[currentSlide].classList.remove('active');
            dots[currentSlide].classList.remove('active');

            currentSlide = index;

            slides[currentSlide].classList.add('active');
            dots[currentSlide].classList.add('active');
        }

        if (prevBtn) {
            prevBtn.addEventListener('click', function() {
                goToSlide(currentSlide - 1);
            });
        }

        if (nextBtn) {
            nextBtn.addEventListener('click', function() {
                goToSlide(currentSlide + 1);
            });
        }

        dots.forEach(function(dot) {
            dot.addEventListener('click', function() {
                goToSlide(parseInt(this.getAttribute('data-slide')));
            });
        });

    }

    /**
     * Scroll to Top Button
     */
    function initScrollToTop() {
        var scrollTopBtn = document.querySelector('.footer-scroll-top');
        if (!scrollTopBtn) return;

        scrollTopBtn.addEventListener('click', function(e) {
            e.preventDefault();
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
    }

    /**
     * Animate Elements on Scroll
     */
    function initAnimateOnScroll() {
        const elements = document.querySelectorAll('.animate-on-scroll');
        if (elements.length === 0) return;

        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(function(entry) {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animated');
                    observer.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        });

        elements.forEach(function(el) {
            observer.observe(el);
        });
    }

})();
