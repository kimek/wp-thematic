<?php get_header(); ?>

    <main role="main">
        <?php if (have_posts()) : ?>

            <header class="main-header">
                <h1 class="main-title">
                    <?php
                        if (is_category()) :
                            single_cat_title();

                        elseif (is_tag()) :
                            single_tag_title();

                        elseif (is_author()) :
                            printf(__('Author: %s', 'THEME_NAME'), '<span class="vcard">' . get_the_author() . '</span>');

                        elseif (is_day()) :
                            printf(__('Day: %s', 'THEME_NAME'), '<span>' . get_the_date() . '</span>');

                        elseif (is_month()) :
                            printf(__('Month: %s', 'THEME_NAME'), '<span>' . get_the_date(_x('F Y', 'monthly archives date format', 'THEME_NAME')) . '</span>');

                        elseif (is_year()) :
                            printf(__('Year: %s', 'THEME_NAME'), '<span>' . get_the_date(_x('Y', 'yearly archives date format', 'THEME_NAME')) . '</span>');

                        elseif (is_tax('post_format', 'post-format-aside')) :
                            _e('Asides', 'THEME_NAME');

                        elseif (is_tax('post_format', 'post-format-gallery')) :
                            _e('Galleries', 'THEME_NAME');

                        elseif (is_tax('post_format', 'post-format-image')) :
                            _e('Images', 'THEME_NAME');

                        elseif (is_tax('post_format', 'post-format-video')) :
                            _e('Videos', 'THEME_NAME');

                        elseif (is_tax('post_format', 'post-format-quote')) :
                            _e('Quotes', 'THEME_NAME');

                        elseif (is_tax('post_format', 'post-format-link')) :
                            _e('Links', 'THEME_NAME');

                        elseif (is_tax('post_format', 'post-format-status')) :
                            _e('Statuses', 'THEME_NAME');

                        elseif (is_tax('post_format', 'post-format-audio')) :
                            _e('Audios', 'THEME_NAME');

                        elseif (is_tax('post_format', 'post-format-chat')) :
                            _e('Chats', 'THEME_NAME');

                        else :
                            _e('Archives', 'THEME_NAME');

                        endif;
                    ?>
                </h1>
                <?php
                    // Show an optional term description.
                    $term_description = term_description();
                    if (! empty($term_description)) :
                        printf('<div class="taxonomy-description">%s</div>', $term_description);
                    endif;
                ?>
            </header>

            <?php
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
