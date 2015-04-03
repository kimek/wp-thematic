<?php get_header(); ?>

    <main role="main">
        <?php
        while (have_posts()) :
            the_post();

            get_template_part('content', 'single');

            THEME_NAME_post_nav();

            // If comments are open or we have at least one comment
            if (comments_open() || '0' != get_comments_number()) :
                comments_template();
            endif;

        endwhile;
        ?>
    </main>

<?php
    get_sidebar();
    get_footer();
