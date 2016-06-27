<?php while (have_posts()) : the_post(); ?>
	<section class="hero" <?php responsive_bg(get_field('hero_background_image', get_id_by_slug('home'))); ?>>
		<div class="container">
			<div class="column">
				<div class="content kitchensink">
					<?php the_field('hero_content'); ?>
				</div>
			</div>
		</div>
		<div class="container bleed mask">
			<div class="offset"></div>
			<div class="column twelve">
				<div class="content kitchensink text-center">
					<h2 class="uppercase">How It&rsquo;s Done</h2>
				</div>
			</div>
			<div class="container one-fourth padding">
				<div class="column">
					<div class="content">
						<?php echo do_shortcode('[smart_image image_id="' . get_field('phase_1_transparent_icon') . '"]'); ?>
						<h4 class="uppercase">Enter</h4>
						<p class="mb0"><?php echo get_field('phase_1_start_date'); ?> - <br /><?php echo get_field('phase_1_end_date'); ?></p>
						<p><?php echo get_field('phase_1_description'); ?></p>
					</div>
				</div>
				<div class="column">
					<div class="content">
						<?php echo do_shortcode('[smart_image image_id="' . get_field('phase_2_transparent_icon') . '"]'); ?>
						<h4 class="uppercase">Judging</h4>
						<p class="mb0"><?php echo get_field('phase_2_start_date'); ?> - <br /><?php echo get_field('phase_2_end_date'); ?></p>
						<p><?php echo get_field('phase_2_description'); ?></p>
					</div>
				</div>
				<div class="column">
					<div class="content">
						<?php echo do_shortcode('[smart_image image_id="' . get_field('phase_3_transparent_icon') . '"]'); ?>
						<h4 class="uppercase">Physical Entry</h4>
						<p class="mb0"><?php echo get_field('phase_3_start_date'); ?> - <br /><?php echo get_field('phase_3_end_date'); ?></p>
						<p><?php echo get_field('phase_3_description'); ?></p>
					</div>
				</div>
				<div class="column">
					<div class="content">
						<?php echo do_shortcode('[smart_image image_id="' . get_field('phase_4_transparent_icon') . '"]'); ?>
						<h4 class="uppercase">Exhibit</h4>
						<p class="mb0"><?php echo get_field('phase_4_start_date'); ?></p>
						<p><?php echo get_field('phase_4_description'); ?></p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="phase-one">
		<div class="container">
			<div class="column three">
				<?php echo do_shortcode('[smart_image image_id="' . get_field('phase_1_large_icon') . '"]'); ?>
			</div>
			<div class="column nine">
				<div class="content kitchensink">
					<?php the_field('phase_1_content_entry'); ?>
				</div>
			</div>
		</div>
		<hr class="hr offwhite" />
		<div class="container">
			<div class="column nine">
				<div class="content kitchensink">
					<?php the_field('phase_1_content_prepare_your_work'); ?>
				</div>
			</div>
			<div class="column three">
				<div class="content kitchensink">
					<?php the_field('phase_1_content_pricing'); ?>
				</div>
			</div>
		</div>
		<hr class="hr offwhite" />
		<div class="container one-fourth cat-list">
			<?php $args = array('hide_empty' => false, 'orderby' => 'name'); ?>
			<?php $list = get_terms('work_categories', $args); ?>
			<?php foreach ($list as $item): ?>
				<div class="column">
					<div class="content kitchensink">
						<h4 class="uppercase"><?php echo $item->name; ?></h4>
						<p><?php echo $item->description; ?><br /><br /><br /></p>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</section>
	<section id="phase-two">
		<div class="container">
			<div class="column three">
				<?php echo do_shortcode('[smart_image image_id="' . get_field('phase_2_large_icon') . '"]'); ?>
			</div>
			<div class="column nine">
				<div class="content">
					<?php the_field('phase_2_content_judging'); ?>
				</div>
			</div>
		</div>
	</section>
	<section id="phase-three">
		<div class="container">
			<div class="column three">
				<?php echo do_shortcode('[smart_image image_id="' . get_field('phase_3_large_icon') . '"]'); ?>
			</div>
			<div class="column nine">
				<div class="content">
					<?php the_field('phase_3_content_print_mount'); ?>
				</div>
			</div>
		</div>
	</section>
	<section id="phase-four">
		<div class="container">
			<div class="column three">
				<?php echo do_shortcode('[smart_image image_id="' . get_field('phase_4_large_icon') . '"]'); ?>
			</div>
			<div class="column nine">
				<?php the_field('phase_4_content_show_time'); ?>


				<?php if( get_field('phase_4_show_links') ) : ?>
					<?php if( have_rows('phase_4_links') ) : ?>
						<div class="container bleed links">
							<?php while( have_rows('phase_4_links') ): the_row(); ?>
								<div class="column eight">
									<div class="content">
										<?php the_sub_field('content'); ?>
									</div>
								</div>
								<div class="column four">
									<div class="content">
										<a href="<?php the_sub_field('link'); ?>" target="_blank" class="button button-small"><?php the_sub_field('link_copy'); ?></a>
									</div>
								</div>
							<?php endwhile; ?>
						</div>
					<?php endif; ?>
				<?php endif; ?>
			</div>
		</div>
	</section>
	<section class="navigation">
		<div class="container one-half bleed">
			<a class="column<?php pjaxify(); ?>" href="/judges" title="Get Started">
				<div class="content"><span class="h2">The Judges</span></div>
			</a>
			<a class="column<?php pjaxify(); ?>" href="/faq" title="The Judges">
				<div class="content"><span class="h2">FAQ</span></div>
			</a>
		</div>
	</section>
<?php endwhile; ?>
