<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package panamericana
 */

get_header();
?>

<main id="primary" class="site-main">
	<section class="container-fluid p-0">
		<div id="carouselExampleDark" class="carousel carousel-dark slide">
			<div class="carousel-indicators">
				<button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
				<button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
			</div>
			<div class="carousel-inner">
				<div class="carousel-item active" data-bs-interval="10000">
					<a href="#"><img src="<?php echo get_template_directory_uri(); ?> /img/slider/inside.jpg" class="d-block w-100" alt="..."></a>
					<div class="carousel-caption d-none d-md-block">
					</div>
				</div>

				<div class="carousel-item" data-bs-interval="2000">
					<a href="#"><img src="<?php echo get_template_directory_uri(); ?> /img/slider/tienda.jpg" class="d-block w-100" alt="..."></a>
					<div class="carousel-caption d-none d-md-block">
					</div>
				</div>

				<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Previous</span>
				</button>
				<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Next</span>
				</button>
			</div>
		</div>
	</section>

	<section class="container-fluid about-section">
		<div class="text-center">
			<div class="row align-items-center d-flex">
				<div class="col-lg-6">
					<h1 class="about-title pt-2 pb-2"><?php echo esc_html('Tienda Panamericana'); ?></h1>
					<p class="about-text h-25 d-inline-block text-center w-75"><?php echo esc_html('We are a Latin Store in Edmonton. We offer the best Latin Products, foods, and some services such as sending money internationally.'); ?></p>
				</div>
				<div class="col-lg-6 p-0">
					<img src="<?php echo esc_url(get_template_directory_uri() . '/img/slider/tienda.jpg'); ?>" class="img-fluid w-600" alt="...">
				</div>
			</div>
		</div>
	</section>


	<section class="search-section bg-mustard">
		<div class="container-sm pt-2 pb-2">
			<h1 class="search-title text-center pt-4"><?php echo esc_html('Looking for some latin products?'); ?></h1>

			<div class="col-md-8 offset-md-2 pt-4 pb-4">
				<?php if (function_exists('aws_get_search_form')) {
					echo wp_kses_post(aws_get_search_form());
				} ?>
			</div>
		</div>
	</section>


	<section class="container popular-products mb-5">
		<div class="pt-5">
			<?php echo do_shortcode('[products columns=4 limit=8]'); ?>
		</div>


		<div class="d-grid col-3 mx-auto">
			<a href="<?php echo wc_get_page_permalink('shop'); ?>" class="view-more-btn btn btn-primary">View More</a>
		</div>
	</section>

	<section class="container-fluid location-section">
		<div class="row align-items-center d-flex text-center">
			<div class="col-lg-6">
				<h2 class="location-title pt-2 pb-2 mt-4 d-inline-block rounded mx-auto"><?php echo esc_html('Our hours & location'); ?></h2>
				<?php the_field('location'); ?>
			</div>


			<div class="col-lg-6 p-0">
				<?php
				$location = get_field('map');
				if ($location) : ?>
					<div class="acf-map" data-zoom="16">
						<div class="marker" data-lat="<?php echo esc_attr($location['lat']); ?>" data-lng="<?php echo esc_attr($location['lng']); ?>"></div>
					</div>
				<?php endif; ?>
			</div>
		</div>



	</section>

	<section class="container-fluid contact-section">
		<div class="row">
			<div class="col-lg-6">
					<?php echo do_shortcode('[contact-form-7 id="56" title="CONTACT US"]');?>
					<h2>test</h2>
			</div>


			<div class="col-lg-6 p-0">
				<img src="<?php echo esc_url(get_template_directory_uri() . '/img/follow-us.png'); ?>" class="img-fluid " alt="...">

				<div class="social-wrapper p-4 mb-4 rounded-left">
					<i class="bi bi-instagram rounded-circle" style="font-size: 24px"></i>
					<a href="<?php echo esc_url( 'https://www.instagram.com/tiendapanamericanayeg/' ); ?>" target="_blank" class="text-decoration-none social-link">
						<?php echo esc_html( '@tiendapanamericanaYEG' ); ?>
					</a>
				</div>

				<div class="social-wrapper p-4 mb-4">
					<i class="bi bi-instagram rounded-circle" style="font-size: 24px"></i>
					<a href="<?php echo esc_url( 'https://www.instagram.com/tiendapanamericanayeg/' ); ?>" target="_blank" class="text-decoration-none social-link">
						<?php echo esc_html( '@tiendapanamericanaYEG' ); ?>
					</a>
				</div>

			</div>
		</div>



	</section>






</main>

<?php

get_footer();
