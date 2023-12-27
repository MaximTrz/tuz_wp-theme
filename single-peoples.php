<?php get_header() ?>
<?php get_template_part('template-parts/main-slider'); ?>

<section class="about-people">
    <div class="container --not-mobile">
        <div class="about-people__title">
            <div class="section-title">
                <h2 class="section-title__title">О театре</h2>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="about-people__bread-crumbs">
            <ul class="bread-crumbs">
                <li class="bread-crumbs__item --first"><a class="bread-crumbs__link" href="<?php  echo  get_permalink(ID_ABOUT); ?>">О театре</a></li>
                <li class="bread-crumbs__item"><a class="bread-crumbs__link" href="<?php echo get_post_type_archive_link( 'peoples' ); ?>">Люди театра</a></li>
                <li class="bread-crumbs__item"> <?php the_title() ?> </li>
            </ul>
        </div>
        <div class="about-people__content">
            <div class="about-people__text">
                <h3 class="about-people__name"> <?php the_title() ?> </h3>
                <?php the_content() ?>
            </div>
            <div class="about-people__image-box"><img class="about-people__image" src="<?=get_the_post_thumbnail_url(); ?>" alt="Круковская Татьяна Игоревна"></div>
        </div>
    </div>
</section>


<?php get_footer() ?>
