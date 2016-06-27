<?php while (have_posts()) : the_post(); ?>
	<section class="hero" <?php responsive_bg(get_field('hero_background_image')); ?>>
		<div class="container">
			<div class="column">
				<div class="content">
					<?php the_field('hero_copy'); ?>
				</div>
			</div>
		</div>
		<div class="container bleed mask">
			<div class="container one-half padding">
				<div class="column">
					<div class="content kitchensink">
						<?php the_field('left_content'); ?>
					</div>
				</div>
				<div class="column">
					<div class="content kitchensink">
						<?php the_field('right_content'); ?>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="judges-preview">
		<div class="container bleed one-third padding">
			<?php if( have_rows('judges') ) : ?>
				<?php while( have_rows('judges') ): the_row(); ?>
					<?php $judge = get_sub_field('judge'); ?>
					<a href="/judges#judge-<?php echo $judge['user_nicename']; ?>" class="column has-sizer" <?php responsive_bg(get_field('profile_photo', 'user_'. $judge['ID'] )); ?>>
						<div class="content kitchensink">
							<h2 class="uppercase"><?php echo $judge['display_name']; ?></h2>
							<h3><?php the_field('focus_area', 'user_'. $judge['ID'] ); ?></h3>
						</div>
						<img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" class="sizer" alt=" " />
					</a>
				<?php endwhile; ?>
			<?php endif; ?>
		</div>
	</section>
	<section class="sponsors">
		<div class="container lead-in">
			<div class="column">
				<h2 class="text-center">Made possible by our sponsors</h2>
			</div>
		</div>
		<?php if ( have_rows('sponsors') ): ?>
			<div class="container grid">
				<?php while ( have_rows('sponsors') ) : the_row(); ?>
					<a href="<?php the_sub_field('site_url'); ?>" title="<?php the_sub_field('sponsors_name'); ?>" target="_blank" class="column three"><?php echo do_shortcode('[smart_image image_id="' . get_sub_field('logo') . '"]'); ?></a>
				<?php endwhile; ?>
			</div>
		<?php endif; ?>
	</section>
	<section class="navigation">
		<div class="container one-half bleed">
			<a class="column<?php pjaxify(); ?>" href="/get-started" title="Get Started">
				<div class="content"><span class="h2">Get Started</span></div>
			</a>
			<a class="column<?php pjaxify(); ?>" href="/judges" title="The Judges">
				<div class="content"><span class="h2">The Judges</span></div>
			</a>
		</div>
	</section>
<?php endwhile; ?>
