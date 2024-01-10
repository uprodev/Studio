<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

	<?php if ($reviews): ?>
		<section class="block-reviews block-reviews--<?= $type == 'Type 1' ? 'type1 bg-light pt-12 pb-7 pt-lg-15 pb-lg-18 mb-15 mb-lg-18' : 'type2 mb-15 mb-lg-18' ?>">
			<div class="container-fluid">
				<div class="cp-slider-four-items">

					<?php if ($title): ?>
						<div class="text-center">
							<h2>
								<?= $title ?>

								<?php if ($logo): ?>
									<?= wp_get_attachment_image($logo['ID'], 'full') ?>
								<?php endif ?>

							</h2>
						</div>
					<?php endif ?>

					<div class="slider-header text-center">

						<?php if ($rating): ?>
							<div class="reviews-total"><?= $rating ?> <?php _e('out of 5', 'Studio') ?></div>
							<div class="reviews-total-rate">
								<div class="stars"><div class="stars-inner" style="width: <?= $rating / 5 * 100 ?>%"></div></div>
							</div>
						<?php endif ?>
						
						<div class="swiper-button-prev"></div>
						<div class="swiper-button-next"></div>
					</div>

					<div class="swiper">
						<div class="swiper-wrapper">

							<?php foreach ($reviews as $item): ?>
								<div class="swiper-slide">
									<div class="card-review card-review--type<?= $type == 'Type 1' ? '1' : '2' ?>">

										<?php if ($type == 'Type 2' && $logo_small): ?>
											<span class="google-icon">
												<?= wp_get_attachment_image($logo_small['ID'], 'full') ?>
											</span>
										<?php endif ?>

										<div class="card-review-author">
											<div class="d-flex align-items-center">

												<?php if ($item['name'] || $item['short_name']): ?>
													<div class="card-review-icon card-review-icon--<?= $item['color'] ?>"><?= $item['short_name'] ?: $item['name'] ?></div>
												<?php endif ?>

												<?php if ($item['name']): ?>
													<div class="card-review-info">
														<div class="card-review-title"><?= $item['name'] ?></div>
													</div>
												<?php endif ?>

											</div>
										</div>

										<?php if ($item['rating']): ?>
											<div class="card-review-rate">
												<div class="stars"><div class="stars-inner" style="width: <?= $item['rating'] / 5 * 100 ?>%"></div></div>
												<span><?= $item['rating'] ?></span>
											</div>
										<?php endif ?>
										
										<?php if ($item['text']): ?>
											<div class="card-review-body">
												<?= $item['text'] ?>
											</div>
										<?php endif ?>
										
										<?php if ($item['url']): ?>
											<div class="card-review-footer fw-semibold">
												<a href="<?= $item['url'] ?>">See more</a>
											</div>
										<?php endif ?>
										
									</div>
								</div>
							<?php endforeach ?>
							
						</div>
					</div>
					<div class="swiper-pagination"></div>
				</div>
			</div>
		</section>
	<?php endif ?>

	<?php endif; ?>