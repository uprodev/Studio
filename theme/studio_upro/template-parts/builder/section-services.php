<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

	<?php if($services): ?>

		<section class="mb-15 mb-lg-18">
			<div class="container-fluid">
				<div class="row gy-6">

					<?php foreach($services as $post): 

						global $post;
						setup_postdata($post); ?>
						<?php get_template_part('parts/content', 'service') ?>
					<?php endforeach; ?>
					
					<?php wp_reset_postdata(); ?>

				</div>
			</div>
		</section>

	<?php endif; ?>

	<?php endif; ?>