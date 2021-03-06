<?php
/**
 * The header layout 5.
 *
 * @since   1.0.0
 * @package Gecko
 */
?>
<header id="jas-header" class="header-5">
	<div class="header__top bgbl pl__30 pr__30">
		<div class="jas-row middle-xs">
			<div class="jas-col-md-4 jas-col-sm-6 jas-col-xs-12 flex start-md start-sm center-xs">
				<?php if ( cs_get_option( 'header-top-left' ) ) : ?>
					<div class="header-text mr__20"><?php echo do_shortcode( cs_get_option( 'header-top-left' ) ); ?></div>
				<?php endif; ?>
				<?php echo jas_gecko_social(); ?>
			</div>
			<div class="jas-col-md-4 hidden-sm tc">
				<?php if ( cs_get_option( 'header-top-center' ) ) : ?>
					<div class="header-text"><?php echo do_shortcode( cs_get_option( 'header-top-center' ) ); ?></div>
				<?php endif; ?>
			</div>
			<div class="jas-col-md-4 jas-col-sm-6 jas-col-xs-12 flex end-lg end-sm center-xs">
				<?php if ( cs_get_option( 'header-top-right' ) ) : ?>
					<div class="header-text mr__15"><?php echo do_shortcode( cs_get_option( 'header-top-right' ) ); ?></div>
				<?php endif; ?>
				<?php
					if ( class_exists( 'WooCommerce' ) ) {
						echo jas_gecko_wc_currency();
					}
				?>
			</div>
		</div><!-- .jas-row -->
	</div><!-- .header__top -->

	<div class="header__mid tc<?php echo ( cs_get_option( 'header-transparent' ) ? ' header__transparent pa w__100' : '' ); ?>">
		<div class="jas-row middle-xs mid__top pl__30 pr__30">
			<div class="jas-col-md-3 jas-col-xs-3 flex start-md middle-xs">
				<a href="javascript:void(0);" class="jas-push-menu-btn"><img src="<?php echo JAS_GECKO_URL . '/assets/images/icons/hamburger-black.svg'; ?>" width="24" height="20" /></a>
			</div>
			<div class="jas-col-md-6 jas-col-xs-6"><?php jas_gecko_logo(); ?></div>
			<div class="jas-action flex end-xs middle-xs jas-col-md-3 jas-col-xs-3">
				<a class="sf-open cb chp hidden-xs" href="javascript:void(0);"><i class="pe-7s-search"></i></a>
				<?php
					if ( class_exists( 'WooCommerce' ) ) {
						echo jas_gecko_wc_my_account();

						if ( class_exists( 'YITH_WCWL' ) ) {
							global $yith_wcwl;
							echo '<a class="cb chp hidden-xs" href="' . esc_url( $yith_wcwl->get_wishlist_url() ) . '"><i class="pe-7s-like"></i></a>';
						}
						echo jas_gecko_wc_shopping_cart();
					}
				?>
			</div><!-- .jas-action -->
		</div><!-- .jas-row -->
		<nav class="jas-navigation flex center-xs hidden-sm" role="navigation">
			<?php
				if ( has_nav_menu( 'primary-menu' ) ) {
					wp_nav_menu(
						array(
							'theme_location' => 'primary-menu',
							'menu_class'     => 'jas-menu clearfix',
							'menu_id'        => 'jas-main-menu',
							'container'      => false,
						)
					);
				} else {
					echo '<ul class="jas-menu clearfix"><li><a target="_blank" href="' . esc_url( admin_url( 'nav-menus.php' ) ) . '">' . esc_html__( 'Add Menu', 'gecko' ) . '</a></li></ul>';
				}
			?>
		</nav><!-- .jas-navigation -->
	</div><!-- .header__mid -->
	<form class="header__search w__100 dn pf" role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
		<div class="pa">
			<input class="w__100 jas-ajax-search" type="text" name="s" placeholder="<?php echo esc_html__( 'Search for...', 'gecko' ); ?>" />
			<input type="hidden" name="post_type" value="product">
		</div>
		<a id="sf-close" class="pa" href="#"><i class="pe-7s-close"></i></a>
	</form><!-- #header__search -->

	<div class="jas-canvas-menu jas-push-menu">
		<h3 class="mg__0 tc cw bgb tu ls__2"><?php esc_html_e( 'Menu', 'gecko' ); ?> <i class="close-menu pe-7s-close pa"></i></h3>
		<div class="jas-action flex center-xs middle-xs hidden-md hidden-sm visible-xs mt__30">
			<a class="sf-open cb chp" href="javascript:void(0);"><i class="pe-7s-search"></i></a>
			<?php
				if ( class_exists( 'WooCommerce' ) ) {
					echo jas_gecko_wc_my_account();

					if ( class_exists( 'YITH_WCWL' ) ) {
						global $yith_wcwl;
						echo '<a class="cb chp" href="' . esc_url( $yith_wcwl->get_wishlist_url() ) . '"><i class="pe-7s-like"></i></a>';
					}
				}
			?>
		</div><!-- .jas-action -->
		<?php
			wp_nav_menu(
				array(
					'theme_location' => 'primary-menu',
					'container_id'   => 'jas-mobile-menu',
					'walker'         => new JAS_Gecko_Menu_Walker(),
					'fallback_cb'    => NULL
				)
			);
		?>
	</div><!-- .jas-canvas-menu -->
	
	<?php if ( class_exists( 'WooCommerce' ) ) : ?>	
		<div class="jas-mini-cart jas-push-menu">
			<div class="jas-mini-cart-content">
				<h3 class="mg__0 tc cw bgb tu ls__2"><?php esc_html_e( 'Mini Cart', 'gecko' );?> <i class="close-cart pe-7s-close pa"></i></h3>
				<div class="widget_shopping_cart_content"></div>
			</div>
		</div><!-- .jas-mini-cart -->
	<?php endif ?>
</header><!-- #jas-header -->