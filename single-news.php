<?php get_header() ?>

<?php the_post() ?>

    <article class="news-view">
        <div class="container --not-mobile">
            <div class="section-title">
                <h2 class="section-title__title">Новости</h2>
                <div class="section-title__al-link"><a class="all-items-link" href="news"><span class="all-items-link__text">Все новости</span></a>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="news-view__data"> <?php echo get_the_date('j F Y'); ?> </div>
            <div class="news-view__article">
                <div class="news-view__article-text">
                    <div class="news-view__image-box"> <img class="news-view__image" src="<?php the_field( 'image_1' ) ?>" alt="Новости"></div>
                    <h2 class="news-view__title"> <?php the_title() ?> </h2>
                    <div class="news-view__text"> <?php the_content() ?> </div>
                </div>
                <div class="news-view__article-images">

                    <?php for ($i = 2 ; $i <= 5; $i++): ?>

                        <?php if((get_field( 'image_'.$i )) != false): ?>
                            <img class="news-view__image" src="<?php the_field( 'image_'.$i ) ?>" alt="Новости">
                        <?php endif; ?>

                    <?php endfor;?>

                </div>
            </div>
        </div>
    </article>

<?php get_footer() ?>