</main>
<footer class="footer">
  <div class="container-fluid">
    <div class="row justify-content-between">
      <div class="col-left">
        <div class="footer-info">

          <?php if ($field = get_field('text_footer', 'option')): ?>
            <p><?= $field ?></p>
          <?php endif ?>

          <?php if ($field = get_field('image_footer', 'option')): ?>
            <div class="footer-info-logo">
              <?= wp_get_attachment_image($field['ID'], 'full') ?>
            </div>
          <?php endif ?>

          <?php if ($field = get_field('button_footer', 'option')): ?>
            <div class="d-md-none">
              <a href="<?= $field['url'] ?>" class="btn btn-secondary"<?php if($field['target']) echo ' target="_blank"' ?>><?= $field['title'] ?></a>
            </div>
          <?php endif ?>

        </div>
      </div>
      <div class="col-center">
        <div class="footer-contacts">
          <ul>

            <?php if ($field = get_field('address_footer', 'option')): ?>
              <li>
                <a href="<?= $field['url'] ?>" class="link-address"<?php if($field['target']) echo ' target="_blank"' ?>>
                  <span class="icon"><img src="<?= get_stylesheet_directory_uri() ?>/images/icons/ico-pin.png" alt="" /></span><?= $field['title'] ?>
                </a>
              </li>
            <?php endif ?>

            <?php if ($field = get_field('phone_footer', 'option')): ?>
              <li>
                <a href="tel:<?= preg_replace('/[^0-9]/', '', $field) ?>" class="link-tel">
                  <span class="icon"><img src="<?= get_stylesheet_directory_uri() ?>/images/icons/ico-phone.svg" alt="" /></span><?= $field ?>
                </a>
              </li>
            <?php endif ?>

            <?php if ($field = get_field('email_footer', 'option')): ?>
              <li>
                <a href="mailto:<?= $field ?>" class="link-email">
                  <span class="icon"><img src="<?= get_stylesheet_directory_uri() ?>/images/icons/ico-mail.svg" alt="" /></span><?= $field ?>
                </a>
              </li>
            <?php endif ?>

          </ul>
        </div>
      </div>
      <div class="col-right">
        <div class="footer-socials">

          <?php if ($field = get_field('button_footer', 'option')): ?>
            <div class="d-none d-md-block">
              <a href="<?= $field['url'] ?>" class="btn btn-secondary"<?php if($field['target']) echo ' target="_blank"' ?>><?= $field['title'] ?></a>
            </div>
          <?php endif ?>

          <?php if(have_rows('socials_footer', 'option')): ?>

            <?php if ($field = get_field('socials_title_footer', 'option')): ?>
              <p><?= $field ?></p>
            <?php endif ?>
            
            <ul>

              <?php while(have_rows('socials_footer', 'option')): the_row() ?>

                <?php if ($icon = get_sub_field('icon')): ?>
                  <li>
                    <a href="<?php the_sub_field('url') ?>" target="_blank">
                      <?= wp_get_attachment_image($icon['ID'], 'full') ?>
                    </a>
                  </li>
                <?php endif ?>

              <?php endwhile ?>

            </ul>

          <?php endif ?>

        </div>
      </div>
    </div>
  </div>

  <?php if ($field = get_field('copyright_footer', 'option')): ?>
    <div class="footer-bottom text-center">
      <p><?= $field ?></p>
    </div>
  <?php endif ?>
  
</footer>
</div>
<?php wp_footer(); ?>
</body>
</html>