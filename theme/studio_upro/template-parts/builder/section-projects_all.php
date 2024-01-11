<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

	<?php 
	$terms = get_terms( [
		'taxonomy' => 'project_cat',
		'hide_empty' => false,
	] );
	?>

	<?php if ($terms): ?>
		<section class="project-list project-list--cols-2 mb-13 mb-lg-20">
			<div class="container-fluid">
				<div class="cp-filter">
					<ul>

						<?php foreach ($terms as $index => $term): ?>
							<li><button<?php if($index == 0) echo ' class="active"' ?> data-filter=".<?= $term->slug ?>"><?= get_field('title_add', 'term_' . $term->term_id) ?: $term->name ?></button></li>
						<?php endforeach ?>

					</ul>
				</div>

				<?php 
				$wp_query = new WP_Query(array('post_type' => 'project', 'posts_per_page' => -1, 'paged' => get_query_var('paged')));
				if($wp_query->have_posts()): 
					?>

					<div class="filter-grid">

						<?php while ($wp_query->have_posts()): $wp_query->the_post(); ?>

							<?php 
							$project_terms_slugs = implode(' ', wp_list_pluck(wp_get_object_terms(get_the_ID(), 'project_cat'), 'slug'));
							get_template_part('parts/content', 'project', ['classes' => $project_terms_slugs]); 
							?>

						<?php endwhile; ?>

					</div>

					<?php 
				endif;
				get_template_part('parts/pagination');
				wp_reset_query(); 
				?>

			</div>
		</section>
	<?php endif ?>

	<?php endif; ?>