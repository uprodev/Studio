<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

	<?php 
	$terms = get_terms( [
		'taxonomy' => 'project_cat',
		'hide_empty' => false,
	] );
	$term_ids = wp_list_pluck($terms, 'term_id');
	$projects_page_id = 18;
	$queried_object_id = get_queried_object_id();
	?>

	<?php if ($terms): ?>
		<section class="project-list project-list--cols-2 mb-13 mb-lg-20">
			<div class="container-fluid">
				<div class="cp-filter">
					<ul>
						<li>
							<a href="<?php the_permalink($projects_page_id) ?>"<?php if(is_page($projects_page_id)) echo ' class="active"' ?>><?php _e('All', 'Studio') ?></a>
						</li>

						<?php foreach ($terms as $term): ?>
							<li>
								<a href="<?= get_term_link($term->term_id) ?>" <?php if($term->term_id == $queried_object_id) echo ' class="active"' ?>><?= $term->name ?></a>
							</li>
						<?php endforeach ?>

					</ul>
				</div>

				<?php 
				$paged = get_query_var('paged') ?: 1;
				$is_tax = is_tax();
				$wp_query = new WP_Query(array(
					'post_type' => 'project', 
					'tax_query' => array(
						array(
							'taxonomy' => 'project_cat',
							'field'    => 'id',
							'terms'    => $is_tax ? $queried_object_id : $term_ids
						)
					), 
					'paged' => $paged
				)
			);
				if($wp_query->have_posts()): 
					?>

					<div class="row gy-6 gy-md-9">

						<?php while ($wp_query->have_posts()): $wp_query->the_post(); ?>
							<?php get_template_part('parts/content', 'project') ?>
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