<?php get_header() ?>

<?php get_template_part('template-parts/main-slider'); ?>

<?php
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
$args = array(
    'post_type' => 'plays',
    'paged' => $paged,
    'posts_per_page' => 12
);

$query = new WP_Query( $args );
?>

<section class="plays-list">
    <div class="container">
        <div class="plays-list__title">
            <div class="section-title">
                <h2 class="section-title__title">Спектакли</h2>
            </div>
        </div>
        <ul class="plays-list__wrapper">

            <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                <li class="plays-list__item">
                    <a class="play" href="<?php the_permalink(); ?>">
                        <div class="play__img" style="background: url(<?php echo get_the_post_thumbnail_url(); ?>) center no-repeat; background-size: cover;"></div>
                        <div class="play__title"><?php the_title(); ?></div>
                    </a>
                </li>
            <?php  endwhile; ?>

        </ul>
    </div>
</section>

<?php get_template_part('template-parts/pagination', 'template', ['query' => $query]);?>

<?php get_footer() ?>