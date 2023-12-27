<?php get_header() ?>

<?php get_template_part('template-parts/main-slider'); ?>

<?php require __DIR__ . '/utils.php'; ?>

<?php
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
$args = array(
    'post_type' => 'billboard',
    'paged' => $paged,
    'posts_per_page' => 15,
    'meta_key'   => 'date',
    'meta_query' => array(
        array(
            'key'     => 'date',
            'value'   => date('Ymd'),
            'compare' => '>=',
            'type'    => 'DATE',
        ),
    ),
    'orderby'    => 'meta_value',
    'order'      => 'ASC',
);
$query = new WP_Query( $args );

$billboard_posts = $query->posts;
$play_ids = array();
$people_ids = array();

foreach ($billboard_posts as $billboard_post) {
    $play_id = get_post_meta($billboard_post->ID, 'play', true);
    if ($play_id) {
        $play_ids[] = $play_id[0];
    }
}

// Предварительная загрузка записей типа "play"
$play_posts = get_posts(array(
    'post_type'   => 'plays',
    'include' => $play_ids,
));

$people_posts_assoc = array();
$play_posts_assoc = array();

foreach ($play_posts as $play_post) {
    $people_id = get_post_meta($play_post->ID, 'director', true);
    if ($people_id) {
        $people_ids[] = $people_id[0];
    }
    $play_posts_assoc[$play_post->ID] = $play_post;
}

// Предварительная загрузка записей типа "people"
$people_posts = get_posts(array(
    'post_type'   => 'peoples',
    'include' => $people_ids,
));

foreach ($people_posts as $people_post) {
    $people_posts_assoc[$people_post->ID] = $people_post;
}


?>

<section class="billboard-list">
    <div class="container">
        <div class="billboard-list__title">
            <div class="section-title">
                <h2 class="section-title__title">Афиша</h2>
            </div>
        </div>
        <div class="billboard">

            <ul class="billboard__items">

                <?php while ( $query->have_posts() ) : $query->the_post(); ?>

                    <?php
                    $post = get_post();
                    $date = strtotime(get_field( 'date', $post->id ));
                    $play_id = $post->play[0];

                    $play = $play_posts_assoc[$play_id];
                    $director_id = $play->director[0];

                    $director = $people_posts_assoc[$director_id];

                    ?>

                    <li class="billboard__item">
                        <?php
                        get_template_part('template-parts/billboard', 'single', [
                            'date' => $date,
                            'play' => $play,
                            'director' => $director,
                        ]);
                        ?>
                    </li>

                <?php  endwhile; ?>

                </li>

            </ul>
        </div>

    </div>
</section>

<?php get_template_part('template-parts/pagination', 'template', ['query' => $query]);?>

<?php get_footer() ?>
