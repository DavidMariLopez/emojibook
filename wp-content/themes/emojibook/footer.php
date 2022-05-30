        <!-- PREFOOTER -->

        <?php if ( !is_home () ) : ?>

            <section id="blog-prefooter" class="prefooter">

                <div class="center">

                    <h1>From our Blog</h1>

                    <?php
                    
                        /* Esta variable no la uso, es para trastear

                        $pages = new WP_Query ( array
                        (
                            'post_type' => 'page',
                            'posts_per_page' => 3,
                            'orderby' => 'name',
                            'order' => 'ASC'
                        ) );

                        */
                        
                    ?>

                    <?php
                    
                        $posts = new WP_Query ( array
                        (
                            'post_type' => 'post',
                            'posts_per_page' => 3
                        ));
                        
                    ?>

                    <?php while ( $posts -> have_posts() ) : $posts -> the_post(); ?>

                        <article>

                            <time datetime="<?php the_time ( 'Y-m-d' ); ?>"><?php the_time ( 'd.m.Y' ); ?></time>
                            <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>

                        </article>

                    <?php endwhile; ?>

                    <a href="<?php echo home_url ( '/blog/' ); ?>" class="button noborder">View all posts</a>

                </div>

            </section>

        <?php endif  ?>

        <!-- FOOTER -->

        <footer>

            <div class="center">

                <h6 class="hidden">Page footer</h6>

                <div id="footer-menu">

                    <a href="<?php echo home_url(); ?>" id="copyright"><?php bloginfo ( 'name' ); ?></a>

                    <?php wp_nav_menu ( array
                    (
                        'theme_location' => 'footer',
                        'container' => false
                    )); ?>

                </div>

                <div id="footer-social">

                    <?php wp_nav_menu ( array
                    (
                        'theme_location' => 'social',
                        'container' => false
                    )); ?>

                </div>

            </div>

        </footer>

        <?php wp_footer(); ?>

    </body>

</html>