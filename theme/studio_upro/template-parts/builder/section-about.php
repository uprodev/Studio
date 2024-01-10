<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

	<section class="block-about-intro mb-7 mb-md-13">
		<div class="container-fluid">

			<?php if ($image): ?>
				<div class="image d-none d-md-block">
					<?= wp_get_attachment_image($image['ID'], 'full', false, array('class' => 'img-fluid')) ?>
				</div>
			<?php endif ?>
			
			<div class="text">

				<?php if ($text_1): ?>
					<?= $text_1 ?>
				<?php endif ?>

				<?php if ($image): ?>
					<div class="image d-md-none">
						<?= wp_get_attachment_image($image['ID'], 'full', false, array('class' => 'img-fluid')) ?>
					</div>
				<?php endif ?>
				
				<?php if ($text_2): ?>
					<?= $text_2 ?>
				<?php endif ?>

			</div>
		</div>
	</section>

	<?php endif; ?>