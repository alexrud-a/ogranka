<?php

/**
* Template Name: Home
*/

get_header();
?>
<div class="home">
<?php
if( have_rows('slider') ): ?>
    <section class="section section--main">
        <div class="slider slider--main js-slider">
        <? while ( have_rows('slider') ) : the_row(); ?>
            <div>
                <div class="slider__item" style="background-image: url('<? the_sub_field('img'); ?>')">
                    <div class="container">
                        <div class="slider__title">
                            <? the_sub_field('title'); ?>
                        </div>
                        <div class="slider__text">
                            <? the_sub_field('text'); ?>
                        </div>
                        <a class="slider__btn btn btn--white js-modal-form" href="#modal">
                            <? the_sub_field('link-text'); ?>
                        </a>
                    </div>
                </div>
            </div>
        <? endwhile; ?>
        </div>
    </section>
<? endif; ?>
<?php
if(  get_field('text-section') ): ?>
<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="section__title">
                    Ювелирная студия-мастерская MagnetGems
                </h1>
            </div>
            <div class="col-12">
                <div class="section__text">
                    <? the_field('text-section'); ?>
                </div>
            </div>
        </div>
    </div>
</section>
<? endif; ?>
<?/*<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="section__title">
                    Каталог выполненных работ
                </h2>
            </div>
            <div class="col-12">
               <div class="catalog">
                        <?php
                    $cats = get_terms([
                        'taxonomy'   => 'category',
                        'hide_empty' => true,
                        'parent' => 0,
                        'number' => 4,
                    ]);
                    foreach ($cats as $cat) :
                        ?>
                        <a href="<?php echo get_term_link($cat->term_id, 'category') ?>" class="catalog__item" style="background-image: url('<? the_field('izobrazhenie_kategorii', $cat) ?>');">
                            <div class="catalog__cat">
                                <?php echo $cat->name ?>
                            </div>
                        </a>
                    <?php endforeach; ?>
                </div>
                <a class="section__btn btn btn--black catalog__btn" href="/katalog">
                    Смотреть все
                </a>
            </div>
        </div>
    </div>
</section>*/?>
    <? if (get_field('uslugi')) : ?>
<?/*<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="section__title">
                    Услуги мастерской
                </h2>
            </div>
        </div>
        <? the_field('uslugi') ?>
    </div>
</section>*/?>
    <? endif; ?>

<?php
if( have_rows('vidy_ogranki') ): ?>
<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="section__title section__title--center">
                    Виды огранки
                </h2>
            </div>
            <div class="col-md-12">
                <div class="icon-block">
                    <? while ( have_rows('vidy_ogranki') ) : the_row(); ?>
                    <div class="icon-block__item">
                        <div class="icon-block__item-inner">
                            <img class="icon-block__item-icon" src="<? the_sub_field('ikonka') ?>">
                            <div class="icon-block__item-text"><? the_sub_field('nazvanie') ?></div>
                        </div>
                    </div>
                    <? endwhile; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<? endif; ?>

<? if (have_rows('ogranka', 63)) : ?>
<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="section__title section__title--center">
                    Стоимость услуг ювелирной студии
                </h2>
            </div>
            <div class="col-12">
                <table class="table-price table table-striped">
                    <thead>
                    <tr>
                        <td>
                            Услуги
                        </td>
                        <td>
                            Стоимость
                        </td>
                    </tr>
                    </thead>
                    <tbody>
                    <? while ( have_rows('ogranka', 63) ) : the_row(); ?>
                    <tr>
                        <td>
                            <? the_sub_field('usluga'); ?>
                        </td>
                        <td>
                            <? the_sub_field('stoimost'); ?>
                        </td>
                    </tr>
                    <? endwhile; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
<? endif; ?>
<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="section__title section__title--center">
                    Этапы огранки камня
                </h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="section__icon">
                    <svg width="60" height="60">
                        <use xlink:href="/wp-content/themes/organka/img/icons.svg#step1"></use>
                    </svg>
                    <div class="section__text">
                        Вы приносите камень в нашу мастерскую
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="section__icon">
                    <svg width="60" height="60">
                        <use xlink:href="/wp-content/themes/organka/img/icons.svg#step2"></use>
                    </svg>
                    <div class="section__text">
                        Мы обсуждаем с Вами вариант огранки и озвучиваем стоимость
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="section__icon">
                    <svg width="60" height="60">
                        <use xlink:href="/wp-content/themes/organka/img/icons.svg#step3"></use>
                    </svg>
                    <div class="section__text">
                        Производим огранку камня в течение 2-5 дней
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="section__icon">
                    <svg width="60" height="60">
                        <use xlink:href="/wp-content/themes/organka/img/icons.svg#step4"></use>
                    </svg>
                    <div class="section__text">
                        Вы принимаете работу и оплачиваете заказ
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="section__title">
                    Наши работы
                </h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="slider-products js-products-slider">
                    <?
                    $myposts = get_posts( array(
                        'post_type' => 'post',
                        'numberposts' => 8,
                        'post_per_page' => 8,
                        'orderby' => 'rand',
                    ) );
                    foreach($myposts as $post){
                        setup_postdata($post); ?>

                        <div>
                            <a class="slider-products__item js-modal" href="<? the_permalink(); ?>" style="background-image: url('<? the_post_thumbnail_url('large'); ?>')">
                            </a>
                        </div>

                    <? }
                    wp_reset_postdata(); ?>
                </div>
            </div>
        </div>
    </div>
</section>
</div>
<?php
get_footer();
