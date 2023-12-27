<?php
require_once __DIR__ . '/../utils.php';

$current_date = date('Ymd');
$args = array(
    'post_type' => 'billboard',
    'post_status' => 'publish',
    'posts_per_page' => 10,
    'meta_key' => 'date',
    'meta_query' => array(
        array(
            'key' => 'date',
            'value' => date('Ymd'),
            'compare' => '>=',
            'type' => 'DATE',
        ),
    ),
    'orderby' => 'meta_value',
    'order' => 'ASC',
);

// Загружаем записи типа "billboard"
$billboard_posts = get_posts($args);

$play_ids = array();
$people_ids = array();

foreach ($billboard_posts as $billboard_post) {
    $play_id = get_post_meta($billboard_post->ID, 'play', true);
    if ($play_id) {
        $play_ids[] = $play_id[0];
    }
}

// Загружаем записи типа "play" заранее
$play_posts = get_posts(array(
    'post_type'   => 'plays',
    'include' => $play_ids,
));

foreach ($play_posts as $play_post) {
    $people_id = get_post_meta($play_post->ID, 'director', true);
    if ($people_id) {
        $people_ids[] = $people_id[0];
    }
}

// Загружаем записи типа "play" заранее
$people_posts = get_posts(array(
    'post_type'   => 'peoples',
    'include' => $people_ids,
));

foreach ($people_posts as $people_post) {
    $people_posts_assoc[$people_post->ID] = $people_post;
}


foreach ($play_posts as $play_post) {
    $play_posts_assoc[$play_post->ID] = $play_post;
}




?>


<?php get_template_part( 'template-parts/billboard', 'template', ['posts'=> $billboard_posts, 'play_posts'=> $play_posts_assoc, 'peoples'=>$people_posts_assoc] ); ?>