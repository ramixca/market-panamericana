<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package panamericana
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'panamericana'); ?></a>
		<div class="announcement-bar pt-2 pb-2">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12 d-flex justify-content-end">
						<ul class="announcement-bar__list">
							<li>
								<i class="bi bi-telephone rounded-circle"></i>
								<a href="<?php echo esc_url('tel: (780) 488-0055'); ?>" class="text-decoration-none"><?php echo esc_html('(780) 488-0055'); ?></a>
							</li>
							<li>
								<i class="bi bi-instagram rounded-circle"></i>
								<a href="<?php echo esc_url('https://www.instagram.com/tiendapanamericanayeg/'); ?>" target="_blank" class="text-decoration-none"><?php echo esc_html('@tiendapanamericanaYEG'); ?></a>
							</li>
							<li>
								<i class="bi bi-facebook rounded-circle"></i>
								<a href="<?php echo esc_url('https://www.facebook.com/TiendaPanamericanaEdmonton'); ?>" target="_blank" class="text-decoration-none"><?php echo esc_html('TiendaPanamericanaEdmonton'); ?></a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>


		<header id="masthead" class="site-header bg-mustard d-flex p-2">
			<div class="site-branding">
				<?php

				if (is_front_page() && is_home()) :
				?>
					<h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
				<?php
				else :
				?>
					<p class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></p>
				<?php
				endif;
				$panamericana_description = get_bloginfo('description', 'display');
				if ($panamericana_description || is_customize_preview()) :
				?>
					<p class="site-description"><?php echo $panamericana_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped 
												?></p>
				<?php endif; ?>
			</div><!-- .site-branding -->


			<?php the_custom_logo(); ?>

			<nav id="site-navigation" class="main-navigation bg-mustard">
    <div class="container d-flex justify-content-end align-items-center flex-wrap">
        <div class="d-flex align-items-center">
            <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
                <i class="bi bi-list"></i>
            </button>
        </div>

        <div class="text-center mt-3 mt-md-0">
            <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'menu-1',
                    'menu_id'        => 'primary-menu'
                )
            );
            ?>
        </div>
    </div>
</nav>




	</header><!-- #masthead -->