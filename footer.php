<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package grass
 */

?>

	</div><!-- #content -->

<!-- 	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<a href="<?php //echo esc_url( __( 'https://wordpress.org/', 'grass' ) ); ?>"><?php
				/* translators: %s: CMS name, i.e. WordPress. */
				// printf( esc_html__( 'Proudly powered by %s', 'grass' ), 'WordPress' );
			?></a>
			<span class="sep"> | </span>
			<?php
				/* translators: 1: Theme name, 2: Theme author. */
				// printf( esc_html__( 'Theme: %1$s by %2$s.', 'grass' ), 'grass', '<a href="https://automattic.com/">Underscores.me</a>' );
			?>
		</div>
	</footer>
</div>

<?php //wp_footer(); ?>

</body>
</html> -->

    <div class="container-fluid container-states">
        <div class="container">
            <div class="col-md-6 col-sm-6 col-xs-12 col-xxs-12 states-tile1">
                <div class="col-md-6 col-sm-6 col-xs-6 col-xxs-12 states-blok states-blok1">
                    <?php get_phone( 'footer-number') ?>
                    <div class="footer-number-desc"><?php _e( 'Автохимия и автокосметика для моек', 'grass' ) ?></div>
                    <div class="footer-rights">&#9400;&nbsp; Grass: косметика для чистоты. Все права защищены.</div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-6 col-xxs-12 states-blok states-blok2">
                    <div class="footer-write-us openSlickModal-1 manualLabel"><?php _e( 'Написать нам', 'grass' ) ?></div>
                    <div class="footer-share"><? _e( 'Поделиться', 'grass' ) ?>:
<!--                         <ul class="footer-social-stack">
                            <a href="#">
                                <li class="footer-social1 footer-social"></li>
                            </a>
                            <a href="#">
                                <li class="footer-social2 footer-social"></li>
                            </a>
                            <a href="#">
                                <li class="footer-social3 footer-social"></li>
                            </a>
                            <a href="#">
                                <li class="footer-social4 footer-social"></li>
                            </a>
                        </ul> -->
                        <?php echo get_social_networks() ?>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12 col-xxs-12 states-tile2">
                <div class="col-md-6 col-sm-6 col-xs-6 col-xxs-12 states-blok states-blok3">
<!--                     <ul class="footer-list">
                        <a href="#">
                            <li class="footer-list-text">Автохимия для моек</li>
                        </a>
                        <a href="#">
                            <li class="footer-list-text">Авохимия в розницу</li>
                        </a>
                        <a href="#">
                            <li class="footer-list-text">Клининг</li>
                        </a>
                        <a href="#">
                            <li class="footer-list-text">Бытовая химия</li>
                        </a>
                        <a href="#">
                            <li class="footer-list-text">Оборудование для автомойки</li>
                        </a>
                        <a href="#">
                            <li class="footer-list-text">Пылесосы</li>
                        </a>
                    </ul> -->
                    <?php dynamic_sidebar( 'footer_column_one' ); ?>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-6 col-xxs-12 states-blok states-blok4">
<!--                     <ul class="footer-list">
                        <a href="#">
                            <li class="footer-list-text">Инвентарь</li>
                        </a>
                        <a href="#">
                            <li class="footer-list-text">Аппараты высокого давления</li>
                        </a>
                        <a href="#">
                            <li class="footer-list-text">Очистные усановки</li>
                        </a>
                        <a href="#">
                            <li class="footer-list-text">Реклама, бренд</li>
                        </a>
                        <a href="#">
                            <li class="footer-list-text">Сертификаты</li>
                        </a>
                    </ul> -->
                    <?php dynamic_sidebar( 'footer_column_two' ); ?>
                    <a href="#">
                        <li class="footer-list-text footer-list-web"><?php _e( 'Создатель сайта — igmish.', 'grass' ) ?></li>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div id="popup-1" class="slickModal">
        <div class="window">
            <div class="title"><?php _e( 'Обратная связь', 'grass' ) ?></div>
            <form>
                <input type="text" class="field" placeholder="<?php _e( 'Ваше имя' ,'grass' ) ?>" />
                <input type="email" class="field" placeholder="<?php _e( 'Ваш E-mail', 'grass' ) ?>" />
                <input type="tel" class="field" placeholder="<?php _e( 'Ваш телефон', 'grass' ) ?>" />
                <input type="text" class="field field-text" placeholder="<?php _e( 'Сообщение', 'grass' ) ?>" />
                <input type="submit" class="closeModal send" value="<?php _e( 'Отправить', 'grass' ) ?>" />
            </form>
            <div class="closeModal bottomClose"><?php _e( 'Нет, спасибо.', 'grass' ) ?></div>
        </div>
    </div>
    <?php wp_footer() ?>
</body>

</html>