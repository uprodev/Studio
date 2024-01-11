<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

	<?php if ($reviews): ?>
		<section class="block-reviews bg-light pt-12 pb-7 pt-lg-15 pb-lg-15 mb-12 mb-lg-15">
			<div class="container-fluid">
				<div class="cp-slider-three-items">
					<div class="slider-header text-center mb-1">

						<?php if ($title): ?>
							<h2><?= $title ?></h2>
						<?php endif ?>
						
						<div class="swiper-button-prev"></div>
						<div class="swiper-button-next"></div>
					</div>

					<div class="swiper">
						<div class="swiper-wrapper">

							<?php foreach ($reviews as $item): ?>
								<div class="swiper-slide">
									<div class="card-review">

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

										<div class="card-review-author">
											<div class="d-flex">

												<?php if ($item['name'] || $item['short_name']): ?>
													<div class="card-review-icon">
														<?= $item['short_name'] ?: $item['name'] ?>
													</div>
												<?php endif ?>

												<div class="card-review-info">

													<?php if ($item['name']): ?>
														<div class="card-review-title"><?= $item['name'] ?></div>
													<?php endif ?>

													<?php if ($item['location']): ?>
														<div class="card-review-address"><?= $item['location'] ?></div>
													<?php endif ?>

												</div>
											</div>
										</div>
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