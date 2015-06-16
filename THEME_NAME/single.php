<?php get_header(); ?>

    <main role="main">
        <?php
        while (have_posts()) :
            the_post();

            get_template_part('content/content', 'single');

            the_post_navigation();

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
