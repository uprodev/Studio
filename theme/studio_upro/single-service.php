<?php get_header(); ?>

<div class="service-single-type<?= get_field('type') ?>">

	<?php if ( have_posts() ) :

		get_template_part( 'template-parts/content', 'builder' );

	else :

		get_template_part( 'template-parts/content', 'none' );

	endif;
	?>

</div>

<?php get_footer(); ?>