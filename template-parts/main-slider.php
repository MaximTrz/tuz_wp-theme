<?php
$posts = get_posts([
    'numberposts' => 5,
    'suppress_filters' => true,
    'post_type'   => 'main_slider',
]); ?>

<?php if(count($posts)>0):?>

<section class="top-slider">
    <div class="container --not-mobile">
        <div class="main-slider">
            <div class="main-slider__container swiper js-main-swiper">
                <div class="main-slider__slides-wrapper swiper-wrapper">

                    <?php foreach ($posts as $post): ?> <?php setup_postdata($post); ?>

                        <div class="main-slider__slide swiper-slide">
                            <div class="main-slider__content">
                                <div class="main-slider__title"><?php the_title() ?></div>
                                <p class="main-slider__text"><?php echo strip_tags(get_the_content()); ?></p>
                            </div>
                            <div class="main-slider__img-wrapper">
                                <div class="main-slider__img" style="background: url(<?=get_the_post_thumbnail_url(); ?>) center no-repeat; background-size: cover;"></div>
                            </div>
                        </div>

                    <?php endforeach; ?> <?php wp_reset_postdata(); ?>

                </div>
            </div>
            <div class="main-slider__pagination swiper-pagination"></div>
            <div class="main-slider__next swiper-button-next"></div>
            <div class="main-slider__prev swiper-button-prev"></div>
        </div>
    </div>
</section>

<?php endif;?>