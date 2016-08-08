<section <?php if (get_sub_field('section_name')): ?>id="<?php echo $post->post_name.'-'.sanitize_title(get_sub_field('section_name')); ?>"<?php endif; ?>>
	<div class="container lead-in-content anim fadeInUp delay-200 justify-center">
		<div class="column twelve center text-center">
			<?php the_field('faqs_lead_in'); ?>
		</div>
	</div>
	<div class="container anim fadeInUp delay-200 questions">

		<?php $i = 1; ?>
		<?php while( have_rows('faq_questions') ) : the_row(); ?>
			<div class="column twelve">
				<div class="content kitchensink">
					<?php the_sub_field('content'); ?>
				</div>

				<div class="parallax-thoughts">
					<?php if ( ( $i % 5 ) == 1 || ( $i % 5 ) == 4 ): // First or fourth element ?>
						<?php echo do_shortcode('[smart_image image_id="'. get_field('faqs_image_1') .'"]'); ?>
					<?php elseif ( ( $i % 5 ) == 3 || ( $i % 5 ) == 0 ): // third or fifth element ?>
						<?php echo do_shortcode('[smart_image image_id="'. get_field('faqs_image_3') .'"]'); ?>
					<?php else: // third or fifth element ?>
						<?php echo do_shortcode('[smart_image image_id="'. get_field('faqs_image_2') .'"]'); ?>
					<?php endif; ?>
				</div>

			</div>
			<?php $i++; ?>
		<?php endwhile; ?>
	</div>
</section>
