<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

	<?php if ($items): ?>
		<section class="block-process<?php if($hide_on_mobile) echo ' d-none d-lg-block' ?>">
			<div class="container-fluid">

				<?php if ($title): ?>
					<div class="text-center text-white">
						<h2><?= $title ?></h2>
					</div>
				<?php endif ?>

				<div class="row">

					<?php foreach ($items as $index => $item): ?>
						<div class="col-md-6 col-lg-3">
							<div class="process-step">

								<?php if ($item['title']): ?>
									<h3><?= $item['title'] ?></h3>
								<?php endif ?>

								<?php if ($item['items']): ?>
									<ul>

										<?php foreach ($item['items'] as $item_2): ?>
											<li>

												<?php if ($item_2['icon']): ?>
													<div class="icon">
														<?= wp_get_attachment_image($item_2['icon']['ID'], 'full') ?>
													</div>
												<?php endif ?>
												
												<?php if ($item_2['text']): ?>
													<div class="title"><?= $item_2['text'] ?></div>
												<?php endif ?>
												
											</li>
										<?php endforeach ?>

									</ul>
								<?php endif ?>

								<div class="step-label"><strong><?php if($index < 9) echo '0'; echo $index + 1 ?></strong><?php _e('step', 'Studio') ?></div>
							</div>
						</div>
					<?php endforeach ?>

				</div>
			</div>

			<?php if ($bottom_text): ?>
				<div class="process-last">
					<div class="process-label">
						<div class="icon">
							<svg width="90" height="90" viewBox="0 0 90 90" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M30.6975 36.2074C47.756 26.1551 56.2852 49.0012 73.3437 39.2535C73.3437 27.9828 73.3437 22.1951 73.3437 10.9243C56.2852 20.9766 47.756 -1.86954 30.6975 7.87815C30.6975 19.1489 30.6975 24.9366 30.6975 36.2074Z" stroke="#094875" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
								<path d="M30.6693 59.9668H73.3154L85.5 84.336H6.30005L18.4847 59.9668H30.6693Z" stroke="#094875" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
								<path d="M30.6975 37.1208V69.1055" stroke="#094875" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
							</svg>
						</div>
						<p><?= $bottom_text ?></p>
					</div>
				</div>
			<?php endif ?>
			
		</section>
	<?php endif ?>

	<?php endif; ?>