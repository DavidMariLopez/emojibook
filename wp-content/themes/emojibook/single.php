<?php get_header(); the_post(); ?>

    <!-- BLOG POST -->

    <article id="blog-post" <?php post_class ( 'center' ); ?>>

        <header class="no-intro">

            <a href="<?php echo home_url ( '/blog/');?>"><?php _e ( 'From our blog', 'emojibook' ); ?></a>
            <h1><?php the_title(); ?></h1>
            <time datetime="<?php the_time ( 'Y-m-d' ); ?>"><?php _e ( 'Posted on', 'emojibook' ); ?> <?php the_time ( 'd.m.Y' ); ?></time>
            
            <?php the_category(); ?>
            <?php // the_tags(); ?>

        </header>

        <div class="columns">

            <div class="post-content cols-8">

                <?php the_content(); ?>

            </div>

            <?php get_sidebar(); ?>

        </div>

        <a href="<?php echo home_url ( '/blog/');?>" class="button"><?php _e ( 'Next articles', 'emojibook' ); ?></a>

    </article>

<?php get_footer(); ?>