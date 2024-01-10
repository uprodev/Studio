<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

	<?php if ($items): ?>
		<section class="block-about-list mb-15 mb-md-18">
			<div class="container-fluid">

				<?php if ($title): ?>
					<div class="text-center mb-6 mb-lg-7">
						<h3><?= $title ?></h3>
					</div>
				<?php endif ?>

				<div class="row gy-4 gx-xl-11">

					<?php foreach ($items as $item): ?>
						<div class="col-sm-6 col-lg-3">
							<div class="card-about">

								<?php if ($item['title']): ?>
									<div class="title"<?php if($item['title_color']) echo ' style="color: ' . $item['title_color'] . ';"' ?>><?= $item['title'] ?></div>
								<?php endif ?>

								<?php if ($item['text']): ?>
									<p><?= $item['text'] ?></p>
								<?php endif ?>

							</div>
						</div>
					<?php endforeach ?>

				</div>
			</div>
		</section>
	<?php endif ?>

	<?php endif; ?>