<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

	<section class="page-banner mb-10 mb-lg-12">

		<?php if ($image || $image_mobile || is_tax()): ?>
			<div class="image-full">
				<picture>
					<source media="(min-width: 768px)" srcset="<?= is_tax() ? get_stylesheet_directory_uri() . '/images/banner02.jpg' : ($image['url'] ?: $image_mobile['url']) ?>" />
						<?= is_tax() ? '<img src="' . get_stylesheet_directory_uri() . '/images/banner02-m.jpg" alt="">' : wp_get_attachment_image($image_mobile['ID'] ?: $image['ID'], 'full') ?>
					</picture>
				</div>
			<?php endif ?>

			<div class="text text-white">
				<div class="container-fluid">
					<h1><?= is_tax() ? single_term_title('', false) : ($title ?: get_the_title()) ?></h1>
				</div>
			</div>
		</section>
		
		<div class="container-fluid">
			<?php get_template_part('parts/breadcrumbs') ?>
		</div>

		<?php endif; ?>