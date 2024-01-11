<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

	<section class="block-hero mb-10 mb-lg-18">

		<?php if ($image || $image_mobile): ?>
			<div class="image-full">
				<picture>
					<source media="(min-width: 768px)" srcset="<?= $image['url'] ?: $image_mobile['url'] ?>" />
						<?= wp_get_attachment_image($image_mobile['ID'] ?: $image['ID'], 'full') ?>
					</picture>
				</div>
			<?php endif ?>

			<div class="text text-white">
				<div class="container-fluid">

					<?php if ($text): ?>
						<?= $text ?>
					<?php endif ?>

					<a href="#" class="scroll-down"><img src="<?= get_stylesheet_directory_uri() ?>/images/icons/arrow-down.svg" alt="" /></a>

					<?php if ($button): ?>
						<!-- <div class="d-lg-none">
							<a href="<?= $button['url'] ?>" class="btn btn-primary"<?php if($button['target']) echo ' target="_blank"' ?>><img src="<?= get_stylesheet_directory_uri() ?>/images/icons/phone-call.svg" alt="" /><?= $button['title'] ?></a>
						</div> -->
					<?php endif ?>

				</div>
			</div>
		</section>

		<?php endif; ?>