<?php get_header(); ?>

    <main role="main">
        <?php
        if (have_posts()) :

            while (have_posts()) :
                the_post();

                get_template_part('theme-content/content', get_post_format());

            endwhile;

            the_posts_navigation();

        else :

            get_template_part('theme-content/content', 'none');

        endif;
        ?>
    </main>

<?php
    get_sidebar();
    get_footer();
