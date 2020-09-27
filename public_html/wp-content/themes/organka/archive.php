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

    <section class="section">
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
                            'hide_empty' => true,
                            'parent' => 0,
                        ]);
                        foreach ($cats as $cat) :
                            ?>
                            <a href="<?php echo get_term_link($cat->term_id, 'category') ?>" class="catalog__item">
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
get_footer();
