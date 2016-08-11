<footer class="content-info">
	<div class="container bleed built-by-friends">
		<div class="scroll-parallax whale" data-parallax-dampening="15" data-parallax-type="abs" data-parallax-dir="reverse"><?php echo do_shortcode('[smart_image image_id="' . get_field('footer_whale') . '" class="parallax-background"]'); ?></div>
		<div class="scroll-parallax shark" data-parallax-dampening="15" data-parallax-type="abs" data-parallax-dir="reverse"><?php echo do_shortcode('[smart_image image_id="' . get_field('footer_shark') . '" class="parallax-background"]'); ?></div>

		<div class="column">
			<div class="content text-center">
				<h1>In partnership with</h1>
				<p><a href="http://aiganebraska.org" target="_blank"><img class="logo-footer" src="<?php echo get_template_directory_uri(); ?>/assets_compiled/images/logo-aiga.png" alt="AIGA Nebraska logo"></a></p>
				<hr />
				<p class="flywheel-hosting">Hosted by <a href="http://getflywheel.com" target="_blank"><img class="flywheel" src="<?php echo get_template_directory_uri(); ?>/assets_compiled/images/logo-white-static.svg" onmouseover="this.setAttribute('src', '<?php echo get_template_directory_uri(); ?>/assets_compiled/images/logo-white-motion.svg');" onmouseout="this.setAttribute('src', '<?php echo get_template_directory_uri(); ?>/assets_compiled/images/logo-white-static.svg');" alt="Flywheel Hosting logo"></a></p>

				<hr />
				<p><strong>2015 BarCamp Omaha Supporters</strong></p>
				<ul class="inline">
					<li>
						<a href="#">Fruitful</a>
					</li>
					<li class="clean">&#8226;</li>
					<li>
						<a href="#">Flywheel</a>
					</li>
					<li class="clean">&#8226;</li>
					<li>
						<a href="#">Hello Holiday</a>
					</li>
					<li class="clean">&#8226;</li>
					<li>
						<a href="#">Grain &amp; Mortar</a>
					</li>
					<li class="clean">&#8226;</li>
					<li>
						<a href="#">AIGA Nebraska Board of Directors</a>
					</li>
				</ul>
				<p><strong>BarCamp Omaha</strong></p>
				<ul class="inline">
					<li>
						<a href="#">2015</a>
					</li>
					<li class="clean">&#8226;</li>
					<li>
						<a href="#">2014</a>
					</li>
					<li class="clean">&#8226;</li>
					<li>
						<a href="#">2013</a>
					</li>
					<li class="clean">&#8226;</li>
					<li>
						<a href="#">2012</a>
					</li>
					<li class="clean">&#8226;</li>
					<li>
						<a href="#">2011</a>
					</li>
					<li class="clean">&#8226;</li>
					<li>
						<a href="#">1984</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<?php echo do_shortcode('[smart_image image_id="' . get_field('footer_ocean_floor') . '" class="ocean-floor parallax-background"]'); ?>
	<div class="container bleed design-and-hosting">
		<div class="column">
			<div class="content">
				<?php echo do_shortcode('[smart_image image_id="' . get_field('footer_octopi') . '"]'); ?>
				<p>Design by <a href="http://fruitful-design.com" target="_blank"><img class="fruitful" src="<?php echo get_template_directory_uri(); ?>/assets_compiled/images/barcamp/logo_fruitful@3x.png" alt="Fruitful Design logo"></a></p>
			</div>
		</div>
	</div>
</footer>
