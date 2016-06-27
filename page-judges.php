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
	<section class="judges-details">
		<?php if ( have_rows('judges', get_id_by_slug('home') ) ) : ?>
			<?php while ( have_rows('judges', get_id_by_slug('home')) ): the_row(); ?>
				<?php $judge = get_sub_field('judge'); ?>
				<div id="judge-<?php echo $judge['user_nicename']; ?>" class="container bleed one-half">
					<div class="column judge has-sizer" <?php responsive_bg(get_field('profile_photo', 'user_'. $judge['ID'] )); ?>>
						<div class="content kitchensink">
							<span class="h2"><?php the_field('focus_area', 'user_'. $judge['ID'] ); ?></span>
						</div>
						<img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" class="sizer" />
					</div>
					<div class="column details">
						<div class="content kitchensink">
							<h3 class="h1 uppercase bold"><?php echo $judge['display_name']; ?></h3>
							<?php if (get_field('Role', 'user_'. $judge['ID'])): ?>
								<p class="h2"><?php the_field('Role', 'user_'. $judge['ID'] ); ?></p>
							<?php endif; ?>
							<?php the_field('description', 'user_'. $judge['ID'] ); ?>
						</div>
						<?php if ( have_rows('examples_of_work', 'user_'. $judge['ID'] ) ) : ?>
						<div class="content">
							<div class="container bleed one-third padding">
									<?php while ( have_rows('examples_of_work', 'user_'. $judge['ID']) ): the_row(); ?>
										<div class="column"><?php echo do_shortcode('[smart_image image_id="' . get_sub_field('image') . '"]') ?></div>
									<?php endwhile; ?>
							</div>
						</div>
						<?php endif; ?>
					</div>
				</div>
			<?php endwhile; ?>
		<?php endif; ?>
	</section>
	<section class="navigation">
		<div class="container one-half bleed">
			<a class="column<?php pjaxify(); ?>" href="/" title="Home">
				<div class="content"><span class="h2">Home</span></div>
			</a>
			<a class="column<?php pjaxify(); ?>" href="/how-to-enter" title="How to enter">
				<div class="content"><span class="h2">How to enter</span></div>
			</a>
		</div>
	</section>
<?php endwhile; ?>
