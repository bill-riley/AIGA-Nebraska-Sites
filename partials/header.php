<header role="banner">
	<div class="container">
		<div class="column">
			<a class="logo ajax" href="http://nebraska.aiga.org/"><img src="<?php echo get_template_directory_uri(); ?>/assets_compiled/images/logo-aiga.png" alt="AIGA Nebraska" /></a>
			<a class="show-logo ajax" href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets_compiled/images/logo-show.png" alt="Show Nebraska" /></a>
			<button type="button" class="ellipsis caf" data-func="toggle_nav">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="sr">Toggle navigation</span>
			</button>
			<nav class="collapse navbar-collapse" role="navigation">
				<?php if ( ! is_user_logged_in( ) ) : ?>
					<?php if ( has_nav_menu('primary_navigation') ) : ?>
						<?php wp_nav_menu(array('theme_location' => 'primary_navigation', 'walker' => new NEIGHBORHOOD_Nav_Walker(), 'menu_class' => 'nav navbar-nav')); ?>
					<?php endif; ?>

				<?php else: ?>
					<?php $current_user = wp_get_current_user(); ?>
					<?php $gravatar_base = 'http://www.gravatar.com/avatar/'.md5($current_user->user_email); ?>
					<?php $gravatar_base .= '?d='.urlencode( $hero_bg ).'&r=pg'; ?>
					<?php $small_version = $gravatar_base.'&s=100'; ?>
					<ul class="nav navbar-nav">
						<li class="dropdown">
							<a class="dropdown-toggle <?php pjaxify(); ?>" data-toggle="dropdown" data-target="#" href="/">Show<b class="caret"></b></a>
							<?php wp_nav_menu(array('theme_location' => 'primary_navigation', 'walker' => new NEIGHBORHOOD_Nav_Walker(), 'menu_class' => 'nav navbar-nav dropdown-menu')); ?>
						</li>
						<li class="profile-dropdown">
							<a href="/profile/<?php echo $current_user->user_login; ?>" class="<?php pjaxify(); ?>"><img src="<?php echo $small_version; ?>" /><span><?php echo $current_user->user_nicename; ?></span></a>
							<ul class="dropdown-menu">
								<li><a href="/profile/<?php echo $current_user->user_login; ?>" class="<?php pjaxify(); ?>">View profile</a></li>
								<li><a href="/wp-login.php?action=logout" class="<?php pjaxify(); ?>">Sign out</a></li>
							</ul>
						</li>
					</ul>
				<?php endif; ?>
			</nav>
		</div>
	</div>
	<progress id="article-progress" value="0"></progress>
</header>

<?php sendo()->capture_javascript_start(); ?>
<script type="text/javascript">

	$('a:first','.dropdown-menu').hover(function() {
		$(this).parent().parent().addClass('first-active')
	}, function() {
		$(this).parent().parent().removeClass('first-active')
	});

	$('a','.dropdown-menu').focus(function() {
		$(this).parent().parent().addClass('nav-opened');
	});

	$('a:first','.dropdown-menu').focus(function() {
		$(this).parent().parent().addClass('first-active')
	});


	$('a:last','.dropdown-menu').blur(function() {
		$(this).parent().parent().removeClass('nav-opened');
	});

	$('a:first','.dropdown-menu').blur(function() {
		$(this).parent().parent().removeClass('nav-opened');
		$(this).parent().parent().removeClass('first-active')
	});

	λ.toggle_nav = function(el) {
		if (!$(el).hasClass('active')) {
			$('body, html').addClass('nav-open');
			$(el).addClass('active');
		} else {
			$('body, html').removeClass('nav-open');
			$(el).removeClass('active');
		}
	};

	$(document).keyup(function(e) {
		if (e.keyCode == 27) {
			$('body, html').removeClass('nav-open search-open');
			$('.ellipsis').removeClass('active');
		}
	});
</script>
<?php sendo()->capture_javascript_end(); ?>
