<?php global $post; ?>
<section <?php if (get_sub_field('section_name')): ?>id="<?php echo $post->post_name.'-'.sanitize_title(get_sub_field('section_name')); ?>"<?php endif; ?> class="layout-hero anim fadeIn" style="background-color:<?php echo (get_field('hero_background_color')) ? get_field('hero_background_color') : get_field('brand_primary_color', 'option') ; ?>;">
	<div class="hero anim fadeIn delay-500">
		<div class="container">
			<div class="column">
				<?php the_field('hero_content'); ?>
			</div>
		</div>
		<div class="toy-container">
			<div class="toy pedestal subtle-parallax" data-parallax-dampening="8" data-parallax-dir="reverse">
				<?php echo do_shortcode('[smart_image image_id="'. get_field('hero_image__pedestal') .'"]'); ?>
			</div>
			<div class="toy cowboy subtle-parallax" data-parallax-dampening="8" data-parallax-dir="reverse">
				<?php echo do_shortcode('[smart_image image_id="'. get_field('hero_image__cowboy') .'"]'); ?>
			</div>
			<div class="toy cowboy-thoughts subtle-parallax" data-parallax-dampening="8" data-parallax-dir="reverse">
				<?php echo do_shortcode('[smart_image image_id="'. get_field('hero_image__cowboy_thoughts') .'"]'); ?>
			</div>
			<div class="toy monkey subtle-parallax" data-parallax-dampening="8" data-parallax-dir="reverse">
				<?php echo do_shortcode('[smart_image image_id="'. get_field('hero_image__monkey') .'"]'); ?>
			</div>
			<div class="toy monkey-thoughts subtle-parallax" data-parallax-dampening="8" data-parallax-dir="reverse">
				<?php echo do_shortcode('[smart_image image_id="'. get_field('hero_image__monkey_thoughts') .'"]'); ?>
			</div>
			<div class="toy barbie subtle-parallax" data-parallax-dampening="8" data-parallax-dir="reverse">
				<?php echo do_shortcode('[smart_image image_id="'. get_field('hero_image__barbie') .'"]'); ?>
			</div>
			<div class="toy barbie-thoughts subtle-parallax" data-parallax-dampening="8" data-parallax-dir="reverse">
				<?php echo do_shortcode('[smart_image image_id="'. get_field('hero_image__barbie_thoughts') .'"]'); ?>
			</div>
			<div class="toy troll subtle-parallax" data-parallax-dampening="8" data-parallax-dir="reverse">
				<?php echo do_shortcode('[smart_image image_id="'. get_field('hero_image__troll') .'"]'); ?>
			</div>
			<div class="toy troll-thoughts subtle-parallax" data-parallax-dampening="8" data-parallax-dir="reverse">
				<?php echo do_shortcode('[smart_image image_id="'. get_field('hero_image__troll_thoughts') .'"]'); ?>
			</div>
			<div class="toy pirate subtle-parallax" data-parallax-dampening="8" data-parallax-dir="reverse">
				<?php echo do_shortcode('[smart_image image_id="'. get_field('hero_image__pirate') .'"]'); ?>
			</div>
			<div class="toy giraffe subtle-parallax" data-parallax-dampening="8" data-parallax-dir="reverse">
				<?php echo do_shortcode('[smart_image image_id="'. get_field('hero_image__giraffe') .'"]'); ?>
			</div>
			<div class="toy giraffe-thoughts subtle-parallax" data-parallax-dampening="8" data-parallax-dir="reverse">
				<?php echo do_shortcode('[smart_image image_id="'. get_field('hero_image__giraffe_thoughts') .'"]'); ?>
			</div>
			<div class="toy dinosaur subtle-parallax" data-parallax-dampening="8" data-parallax-dir="reverse">
				<?php echo do_shortcode('[smart_image image_id="'. get_field('hero_image__dinosaur') .'"]'); ?>
			</div>
			<div class="toy dinosaur-thoughts subtle-parallax" data-parallax-dampening="8" data-parallax-dir="reverse">
				<?php echo do_shortcode('[smart_image image_id="'. get_field('hero_image__dinosaur_thoughts') .'"]'); ?>
			</div>
		</div>
		<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAC0AAAAgAQAAAACu/8zpAAAAAnRSTlMAAHaTzTgAAAALSURBVHgBYxjmAAAA4AABsy8CLgAAAABJRU5ErkJggg==" width="45" height="32" class="sizer" />
	</div>
</section>
