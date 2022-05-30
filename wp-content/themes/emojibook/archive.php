<?php get_header(); ?>

    <!-- ARCHIVE -->

    <section id="blog" class="blog-grid center">

        <header class="page-intro center">

            <h1><?php the_archive_title(); ?></h1>

        </header>

        <?php while ( have_posts() ) : the_post(); ?>

            <article <?php post_class(); ?>>

                <header>
                    <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                </header>
            
            </article>

        <?php endwhile; ?>

    </section>

<?php get_footer(); ?>