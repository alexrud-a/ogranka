<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package organka
 */

get_header();
?>

    <section class="section catalog-page">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="section__title">
                        <? the_archive_title(); ?>
                    </h2>
                </div>
                <div class="col-12">
                    <div class="catalog">
                        <?php
                        while ( have_posts() ) :
                            the_post(); ?>

                            <a href="<? the_permalink(); ?>" class="catalog__item js-modal" style="background-image: url(<? the_post_thumbnail_url('medium'); ?>)">
                            </a>

                        <? endwhile; // End of the loop.
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php
get_footer();
