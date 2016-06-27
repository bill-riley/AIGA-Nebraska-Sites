<?php global $wp_query; ?>
<?php $userdashboard_open = false; ?>
<?php $username = $wp_query->query_vars['username']; ?>
<?php $current_user = wp_get_current_user(); ?>
<?php if ($username == "") {
	if ( is_user_logged_in( ) ):
		$username = $current_user->user_login;
	$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
	$url_to_redirect_to = $protocol.$_SERVER['SERVER_NAME'];

	header('Location: ' . '/profile/' . $username ); /* Redirect browser */
	exit;
	endif;
} ?>
<?php $user_object = get_user_by('slug', $username); ?>
<?php

/* User doesn't exist! */
if (!$user_object || !in_array('submitter', $user_object->roles)):
	header("HTTP/1.0 404 Not Found");
$wp_query->set_404(); ?>

<div class="alert alert-warning">
	<?php _e('Sorry, but the page you were trying to view does not exist.', 'aiga_nebraska'); ?>
</div>

<?php get_search_form(); ?>

<?php else: ?>
	<?php /* User does exist! */  ?>
	<?php while (have_posts()) : the_post(); ?>
		<?php $gravatar_base = 'http://www.gravatar.com/avatar/'.md5($user_object->user_email); ?>
		<?php $hero_bg = get_field('hero_background_image', get_id_by_slug('home')); ?>
		<?php $hero_bg = wp_get_attachment_image_src( $hero_bg, 'full' )[0]; ?>
		<?php $gravatar_base .= '?d='.urlencode( $hero_bg ).'&r=pg'; ?>
		<?php $small_version = $gravatar_base.'&s=400'; ?>
		<?php $medium_version = $gravatar_base.'&s=800'; ?>
		<?php $large_version = $gravatar_base.'&s=1200'; ?>
		<?php $bg_images = array(
			'default' => $large_version,
			'mobile' => $small_version,
			'(min-width:640px)' => $medium_version,
			'(min-width:1000px)' => $large_version,
			);
			?>
			<?php $images = format_responsive_image_array($bg_images); ?>
			<section class="hero">
				<div class="bg-image-blur" data-bgimg="<?php echo $images; ?>"></div>
				<div class="container">
					<div class="column">
						<div class="content kitchensink">
							<div class="left">
								<img src="<?php echo $large_version; ?>" class="profile-pic" width="150" height="150" />
							</div>
							<div class="right text-left">
								<h1><?php echo $user_object->nickname; ?></h1>
								<h2><?php echo get_field('user_type', 'user_'.$user_object->ID); ?></h2>
							</div>
							<div class="center text-left">
								<p><?php echo (get_field('description', 'user_'.$user_object->ID)) ? get_field('description', 'user_'.$user_object->ID) : "lorem ipsum description copy" ; ?></p>
								<ul class="unstyled inline">
									<li><a href="#" target="_blank" class="button button-small button-transparent button-only-icon"><span class="sr">Website</span><?php readfile(TEMPLATEPATH.'/assets_compiled/images/website.svg'); ?></a></li>
									<li><a href="#" target="_blank" class="button button-small button-transparent button-only-icon"><span class="sr">Facebook</span><?php readfile(TEMPLATEPATH.'/assets_compiled/images/facebook.svg'); ?></a></li>
									<li><a href="#" target="_blank" class="button button-small button-transparent button-only-icon"><span class="sr">Twitter</span><?php readfile(TEMPLATEPATH.'/assets_compiled/images/twitter.svg'); ?></a></li>
									<li><a href="#" target="_blank" class="button button-small button-transparent button-only-icon"><span class="sr">LinkedIn</span><?php readfile(TEMPLATEPATH.'/assets_compiled/images/linkedin.svg'); ?></a></li>
									<li><a href="#" target="_blank" class="button button-small button-transparent button-only-icon"><span class="sr">Dribbble</span><?php readfile(TEMPLATEPATH.'/assets_compiled/images/dribbble.svg'); ?></a></li>
									<li><a href="#" target="_blank" class="button button-small button-transparent button-only-icon"><span class="sr">Behance</span><?php readfile(TEMPLATEPATH.'/assets_compiled/images/behance.svg'); ?></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</section>
			<?php $user_id = get_current_user_id(); ?>
			<?php if ($user_id == $user_object->ID): ?>
				<?php if (!$userdashboard_open): ?>
					<section>
						<div class="container">
							<div class="column">
								<div class="content kitchensink text-center">
									<h2>The Dashboard isn't open to look at yet. </h2>
									<h4>Soon, you'll be able to submit your entries through Stripe or Paypal right here.</h4>
								</div>
							</div>
						</div>
					</section>
				<?php else: ?>
					<section>
						<div class="container one-third padding">
							<div class="column">
								<div class="content">
									<?php the_field('submit_content'); ?>
									<p style="text-align: center;">Looks like you&rsquo;re a member - you&rsquo;ll pay 35$ per submission.</p>
									<p style="text-align: center;">
										<a class="button button-small button-underlined" href="/how-to-enter/">HOW TO ENTER</a>
										<a class="button button-small button-underlined" href="/faq/">FAQ</a>
									</p>
									<p style="text-align: center;"><a href="/profile/<?php echo $username; ?>/submit" class="button button-outlined button-primary">SUBMIT</a></p>
								</div>
							</div>
							<div class="column">
								<div class="content">
									<?php the_field('review_content'); ?>
									<p style="text-align: center;"> <a href="/profile/<?php echo $username; ?>/review" class="button button-outlined button-primary">REVIEW</a></p>
								</div>
							</div>
							<div class="column">
								<div class="content">
									<?php the_field('pay_content'); ?>
									<p style="text-align: center;"> <a href="/profile/<?php echo $username; ?>/pay" class="button button-outlined button-primary">FINALIZE SUBMISSIONS</a></p>
								</div>
							</div>
						</div>
					</section>
				<?php endif; ?>
			<?php endif; ?>
		<?php endwhile; ?>
	<?php endif; ?>

	<?php sendo()->init(array(
		'title' => 'Show | '.$user_object->nickname,
		'description' => $user_object->description,
		'image' => $large_version,
		'url' =>  get_permalink() )
		); ?>
