<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package grass
 */

get_header(); ?>

<!-- 	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		// if ( have_posts() ) :

			// if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php //single_post_title(); ?></h1>
				</header>

			<?php
			// endif;

			/* Start the Loop */
			// while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				// get_template_part( 'template-parts/content', get_post_format() );

			// endwhile;

			// the_posts_navigation();

		// else :

			// get_template_part( 'template-parts/content', 'none' );

		//endif; ?>

		</main>
	</div> -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p>1</p>
                <p>2</p>
                <p>3</p>
                <p>4</p>
                <p>4</p>
                <p>4</p>
                <p>4</p>
                <p>dimi4ek changes</p>
            </div>
        </div>
    </div>
    <!-- карусель1 -->
    <div class="container">
        <section class="demos" id="demos">
            <div class="large-12 columns">
                <div id="owl-carousel-1" class="owl-carousel owl-theme">
                    <div class="item first-carousel-item first-carousel-item1">
                    </div>
                    <div class="item first-carousel-item first-carousel-item2">
                    </div>
                    <div class="item first-carousel-item first-carousel-item3">
                    </div>
                    <div class="item first-carousel-item first-carousel-item4">
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="container">
        <div class="col-xxs-12 novelties">
            <hr class="novelties_hr">
            <div class="novelties_text"><?php _e( 'Новинки', 'grass' ) ?></div>
        </div>
    </div>
    <div class="container">
        <section class="demos" id="demos1">
            <div class="large-12 columns">
                <hr class="novelties_hr novelties_hr2">
                <div id="owl-carousel-2" class="owl-carousel-2 owl-carousel owl-theme">
                    <div class="item second-carousel-item second-carousel-item1">
                        <div class="novelties-title-block">
                            Жидкое мыло
                        </div>
                        <div class="novelties-image novelties-image1"></div>
                        <div class="novelties-description-bold">Жидкое крем-мыло «Milana» алоэ вера сжемчужное
                            <br id="br1">(флакон 500 мл)</div>
                        <div class="novelties-description-regular">Чистящие срества для очистки различных поверхностей разного типа (флакон 600 мл).</div>
                        <div class="novelties-price">645 руб.</div>
                        <div class="novelties-details">Подробнее &rsaquo;</div>
                        <div class="plus-block">
                            <a class="novelties-plus" id="novelties-plus1">+</a>
                            <a class="novelties-plus-extended">Добавить в корзину</a>
                        </div>
                        <hr class="novelties_hr3">
                    </div>
                    <div class="item second-carousel-item second-carousel-item2">
                        <div class="novelties-title-block">
                            Жидкое мыло
                        </div>
                        <div class="novelties-image novelties-image2"></div>
                        <div class="novelties-description-bold">Жидкое крем-мыло «Milana» алоэ вера сжемчужное
                            <br id="br1">(флакон 500 мл)</div>
                        <div class="novelties-description-regular">Чистящие срества для очистки различных поверхностей разного типа (флакон 600 мл).</div>
                        <div class="novelties-price">645 руб.</div>
                        <div class="novelties-details">Подробнее &rsaquo;</div>
                        <div class="plus-block">
                            <a class="novelties-plus" id="novelties-plus2">+</a>
                            <a class="novelties-plus-extended">Добавить в корзину</a>
                        </div>
                        <hr class="novelties_hr3">
                    </div>
                    <div class="item second-carousel-item second-carousel-item3">
                        <div class="novelties-title-block">
                            Жидкое мыло
                        </div>
                        <div class="novelties-image novelties-image3"></div>
                        <div class="novelties-description-bold">Жидкое крем-мыло «Milana» алоэ вера сжемчужное
                            <br id="br1">(флакон 500 мл)</div>
                        <div class="novelties-description-regular">Чистящие срества для очистки различных поверхностей разного типа (флакон 600 мл).</div>
                        <div class="novelties-price">645 руб.</div>
                        <div class="novelties-details">Подробнее &rsaquo;</div>
                        <div class="plus-block">
                            <a class="novelties-plus" id="novelties-plus3">+</a>
                            <a class="novelties-plus-extended">Добавить в корзину</a>
                        </div>
                        <hr class="novelties_hr3">
                    </div>
                    <div class="item second-carousel-item second-carousel-item4">
                        <div class="novelties-title-block">
                            Жидкое мыло
                        </div>
                        <div class="novelties-image novelties-image4"></div>
                        <div class="novelties-description-bold">Жидкое крем-мыло «Milana» алоэ вера сжемчужное
                            <br id="br1">(флакон 500 мл)</div>
                        <div class="novelties-description-regular">Чистящие срества для очистки различных поверхностей разного типа (флакон 600 мл).</div>
                        <div class="novelties-price">645 руб.</div>
                        <div class="novelties-details">Подробнее &rsaquo;</div>
                        <div class="plus-block">
                            <a class="novelties-plus" id="novelties-plus4">+</a>
                            <a class="novelties-plus-extended">Добавить в корзину</a>
                        </div>
                        <hr class="novelties_hr3">
                    </div>
                    <div class="item second-carousel-item second-carousel-item5">
                        <div class="novelties-title-block">
                            Жидкое мыло
                        </div>
                        <div class="novelties-image novelties-image5"></div>
                        <div class="novelties-description-bold">Жидкое крем-мыло «Milana» алоэ вера сжемчужное
                            <br id="br1">(флакон 500 мл)</div>
                        <div class="novelties-description-regular">Чистящие срества для очистки различных поверхностей разного типа (флакон 600 мл).</div>
                        <div class="novelties-price">645 руб.</div>
                        <div class="novelties-details">Подробнее &rsaquo;</div>
                        <div class="plus-block">
                            <a class="novelties-plus" id="novelties-plus5">+</a>
                            <a class="novelties-plus-extended">Добавить в корзину</a>
                        </div>
                        <hr class="novelties_hr3">
                    </div>
                    <div class="item second-carousel-item second-carousel-item6">
                        <div class="novelties-title-block">
                            Жидкое мыло
                        </div>
                        <div class="novelties-image novelties-image5"></div>
                        <div class="novelties-description-bold">Жидкое крем-мыло «Milana» алоэ вера сжемчужное
                            <br id="br1">(флакон 500 мл)</div>
                        <div class="novelties-description-regular">Чистящие срества для очистки различных поверхностей разного типа (флакон 600 мл).</div>
                        <div class="novelties-price">645 руб.</div>
                        <div class="novelties-details">Подробнее &rsaquo;</div>
                        <div class="plus-block">
                            <a class="novelties-plus" id="novelties-plus6">+</a>
                            <a class="novelties-plus-extended">Добавить в корзину</a>
                        </div>
                        <hr class="novelties_hr3">
                    </div>
                    <div class="item second-carousel-item second-carousel-item7">
                        <div class="novelties-title-block">
                            Жидкое мыло
                        </div>
                        <div class="novelties-image novelties-image5"></div>
                        <div class="novelties-description-bold">Жидкое крем-мыло «Milana» алоэ вера сжемчужное
                            <br id="br1">(флакон 500 мл)</div>
                        <div class="novelties-description-regular">Чистящие срества для очистки различных поверхностей разного типа (флакон 600 мл).</div>
                        <div class="novelties-price">645 руб.</div>
                        <div class="novelties-details">Подробнее &rsaquo;</div>
                        <div class="plus-block">
                            <a class="novelties-plus" id="novelties-plus7">+</a>
                            <a class="novelties-plus-extended">Добавить в корзину</a>
                        </div>
                        <hr class="novelties_hr3">
                    </div>
                    <div class="item second-carousel-item second-carousel-item8">
                        <div class="novelties-title-block">
                            Жидкое мыло
                        </div>
                        <div class="novelties-image novelties-image5"></div>
                        <div class="novelties-description-bold">Жидкое крем-мыло «Milana» алоэ вера сжемчужное
                            <br id="br1">(флакон 500 мл)</div>
                        <div class="novelties-description-regular">Чистящие срества для очистки различных поверхностей разного типа (флакон 600 мл).</div>
                        <div class="novelties-price">645 руб.</div>
                        <div class="novelties-details">Подробнее &rsaquo;</div>
                        <div class="plus-block">
                            <a class="novelties-plus" id="novelties-plus8">+</a>
                            <a class="novelties-plus-extended">Добавить в корзину</a>
                        </div>
                        <hr class="novelties_hr3">
                    </div>
                    <div class="item second-carousel-item second-carousel-item9">
                        <div class="novelties-title-block">
                            Жидкое мыло
                        </div>
                        <div class="novelties-image novelties-image5"></div>
                        <div class="novelties-description-bold">Жидкое крем-мыло «Milana» алоэ вера сжемчужное
                            <br id="br1">(флакон 500 мл)</div>
                        <div class="novelties-description-regular">Чистящие срества для очистки различных поверхностей разного типа (флакон 600 мл).</div>
                        <div class="novelties-price">645 руб.</div>
                        <div class="novelties-details">Подробнее &rsaquo;</div>
                        <div class="plus-block">
                            <a class="novelties-plus" id="novelties-plus9">+</a>
                            <a class="novelties-plus-extended">Добавить в корзину</a>
                        </div>
                        <hr class="novelties_hr3">
                    </div>
                    <div class="item second-carousel-item second-carousel-item10">
                        <div class="novelties-title-block">
                            Жидкое мыло
                        </div>
                        <div class="novelties-image novelties-image5"></div>
                        <div class="novelties-description-bold">Жидкое крем-мыло «Milana» алоэ вера сжемчужное
                            <br id="br1">(флакон 500 мл)</div>
                        <div class="novelties-description-regular">Чистящие срества для очистки различных поверхностей разного типа (флакон 600 мл).</div>
                        <div class="novelties-price">645 руб.</div>
                        <div class="novelties-details">Подробнее &rsaquo;</div>
                        <div class="plus-block">
                            <a class="novelties-plus" id="novelties-plus10">+</a>
                            <a class="novelties-plus-extended">Добавить в корзину</a>
                        </div>
                        <hr class="novelties_hr3">
                    </div>
                    <div class="item second-carousel-item second-carousel-item11">
                        <div class="novelties-title-block">
                            Жидкое мыло
                        </div>
                        <div class="novelties-image novelties-image5"></div>
                        <div class="novelties-description-bold">Жидкое крем-мыло «Milana» алоэ вера сжемчужное
                            <br id="br1">(флакон 500 мл)</div>
                        <div class="novelties-description-regular">Чистящие срества для очистки различных поверхностей разного типа (флакон 600 мл).</div>
                        <div class="novelties-price">645 руб.</div>
                        <div class="novelties-details">Подробнее &rsaquo;</div>
                        <div class="plus-block">
                            <a class="novelties-plus" id="novelties-plus11">+</a>
                            <a class="novelties-plus-extended">Добавить в корзину</a>
                        </div>
                        <hr class="novelties_hr3">
                    </div>
                    <div class="item second-carousel-item second-carousel-item12">
                        <div class="novelties-title-block">
                            Жидкое мыло
                        </div>
                        <div class="novelties-image novelties-image5"></div>
                        <div class="novelties-description-bold">Жидкое крем-мыло «Milana» алоэ вера сжемчужное
                            <br id="br1">(флакон 500 мл)</div>
                        <div class="novelties-description-regular">Чистящие срества для очистки различных поверхностей разного типа (флакон 600 мл).</div>
                        <div class="novelties-price">645 руб.</div>
                        <div class="novelties-details">Подробнее &rsaquo;</div>
                        <div class="plus-block">
                            <a class="novelties-plus" id="novelties-plus12">+</a>
                            <a class="novelties-plus-extended">Добавить в корзину</a>
                        </div>
                        <hr class="novelties_hr3">
                    </div>
                    <div class="item second-carousel-item second-carousel-item13">
                        <div class="novelties-title-block">
                            Жидкое мыло
                        </div>
                        <div class="novelties-image novelties-image5"></div>
                        <div class="novelties-description-bold">Жидкое крем-мыло «Milana» алоэ вера сжемчужное
                            <br id="br1">(флакон 500 мл)</div>
                        <div class="novelties-description-regular">Чистящие срества для очистки различных поверхностей разного типа (флакон 600 мл).</div>
                        <div class="novelties-price">645 руб.</div>
                        <div class="novelties-details">Подробнее &rsaquo;</div>
                        <div class="plus-block">
                            <a class="novelties-plus" id="novelties-plus13">+</a>
                            <a class="novelties-plus-extended">Добавить в корзину</a>
                        </div>
                        <hr class="novelties_hr3">
                    </div>
                    <div class="item second-carousel-item second-carousel-item14">
                        <div class="novelties-title-block">
                            Жидкое мыло
                        </div>
                        <div class="novelties-image novelties-image5"></div>
                        <div class="novelties-description-bold">Жидкое крем-мыло «Milana» алоэ вера сжемчужное
                            <br id="br1">(флакон 500 мл)</div>
                        <div class="novelties-description-regular">Чистящие срества для очистки различных поверхностей разного типа (флакон 600 мл).</div>
                        <div class="novelties-price">645 руб.</div>
                        <div class="novelties-details">Подробнее &rsaquo;</div>
                        <div class="plus-block">
                            <a class="novelties-plus" id="novelties-plus14">+</a>
                            <a class="novelties-plus-extended">Добавить в корзину</a>
                        </div>
                        <hr class="novelties_hr3">
                    </div>
                    <div class="item second-carousel-item second-carousel-item15">
                        <div class="novelties-title-block">
                            Жидкое мыло
                        </div>
                        <div class="novelties-image novelties-image5"></div>
                        <div class="novelties-description-bold">Жидкое крем-мыло «Milana» алоэ вера сжемчужное
                            <br id="br1">(флакон 500 мл)</div>
                        <div class="novelties-description-regular">Чистящие срества для очистки различных поверхностей разного типа (флакон 600 мл).</div>
                        <div class="novelties-price">645 руб.</div>
                        <div class="novelties-details">Подробнее &rsaquo;</div>
                        <div class="plus-block">
                            <a class="novelties-plus" id="novelties-plus15">+</a>
                            <a class="novelties-plus-extended">Добавить в корзину</a>
                        </div>
                        <hr class="novelties_hr3">
                    </div>
                    <div class="item second-carousel-item second-carousel-item16">
                        <div class="novelties-title-block">
                            Жидкое мыло
                        </div>
                        <div class="novelties-image novelties-image5"></div>
                        <div class="novelties-description-bold">Жидкое крем-мыло «Milana» алоэ вера сжемчужное
                            <br id="br1">(флакон 500 мл)</div>
                        <div class="novelties-description-regular">Чистящие срества для очистки различных поверхностей разного типа (флакон 600 мл).</div>
                        <div class="novelties-price">645 руб.</div>
                        <div class="novelties-details">Подробнее &rsaquo;</div>
                        <div class="plus-block">
                            <a class="novelties-plus" id="novelties-plus16">+</a>
                            <a class="novelties-plus-extended">Добавить в корзину</a>
                        </div>
                        <hr class="novelties_hr3">
                    </div>
                    <div class="item second-carousel-item second-carousel-item17">
                        <div class="novelties-title-block">
                            Жидкое мыло
                        </div>
                        <div class="novelties-image novelties-image5"></div>
                        <div class="novelties-description-bold">Жидкое крем-мыло «Milana» алоэ вера сжемчужное
                            <br id="br1">(флакон 500 мл)</div>
                        <div class="novelties-description-regular">Чистящие срества для очистки различных поверхностей разного типа (флакон 600 мл).</div>
                        <div class="novelties-price">645 руб.</div>
                        <div class="novelties-details">Подробнее &rsaquo;</div>
                        <div class="plus-block">
                            <a class="novelties-plus" id="novelties-plus17">+</a>
                            <a class="novelties-plus-extended">Добавить в корзину</a>
                        </div>
                        <hr class="novelties_hr3">
                    </div>
                    <div class="item second-carousel-item second-carousel-item18">
                        <div class="novelties-title-block">
                            Жидкое мыло
                        </div>
                        <div class="novelties-image novelties-image5"></div>
                        <div class="novelties-description-bold">Жидкое крем-мыло «Milana» алоэ вера сжемчужное
                            <br id="br1">(флакон 500 мл)</div>
                        <div class="novelties-description-regular">Чистящие срества для очистки различных поверхностей разного типа (флакон 600 мл).</div>
                        <div class="novelties-price">645 руб.</div>
                        <div class="novelties-details">Подробнее &rsaquo;</div>
                        <div class="plus-block">
                            <a class="novelties-plus" id="novelties-plus18">+</a>
                            <a class="novelties-plus-extended">Добавить в корзину</a>
                        </div>
                        <hr class="novelties_hr3">
                    </div>
                    <div class="item second-carousel-item second-carousel-item19">
                        <div class="novelties-title-block">
                            Жидкое мыло
                        </div>
                        <div class="novelties-image novelties-image5"></div>
                        <div class="novelties-description-bold">Жидкое крем-мыло «Milana» алоэ вера сжемчужное
                            <br id="br1">(флакон 500 мл)</div>
                        <div class="novelties-description-regular">Чистящие срества для очистки различных поверхностей разного типа (флакон 600 мл).</div>
                        <div class="novelties-price">645 руб.</div>
                        <div class="novelties-details">Подробнее &rsaquo;</div>
                        <div class="plus-block">
                            <a class="novelties-plus" id="novelties-plus19">+</a>
                            <a class="novelties-plus-extended">Добавить в корзину</a>
                        </div>
                        <hr class="novelties_hr3">
                    </div>
                    <div class="item second-carousel-item second-carousel-item20">
                        <div class="novelties-title-block">
                            Жидкое мыло
                        </div>
                        <div class="novelties-image novelties-image5"></div>
                        <div class="novelties-description-bold">Жидкое крем-мыло «Milana» алоэ вера сжемчужное
                            <br id="br1">(флакон 500 мл)</div>
                        <div class="novelties-description-regular">Чистящие срества для очистки различных поверхностей разного типа (флакон 600 мл).</div>
                        <div class="novelties-price">645 руб.</div>
                        <div class="novelties-details">Подробнее &rsaquo;</div>
                        <div class="plus-block">
                            <a class="novelties-plus" id="novelties-plus20">+</a>
                            <a class="novelties-plus-extended">Добавить в корзину</a>
                        </div>
                        <hr class="novelties_hr3">
                    </div>
                </div>
                <hr class="novelties_hr4">
            </div>
        </section>
    </div>
    <div class="container-fluid container-recommend">
        <div class="container">
            <div class="col-xxs-12 recommend">
                <hr class="novelties_hr recommend_hr">
                <div class="novelties_text recommend-text"><?php _e( 'Рекомендованные товары', 'grass' ) ?></div>
            </div>
            <div class="container p0">
                <section class="demos" id="demos">
                    <div class="large-12 columns">
                        <div id="owl-carousel-3" class="owl-carousel owl-theme">
                            <div class="item third-carousel-item third-carousel-item1">
                                <div class="novelties-title-block recommend-title-block">
                                    СПЕЦИАЛЬНЫЕ СРЕДСТВА
                                </div>
                                <div class="recommend-image recommend-image1"></div>
                                <div class="novelties-description-bold">Чистящее средство «Antigraffiti»
                                    <br id="br1">(флакон 600 мл)</div>
                                <div class="novelties-description-regular">Чистящие срества для очистки различных поверхностей разного типа (флакон 600 мл).</div>
                                <div class="novelties-price">645 руб.</div>
                                <div class="novelties-details">Подробнее &rsaquo;</div>
                                <div class="plus-block">
                                    <a class="novelties-plus" id="novelties-plus21">+</a>
                                    <a class="novelties-plus-extended">Добавить в корзину</a>
                                </div>
                            </div>
                            <div class="item third-carousel-item third-carousel-item2">
                                <div class="novelties-title-block recommend-title-block">
                                    ОЧИСТИЕЛИ И ПОЛИРОЛИ
                                </div>
                                <div class="recommend-image recommend-image2"></div>
                                <div class="novelties-description-bold">Очиститель тополиных почек и птичьего помета "Universal Cleaner Pitch Free"
                                    <br>(флакон 500 мл)</div>
                                <div class="novelties-description-regular">Концентрированное жидкое средство для стирки "ALPI color gel" (флакон 1,5л).</div>
                                <div class="novelties-price">645 руб.</div>
                                <div class="novelties-details">Подробнее &rsaquo;</div>
                                <div class="plus-block">
                                    <a class="novelties-plus" id="novelties-plus22">+</a>
                                    <a class="novelties-plus-extended">Добавить в корзину</a>
                                </div>
                            </div>
                            <div class="item third-carousel-item third-carousel-item3">
                                <div class="novelties-title-block recommend-title-block">
                                    ИНВЕНТАРЬ
                                </div>
                                <div class="recommend-image recommend-image3"></div>
                                <div class="novelties-description-bold">Бутылка с профессиональным триггером
                                    <br>(синяя)</div>
                                <div class="novelties-description-regular">Бутылка с профессиональным триггером (синяя)</div>
                                <div class="novelties-price">645 руб.</div>
                                <div class="novelties-details">Подробнее &rsaquo;</div>
                                <div class="plus-block">
                                    <a class="novelties-plus" id="novelties-plus23">+</a>
                                    <a class="novelties-plus-extended">Добавить в корзину</a>
                                </div>
                            </div>
                            <div class="item third-carousel-item third-carousel-item4">
                                <div class="novelties-title-block recommend-title-block">
                                    СРЕДСВА ДЛЯ МЫТЬЯ ПОЛА
                                </div>
                                <div class="recommend-image recommend-image4"></div>
                                <div class="novelties-description-bold">Средство для пола с полирующим эффектом ARENA цветущий лотос</div>
                                <div class="novelties-description-regular">Средство моющее нейтральное "Arena" </div>
                                <div class="novelties-price">645 руб.</div>
                                <div class="novelties-details">Подробнее &rsaquo;</div>
                                <div class="plus-block">
                                    <a class="novelties-plus" id="novelties-plus24">+</a>
                                    <a class="novelties-plus-extended">Добавить в корзину</a>
                                </div>
                            </div>
                            <div class="item third-carousel-item third-carousel-item5">
                                <div class="novelties-title-block recommend-title-block">
                                    Жидкое мыло
                                </div>
                                <div class="recommend-image recommend-image5"></div>
                                <div class="novelties-description-bold">Жидкое крем-мыло «Milana» алоэ вера сжемчужное
                                    <br id="br1">(флакон 500 мл)</div>
                                <div class="novelties-description-regular">Чистящие срества для очистки различных поверхностей разного типа (флакон 600 мл).</div>
                                <div class="novelties-price">645 руб.</div>
                                <div class="novelties-details">Подробнее &rsaquo;</div>
                                <div class="plus-block">
                                    <a class="novelties-plus" id="novelties-plus26">+</a>
                                    <a class="novelties-plus-extended">Добавить в корзину</a>
                                </div>
                            </div>
                            <div class="item third-carousel-item third-carousel-item6">
                                <div class="novelties-title-block recommend-title-block">
                                    Жидкое мыло
                                </div>
                                <div class="recommend-image recommend-image6"></div>
                                <div class="novelties-description-bold">Жидкое крем-мыло «Milana» алоэ вера сжемчужное
                                    <br id="br1">(флакон 500 мл)</div>
                                <div class="novelties-description-regular">Чистящие срества для очистки различных поверхностей разного типа (флакон 600 мл).</div>
                                <div class="novelties-price">645 руб.</div>
                                <div class="novelties-details">Подробнее &rsaquo;</div>
                                <div class="plus-block">
                                    <a class="novelties-plus" id="novelties-plus27">+</a>
                                    <a class="novelties-plus-extended">Добавить в корзину</a>
                                </div>
                            </div>
                            <div class="item third-carousel-item third-carousel-item7">
                                <div class="novelties-title-block recommend-title-block">
                                    Жидкое мыло
                                </div>
                                <div class="recommend-image recommend-image7"></div>
                                <div class="novelties-description-bold">Жидкое крем-мыло «Milana» алоэ вера сжемчужное
                                    <br id="br1">(флакон 500 мл)</div>
                                <div class="novelties-description-regular">Чистящие срества для очистки различных поверхностей разного типа (флакон 600 мл).</div>
                                <div class="novelties-price">645 руб.</div>
                                <div class="novelties-details">Подробнее &rsaquo;</div>
                                <div class="plus-block">
                                    <a class="novelties-plus" id="novelties-plus28">+</a>
                                    <a class="novelties-plus-extended">Добавить в корзину</a>
                                </div>
                            </div>
                            <div class="item third-carousel-item third-carousel-item8">
                                <div class="novelties-title-block recommend-title-block">
                                    Жидкое мыло
                                </div>
                                <div class="recommend-image recommend-image8"></div>
                                <div class="novelties-description-bold">Жидкое крем-мыло «Milana» алоэ вера сжемчужное
                                    <br id="br1">(флакон 500 мл)</div>
                                <div class="novelties-description-regular">Чистящие срества для очистки различных поверхностей разного типа (флакон 600 мл).</div>
                                <div class="novelties-price">645 руб.</div>
                                <div class="novelties-details">Подробнее &rsaquo;</div>
                                <div class="plus-block">
                                    <a class="novelties-plus" id="novelties-plus29">+</a>
                                    <a class="novelties-plus-extended">Добавить в корзину</a>
                                </div>
                            </div>
                            <div class="item third-carousel-item third-carousel-item9">
                                <div class="novelties-title-block recommend-title-block">
                                    Жидкое мыло
                                </div>
                                <div class="recommend-image recommend-image9"></div>
                                <div class="novelties-description-bold">Жидкое крем-мыло «Milana» алоэ вера сжемчужное
                                    <br id="br1">(флакон 500 мл)</div>
                                <div class="novelties-description-regular">Чистящие срества для очистки различных поверхностей разного типа (флакон 600 мл).</div>
                                <div class="novelties-price">645 руб.</div>
                                <div class="novelties-details">Подробнее &rsaquo;</div>
                                <div class="plus-block">
                                    <a class="novelties-plus" id="novelties-plus30">+</a>
                                    <a class="novelties-plus-extended">Добавить в корзину</a>
                                </div>
                            </div>
                            <div class="item third-carousel-item third-carousel-item10">
                                <div class="novelties-title-block recommend-title-block">
                                    Жидкое мыло
                                </div>
                                <div class="recommend-image recommend-image10"></div>
                                <div class="novelties-description-bold">Жидкое крем-мыло «Milana» алоэ вера сжемчужное
                                    <br id="br1">(флакон 500 мл)</div>
                                <div class="novelties-description-regular">Чистящие срества для очистки различных поверхностей разного типа (флакон 600 мл).</div>
                                <div class="novelties-price">645 руб.</div>
                                <div class="novelties-details">Подробнее &rsaquo;</div>
                                <div class="plus-block">
                                    <a class="novelties-plus" id="novelties-plus31">+</a>
                                    <a class="novelties-plus-extended">Добавить в корзину</a>
                                </div>
                            </div>
                            <div class="item third-carousel-item third-carousel-item11">
                                <div class="novelties-title-block recommend-title-block">
                                    Жидкое мыло
                                </div>
                                <div class="recommend-image recommend-image11"></div>
                                <div class="novelties-description-bold">Жидкое крем-мыло «Milana» алоэ вера сжемчужное
                                    <br id="br1">(флакон 500 мл)</div>
                                <div class="novelties-description-regular">Чистящие срества для очистки различных поверхностей разного типа (флакон 600 мл).</div>
                                <div class="novelties-price">645 руб.</div>
                                <div class="novelties-details">Подробнее &rsaquo;</div>
                                <div class="plus-block">
                                    <a class="novelties-plus" id="novelties-plus32">+</a>
                                    <a class="novelties-plus-extended">Добавить в корзину</a>
                                </div>
                            </div>
                            <div class="item third-carousel-item third-carousel-item12">
                                <div class="novelties-title-block recommend-title-block">
                                    Жидкое мыло
                                </div>
                                <div class="recommend-image recommend-image12"></div>
                                <div class="novelties-description-bold">Жидкое крем-мыло «Milana» алоэ вера сжемчужное
                                    <br id="br1">(флакон 500 мл)</div>
                                <div class="novelties-description-regular">Чистящие срества для очистки различных поверхностей разного типа (флакон 600 мл).</div>
                                <div class="novelties-price">645 руб.</div>
                                <div class="novelties-details">Подробнее &rsaquo;</div>
                                <div class="plus-block">
                                    <a class="novelties-plus" id="novelties-plus33">+</a>
                                    <a class="novelties-plus-extended">Добавить в корзину</a>
                                </div>
                            </div>
                            <div class="item third-carousel-item third-carousel-item13">
                                <div class="novelties-title-block recommend-title-block">
                                    Жидкое мыло
                                </div>
                                <div class="recommend-image recommend-image13"></div>
                                <div class="novelties-description-bold">Жидкое крем-мыло «Milana» алоэ вера сжемчужное
                                    <br id="br1">(флакон 500 мл)</div>
                                <div class="novelties-description-regular">Чистящие срества для очистки различных поверхностей разного типа (флакон 600 мл).</div>
                                <div class="novelties-price">645 руб.</div>
                                <div class="novelties-details">Подробнее &rsaquo;</div>
                                <div class="plus-block">
                                    <a class="novelties-plus" id="novelties-plus34">+</a>
                                    <a class="novelties-plus-extended">Добавить в корзину</a>
                                </div>
                            </div>
                            <div class="item third-carousel-item third-carousel-item14">
                                <div class="novelties-title-block recommend-title-block">
                                    Жидкое мыло
                                </div>
                                <div class="recommend-image recommend-image14"></div>
                                <div class="novelties-description-bold">Жидкое крем-мыло «Milana» алоэ вера сжемчужное
                                    <br id="br1">(флакон 500 мл)</div>
                                <div class="novelties-description-regular">Чистящие срества для очистки различных поверхностей разного типа (флакон 600 мл).</div>
                                <div class="novelties-price">645 руб.</div>
                                <div class="novelties-details">Подробнее &rsaquo;</div>
                                <div class="plus-block">
                                    <a class="novelties-plus" id="novelties-plus35">+</a>
                                    <a class="novelties-plus-extended">Добавить в корзину</a>
                                </div>
                            </div>
                            <div class="item third-carousel-item third-carousel-item15">
                                <div class="novelties-title-block recommend-title-block">
                                    Жидкое мыло
                                </div>
                                <div class="recommend-image recommend-image15"></div>
                                <div class="novelties-description-bold">Жидкое крем-мыло «Milana» алоэ вера сжемчужное
                                    <br id="br1">(флакон 500 мл)</div>
                                <div class="novelties-description-regular">Чистящие срества для очистки различных поверхностей разного типа (флакон 600 мл).</div>
                                <div class="novelties-price">645 руб.</div>
                                <div class="novelties-details">Подробнее &rsaquo;</div>
                                <div class="plus-block">
                                    <a class="novelties-plus" id="novelties-plus36">+</a>
                                    <a class="novelties-plus-extended">Добавить в корзину</a>
                                </div>
                            </div>
                            <div class="item third-carousel-item third-carousel-item16">
                                <div class="novelties-title-block recommend-title-block">
                                    Жидкое мыло
                                </div>
                                <div class="recommend-image recommend-image16"></div>
                                <div class="novelties-description-bold">Жидкое крем-мыло «Milana» алоэ вера сжемчужное
                                    <br id="br1">(флакон 500 мл)</div>
                                <div class="novelties-description-regular">Чистящие срества для очистки различных поверхностей разного типа (флакон 600 мл).</div>
                                <div class="novelties-price">645 руб.</div>
                                <div class="novelties-details">Подробнее &rsaquo;</div>
                                <div class="plus-block">
                                    <a class="novelties-plus" id="novelties-plus37">+</a>
                                    <a class="novelties-plus-extended">Добавить в корзину</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="col-xxs-12 novelties news">
            <hr class="novelties_hr">
            <div class="novelties_text news_text"><?php _e( 'Новости и статьи', 'grass' ) ?></div>
        </div>
        <div class="container p0">
            <section class="demos" id="demos">
                <div class="large-12 columns">
                    <div id="owl-carousel-4" class="owl-carousel owl-theme">
                        <?php
                            $the_query = new WP_Query( array(
                                'post_type' => 'news',
                                'posts_per_page' => 12,
                            ) );
                        ?>
                        <?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
	                        <div class="item fourth-carousel-item fourth-carousel-item1">
	                            <a href="<?php the_permalink() ?>" class="news-header"><?php echo mb_strimwidth( get_the_title(), 0 , 50, '...' ) ?></a>
	                            <div class="news-text"><?php echo mb_strimwidth( get_the_excerpt(), 0, 150, '...' ) ?></div>
	                            <div class="news-date">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php the_time('d.m.Y') ?></div>
	                        </div>
                        <?php endwhile; else : ?>

	                    <?php endif; ?>
                    </div>
                </div>
            </section>
        </div>
    </div>

<?php
// get_sidebar();
get_footer();
