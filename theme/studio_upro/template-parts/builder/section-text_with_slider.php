<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

	<section class="mb-15 mb-lg-18">
		<div class="container-fluid">

			<?php if ($text): ?>
				<div class="block-header text-center">
					<?= $text ?>
				</div>
			<?php endif ?>
			
			<?php if($gallery): ?>

				<div class="cp-slider-two-items">
					<div class="swiper">
						<div class="swiper-wrapper">

							<?php foreach($gallery as $image): ?>

								<div class="swiper-slide">
									<figure>
										<?= wp_get_attachment_image($image['ID'], 'full') ?>
									</figure>
								</div>

							<?php endforeach; ?>

						</div>
						<div class="swiper-pagination"></div>
					</div>
				</div>
			</div>
		</section>

	<?php endif; ?>

	<?php endif; ?>