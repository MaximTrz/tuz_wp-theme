<?php get_header() ?>

<?php get_template_part('template-parts/main-slider'); ?>

    <?php
    $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
    $args = array(
        'post_type' => 'news',
        'paged' => $paged,
        'posts_per_page' => 12
    );

    $query = new WP_Query( $args ); // Создайте новый запрос с указанными аргументами
    ?>

    <section class="news-list">
        <div class="container">
            <div class="news-list__title">
                <div class="section-title">
                    <h2 class="section-title__title">Новости</h2>
                    <div class="section-title__al-link"><a class="all-items-link" href=""><span class="all-items-link__text">Все новости</span></a>
                    </div>
                </div>
            </div>
            <ul class="news-list__wrapper">

                    <?php while ( $query->have_posts() ) : $query->the_post(); ?>

                        <li class="news-list__item">
                            <?php get_template_part( 'template-parts/article', 'template' ); ?>
                        </li>

                    <?php  endwhile; ?>

            </ul>
        </div>
    </section>

<?php get_template_part('template-parts/pagination', 'template', ['query' => $query]);?>

<?php get_footer() ?>