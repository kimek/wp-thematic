<?php get_header(); ?>

    <main role="main">

        <section class="error-404 not-found">
            <header class="main-header">
                <h1 class="main-title"><?php _e('Oops! That page can&rsquo;t be found.', 'THEME_NAME'); ?></h1>
            </header>

            <div class="main-content">
                <p><?php _e('It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'THEME_NAME'); ?></p>

                <?php get_search_form(); ?>

                <?php the_widget('WP_Widget_Recent_Posts'); ?>

                <?php
                /* translators: %1$s: smiley */
                $archive_content = '<p>' . sprintf(__('Try looking in the monthly archives. %1$s', 'THEME_NAME'), convert_smilies(':)')) . '</p>';
                the_widget('WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$archive_content");
                ?>

                <?php the_widget('WP_Widget_Tag_Cloud'); ?>

            </div>
        </section>

    </main>

<?php get_footer();
