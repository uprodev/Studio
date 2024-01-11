<div class="col-md-6 col-lg-4">
  <a href="<?php the_permalink() ?>" class="card-service">

    <?php if (has_post_thumbnail()): ?>
      <div class="card-image">
        <?php the_post_thumbnail('full') ?>
      </div>
    <?php endif ?>
    
    <div class="card-text">
      <h4><?php the_title() ?></h4>
      
      <?php if (get_the_excerpt()): ?>
        <p><?php the_excerpt() ?></p>
      <?php endif ?>
      
    </div>
  </a>
</div>