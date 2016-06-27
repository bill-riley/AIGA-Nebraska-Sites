<?php while (have_posts()) : the_post(); ?>
	<section class="hero" <?php responsive_bg(get_field('hero_background_image', get_id_by_slug('home'))); ?>>
		<div class="container">
			<div class="column">
				<?php the_field('hero_content'); ?>
			</div>
		</div>
	</section>
	<section>
		<div class="container">
			<div class="column six">
				<div class="content">
					<?php the_field('left_content'); ?>
				</div>
			</div>
			<div class="column six">
				<div class="content">
					<?php echo do_shortcode('[caldera_form id="CF56e45531c9a1d"]'); ?>
				</div>
			</div>
		</div>
	</section>
	<section class="navigation">
		<div class="container one-half bleed">
			<a class="column<?php pjaxify(); ?>" href="/faq" title="FAQ">
				<div class="content"><span class="h2">FAQ</span></div>
			</a>
			<a class="column<?php pjaxify(); ?>" href="/get-started" title="Get started">
				<div class="content"><span class="h2">Get started</span></div>
			</a>
		</div>
	</section>
<?php endwhile; ?>
