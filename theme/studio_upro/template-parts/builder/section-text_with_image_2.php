<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

	<section class="block-text-image block-text-image--type1 mb-15 mb-md-18">
		<div class="container-fluid">
			<div class="row gy-7 gy-md-0 gx-xl-17 flex-md-row-reverse">
				<div class="col-md-5">
					
					<?php if ($image || $image_mobile): ?>
						<div class="image">
							<picture>
								<source media="(min-width: 768px)" srcset="<?= $image['url'] ?: $image_mobile['url'] ?>" />
									<?= wp_get_attachment_image($image_mobile['ID'] ?: $image['ID'], 'full', false, array('class' => 'logo_mob')) ?>
								</picture>
							</div>
						<?php endif ?>

					</div>
					<div class="col-md-7">

						<?php if ($text): ?>
							<div class="text text-bg-light py-md-7 pt-xl-13 pb-xl-7 my-md-7">
								<div class="inner">
									<?= $text ?>
								</div>
							</div>
						<?php endif ?>
						
					</div>
				</div>
			</div>
		</section>

		<?php endif; ?>