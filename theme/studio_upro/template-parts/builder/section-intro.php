<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

	<section class="block-intro mb-12 d-none d-lg-block">
		<div class="container-fluid">
			<div class="inner bg-light">

				<?php if ($title): ?>
					<div class="title"<?php if($title_color) echo ' style="color: ' . $title_color . ';"' ?>><?= $title ?></div>
				<?php endif ?>
				
				<?php if ($text): ?>
					<?= $text ?>
				<?php endif ?>
				
			</div>
		</div>
	</section>

	<?php endif; ?>