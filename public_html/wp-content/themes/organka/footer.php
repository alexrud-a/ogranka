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

<section class="section section--form">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="section__title section__title--center">
                    Задать вопрос:
                </h2>
            </div>
            <div class="col-12">
                <div class="form-wrap">
                    <? echo do_shortcode('[contact-form-7 id="29" title="Form"]'); ?>
                </div>
            </div>
        </div>
    </div>
</section>
</main>
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="footer__copyright">
                    Все права защищены 2019-<? echo date('Y')?> «MagnetGems Studio»
                </div>
            </div>
        </div>
    </div>
</footer>

<div style="display: none;" id="modal">
    <h2 class="modal__title">Оставьте заявку</h2>
    <? echo do_shortcode('[contact-form-7 id="164" title="Заявка"]'); ?>
</div>

</div>

<?php wp_footer(); ?>

</body>
</html>
