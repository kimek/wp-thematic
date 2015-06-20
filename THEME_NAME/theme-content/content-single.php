<article <?php post_class(); ?>>
    <header class="entry-header">
        <?php the_title('<h1 class="entry-title">', '</h1>'); ?>

        <div class="entry-meta">
            <?php THEME_NAME_posted_on(); ?>
        </div>
    </header>

    <div class="entry-content">
        <?php the_content(); ?>
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
