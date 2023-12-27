<?php
$posts = $args['posts'];
$play_posts = $args['play_posts'];
$people_posts = $args['peoples'];
?>

<?php if(count($posts)>0):?>
    <section class="billboard">
        <div class="container --not-mobile">
            <div class="billboard__title">
                <div class="section-title">
                    <h2 class="section-title__title">Афиша</h2>
                    <div class="section-title__al-link"><a class="all-items-link" href="billboard"><span class="all-items-link__text">Вся афиша</span></a>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="billboard__container">
                    <ul class="billboard__items">
                        <?php foreach ($posts as $post): ?> <?php setup_postdata($post); ?>
                            <?php
                            $date = strtotime(get_field( 'date', $post->id ));
                            $play_id = $post->play[0];
                            $play =  $play_posts[$play_id];

                            $director_id = $play->director[0];
                            $director = $people_posts[$director_id];

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
                        <?php endforeach; ?> <?php wp_reset_postdata(); ?>
                    </ul>
                </div>
                <div class="billboard__all-billboard"><a class="all-items-link" href="billboard"><span class="all-items-link__text">Вся афиша</span></a>
                </div>
            </div>
        </div>
    </section>
<?php endif;?>