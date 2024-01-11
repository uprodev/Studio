<?php get_header(); ?>

<section class="block-project-slider">
	<div class="container-fluid">
		
		<?php get_template_part('parts/breadcrumbs') ?>

		<?php $images = get_field('gallery');
		if($images): ?>

			<div class="project-slider">
				<div class="project-slider-main">
					<div class="swiper swiper2">
						<div class="swiper-wrapper">

							<?php foreach($images as $image): ?>

								<div class="swiper-slide">
									<figure>
										<?= wp_get_attachment_image($image['ID'], 'full') ?>
									</figure>
								</div>

							<?php endforeach; ?>

						</div>
					</div>
					<div class="swiper-button-next"></div>
					<div class="swiper-button-prev"></div>
				</div>
				<div class="project-slider-thumb">
					<div class="swiper swiper1">
						<div class="swiper-wrapper">

							<?php foreach($images as $image): ?>

								<div class="swiper-slide">
									<figure>
										<?= wp_get_attachment_image($image['ID'], 'full') ?>
									</figure>
								</div>

							<?php endforeach; ?>

						</div>
					</div>
				</div>
			</div>

		<?php endif; ?>

	</div>
</section>
<section class="block-project-description">
	<div class="container-fluid">
		<div class="d-md-flex align-items-start">
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
</section>

<?php get_footer(); ?>