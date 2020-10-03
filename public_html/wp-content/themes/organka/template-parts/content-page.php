<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package organka
 */

?>

<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php
                the_content();

                wp_link_pages(
                    array(
                        'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'organka' ),
                        'after'  => '</div>',
                    )
                );
                ?>
            </div>
        </div>
    </div>
</section>
