<?php
/**
 * Template shop page WooCommerce.
 */
if ( is_shop() ) {
get_header(); ?>

    <div class="container title-page"><?php woocommerce_breadcrumb() ?></div>
    <div class="container-fluid catalog-scatter">
        <div class="container">
        	<?php $category_array = get_categories( array(
        		'taxonomy' => 'product_cat',
        	) );
        	for ( $i=0; $i < count( $category_array ); $i++ ) { if ( $category_array[$i]->category_parent == 0 ) {
        		$image_url = wp_get_attachment_url( get_woocommerce_term_meta( $category_array[$i]->term_id, 'thumbnail_id', true ) );
        	?>
	            <div class="catalog-scatter-tile p0 col-lg-4 col-md-6 col-sm-6 col-xs-12 col-xxs-12">
	                <div class="catalog-scatter-item">
	                    <div class="catalog-scatter-item-image" style="background-image: url('<?php echo $image_url ?>')"></div>
	                    <div class="catalog-scatter-flex">
	                        <div class="catalog-scatter-item-headline"><?php echo $category_array[$i]->name ?></div>
	                        <div class="catalog-scatter-item-desc"><?php echo $category_array[$i]->description ?></div>
	                        <a class="catalog-scatter-item-more" href="<?php echo get_category_link( $category_array[$i]->term_id ) ?>">Показать продукцию&nbsp;&#62;</a>
	                    </div>
	                </div>
	            </div>
        	<?php } } ?>
            <div class="catalog-scatter-tile p0 col-lg-4 col-md-6 col-sm-6 col-xs-12 col-xxs-12">
                <div class="catalog-scatter-item">
                    <div class="catalog-scatter-item-image catalog-scatter-item-image11"></div>
                    <div class="catalog-scatter-flex">
                        <div class="catalog-scatter-item-headline">Сертификаты</div>
                        <div class="catalog-scatter-item-desc">В данном разделе Вы ознакомитесь с сертификатами на нашу продукцию</div>
                        <a class="catalog-scatter-item-more" href="#">Показать сертификаты&nbsp;&#62;</a>
                    </div>
                </div>
            </div>
            <div class="catalog-scatter-tile p0 col-lg-4 col-md-6 col-sm-6 col-xs-12 col-xxs-12">
                <div class="catalog-scatter-item">
                    <div class="catalog-scatter-item-image catalog-scatter-item-image12"></div>
                    <div class="catalog-scatter-flex">
                        <div class="catalog-scatter-item-headline">Техническая информация</div>
                        <div class="catalog-scatter-item-desc">Новинка - очистные сооружения под брендом GraSS. Установки АКВА предназначены для очистки сточных вод от автомобильных м...</div>
                        <a class="catalog-scatter-item-more" href="#">Перейти в раздел&nbsp;&#62;</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php get_footer();
} else {
	woocommerce_get_template( 'archive-product.php' );
}