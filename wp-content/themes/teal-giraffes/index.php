<?php
/**
 * The main template file
 *
 * @package Teal_Giraffes
 */

get_header();
?>

<main id="main" class="site-main">
    <!-- Page Hero -->
    <section class="page-hero">
        <div class="container">
            <h1><?php single_post_title(); ?></h1>
        </div>
    </section>

    <section class="section">
        <div class="container container-narrow">
            <?php if ( have_posts() ) : ?>
                <?php while ( have_posts() ) : the_post(); ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <header class="entry-header">
                            <?php the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '">', '</a></h2>' ); ?>
                        </header>

                        <div class="entry-content">
                            <?php the_excerpt(); ?>
                        </div>

                        <footer class="entry-footer">
                            <a href="<?php the_permalink(); ?>" class="btn btn-secondary btn-sm">Read More</a>
                        </footer>
                    </article>
                <?php endwhile; ?>

                <?php the_posts_navigation(); ?>
            <?php else : ?>
                <p>No posts found.</p>
            <?php endif; ?>
        </div>
    </section>
</main>

<?php
get_footer();
