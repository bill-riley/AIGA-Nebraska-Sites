<?php while (have_posts()) : the_post(); ?>
	<section class="hero" <?php responsive_bg(get_field('hero_background_image', get_id_by_slug('home'))); ?>>
		<div class="container">
			<div class="column">
				<div class="content kitchensink">
					<?php the_field('hero_content'); ?>
				</div>
			</div>
		</div>
	</section>
	<section>
		<div class="container">
			<div class="column twelve">
				<div class="content kitchensink">
					<?php if ( is_user_logged_in() ): ?>
						<?php $current_user = wp_get_current_user(); ?>
						<h3 class="text-center">Hello, <?php echo $current_user->user_nicename; ?>!</h3>
						<p class="text-center">Ready to get started? Head to your <a href="/profile/<?php ?>" class="<?php pjaxify(true); ?>">profile page</a>. There you&rsquo;ll be able to add submissions.</p>
					<?php else: ?>
						<?php the_field('details_content'); ?>
					<?php endif; ?>
					<br />
				</div>
			</div>
			<div class="column eight offset-by-two">
				<div class="content kitchensink">
					<?php if ( ! is_user_logged_in() ): ?>
						<?php the_field('form_content'); ?>
						<?php echo do_shortcode('[caldera_form id="CF57379af20fa64"]'); ?>
						<?php echo do_shortcode('[caldera_form id="CF57379b43cc359"]'); ?>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</section>
	<section class="navigation">
		<div class="container one-half bleed">
			<a class="column<?php pjaxify(); ?>" href="/contact-us" title="FAQ">
				<div class="content kitchensink"><span class="h2">Contact Us</span></div>
			</a>
			<a class="column<?php pjaxify(); ?>" href="/" title="Home">
				<div class="content kitchensink"><span class="h2">Home</span></div>
			</a>
		</div>
	</section>
<?php endwhile; ?>
<?php sendo()->capture_javascript_start(); ?>
<script type="text/javascript">

	$('[data-cf-form-id="CF57379af20fa64"], [data-cf-form-id="CF57379b43cc359"]').hide();

	$('input[name="fld_6187209"]').on('change', function() {
		$('[data-cf-form-id="CF57379af20fa64"], [data-cf-form-id="CF57379b43cc359"]').hide();

		if ($(this).val() === "Login") {
			$('[data-cf-form-id="CF57379af20fa64"]').show()
		} else if ($(this).val() === "Register") {
			$('[data-cf-form-id="CF57379b43cc359"]').show()
		}
	});

	if ($('input[name="fld_6187209"]').val() === "Login") {
		$('[data-cf-form-id="CF57379af20fa64"]').show()
	} else if ($('input[name="fld_6187209"]').val() === "Register") {
		$('[data-cf-form-id="CF57379b43cc359"]').show()
	}
</script>
<?php sendo()->capture_javascript_end(); ?>
