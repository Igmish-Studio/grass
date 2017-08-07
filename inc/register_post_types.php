<?
/**
 * Register post type stocks.
 */
add_action( 'init', 'grass_register_post_type_stocks' );
function grass_register_post_type_stocks(){
	$labels = array(
		'name'               => __( 'Акции', 'grass' ),
		'singular_name'      => __( 'Акция', 'grass' ),
		'menu_name'          => __( 'Акции', 'grass' ),
		'menu_admin_bar'     => __( 'Акция', 'grass' ),
		'add_new'            => __( 'Добавить новую', 'grass' ),
		'add_new_item'       => __( 'Добавить новою акцию', 'grass' ),
		'new_item'           => __( 'Новоя акция', 'grass' ),
		'edit_item'          => __( 'Редактировать акцию', 'grass' ),
		'view_item'          => __( 'Просмотреть акцию', 'grass' ),
		'all_items'          => __( 'Все акции', 'grass' ),
		'search_items'       => __( 'Поиск акции', 'grass' ),
		'parent_item_colon'  => __( 'Родительская акция:', 'grass' ),
		'not_found'          => __( 'Акций не найдено.', 'grass' ),
		'not_found_in_trash' => __( 'Акций не найдено в корзин.', 'grass' ),
	);
	$args = array(
		'labels' => $labels,
		'description' => __( 'Здесь создаются, редактируются и удаляются акции.', 'grass' ),
		'public' => true,
		'publicly_queryably' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'query_var' => true,
		// 'rewrite' => array( 'slug' => 'stocks' ),
		'capability_type' => 'post',
		'has_archive' => true,
		'hierarhical' => true,
		'menu_position' => 5,
		'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt', 'revisions' ),
	);
	register_post_type( 'stocks', $args );

	unregister_post_type( 'edit.php' );

	$labels = array(
		'name'               => __( 'Новости', 'grass' ),
		'singular_name'      => __( 'Новость', 'grass' ),
		'menu_name'          => __( 'Новости', 'grass' ),
		'menu_admin_bar'     => __( 'Новость', 'grass' ),
		'add_new'            => __( 'Добавить новую', 'grass' ),
		'add_new_item'       => __( 'Добавить новою новость', 'grass' ),
		'new_item'           => __( 'Новоя новость', 'grass' ),
		'edit_item'          => __( 'Редактировать новость', 'grass' ),
		'view_item'          => __( 'Просмотреть новость', 'grass' ),
		'all_items'          => __( 'Все новости', 'grass' ),
		'search_items'       => __( 'Поиск новости', 'grass' ),
		'parent_item_colon'  => __( 'Родительская новость:', 'grass' ),
		'not_found'          => __( 'Новостей не найдено.', 'grass' ),
		'not_found_in_trash' => __( 'Новостей не найдено в корзин.', 'grass' ),
	);
	$args = array(
		'labels' => $labels,
		'description' => __( 'Здесь создаются, редактируются и удаляются новости.', 'grass' ),
		'public' => true,
		'publicly_queryably' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'query_var' => true,
		'rewrite' => array( 'slug' => 'news', 'with_front' => flase ),
		'capability_type' => 'post',
		'has_archive' => true,
		'hierarhical' => true,
		'menu_position' => 5,
		'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
		// 'taxonomies' => array( 'post_tag' ),
	);
	register_post_type( 'news', $args );

	$labels = array(
		'name' => __( 'Категории', 'grass' ),
		'singular_name' => __( 'Категория', 'grass' ),
		'search_items' => __( 'Поиск категории', 'grass' ),
		'all_items' => __( 'Все категории', 'grass' ),
		'parent_item' => __( 'Родительская категория', 'grass' ),
		'parent_item_colon' => __( 'Родительская категория:', 'grass' ),
		'edit_item' => __( 'Редактировать категорию', 'grass' ),
		'update_item' => __( 'Обновить категорию', 'grass' ),
		'add_new_item' => __( 'Добавить новою категорию', 'grass' ),
		'new_item_name' => __( 'Новая Категория Названия', 'grass' ),
		'menu_name' => __( 'Категории', 'grass' ),
	);
	$args = array(
		'hierarhical' => true,
		'labels' => $labels,
		'show_all' => true,
		'show_admin_colomn' => true,
		'query_var' => true,
		// 'rewrite' => array()
	);
	register_taxonomy( 'category-news', array( 'news'), $args );
}