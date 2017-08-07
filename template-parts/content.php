<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package grass
 */

?>

<!-- <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php grass_posted_on(); ?>
		</div>
		<?php
		endif; ?>
	</header>

	<div class="entry-content">
		<?php
			the_content( sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'grass' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'grass' ),
				'after'  => '</div>',
			) );
		?>
	</div>

	<footer class="entry-footer">
		<?php grass_entry_footer(); ?>
	</footer>
</article> -->
    <div class="container news-item-scatter">
        <div class="col-md-4 news-item-image-box">
            <div class="news-item-image"></div>
        </div>
        <div class="col-md-8 news-item-text-box">
            <div class="news-item-text-header"><?php the_title() ?></div>
            <div class="news-item-text-desc"><?php echo get_the_content() ?></div>
            <div class="news-item-text-butons">
            	<?php if ( $post->post_type == 'stocks' ) { ?>
	                <div class="news-item-text-butons-left"><a href="<?php echo get_post_type_archive_link( 'stocks' ) ?>">&#60;&nbsp;Назад к списку акций</a></div>
            	<?php } else { ?>
	                <div class="news-item-text-butons-left"><a href="<?php echo get_post_type_archive_link( 'news' ) ?>">&#60;&nbsp;Назад к списку новостей</a></div>
        		<?php } ?>
                <div class="news-item-text-butons-right"><a href="#">Просмотреть продукцию&nbsp;&#62;</a></div>
            </div>
        </div>
    </div>
