<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package organka
 */

?>

<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="footer__item">
                    <div class="footer__title">
                        О компании
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="footer__item">
                    <div class="footer__title">
                        Услуги
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="footer__item">
                    <div class="footer__title">
                        Контакты
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="footer__copyright">
                    Все права защищены 2019-<? echo date('Y')?> «MagnetGems Studio»
                </div>
            </div>
        </div>
    </div>
</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
