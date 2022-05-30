<?php /* Template name: About */ ?>

<?php get_header(); the_post(); ?>

    <!-- ABOUT -->

    <section id="about" class="center">

        <?php get_template_part ( 'snippets/page-title' ); ?>

        <?php the_post_thumbnail ( 'large' ); ?>

        <div class="columns">

            <div class="text cols-8">

                <?php the_content(); ?>

            </div>

            <div class="team cols-3">

                <?php while ( have_rows ( 'miembros_del_equipo' ) ) : the_row(); ?>

                    <a href="<?php the_sub_field ( 'url_de_twitter' ); ?>" target="_blank">
                        <?php echo wp_get_attachment_image ( get_sub_field ( 'foto' ) ); ?>
                        <?php the_sub_field ( 'usuario_de_twitter' ); ?>
                    </a>

                <?php endwhile; ?>
                
            </div>

        </div>

        <a href="<?php echo home_url ( '/emojis/' ); ?>" class="button">Meet the emojis</a>

    </section>

<?php get_footer(); ?>