<section id="home-schedule" class="anim fadeIn">
	<div class="container toy-container">
		<div class="toy team-mystic-robot scroll-parallax" data-parallax-dampening="15" data-parallax-type="abs" data-parallax-dir="reverse">
			<div class="parallax-background">
				<?php echo do_shortcode("[smart_image image_id='".get_field('schedule_team_mystic_robot')."']"); ?>
			</div>
		</div>
		<div class="toy team-valor-robot scroll-parallax" data-parallax-dampening="12" data-parallax-type="abs" data-parallax-dir="reverse">
			<div class="parallax-background">
				<?php echo do_shortcode("[smart_image image_id='".get_field('schedule_team_valor_robot')."']"); ?>
			</div>
		</div>
	</div>

	<div class="container schedule-content">
		<div class="column">
			<?php the_field('schedule_content'); ?>
		</div>
	</div>

	<div class="container schedule-table">
		<?php if( have_rows('the_schedule') ): ?>
			<?php while( have_rows('the_schedule') ): the_row(); ?>
				<div class="column <?php if( get_sub_field('am_or_pm') == "am" ): ?>green<?php else: ?>blue<?php endif; ?>-text timeslot-<?php the_sub_field('timeslot'); ?><?php if( get_sub_field('am_or_pm') == "am" ): ?>A<?php else: ?>P<?php endif; ?>">
					<div class="timeslot">
						<p><?php the_sub_field('timeslot'); ?><?php if( get_sub_field('am_or_pm') == "am" ): ?>A<?php else: ?>P<?php endif; ?></p>
					</div>
					<div class="timeslot-description">
						<?php the_sub_field('timeslot_description'); ?>
					</div>
				</div>
			<?php endwhile; ?>
		<?php endif; ?>
	</div>
</section>
