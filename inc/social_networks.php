<?php

	function get_social_networks(){
		$social_network_vkontakte = get_theme_mod( 'social_network_vk' );
		$social_network_facebook = get_theme_mod( 'social_network_facebook' );
		$social_network_google_plus = get_theme_mod( 'social_network_google_plus' );
		$social_network_odnoklassniki = get_theme_mod( 'social_network_odnoklassniki' ); ?>
		<ul class="footer-social-stack">
			<?php if ( $social_network_vkontakte ) { ?>
				<a href="<?php $social_network_vkontakte ?>">
					<li class="footer-social1 footer-social"></li>
				</a>
			<?php } ?>
			<?php if ( $social_network_facebook ) { ?>
				<a href="<?php $social_network_facebook ?>">
					<li class="footer-social2 footer-social"></li>
				</a>
			<?php } ?>
			<?php if ( $social_network_google_plus ) { ?>
				<a href="<?php $social_network_google_plus ?>">
					<li class="footer-social3 footer-social"></li>
				</a>
			<?php } ?>
			<?php if ( $social_network_odnoklassniki ) { ?>
				<a href="<?php $social_network_odnoklassniki ?>">
					<li class="footer-social4 footer-social"></li>
				</a>
			<?php } ?>
		</ul>
	<?php }