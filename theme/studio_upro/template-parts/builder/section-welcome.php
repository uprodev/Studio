<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

	<section class="block-text-slider mb-15 mb-lg-18">
		<div class="container-fluid">
			<div class="row gy-8 gx-xl-13">
				<div class="col-md-6">

					<?php if($gallery): ?>

						<div class="cp-image-slider">
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

					<?php endif; ?>

				</div>
				<div class="col-md-6">
					<div class="text">

						<?php if ($quote): ?>
							<blockquote><?= $quote ?></blockquote>
						<?php endif ?>
						
						<?php if ($signature): ?>
							<div class="quote-signature">
								<?= wp_get_attachment_image($signature['ID'], 'full', false, array('class' => 'img-fluid')) ?>
							</div>
						<?php endif ?>
						
						<?php if ($text): ?>
							<?= $text ?>
						<?php endif ?>
						
						<?php if ($link): ?>
							<a href="<?= $link['url'] ?>" class="btn btn-primary"<?php if($link['target']) echo ' target="_blank"' ?>><?= $link['title'] ?></a>
						<?php endif ?>

					</div>
				</div>
			</div>
		</div>
	</section>

	<?php endif; ?>