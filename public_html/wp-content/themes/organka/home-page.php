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
                        <a class="slider__btn btn btn--white" href="<? the_sub_field('link'); ?>">
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
                    Ювелирная студия-мастерская JEWELLERY
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
<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="section__title">
                    Каталог ювелирных изделий
                </h2>
            </div>
            <div class="col-12">
                <div class="catalog">
                    <a href="#" class="catalog__item">
                        <div class="catalog__cat">
                            Обручальные кольца
                        </div>
                    </a>
                    <a href="#" class="catalog__item">
                        <div class="catalog__cat">
                            Серьги и комплекты
                        </div>
                    </a>
                    <a href="#" class="catalog__item">
                        <div class="catalog__cat">
                            Подвески
                        </div>
                    </a>
                    <a href="#" class="catalog__item">
                        <div class="catalog__cat">
                            Браслеты
                        </div>
                    </a>
                </div>
                <a class="catalog__btn" href="#">
                    Все категории
                </a>
            </div>
        </div>
    </div>
</section>
    <? if (get_field('uslugi')) : ?>
<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="section__title">
                    Услуги ювелирной мастерской
                </h2>
            </div>
        </div>
        <? the_field('uslugi') ?>
    </div>
</section>
    <? endif; ?>
<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="section__title">
                    Стоимость услуг ювелирной студии
                </h2>
            </div>
            <div class="col-12">
                <table class="table-price">
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
                    <tr>
                        <td>
                            Спайка цепочек
                        </td>
                        <td>
                            500 руб.
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Вставка выпавшего камня
                        </td>
                        <td>
                            от 700 руб.
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Ремонт золотых часов
                        </td>
                        <td>
                            от 800 руб.
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Гравировка колец внутри (алмазная/лазерная)
                        </td>
                        <td>
                            от 500 / 800 руб.
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Гравировка снаружи колец (алмазная/лазерная)
                        </td>
                        <td>
                            от 500 / 800 руб.
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Гравировка по плоскости (замок, флешка, зажигалка и т. д.) алмазная/лазерная
                        </td>
                        <td>
                            от 500 / 600 руб.
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Оценка стоимости камней
                        </td>
                        <td>
                            от 1000 руб.
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Оценка золотых часов
                        </td>
                        <td>
                            от 3000 руб.
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Огранка камней
                        </td>
                        <td>
                            от 120 руб./1 ct
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Разработка 3D-модели изделия
                        </td>
                        <td>
                            от 3000 руб.
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Стоимость золочения изделий
                        </td>
                        <td>
                            от 500 руб.
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="section__title">
                    Как мы работаем?
                </h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <h3 class="section__subtitle">
                    Приобретение изделия из каталога
                </h3>
                <ul>
                    <li>
                        Выберите украшение в каталоге
                    </li>
                    <li>
                        Выберите необходимые параметры и добавьте в корзину
                    </li>
                    <li>
                        Оформите заказ
                    </li>
                    <li>
                        После чего наш специалист свяжется с вами для уточнения деталей и подтверждения заказа
                    </li>
                    <li>
                        Получаете свой заказ с курьером (бесплатная доставка по России и СНГ) или в нашем офисе в Москве
                    </li>
                </ul>
            </div>
            <div class="col-md-4">
                <h3 class="section__subtitle">
                    Приобретение изделия из каталога
                </h3>
                <ul>
                    <li>
                        Присылаете эскиз или описываете украшение в письме
                    </li>
                    <li>
                        Мы обсуждаем с вами украшения и материалы у нас в офисе или по телефону
                    </li>
                    <li>
                        Вы, совместно с нашим дизайнером, составляете техническое задание
                    </li>
                    <li>
                        После согласования задания составляется 3D-модель украшения
                    </li>
                    <li>
                        После корректировки приступаем к изготовлению (2–4 недели)
                    </li>
                    <li>
                        Получаете свой заказ с курьером (бесплатная доставка по России и СНГ) или в нашем офисе в Москве
                    </li>
                </ul>
            </div>
            <div class="col-md-4">
                <h3 class="section__subtitle">
                    Приобретение изделия из каталога
                </h3>
                <ul>
                    <li>
                        Вы приносите изделие в нашу мастерскую
                    </li>
                    <li>
                        Мы производим оценку, называем стоимость и сроки
                    </li>
                    <li>
                        Производим ремонт (от 30 мин. до 2-х дней в зависимости от сложности)
                    </li>
                    <li>
                        Вы принимаете работу и оплачиваете стоимость
                    </li>
                </ul>
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
                <div class="slider-products">
                    <a href="#">
                        <div class="slider-products__item"></div>
                    </a>
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
                    Отзывы наших клиентов
                </h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="slider-feedback">
                    <a href="#">
                        <div class="slider-feedback__item"></div>
                    </a>
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
                    Задать вопрос:
                </h2>
            </div>
            <div class="col-12">
                <div class="form__wrap">
                    <? echo do_shortcode('[contact-form-7 id="29" title="Form"]'); ?>
                </div>
            </div>
        </div>
    </div>
</section>
</div>
<?php
get_footer();
