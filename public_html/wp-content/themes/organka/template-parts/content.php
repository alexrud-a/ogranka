<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package organka
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="product-slider js-product-slider">
        <? if (get_field('video')) : ?>
        <div>
            <div class="product-slider__video" data-video="<? the_field('video'); ?>">
                <? the_post_thumbnail('large'); ?>
                <div class="product-slider__video-btn js-play">
                    <svg x="0px" y="0px" width="30" viewBox="0 0 494.148 494.148">
                        <path fill="#fff" d="M405.284,201.188L130.804,13.28C118.128,4.596,105.356,0,94.74,0C74.216,0,61.52,16.472,61.52,44.044v406.124c0,27.54,12.68,43.98,33.156,43.98c10.632,0,23.2-4.6,35.904-13.308l274.608-187.904c17.66-12.104,27.44-28.392,27.44-45.884C432.632,229.572,422.964,213.288,405.284,201.188z"/>
                    </svg>
                </div>
            </div>
        </div>
        <? endif; ?>
        <?
        $images = get_field('foto');
        if( $images ):
        foreach( $images as $image ): ?>
        <div>
            <img class="product-slider__img" src="<?php echo esc_url($image['sizes']['large']); ?>">
        </div>
        <?
        endforeach;
        endif;
        ?>
    </div>
    <script>
        $('.js-product-slider').each(function () {
            $(this).slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: true,
                autoplay: false,
                arrows: true,
                dots: false,
                autoHeight: true,
                prevArrow: '<div class="slider__arrow slider__arrow--prev"><svg fill="#fff" width="15" viewBox="0 0 5 9"><path d="M0.419,9.000 L0.003,8.606 L4.164,4.500 L0.003,0.394 L0.419,0.000 L4.997,4.500 L0.419,9.000 Z" /></svg></div>',
                nextArrow: '<div class="slider__arrow slider__arrow--next"><svg fill="#fff" width="15" viewBox="0 0 5 9"><path d="M0.419,9.000 L0.003,8.606 L4.164,4.500 L0.003,0.394 L0.419,0.000 L4.997,4.500 L0.419,9.000 Z" /></svg></div>',
            });
        });
        $('.js-play').on('click', function () {
            let video = $(this).parent().data('video');
            $(this).parent().html('<video src="'+video+'" controls></video>');
        });
    </script>
</article><!-- #post-<?php the_ID(); ?> -->