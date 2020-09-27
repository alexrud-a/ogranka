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
                </div>
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
    </section>
    <section class="section">
        <h2 class="section__title section__title--center">
            Наши преимущества
        </h2>
    </section>
    <section class="section">
        <h2 class="section__title section__title--center">
            Наша команда
        </h2>
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
