<?php global $post; ?>
<section <?php if (get_sub_field('section_name')): ?>id="<?php echo $post->post_name.'-'.sanitize_title(get_sub_field('section_name')); ?>"<?php endif; ?> class="layout-hero anim fadeIn" style="background-color:<?php echo (get_field('hero_background_color')) ? get_field('hero_background_color') : get_field('brand_primary_color', 'option') ; ?>;">
	<div class="hero anim fadeIn delay-500">
		<div class="container">
			<div class="column">
				<?php the_field('hero_content'); ?>
			</div>
		</div>
		<div class="toy-container">
			<div class="toy pedestal">
				<?php echo do_shortcode('[smart_image image_id="'. get_field('hero_image__pedestal') .'"]'); ?>
			</div>
			<div class="toy cowboy">
				<?php echo do_shortcode('[smart_image image_id="'. get_field('hero_image__cowboy') .'"]'); ?>
			</div>
			<div class="toy cowboy-thoughts">
				<?php echo do_shortcode('[smart_image image_id="'. get_field('hero_image__cowboy_thoughts') .'"]'); ?>
			</div>
			<div class="toy monkey">
				<?php echo do_shortcode('[smart_image image_id="'. get_field('hero_image__monkey') .'"]'); ?>
			</div>
			<div class="toy monkey-thoughts">
				<?php echo do_shortcode('[smart_image image_id="'. get_field('hero_image__monkey_thoughts') .'"]'); ?>
			</div>
			<div class="toy barbie">
				<?php echo do_shortcode('[smart_image image_id="'. get_field('hero_image__barbie') .'"]'); ?>
			</div>
			<div class="toy barbie-thoughts">
				<?php echo do_shortcode('[smart_image image_id="'. get_field('hero_image__barbie_thoughts') .'"]'); ?>
			</div>
			<div class="toy troll">
				<?php echo do_shortcode('[smart_image image_id="'. get_field('hero_image__troll') .'"]'); ?>
			</div>
			<div class="toy troll-thoughts">
				<?php echo do_shortcode('[smart_image image_id="'. get_field('hero_image__troll_thoughts') .'"]'); ?>
			</div>
			<div class="toy pirate">
				<?php echo do_shortcode('[smart_image image_id="'. get_field('hero_image__pirate') .'"]'); ?>
			</div>
			<div class="toy giraffe">
				<?php echo do_shortcode('[smart_image image_id="'. get_field('hero_image__giraffe') .'"]'); ?>
			</div>
			<div class="toy giraffe-thoughts">
				<?php echo do_shortcode('[smart_image image_id="'. get_field('hero_image__giraffe_thoughts') .'"]'); ?>
			</div>
			<div class="toy dinosaur">
				<?php echo do_shortcode('[smart_image image_id="'. get_field('hero_image__dinosaur') .'"]'); ?>
			</div>
			<div class="toy dinosaur-thoughts">
				<?php echo do_shortcode('[smart_image image_id="'. get_field('hero_image__dinosaur_thoughts') .'"]'); ?>
			</div>
		</div>
		<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAC0AAAAgAQAAAACu/8zpAAAAAnRSTlMAAHaTzTgAAAALSURBVHgBYxjmAAAA4AABsy8CLgAAAABJRU5ErkJggg==" width="45" height="32" class="sizer" />
	</div>
</section>
