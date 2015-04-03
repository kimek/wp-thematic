<article <?php post_class('article'); ?>>
    <header class="article-header">
        <?php the_title('<h1 class="article-title">', '</h1>'); ?>

        <div class="article-meta">
            <?php THEME_NAME_posted_on(); ?>
        </div>
    </header>

    <div class="article-content">
        <?php
            the_content();

            wp_link_pages( array(
                'before' => '<div class="article-links">' . __( 'Pages:', 'THEME_NAME' ),
                'after'  => '</div>',
            ) );
        ?>
    </div>

    <footer class="article-footer">
        <?php
            /* translators: used between list items, there is a space after the comma */
            $category_list = get_the_category_list(__(', ', 'THEME_NAME'));

            /* translators: used between list items, there is a space after the comma */
            $tag_list = get_the_tag_list('', __(', ', 'THEME_NAME'));

            if (! THEME_NAME_categorized_blog()) {
                // This blog only has 1 category so we just need to worry about tags in the meta text
                if ('' != $tag_list) {
                    $meta_text = __('This entry was tagged %2$s. Bookmark the <a href="%3$s" rel="bookmark">permalink</a>.', 'THEME_NAME');
                } else {
                    $meta_text = __('Bookmark the <a href="%3$s" rel="bookmark">permalink</a>.', 'THEME_NAME');
                }
            } else {
                // But this blog has loads of categories so we should probably display them here
                if ('' != $tag_list) {
                    $meta_text = __('This entry was posted in %1$s and tagged %2$s. Bookmark the <a href="%3$s" rel="bookmark">permalink</a>.', 'THEME_NAME');
                } else {
                    $meta_text = __('This entry was posted in %1$s. Bookmark the <a href="%3$s" rel="bookmark">permalink</a>.', 'THEME_NAME');
                }
            } // end check for categories on this blog

            printf(
                $meta_text,
                $category_list,
                $tag_list,
                get_permalink()
            );
        ?>

        <?php edit_post_link(__('Edit', 'THEME_NAME'), '<span class="edit-link">', '</span>'); ?>
    </footer>
</article>
