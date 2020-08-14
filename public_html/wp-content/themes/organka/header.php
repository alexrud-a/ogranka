<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package organka
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div class="page">
	<header class="header">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="nav">
                        <button class="nav__btn-toggle js-toggle">
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>
                        <?php
                        wp_nav_menu(
                            array(
                                'theme_location' => 'menu-1',
                                'container'       => 'div',
                                'container_class'     => 'nav__menu-wrap',
                                'menu_class'     => 'nav__menu',
                            )
                        );
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-12">
                <div class="header__logo">
                    <?php
                    the_custom_logo();
                    ?>
                </div>
                <div class="header__cart">
                    <a href="#">
                        <svg width="30" viewBox="0 0 511.81 511.81">
                            <path d="M477.51 491.42L451.03 142.6a16 16 0 0 0-15.95-14.78H76.39a16 16 0 0 0-15.95 14.8l-26.7 352a16.01 16.01 0 0 0 15.95 17.2h412.43a16 16 0 0 0 15.4-20.39zM66.94 479.81l24.28-320h329.03l24.29 320H66.94z"/><path d="M255.74 0c-70.58 0-128 57.44-128 128.03v63.78a16 16 0 0 0 32 0v-63.78c0-52.96 43.05-96.03 96-96.03 52.94 0 96 43.07 96 96.03v63.78a16 16 0 0 0 32 0v-63.78C383.74 57.44 326.3 0 255.74 0z"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
	</header>
