<?php
$date = $args['date'];
$play = $args['play'];
$director = $args['director'];
?>

<div class="billboard-item">
    <a class="billboard-item__link" href="<?php echo get_permalink($play); ?>">
        <div class="billboard-item__img" style="background: url(<?=get_the_post_thumbnail_url($play, 'full'); ?>) center no-repeat; background-size: cover;"></div>
        <div class="billboard-item__date">
            <div class="billboard-item__day bvi-no-styles"><?php echo date("d", $date)?></div>
            <div class="billboard-item__date-time">
                <div class="billboard-item__time"><?php echo getDayOfWeek($date) ?>, <?php echo getTime($date) ?></div>
                <div class="billboard-item__month"><?php echo getRussianMonth($date) ?></div>
            </div>
        </div>
        <div class="billboard-item__about">
            <div class="billboard-item__about-text"><?php echo $play->short_description; ?></div>
            <div class="billboard-item__title"><?php echo $play->post_title ?><span class="billboard-item__age">(<?php echo $play->age ?>)</span></div>
            <div class="billboard-item__director">Режиссер: <?php echo $director->post_title; ?></div>
        </div>
    </a>
    <div class="billboard-item__button">
        <a class="a-button" href="<?php the_field( 'URL' ); ?>">Купить билет</a>
    </div>
</div>