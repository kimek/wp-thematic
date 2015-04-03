<section class="section no-results not-found">
	<header class="section-header">
		<h1 class="section-title"><?php _e('Nothing Found', 'THEME_NAME'); ?></h1>
	</header>

	<div class="section-content">
		<?php if (is_home() && current_user_can('publish_posts')) : ?>

			<p><?php printf(__('Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'THEME_NAME'), esc_url(admin_url('post-new.php'))); ?></p>

		<?php elseif (is_search()) : ?>

			<p><?php _e('Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'THEME_NAME'); ?></p>
			<?php get_search_form(); ?>

		<?php else : ?>

			<p><?php _e('It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'THEME_NAME'); ?></p>
			<?php get_search_form(); ?>

		<?php endif; ?>
	</div>
</section>
