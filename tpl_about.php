<?php
/*
Template Name: Шаблон "О театре"
*/
?>

<?php get_header() ?>

<?php get_template_part('template-parts/main-slider'); ?>

<section class="about">
    <div class="container --not-mobile">
        <div class="about__title">
            <div class="section-title">
                <h2 class="section-title__title"> <?php the_title() ?> </h2>
            </div>
        </div>
        <div class="about__wrapper">
            <div class="about__text"> <?php the_content() ?> </div>
            <div class="about__gallary">
                <div class="gallary">
                    <div class="div gallary__viewed" style="background: url(<?php the_field( 'image_1' ) ?>) center no-repeat; background-size: cover;"></div>
                    <div class="gallary__images">
                        <div class="div gallary__img" style="background: url(<?php the_field( 'image_1' ) ?>) center no-repeat; background-size: cover;"></div>
                        <div class="div gallary__img" style="background: url(<?php the_field( 'image_2' ) ?>) center no-repeat; background-size: cover;"></div>
                        <div class="div gallary__img" style="background: url(<?php the_field( 'image_3' ) ?>) center no-repeat; background-size: cover;"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
    require_once __DIR__ . '/utils.php';
    $posts = getPeople();
?>

<?php if(count($posts)>0):?>
    <section class="people-list">
        <div class="container --not-mobile">

            <div class="people-list__title">
                <div class="section-title">
                    <h2 class="section-title__title">Люди театра</h2>
                </div>
            </div>

            <ul class="people-list__wrapper">

                <?php foreach ($posts as $post): ?> <?php setup_postdata($post); ?>
                    <li class="people-list__item">
                        <?php get_template_part( 'template-parts/people', 'template') ?>
                    </li>
                <?endforeach;?>

            </ul>
        </div>
    </section>
<?php endif; ?>

<?php get_template_part('template-parts/contacts', 'template'); ?>

<?php get_footer() ?>
