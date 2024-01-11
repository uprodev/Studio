<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

	<?php if ($faq): ?>
		<section class="block-faq bg-light">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-5">
						<div class="block-faq-text">
							<h2>

								<?php if ($title_1): ?>
									<span class="text-primary"><?= $title_1 ?></span>
								<?php endif ?>

								<?php if ($title_2): ?>
									<br /><?= $title_2 ?>
								<?php endif ?>

							</h2>
							
							<?php if ($text): ?>
								<div class="d-md-none">
									<?= $text ?>
								</div>
							<?php endif ?>
							
							<?php if ($link): ?>
								<div class="d-none d-md-block">
									<a href="<?= $link['url'] ?>" class="btn btn-primary"<?php if($link['target']) echo ' target="_blank"' ?>><?= $link['title'] ?></a>
								</div>
							<?php endif ?>

						</div>
					</div>
					<div class="col-md-7 ps-xl-1">
						<div class="accordion" id="accordion">

							<?php foreach ($faq as $index => $item): ?>
								<div class="accordion-item">

									<?php if ($item['question']): ?>
										<h5 class="accordion-header">
											<button class="accordion-button<?php if($index > 0) echo ' collapsed' ?>" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?= $index + 1 ?>" aria-expanded="<?= $index == 0 ? 'true' : 'false' ?>" aria-controls="collapse<?= $index + 1 ?>"><?= $item['question'] ?></button>
										</h5>
									<?php endif ?>
									
									<?php if ($item['answer']): ?>
										<div id="collapse<?= $index + 1 ?>" class="accordion-collapse collapse<?php if($index == 0) echo ' show' ?>" data-bs-parent="#accordion">
											<div class="accordion-body"><?= $item['answer'] ?></div>
										</div>
									<?php endif ?>
									
								</div>
							<?php endforeach ?>
							
						</div>
					</div>
				</div>

				<?php if ($link): ?>
					<div class="d-md-none pt-6">
						<a href="<?= $link['url'] ?>" class="btn btn-primary"<?php if($link['target']) echo ' target="_blank"' ?>><?= $link['title'] ?></a>
					</div>
				<?php endif ?>

			</div>
		</section>
	<?php endif ?>

	<?php endif; ?>