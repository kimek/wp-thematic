<?php get_header(); ?>

    <main role="main">
        <?php
        if (have_posts()) :

            while (have_posts()) :
                the_post();

                get_template_part('content', get_post_format());

            endwhile;

            THEME_NAME_paging_nav();

        else :

            get_template_part('content', 'none');

        endif;
        ?>
    </main>

<?php
    get_sidebar();
    get_footer();
