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
<div class="wrap-page">
	<header class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-sm-12">
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
                <div class="col-lg-3 col-md-12">
                    <div class="header__logo">
                        <?php
                        the_custom_logo();
                        ?>
                    </div>
                </div>
            </div>
        </div>
	</header>
