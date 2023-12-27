<?php
get_header();
?>

<div class="container">
    <?php
    echo do_shortcode('[bvi]');
    ?>
</div>

<?php

get_template_part('template-parts/main-slider');

include "sections/news.php";
include "sections/billboard.php";
include "sections/plays.php";
include "sections/peoples.php";
get_template_part('template-parts/contacts', 'template');
?>

<?php
get_footer();
?>