<?php
	add_action( 'after_setup_theme', 'woocommerce_support' );
	function woocommerce_support(){
		add_theme_support( 'woocommerce' );
	}

	add_action( 'woocommerce_enqueue_styles', '__return_empty_array' );

	remove_action( 'woocommerce_archive_description', 'woocommerce_taxonomy_archive_description', 10 );
	remove_action( 'woocommerce_archive_description', 'woocommerce_product_archive_description', 10 );
	remove_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 20 );
	remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30 );
	remove_action( 'woocommerce_after_shop_loop', 'woocommerce_pagination', 10 );
	remove_action( 'woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_title', 10 );
	remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_product_link_close', 5 );
	remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 5 );
	remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10 );
	remove_action( 'woocommerce_before_shop_loop_item', 'woocommerce_template_loop_product_link_open', 10 );
	remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_price', 10 );

	add_action( 'woocommerce_before_shop_loop', 'woocommerce_before_wrapper_category', 30 );
	function woocommerce_before_wrapper_category(){
		echo '<div class="container-fluid product-scatter"><div class="container">';
	}

	add_action( 'woocommerce_after_shop_loop', 'woocommerce_after_wrapper_category', 30 );
	function woocommerce_after_wrapper_category(){
		echo '<div></div>';
	}

	add_action( 'woocommerce_before_shop_loop', 'woocommerce_count_pagination', 20 );
	add_action( 'woocommerce_after_main_content', 'woocommerce_count_pagination', 30 );
	function woocommerce_count_pagination(){
		global $wp_query;
		//print_r( $wp_query ) ?>
		<div class="container product-selection">
			<div class="product-selection-row">
				<?php grass_get_paginate_links( $wp_query ) ?>
			</div>
		</div>
	<?php }

	add_action( 'woocommerce_before_shop_loop_item', 'woocommerce_before_wrapper_product_catalog', 5 );
	function woocommerce_before_wrapper_product_catalog(){
		echo '<div class="product-scatter-item">';
	}

	add_action( 'woocommerce_after_shop_loop_item', 'woocommerce_after_wrapper_product_catalog', 10 );
	function woocommerce_after_wrapper_product_catalog(){
		echo '</div>';
	}

	// add_action( 'woocommerce_before_shop_loop_item', 'woocommerce_before_wrapper_image_product', 5 );
	function woocommerce_before_wrapper_image_product(){
		echo '<div class="product-scatter-item-image">';
	}

	// add_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_after_wrapper_image_product', 10 );
	function woocommerce_after_wrapper_image_product(){
		echo '</div>';
	}

	add_action( 'woocommerce_after_shop_loop_item', 'woocommerce_before_wrapper_product_content', 5 );
	function woocommerce_before_wrapper_product_content(){
		echo '<div class="product-scatter-flex">';
	}

	add_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_product_title', 5 );
	function woocommerce_template_loop_product_title(){
		echo '<div class="product-scatter-item-headline">' . get_The_title() . '</div>';
	}

	add_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_link_close', 10 );

	add_action( 'woocommerce_after_shop_loop_item', 'woocommerce_after_wrapper_product_content', 10 );
	function woocommerce_after_wrapper_product_content(){
		echo '</div>';
	}

	add_action( 'woocommerce_before_shop_loop_item', 'woocommerce_template_loop_product_link_open1', 10 );
	function woocommerce_template_loop_product_link_open1(){
		echo '<a href="' . get_the_permalink() . '" class="woocommerce-LoopProduct-link product-scatter-item-image">';
	}

	add_action( 'woocommerce_after_shop_loop_item', 'woocommerce_product_short_description', 5 );
	function woocommerce_product_short_description(){
		echo '<div class="product-scatter-item-desc">' . get_the_excerpt() . '</div>';
	}

	add_action( 'woocommerce_after_shop_loop_item', 'woocommerce_product_price', 5 );
	function woocommerce_product_price(){
		global $product;
		if ( $price_html = $product->get_price_html() ) {
			echo '<div class="product-scatter-item-price">' . $price_html . '</div>';
		}

	}

	add_action( 'woocommerce_after_shop_loop_item', 'woocommerce_product_more', 5 );
	function woocommerce_product_more(){
		echo '<a class="product-scatter-item-more" href="' . get_the_permalink() . '">' . __( 'Подробнее&nbsp;>', 'grass' ) . '</a>';
	}

	add_action( 'woocommerce_after_shop_loop_item', 'woocommerce_add_product_ajax', 5 );
	function woocommerce_add_product_ajax(){
		global $product;
		if ( $product->get_regular_price() ) {
			echo sprintf( '<a href="%s" class="plus-block" data-quantity="%s" data-product_id="%s">
				<span class="novelties-plus product-plus">+</span>
				<span class="novelties-plus-extended product-plus-extended">' . __( 'Добавить в корзину', 'grass' ) . '</span>
			</a>',
			esc_url( $product->add_to_cart_url() ),
			esc_attr( isset( $quantity ) ? $quantity : 1 ),
			esc_attr( $product->get_id() )
			);
		}
	}

