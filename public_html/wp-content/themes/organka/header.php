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
                        <button class="nav__btn-toogle js-toogle">
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>
                        <?php
                        wp_nav_menu(
                            array(
                                'theme_location' => 'menu-1',
                                'container'       => 'div',
                                'menu_id'        => 'primary-menu',
                                'menu_class'     => 'nav__menu',
                            )
                        );
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="logo">
                    <?php
                    the_custom_logo();
                    ?>
                </div>
            </div>
        </div>
	</header>
