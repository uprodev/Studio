<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

	<section class="block-about-contacts mb-12 mb-md-13">
		<div class="container-fluid">
			<div class="row">

				<?php if ($image): ?>
					<div class="image d-none d-md-block">
						<?= wp_get_attachment_image($image['ID'], 'full', false, array('class' => 'img-fluid')) ?>
					</div>
				<?php endif ?>

				<div class="contacts-box">
					<div class="inner">

						<?php if ($title): ?>
							<h3><?= $title ?></h3>
						<?php endif ?>

						<ul>

							<?php if ($phone): ?>
								<li>
									<a href="tel:<?= preg_replace('/[^0-9]/', '', $phone) ?>" class="link-tel">
										<span class="icon"><img src="<?= get_stylesheet_directory_uri() ?>/images/icons/ico-phone-orange.svg" alt="" /></span><?= $phone ?>
									</a>
								</li>
							<?php endif ?>

							<?php if ($address): ?>
								<li>
									<div class="link-address">
										<span class="icon"><img src="<?= get_stylesheet_directory_uri() ?>/images/icons/ico-pin-orange.png" alt="" /></span>
										<?= $address ?>
									</div>
								</li>
							<?php endif ?>

							<?php if ($email): ?>
								<li>
									<a href="mailto:<?= $email ?>" class="link-email">
										<span class="icon"><img src="<?= get_stylesheet_directory_uri() ?>/images/icons/ico-mail-orange.svg" alt="" /></span><?= $email ?>
									</a>
								</li>
							<?php endif ?>

						</ul>
						
						<?php if ($link): ?>
							<a href="<?= $link['url'] ?>" class="btn btn-primary w-100"<?php if($link['target']) echo ' target="_blank"' ?>><?= $link['title'] ?></a>
						<?php endif ?>

					</div>
				</div>
			</div>
		</div>
	</section>

	<?php endif; ?>