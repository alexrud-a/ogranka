<?php

/**
 * Template Name: About
 */

get_header();
?>

<div class="about">
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="section__title section__title--center">
                        История ювелирной студии
                    </h1>
                    <div class="section__text">
                        <?
                        if ( have_posts() ) :
                            while ( have_posts() ) :
                                the_post();
                                the_content();
                            endwhile;
                        endif;
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php
if( have_rows('preimushhestva') ): ?>
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="section__title section__title--center">
                        Наши преимущества
                    </h2>
                </div>
            </div>
            <div class="row">
            <? while ( have_rows('preimushhestva') ) : the_row(); ?>
                <div class="col-md-3 col-sm-6">
                    <div class="section__icon">
                        <img src="<? the_sub_field('ikonka') ?>" width="75">
                        <div class="section__text">
                            <? the_sub_field('tekst') ?>
                        </div>
                    </div>
                </div>
            <? endwhile; ?>
            </div>
        </div>
    </section>
<? endif; ?>

<?php
if( have_rows('komanda') ): ?>
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="section__title section__title--center">
                        Наша команда
                    </h2>
                </div>
            </div>
            <div class="row">
                <? while ( have_rows('komanda') ) : the_row(); ?>
                    <div class="col-md-4 col-sm-12">
                        <div class="section__icon">
                            <img src="<? the_sub_field('foto') ?>">
                            <div class="section__text">
                                <? the_sub_field('imya') ?>
                            </div>
                            <small>
                                <? the_sub_field('dolzhnost') ?>
                            </small>
                        </div>
                    </div>
                <? endwhile; ?>
            </div>
        </div>
    </section>
<? endif; ?>

    <section class="section section--form">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="section__title section__title--center">
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
