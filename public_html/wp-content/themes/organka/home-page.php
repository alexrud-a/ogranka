<?php

/**
* Template Name: Home
*/

get_header();
?>
<?php

if( have_rows('slider') ): ?>
    <section class="section">
        <div class="slider js-slider">
        <? while ( have_rows('slider') ) : the_row(); ?>
            <div>
                <div class="slider__item" style="background-image: url('<? the_sub_field('img'); ?>')">
                    <? the_sub_field('title'); ?>
                    <? the_sub_field('text'); ?>
                    <a href="<? the_sub_field('link'); ?>">
                        <? the_sub_field('link-text'); ?>
                    </a>
                </div>
            </div>
        <? endwhile; ?>
        </div>
    </section>
<? endif; ?>

<?php
get_footer();
