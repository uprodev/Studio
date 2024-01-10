<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

	<section class="block-compare mb-13 mb-lg-20">
		<div class="container-fluid">
			<div class="text-center mb-12 mb-lg-10">

				<?php if ($title): ?>
					<h2><?= $title ?></h2>
				<?php endif ?>
				
				<?php if ($link): ?>
					<a href="<?= $link['url'] ?>" class="btn btn-primary"<?php if($link['target']) echo ' target="_blank"' ?>><?= $link['title'] ?></a>
				<?php endif ?>
				
			</div>

			<?php if($gallery): ?>

				<div class="compare-images">
					<div id="containerImg">

						<?php foreach($gallery as $image): ?>

							<?= wp_get_attachment_image($image['ID'], 'full') ?>

						<?php endforeach; ?>

					</div>
				</div>

			<?php endif; ?>
		</div>
	</section>

	<?php endif; ?>