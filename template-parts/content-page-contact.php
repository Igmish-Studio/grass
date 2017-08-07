<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package grass
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="container title-page">Главная / Контакты</div>
    <div class="container-fluid contacts-f1">
        <div class="container contacts-1 row-flex">
            <div class="col-md-8 col-sm-8 col-xs-12 contacts-main">
                <!-- <div class="g">G</div> -->
                <div class="contacts-main-office">OOO «TD Grass» — главный офис, производство</div>
                <div class="contacts-adresses"><span class="contacts-black-text">Юридический адрес:</span> Костанай, ул. Чернышевского 70.
                </div>
                <ul class="contacts-list">
                    <li class="contacts-item contacts-item1">
                        <span class="contacts-black-text">Руководитель: Баймуратов Абай</span> +77019995738,
                        <br>
                        <span class="contacts-black-text">Руководитель: Амирова Жанар</span> +77029990321,
                        <br>
                        <span class="contacts-black-text">Менеджер Алина:</span> +77477350965,
                        <br>
                        <span class="contacts-black-text">Менеджер Ботакоз:</span> +77474274380,
                        <br>
                        <span class="contacts-black-text">Магазин:</span> +77142210647.
                        <br>
                    </li>
                    <li class="contacts-item contacts-item3">bmrb@rambler.ru</li>
                    <li class="contacts-item contacts-item4">Пн-Вс 8.30-21.00 &#40;без перерыва&#41;&#46;</li>
                </ul>
                <a href="#" class="contacts-button">Cхема проезда</a>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-0 contacts-logo">
            </div>
        </div>
    </div>
    <div id="map" class="container-fluid"></div>
    <script>
    function initMap() {
        var uluru = { lat: 53.203824, lng: 63.593320 };
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 17,
            center: uluru
        });
        var marker = new google.maps.Marker({
            position: uluru,
            map: map,
            icon: {
                url: "<?php echo get_template_directory_uri() ?>/inc/img/mark.svg",
                scaledSize: new google.maps.Size(40, 65)
            }
        });
    }
    </script>
</article><!-- #post-<?php the_ID(); ?> -->
