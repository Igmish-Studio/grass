<?php
/**
 * Template part for displaying posts stocks
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package grass
 */
?>
<!-- <?php print_r( $post ) ?> -->
<?php $post_term = wp_get_post_terms( $post->ID, 'category-news' ) ?>
<div class="news-scatter-tile p0 col-lg-4 col-md-6 col-sm-6 col-xs-12 col-xxs-12 post-<?php the_ID() ?>">
    <div class="news-scatter-item">
        <div class="news-scatter-item-header <?php echo ( $post_term ) ? ( $post_term[0]->name == 'Новинки' ) ? 'news-scatter-item-header-wheat' : 'news-scatter-item-header-green' : 'news-scatter-item-header-red' ?>"><?php echo ( $post_term ) ? $post_term[0]->name : "Акция" ?><span class="news-scatter-item-header-black">&nbsp;<?php the_time( 'd.m.Y' ); ?></span></div>
        <div class="news-scatter-item-image" style="background-image: url('<?php the_post_thumbnail_url() ?>')"></div>
        <div class="news-scatter-flex">
            <div class="news-scatter-item-headline"><?php the_title() ?></div>
            <div class="news-scatter-item-desc"><?php echo $post->post_excerpt ?></div>
            <a class="news-scatter-item-more" href="<?php the_permalink() ?>"><?php _e( 'Подробнее&nbsp;&#62;', 'grass' ) ?></a>
        </div>
    </div>
</div>