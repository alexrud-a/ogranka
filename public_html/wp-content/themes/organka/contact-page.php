<?php

/**
 * Template Name: Contacts
 */

get_header();
?>

<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="section__title">
                    Контакты
                </h1>
                <div class="section__map">
                    <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Ae569752ac2df5c086d1b6562a8c4f4d23581512e5d9de60bc66eb837426a3d32&amp;width=100%25&amp;height=400&amp;lang=ru_RU&amp;scroll=false"></script>
                </div>
                <div class="section__content">
                    <?php
                    while ( have_posts() ) :
                        the_post();

                        the_content();

                    endwhile; // End of the loop.
                    ?>
                </div>
            </div>
            <div class="col-md-8 col-sm-12 contacts">
                <div class="row">
                    <div class="col-md-6">
                        <div class="contacts__item contacts__item--address">
                            <svg width="20" height="20">
                                <use xlink:href="/wp-content/themes/organka/img/icons.svg#icon-map"></use>
                            </svg>
                            <? the_field('adres'); ?>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="contacts__item contacts__item--tel">
                            <svg width="20" height="20">
                                <use xlink:href="/wp-content/themes/organka/img/icons.svg#icon-tel"></use>
                            </svg>
                            <a href="tel:<? the_field('telefon'); ?>">
                                <? the_field('telefon'); ?>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="contacts__item contacts__item--work-time">
                            <svg width="20" height="20">
                                <use xlink:href="/wp-content/themes/organka/img/icons.svg#icon-work"></use>
                            </svg>
                            <? the_field('rezhim_raboty'); ?>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="contacts__item contacts__item--email">
                            <svg width="20" height="20">
                                <use xlink:href="/wp-content/themes/organka/img/icons.svg#icon-mail"></use>
                            </svg>
                            <a href="mailto:<? the_field('email'); ?>">
                                <? the_field('email'); ?>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();