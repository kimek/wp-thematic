<article <?php post_class('article'); ?>>
    <header class="article-header">
        <?php the_title(sprintf('<h1 class="article-title"><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></h1>'); ?>

        <?php if ('post' == get_post_type()) : ?>
        <div class="article-meta">
            <?php THEME_NAME_posted_on(); ?>
        </div>
        <?php endif; ?>
    </header>

    <div class="article-content">
        <?php
            /* translators: %s: Name of current post */
            the_content(sprintf(__('Continue reading %s <span class="meta-nav">&rarr;</span>', 'THEME_NAME'),
                the_title('<span class="screen-reader-text">"', '"</span>', false)
            ));

            wp_link_pages(array(
                'before' => '<div class="article-links">' . __('Pages:', 'THEME_NAME'),
                'after'  => '</div>',
            ));
        ?>
    </div>

    <footer class="article-footer">
        <?php
        if ('post' == get_post_type()) : // Hide category and tag text for pages on Search

            /* translators: used between list items, there is a space after the comma */
            $categories_list = get_the_category_list(__(', ', 'THEME_NAME'));
            if ($categories_list && THEME_NAME_categorized_blog()) :
        ?>
            <span class="cat-links">
                <?php printf(__('Posted in %1$s', 'THEME_NAME'), $categories_list); ?>
            </span>
        <?php
            endif; // End if categories
                /* translators: used between list items, there is a space after the comma */
            $tags_list = get_the_tag_list('', __(', ', 'THEME_NAME'));
            if ($tags_list) :
            ?>
                <span class="tags-links">
                    <?php printf(__('Tagged %1$s', 'THEME_NAME'), $tags_list); ?>
                </span>
        <?php
            endif; // End if $tags_list
        endif; // End if 'post' == get_post_type()

        if (! post_password_required() && (comments_open() || '0' != get_comments_number())) :
        ?>
            <span class="comments-link"><?php comments_popup_link(__('Leave a comment', 'THEME_NAME'), __('1 Comment', 'THEME_NAME'), __('% Comments', 'THEME_NAME')); ?></span>
        <?php
        endif;
        ?>

        <?php edit_post_link(__('Edit', 'THEME_NAME'), '<span class="edit-link">', '</span>'); ?>
    </footer>
</article>
