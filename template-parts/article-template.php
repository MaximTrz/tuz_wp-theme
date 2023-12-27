<div class="article">
    <div class="article__img" style="background: url(<?php the_field( 'image_1' ) ?>) center no-repeat; background-size: cover;"></div>
    <div class="article__text-content">
        <div class="article__title"> <?php the_title() ?> </div>
        <p class="article__text"> <?php echo strip_tags(get_the_content()); ?> </p>
        <div class="article__button"><a class="a-button" href="<?php the_permalink() ?>">Читать далее</a>
        </div>
        <div class="article__date"><?php echo get_the_date(); ?></div>
    </div>
</div>