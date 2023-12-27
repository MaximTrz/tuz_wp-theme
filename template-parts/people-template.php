<a href="<?php the_permalink() ?>" class="people">
    <div class="people__img" style="background: url(<?=get_the_post_thumbnail_url(); ?>) center no-repeat; background-size: cover;"></div>
    <div class="people__name"><?php the_title() ?></div>
    <div class="people__position"><?php the_field( 'position' ) ?></div>
</a><?php
