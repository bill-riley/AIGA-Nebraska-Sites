<?php while (have_posts()) : the_post(); ?>
	<article>
		<?php if ( function_exists('add_the_page_content_acf') ): ?>
			<?php if ( get_field('layout_type') === 'normal_routing' ): ?>
				<section class="container tiny">
					<div class="column kitchensink">
						<?php the_field('content'); ?>
					</div>
				</section>
			<?php elseif ( get_field('layout_type') === 'section_layout' ): ?>
				<?php if ( have_rows('page_sections') ): ?>
					<?php while ( have_rows('page_sections') ): the_row(); ?>
						<?php partial( 'sections/layout', get_row_layout() ); ?>
					<?php endwhile; ?>
				<?php else: ?>
					<?php partial( 'sections/layout', 'empty' ); ?>
				<?php endif; ?>
			<?php elseif ( get_field('layout_type') === 'custom_layout' ): ?>
				<?php global $wp_query; ?>
				<?php include ABSPATH . 'wp-content/custom/'.$wp_query->post->post_type.'-'.$wp_query->post->post_name.'.php'; ?>
				<?php sendo()->append_css('/wp-content/custom/'.$wp_query->post->post_type.'-'.$wp_query->post->post_name.'.css'); ?>
				<?php sendo()->append_javascript('/wp-content/custom/'.$wp_query->post->post_type.'-'.$wp_query->post->post_name.'.js'); ?>
			<?php endif; ?>
		<?php else: ?>
			<section class="container tiny">
				<div class="column kitchensink">
					<?php the_content(); ?>
				</div>
			</section>
		<?php endif; ?>
	</article>
<?php endwhile; ?>
