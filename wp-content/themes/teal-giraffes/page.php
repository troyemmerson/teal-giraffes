<?php
/**
 * Default Page Template
 *
 * @package Teal_Giraffes
 */

get_header();
?>

<main id="main" class="site-main">
    <!-- Page Hero -->
    <section class="page-hero">
        <div class="container">
            <h1><?php the_title(); ?></h1>
            <?php if ( has_excerpt() ) : ?>
                <p><?php echo get_the_excerpt(); ?></p>
            <?php endif; ?>
        </div>
    </section>

    <section class="section">
        <div class="container container-narrow">
            <?php while ( have_posts() ) : the_post(); ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <div class="entry-content">
                        <?php the_content(); ?>
                    </div>
                </article>
            <?php endwhile; ?>
        </div>
    </section>
</main>

<?php
get_footer();
