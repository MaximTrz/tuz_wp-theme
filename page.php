<?php get_header() ?>
<?php get_template_part('template-parts/main-slider'); ?>
<div class="page">
	<div class="container">
        <h2 class="section-title__title"><?php the_title() ?></h2>
		<div><?php the_content() ?></div>
	</div>
</div>
<?php get_footer() ?>