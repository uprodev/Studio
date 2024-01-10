<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

	<?php if ($items): ?>
		<section class="block-service-text-image mb-15 mb-md-18">
			<div class="container-fluid">
				<div class="row gy-8 gy-md-12">

					<?php foreach ($items as $item): ?>
						<div class="item col-12">
							<div class="row">
								<div class="col-md-6">

									<?php if($item['gallery']): ?>

										<div class="image<?php if(count($item['gallery']) > 1) echo '-grid' ?>">

											<?php foreach($item['gallery'] as $index => $image): ?>

												<div class="col-0<?= $index + 1 ?>">
													<figure>
														<?= wp_get_attachment_image($image['ID'], 'full') ?>
													</figure>
												</div>

											<?php endforeach; ?>

										</div>

									<?php endif; ?>

								</div>
								<div class="col-md-6">

									<?php if ($item['text']): ?>
										<div class="text">
											<div class="inner">
												<?= $item['text'] ?>
											</div>
										</div>
									<?php endif ?>
									
								</div>
							</div>
						</div>
					<?php endforeach ?>

				</div>
			</div>
		</section>
	<?php endif ?>

	<?php endif; ?>