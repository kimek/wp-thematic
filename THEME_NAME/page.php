<?php get_header(); ?>

    <main role="main">
        <?php
        while (have_posts()) :
            the_post();

            get_template_part('theme-content/content', 'page');

            // If comments are open or we have at least one comment, load up the comment template
            if (comments_open() || '0' != get_comments_number()) {
                comments_template();
            }

        endwhile;
        ?>
    </main>

<?php
    get_sidebar();
    get_footer();
