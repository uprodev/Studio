<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

	<?php if($projects): ?>

		<section class="block-works mb-15 mb-lg-19">
			<div class="container-fluid">
				<div class="cp-slider-three-items">
					<div class="slider-header text-center mb-1">

						<?php if ($title): ?>
							<h2><?= $title ?></h2>
						<?php endif ?>
						
						<div class="swiper-button-prev"></div>
						<div class="swiper-button-next"></div>
					</div>
					
					<div class="swiper mb-6">
						<div class="swiper-wrapper">

							<?php foreach($projects as $term):  ?>
								<?php get_template_part('parts/content', 'project_cat', ['term' => $term]) ?>
							<?php endforeach; ?>

						</div>
					</div>
				</div>
				<div class="text-center">
					<a href="<?php the_permalink(18) ?>" class="btn btn-primary"><?php _e('All projects', 'Studio') ?></a>
				</div>
			</div>
		</section>

	<?php endif; ?>

	<?php endif; ?>