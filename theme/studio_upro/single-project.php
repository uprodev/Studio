<?php get_header(); ?>

<section class="block-project-single">
	<div class="container-fluid">
		
		<?php get_template_part('parts/breadcrumbs') ?>
		
		<div class="block-wrapper">

			<?php $images = get_field('gallery');
			if($images): ?>

				<div class="col-left">
					<div class="project-gallery">

						<?php foreach($images as $image): ?>

							<a href="<?= $image['url'] ?>" data-fancybox="gallery">
								<?= wp_get_attachment_image($image['ID'], 'full') ?>
							</a>

						<?php endforeach; ?>

					</div>
				</div>

			<?php endif; ?>

			<div class="col-right">
				<div class="block-project-description">
					<div class="project-description">
						<div class="text-primary">
							<h3><?php the_title() ?></h3>
						</div>
						
						<?php if (get_the_excerpt()): ?>
							<div class="subtitle"><?php the_excerpt() ?></div>
						<?php endif ?>

						<?php the_content() ?>

					</div>
					<div class="box-callback">

						<?php if ($field = get_field('title_project', 'option')): ?>
							<h4><?= $field ?></h4>
						<?php endif ?>
						
						<?php if ($field = get_field('link_project', 'option')): ?>
							<a href="<?= $field['url'] ?>" class="btn btn-primary"<?php if($field['target']) echo ' target="_blank"' ?>><?= $field['title'] ?></a>
						<?php endif ?>
						
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>