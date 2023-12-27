<?php

$posts = get_posts([
    'numberposts' => 6,
    'post_type'   => 'plays',
    'suppress_filters' => true,
]); ?>

<?php if(count($posts)>0):?>

<section class="plays">
    <div class="container --not-mobile">
        <div class="news__title">
            <div class="section-title">
                <h2 class="section-title__title">Спектакли</h2>
                <div class="section-title__al-link"><a class="all-items-link" href="plays"><span class="all-items-link__text">Все спектакли</span></a>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="plays__container">
            <div class="plays__slider swiper js-plays-swiper">
                <ul class="plays__wrapper swiper-wrapper">

                    <?php foreach ($posts as $post): ?> <?php setup_postdata($post); ?>

                        <li class="plays__item swiper-slide">
                            <a href="<?php the_permalink() ?>" class="play">
                                <div class="play__img" style="background: url(<?=get_the_post_thumbnail_url(); ?>) center no-repeat; background-size: cover;"></div>
                                <div class="play__title"><?php the_title() ?></div>
                            </a>
                        </li>

                    <?php endforeach; ?> <?php wp_reset_postdata(); ?>

                </ul>
            </div>
            <div class="plays__pagination swiper-pagination"></div>
            <div class="plays__al-plays-link"> <a class="all-items-link" href="plays"><span class="all-items-link__text">Все спектакли</span></a>
            </div>
            <div class="plays__next swiper-button-next"></div>
            <div class="plays__prev swiper-button-prev"></div>
        </div>
    </div>
</section>

<?php endif;?>