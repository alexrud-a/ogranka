<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
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
                        Каталог
                    </h2>
                </div>
                <div class="col-12">
                    <div class="catalog">
                        <?php
                        $cats = get_terms([
                            'taxonomy'   => 'category',
                            'hide_empty' => false,
                            'parent' => 0,
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
                </div>
            </div>
        </div>
    </section>


<?php
get_sidebar();
get_footer();
