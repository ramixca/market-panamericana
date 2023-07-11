<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

get_header( 'shop' );

/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */
do_action( 'woocommerce_before_main_content' );


if ( woocommerce_product_loop() ) {

	/**
	 * Hook: woocommerce_before_shop_loop.
	 *
	 * @hooked woocommerce_output_all_notices - 10
	 * @hooked woocommerce_result_count - 20
	
	 */
	// do_action( 'woocommerce_before_shop_loop' );
	// filter option

	woocommerce_product_loop_start();
	$taxonomy = "product_cat";
	$terms = get_terms(
		array(
			'taxonomy'=> $taxonomy,
			'parent' => 0
		)
	);

	//bread crumb style nav links to product section
	echo "<nav class='product-page product-links p-2 m-2'>";
	echo "<ul class='breadcrumb'>";
	
	// Breadcrumb Home Link
	echo "<li class='breadcrumb-item'><a href='" . esc_url(home_url('/')) . "'>" . esc_html('Home') . "</a></li>";
	
	foreach ($terms as $term) {
		$term_slug = esc_attr($term->slug);
		$term_name = esc_html($term->name);
		$term_link = esc_url("#" . $term_slug);
	
		echo "<li class='breadcrumb-item'><a href='" . $term_link . "'>" . $term_name . "</a></li>";
	}
	
	echo "</ul>";
	echo "</nav>";
	


	if ($terms && !is_wp_error($terms)) {
		foreach ($terms as $term) {
			$term_slug = esc_attr($term->slug);
			$term_name = esc_html($term->name);
			$args = array(
				'post_type'      => 'product',
				'posts_per_page' => -1,
				'order'          => 'ASC',
				'orderby'        => 'title',
				'tax_query'      => array(
					array(
						'taxonomy' => $taxonomy,
						'field'    => 'slug',
						'terms'    => $term_slug,
					)
				),
			);
	
			$query = new WP_Query($args);
	
			if ($query->have_posts()) {
				echo "<section id='" . $term_slug . "' class='container-fluid m-2 prueba'>";
				echo "<h2 class='text-uppercase'>" . $term_name . "</h2>";
				echo "<ul class='product-list container-fluid row row-cols-4 gap-2'>";	
				while ($query->have_posts()) {
					$query->the_post();
					do_action('woocommerce_shop_loop');
					wc_get_template_part('content', 'product');
				}
				echo "</ul>";
				echo "</section>";
				wp_reset_postdata();
			}
		}
	}
	
	

	woocommerce_product_loop_end();

	/**
	 * Hook: woocommerce_after_shop_loop.
	 *
	 * @hooked woocommerce_pagination - 10
	 */
	// do_action( 'woocommerce_after_shop_loop' );
} else {
	/**
	 * Hook: woocommerce_no_products_found.
	 *
	 * @hooked wc_no_products_found - 10
	 */
	do_action( 'woocommerce_no_products_found' );
}

/**
 * Hook: woocommerce_after_main_content.
 *
 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
 */
do_action( 'woocommerce_after_main_content' );

/**
 * Hook: woocommerce_sidebar.
 *
 * @hooked woocommerce_get_sidebar - 10
 */
// do_action( 'woocommerce_sidebar' );

get_footer( 'shop' );
