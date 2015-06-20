<article <?php post_class(); ?>>
    <header class="entry-header">
        <?php the_title(sprintf('<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></h1>'); ?>

        <?php if ('post' == get_post_type()) : ?>
        <div class="entry-meta">
            <?php THEME_NAME_posted_on(); ?>
        </div>
        <?php endif; ?>
    </header>

    <div class="entry-content">
        <?php
            /* translators: %s: Name of current post */
            the_content(sprintf(
                wp_kses(__('Continue reading %s <span class="meta-nav">&rarr;</span>', 'THEME_NAME'), array('span' => array('class' => array()))),
                the_title('<span class="screen-reader-text">"', '"</span>', false)
          ));
        ?>

        <?php
            wp_link_pages(array(
                'before' => '<div class="page-links">' . esc_html__('Pages:', 'THEME_NAME'),
                'after'  => '</div>',
          ));
        ?>
    </div>

    <footer class="entry-footer">
        <?php THEME_NAME_entry_footer(); ?>
    </footer>
</article>
