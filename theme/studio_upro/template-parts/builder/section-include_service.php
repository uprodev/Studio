<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

	<?php if ($items): ?>
		<section class="block-tags bg-light py-12 mb-15 pt-lg-15 pb-lg-13 mb-lg-18">
			<div class="container-fluid">

				<?php if ($title): ?>
					<h2><?= $title ?></h2>
				<?php endif ?>

				<div class="row gy-4 gy-sm-8">

					<?php foreach ($items as $item): ?>
						<div class="col-sm-6 col-md-4 col-lg-3">

							<?php if ($item['text']): ?>
								<div class="tag"><?= $item['text'] ?></div>
							<?php endif ?>

						</div>
					<?php endforeach ?>

				</div>
			</div>
		</section>
	<?php endif ?>

	<?php endif; ?>