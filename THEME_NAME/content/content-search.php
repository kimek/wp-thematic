<article <?php post_class(); ?>>
    <header class="entry-header">
        <?php the_title(sprintf('<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></h1>'); ?>

        <?php if ('post' == get_post_type()) : ?>
        <div class="entry-meta">
            <?php THEME_NAME_posted_on(); ?>
        </div>
        <?php endif; ?>
    </header>

    <div class="entry-summary">
        <?php the_excerpt(); ?>
    </div>

    <footer class="entry-footer">
        <?php THEME_NAME_entry_footer(); ?>
    </footer>
</article>
