<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package grass
 */

get_header(); ?>
    <div class="container title-page">Главная / Акции</div>
    <div class="container news-selection">
        <div class="news-selection-row">
        	<?php
        		global $wp_query, $paged;
        		$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
        		$the_query = new WP_Query( array(
        			'post_type' => get_post_type(),
        			'paged' => $paged,
        			'posts_per_page' => '12',
        		) );
        		 // $temp = $wp_query;
        		 // $wp_query = null;
        		 // $wp_query = $the_query;
        		if ( $the_query->have_posts() ) : ?>
	            <?php grass_get_paginate_links( $the_query ) ?>
        </div>
    </div>
    <div class="container-fluid news-scatter">
        <div class="container">
			<?php while ( $the_query->have_posts() ) : $the_query->the_post();
					get_template_part( 'template-parts/content-archive', get_post_format() );
				endwhile; ?>
        </div>
    </div>
			<?php else:
				endif; ?>
    <div class="container news-selection">
        <div class="news-selection-row footer-news-selection-row ">
        	<?php grass_get_paginate_links( $the_query ) ?>
    		<?php
                wp_reset_postdata()
                // wp_reset_query()
                // $wp_query = null;
                // $wp_query = $temp;
            ?>
        </div>
    </div>


<?php
// get_sidebar();
get_footer();
