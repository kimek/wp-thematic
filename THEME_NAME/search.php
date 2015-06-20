<?php get_header(); ?>

    <main role="main">
        <?php
        if (have_posts()) :
        ?>
            <header class="main-header">
                <h1 class="main-title"><?php printf(__('Search Results for: %s', 'THEME_NAME'), '<span>' . get_search_query() . '</span>'); ?></h1>
            </header>

            <?php
            while (have_posts()) :
                the_post();

                get_template_part('content/content', 'search');

            endwhile;

            the_posts_navigation();

        else :

            get_template_part('content/content', 'none');

        endif;
        ?>
    </main>

<?php
    get_sidebar();
    get_footer();
