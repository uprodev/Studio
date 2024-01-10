<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

	<section class="block-text-image mb-md-20">
		<div class="container-fluid">
			<div class="row gy-8 gy-md-0 gx-xl-17 flex-md-row-reverse">
				<div class="col-md-6">

					<?php if ($image || $image_mobile): ?>
						<div class="image">
							<picture>
								<source media="(min-width: 768px)" srcset="<?= $image['url'] ?: $image_mobile['url'] ?>" />
									<?= wp_get_attachment_image($image_mobile['ID'] ?: $image['ID'], 'full', false, array('class' => 'logo_mob')) ?>
								</picture>
							</div>
						<?php endif ?>

					</div>
					<div class="col-md-6">
						<div class="text text-bg-light pb-19 py-md-7 pt-lg-15 pb-lg-14 my-md-7 my-lg-11 pe-xl-13">
							<div class="inner">

								<?php if ($text): ?>
									<?= $text ?>
								<?php endif ?>
								
								<?php if ($note): ?>
									<div class="note"><?= $note ?></div>
								<?php endif ?>
								
								<?php if ($link): ?>
									<a href="<?= $link['url'] ?>" class="btn btn-primary"<?php if($link['target']) echo ' target="_blank"' ?>><?= $link['title'] ?></a>
								<?php endif ?>

							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<?php endif; ?>