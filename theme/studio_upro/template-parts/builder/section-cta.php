<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

	<section class="block-help mb-12 mb-lg-13">
		<div class="container-fluid text-center color-white">

			<?php if ($title): ?>
				<h2><?= $title ?></h2>
			<?php endif ?>
			
			<?php if ($link): ?>
				<a href="<?= $link['url'] ?>" class="btn btn-white"<?php if($link['target']) echo ' target="_blank"' ?>><?= $link['title'] ?></a>
			<?php endif ?>
			
		</div>
	</section>

	<?php endif; ?>