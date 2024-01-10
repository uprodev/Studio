<div class="swiper-slide">
  <a href="<?= get_the_permalink(18) . '?filter=.' . $args['term']->slug ?>" class="card-work">

    <?php if ($field = get_field('image', 'term_' . $args['term']->term_id)): ?>
      <div class="card-work-image">
        <?= wp_get_attachment_image($field['ID'], 'full') ?>
      </div>
    <?php endif ?>
    
    <div class="card-work-title"><?= $args['term']->name ?></div>
  </a>
</div>