<?php get_header() ?>

<?php require __DIR__ . '/utils.php'; ?>
<?php get_template_part('template-parts/main-slider'); ?>

<?php
$post = get_post();

$actors_ids = (get_field( 'actors', $post->ID ));

$play_id = $post->ID;

$args = array(
    'post_type'  => 'billboard',
    'meta_query' => array(
        array(
            'key'     => 'play',
            'value'   => $play_id,
            'compare' => 'LIKE',
        ),
        array(
            'key'     => 'date',
            'value'   => date('Ymd'),
            'compare' => '>=',
            'type'    => 'DATE',
        ),
    ),
    'meta_key'   => 'date',
    'orderby'    => 'meta_value',
    'order'      => 'ASC',
);

$query = new WP_Query( $args );

$args = array(
    'post_type'      => 'peoples',
    'post__in'       => $actors_ids,
    'posts_per_page' => -1 // Получить все записи из массива идентификаторов
);

$people_query = new WP_Query($args);

?>

<section class="play-card">
    <div class="container --not-mobile">
        <div class="play-card__title">Спектакли <span class="play-card__delimiter">| </span><span class="play-card__play"> <?php the_title() ?> </span></div>
    </div>
    <div class="container">
        <div class="play-card__images">
            <div class="play-card__vertical-images">

                <?php if((get_field( 'image_1' )) != false): ?>
                    <img class="play-card__image" src="<?php the_field('image_1')?>" alt="Изображение">
                <?php endif; ?>

                <?php if((get_field( 'image_2' )) != false): ?>
                    <img class="play-card__image --down" src="<?php the_field('image_2')?>" alt="Изображение">
                <?php endif; ?>

            </div>
            <div class="play-card__main-image-box">
                <div class="play-card__main-image" style="background: url(<?php echo get_the_post_thumbnail_url(); ?>) center no-repeat; background-size: cover;"></div>
            </div>
            <div class="play-card__vertical-images">

                <?php if((get_field( 'image_3' )) != false): ?>
                    <img class="play-card__image" src="<?php the_field('image_3')?>" alt="Изображение">
                <?php endif; ?>

                <?php if((get_field( 'image_4' )) != false): ?>
                    <img class="play-card__image --down" src="<?php the_field('image_3')?>" alt="Изображение">
                <?php endif; ?>

            </div>
        </div>
        <div class="play-card__info">
            <div class="play-card__date-wrapper">
                <div class="play-card__sub-title">Расписание</div>
                <?php if ( $query->have_posts() ): ?>
                    <ul class="play-card__date-list">
                        <?php while ( $query->have_posts() ): ?>

                        <?php $query->the_post(); ?>
                            <?php
                                $date = strtotime(get_field('date'));
                            ?>
                            <li class="play-card__info-date">
                                <div class="pay-ticket">
                                    <div class="pay-ticket__day"><?php echo date("d", $date)?></div>
                                    <div class="pay-ticket__month"><?php echo getRussianMonth($date) ?></div>
                                    <div class="pay-ticket__time"><?php echo getDayOfWeek($date) ?>, <?php echo getTime($date) ?></div><a class="a-button" href="<?php echo get_field('URL') ?>">Купить билет</a>
                                </div>
                            </li>
                        <?php endwhile; ?>

                        <?php wp_reset_postdata(); ?>
                    </ul>
                <?php endif; ?>

            </div>
            <div class="play-card__text-box">
                <div class="play-card__play-name"><?php the_title() ?></div>
                <div class="play-card__text"> <?php the_content() ?> </div>
            </div>
            <div class="play-card__actors">
                <div class="play-card__sub-title">Актеры  </div>
                <?php if ($people_query->have_posts()): ?>

                    <ul class="play-card__actors-list">

                        <?php while ($people_query->have_posts()): ?>
                            <?php $people_query->the_post(); ?>
                            <li class="play-card__actor">
                                <a class="people" href="<?php echo get_permalink(); ?>">
                                    <div class="people__img --small" style="background: url(<?php echo get_the_post_thumbnail_url(); ?>) center no-repeat; background-size: cover;"></div>
                                    <div class="people__name --small"><?php echo get_the_title(); ?></div>
                                </a>
                            </li>
                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>

                    </ul>

                <?php endif; ?>
            </div>
        </div>
    </div>
</section>


<?php get_footer() ?>