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
			<?php if( have_rows('faqs') ) : ?>
				<?php while( have_rows('faqs') ): the_row(); ?>
					<div class="column twelve">
						<h2><?php the_sub_field('category'); ?></h2>
					</div>
					<div class="column eleven offset-by-one">
						<?php if( have_rows('questions') ) : ?>
							<?php while( have_rows('questions') ): the_row(); ?>
								<div class="container">
									<div class="column">
										<div class="content">
											<a href="#"></a>
											<h3><?php the_sub_field('question'); ?></h3>
											<p><?php the_sub_field('answer'); ?></p>
										</div>
									</div>
								</div>
							<?php endwhile; ?>
						<?php endif; ?>
					</div>
				<?php endwhile; ?>
			<?php endif; ?>
		</div>
	</section>
	<section class="navigation">
		<div class="container one-half bleed">
			<a class="column<?php pjaxify(); ?>" href="/" title="How to enter">
				<div class="content"><span class="h2">How to enter</span></div>
			</a>
			<a class="column<?php pjaxify(); ?>" href="/contact-us" title="Contact us">
				<div class="content"><span class="h2">Contact us</span></div>
			</a>
		</div>
	</section>
<?php endwhile; ?>
