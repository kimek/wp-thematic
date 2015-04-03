<article <?php post_class('article'); ?>>
    <header class="article-header">
        <?php the_title('<h1 class="article-title">', '</h1>'); ?>
    </header>

    <div class="article-content">
        <?php
            the_content();

            wp_link_pages(array(
                'before' => '<div class="page-links">' . __('Pages:', 'THEME_NAME'),
                'after'  => '</div>',
            ));
        ?>
    </div>
    <footer class="article-footer">
        <?php edit_post_link(__('Edit', 'THEME_NAME'), '<span class="edit-link">', '</span>'); ?>
    </footer>
</article>
