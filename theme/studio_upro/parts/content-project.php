<div class="grid-item <?= $args['classes'] ? $args['classes'] : 'without_cat' ?>">
	<a href="<?php the_permalink() ?>" class="card-service">
		<div class="card-image">

			<?php if (has_post_thumbnail()): ?>
				<?php the_post_thumbnail('full') ?>
			<?php endif ?>
			
		</div>
		<div class="card-text">
			<h4><?php the_title() ?></h4>

			<?php if (get_the_excerpt()): ?>
				<p><?php the_excerpt() ?></p>
			<?php endif ?>
			
		</div>
	</a>
</div>