<?php

/**
 * Template Name: Price
 */

get_header();
?>

    <div class="price">
        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="section__title section__title--center">
                            Прайс-лист
                        </h1>
                    </div>
                </div>
            </div>
        </div>
        <? if (have_rows('ogranka')) : ?>
            <section class="section">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="section__title">
                                Стоимость услуг по огранке камней
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
                                <? while ( have_rows('ogranka') ) : the_row(); ?>
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
        <? if (have_rows('restavracziya')) : ?>
            <section class="section">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="section__title">
                                Стоимость услуг по реставрации камней
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
                                <? while ( have_rows('restavracziya') ) : the_row(); ?>
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
    </div>

<?php
get_footer();
