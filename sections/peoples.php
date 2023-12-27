<?php
require_once __DIR__ . '/../utils.php';
$posts = getPeople();
 ?>

<?php if(count($posts)>0):?>
    <section class="peoples">
        <div class="container --not-mobile">
            <div class="peoples__title">
                <div class="section-title">
                    <h2 class="section-title__title">Люди театра</h2>
                    <div class="section-title__al-link"><a class="all-items-link" href="<?php echo get_permalink(ID_ABOUT) ?>"><span class="all-items-link__text">Все о театре</span></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="peoples__container">
                <div class="peoples__slider swiper js-peoples-swiper">
                    <ul class="peoples__wrapper swiper-wrapper">

                        <?php foreach ($posts as $post): ?> <?php setup_postdata($post); ?>

                            <li class="peoples__item swiper-slide">
                                <?php get_template_part( 'template-parts/people', 'template') ?>
                            </li>

                        <?php endforeach; ?> <?php wp_reset_postdata(); ?>

                    </ul>
                </div>
                <div class="peoples__pagination swiper-pagination"></div>
                <div class="peoples__al-peoples-link"> <a class="all-items-link" href="<?php echo get_permalink(ID_ABOUT) ?>"><span class="all-items-link__text">Всё о театре</span></a>
                </div>
                <div class="peoples__next swiper-button-next"></div>
                <div class="peoples__prev swiper-button-prev"></div>
            </div>
        </div>
    </section>
<?php endif;?>