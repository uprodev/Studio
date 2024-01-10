<?php get_header(); ?>

<?php 
get_template_part('template-parts/builder/section', 'banner_small', ['row' => true]);
get_template_part('template-parts/builder/section', 'projects_all', ['row' => true]);
?>

<?php get_footer(); ?>