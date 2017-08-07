<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package grass
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<!-- <body <?php //body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php //esc_html_e( 'Skip to content', 'grass' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
			// the_custom_logo();
			// if ( is_front_page() && is_home() ) : ?>
				<h1 class="site-title"><a href="<?php //echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php //bloginfo( 'name' ); ?></a></h1>
			<?php //else : ?>
				<p class="site-title"><a href="<?php //echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php //bloginfo( 'name' ); ?></a></p>
			<?php
			// endif;

			// $description = get_bloginfo( 'description', 'display' );
			// if ( $description || is_customize_preview() ) : ?>
				<p class="site-description"><?php //echo $description; /* WPCS: xss ok. */ ?></p>
			<?php
			// endif; ?>
		</div>

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php //esc_html_e( 'Primary Menu', 'grass' ); ?></button>
			<?php
				// wp_nav_menu( array(
					// 'theme_location' => 'menu-1',
					// 'menu_id'        => 'primary-menu',
				// ) );
			?>
		</nav>
	</header> -->

<body <?php body_class() ?> style='overflow-x:hidden;'>
    <header class="index_header container-fluid p0">
        <div class="container index_header">
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 col-xxs-12 logo_stack">
                <a href="<?php echo get_home_url() ?>" class="logo">
                    <?php //print_r( wp_get_attachment_image_src( get_theme_mod( 'custom_logo' ), 'full' )[0] ) ?>
                    <span class="logo1" style="background-image: url('<?php echo wp_get_attachment_image_src( get_theme_mod( 'custom_logo' ), 'full' )[0] ?>')"></span>
                    <span class="logo2"></span>
                    <span class="logo3"></span>
                </a>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-6 contact_stack">
                <span class="phone_number col-lg-6 col-md-6 col-sm-12"><?php get_phone( 'phone_number_link' ) ?></span>
                <div class="col-lg-6 col-md-6 call_me_block">
                    <div class="call_me">
                        <div class="call_me_text"><?php _e( 'Перезвоните мне', 'grass' ) ?></div>
                        <div class="call_me_item"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-5 col-xs-5 col-xxs-9 cart_stack">
                <div class="search_block col-lg-6 col-md-9 col-sm-6 col-xs-6">
                    <div class="search col-sm-12 ">
                        <input type="search" class="width_search" name="q" placeholder="<?php _e( 'Поиск по сайту', 'grass' ) ?>">
                        <input type="submit" value="">
                    </div>
                </div>
                <div class="cart_block col-lg-6 col-md-3 col-sm-12 col-xs-12">
                    <div class="col-sm-12 cart">
                        <div class="cart_box">
                            <div class="cart_item"></div>
                            <div class="cart_text"><?php _e( 'Корзина пуста', 'grass' ) ?></div>
                        </div>
                        <div class="cart-selected">
                            <ul class="cart-top-list">
                                <li class="cart-top-items">Фото</li>
                                <li class="cart-top-items">Наименование</li>
                                <li class="cart-top-items">Количество</li>
                                <li class="cart-top-items">Удалить</li>
                            </ul>
                            <hr class="hrhr">
                            <ul class="cart-top-product">
                                <li class="cart-top-product1 cart-top-class1">
                                    <div class="cart-item-top-product1-item1"></div>
                                </li>
                                <li class="cart-top-product1 cart-top-class2 cart-item-top-product1-item2">Жидкое ароматизирующее средство "Silver" (флакон 250 мл)</li>
                                <li class="cart-top-product1 cart-top-class3 cart-item-top-product1-item3">
                                    <div class="product-item-scatter-item-articul-buttons-holder cart-scatter-item-articul-buttons-holder">
                               <div class="product-item-scatter-item-articul-buttons-holder cart-scatter-item-articul-buttons-holder">
                                        <div class="product-item-scatter-item-articul-buttons-button-left minus cart-scatter-item-articul-buttons-button-left">-</div>
                                        <input class="product-item-scatter-item-articul-buttons-number cart-scatter-item-articul-buttons-number" type="text" value="1" size="2" />
                                        <div class="product-item-scatter-item-articul-buttons-button-right cart-scatter-item-articul-buttons-button-right plus">+</div>
                                    </div>
                                    </div>
                                </li>
                                <li class="cart-top-product1 cart-top-class4">
                                    <a class="cart-item-top-product1-item4" href="#"></a>
                                </li>
                            </ul>
                            <hr class="hrhr">
                            <a href="#" class="cart-top-submit-button"><?php _e( 'Оформить заказ', 'grass' ) ?>&nbsp;&rarr;</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cf col-sm-1 col-xs-1 col-xxs-3">
                <div class="col col-">
                    <div class="hamburger" id="hamburger-1">
                        <span class="line"></span>
                        <span class="line"></span>
                        <span class="line"></span>
                    </div>
                </div>
            </div>
<!--             <ul class="navbar col-lg-12" id="nav">
                <li class="navbar_li navbar1 col-md-2"><a class="nav_text" href="index.html">Главная</a></li>
                <li class="navbar_li navbar2 col-md-2"><a class="nav_text" href="about.html">О компании</a></li>
                <li class="navbar_li navbar3 col-md-2"><a class="nav_text" href="catalog.html">Каталог</a></li>
                <li class="navbar_li navbar4 col-md-2"><a class="nav_text" href="shares.html">Акции</a></li>
                <li class="navbar_li navbar5 col-md-2"><a class="nav_text" href="news.html">Новости</a></li>
                <li class="navbar_li navbar6 col-md-2"><a class="nav_text" href="contacts.html">Контакты</a></li>
            </ul> -->
            <?php
            	wp_nav_menu( array(
	            		'theme_location' => 'menu-primary',
	            		'container'      => '',
	            		'menu_class'     => 'navbar col-lg-12',
	            		'menu_id'        => 'nav',
	            		'walker'         => new Walker_Nav_Menu_grass(),
            	) );
            ?>
        </div>
    </header>

	<div id="content" class="site-content">
