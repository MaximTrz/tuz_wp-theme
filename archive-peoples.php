<?php get_header() ?>

<?php get_template_part('template-parts/main-slider'); ?>

<?php
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
$args = array(
    'post_type' => 'peoples',
    'paged' => $paged,
    'posts_per_page' => 16,
     'orderby' => 'date',
    'order' => 'ASC',
);

$query = new WP_Query( $args );
?>

<section class="people-list">
    <div class="container --not-mobile">
        <div class="people-list__title">
            <div class="section-title">
                <h2 class="section-title__title">Люди театра</h2>
            </div>
        </div>
        <ul class="people-list__wrapper">
            <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                <li class="people-list__item">

                    <?php get_template_part( 'template-parts/people', 'template') ?>

                </li>
            <?php  endwhile; ?>
        </ul>
    </div>
</section>

<?php get_template_part('template-parts/pagination', 'template', ['query' => $query]);?>

<?php get_footer() ?>
