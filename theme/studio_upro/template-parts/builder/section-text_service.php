<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

	<?php if ($text): ?>
		<section class="block-service-intro mb-13">
			<div class="container-fluid">
				<div class="inner bg-primary">
					<?= $text ?>
					<span class="icon">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
							<path d="M6 9L12 15L18 9" stroke="#F9F9F9" stroke-linecap="round" stroke-linejoin="round" />
						</svg>
					</span>
				</div>
			</div>
		</section>
	<?php endif ?>

	<?php endif; ?>