<?php
$posts = get_posts([
    'numberposts' => 6,
    'post_type'   => 'news',
    'suppress_filters' => true,
]); ?>

<?php if(count($posts)>0):?>


<section class="news">
    <div class="container --not-mobile">
        <div class="news__title">
            <div class="section-title">
                <h2 class="section-title__title">Новости</h2>
                <div class="section-title__al-link"><a class="all-items-link" href="news"><span class="all-items-link__text">Все новости</span></a>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="news__container">
            <div class="news__slider swiper js-news-swiper">
                <div class="news__wrapper swiper-wrapper">

                    <?php foreach ($posts as $post): ?> <?php setup_postdata($post); ?>

                        <div class="news__item swiper-slide">
                            <?php get_template_part( 'template-parts/article', 'template' ); ?>
                        </div>

                    <?php endforeach; ?> <?php wp_reset_postdata(); ?>

            </div>
            <div class="news__pagination swiper-pagination"></div>
            <div class="news__al-news-link"> <a class="all-items-link" href="news"><span class="all-items-link__text">Все новости</span></a>
            </div>
            <div class="news__next swiper-button-next"></div>
            <div class="news__prev swiper-button-prev"></div>
        </div>
    </div>
</section>

<?php endif;?>