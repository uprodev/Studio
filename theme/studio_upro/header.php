<!DOCTYPE html>
<html <?php language_attributes() ?>>
<head>
  <meta charset="UTF-8" />
  <?php wp_head(); ?>
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <div class="global-wrapper">
    <header class="header">
      <div class="container-fluid d-flex align-items-center justify-content-between">

        <?php if ($field = get_field('logo_header', 'option')): ?>
          <div class="logo">
            <a href="<?= get_home_url() ?>">
              <?= wp_get_attachment_image($field['ID'], 'full') ?>
            </a>
          </div>
        <?php endif ?>
        
        <nav class="navigation-main">

          <?php wp_nav_menu( array(
            'theme_location'  => 'header',
            'container'       => '',
            'items_wrap'      => '<ul>%3$s</ul>'
          )); ?>

          <?php if ($field = get_field('phone_header', 'option')): ?>
            <div class="navigation-bottom d-lg-none">
              <a href="tel:<?= preg_replace('/[^0-9]/', '', $field) ?>" class="link-tel"> <img src="<?= get_stylesheet_directory_uri() ?>/images/icons/phone-call-blue.svg" alt="" /><?= $field ?></a>
            </div>
          <?php endif ?>
          
        </nav>

        <?php if ($field = get_field('button_header', 'option')): ?>
          <div class="d-none d-lg-block">
            <a href="<?= $field['url'] ?>" class="btn btn-primary btn-sm"<?php if($field['target']) echo ' target="_blank"' ?>><img src="<?= get_stylesheet_directory_uri() ?>/images/icons/phone-call.svg" alt="" /><?= $field['title'] ?></a>
          </div>
        <?php endif ?>
        
        <button class="navbar-toggler"><span class="navbar-toggler-icon"></span></button>
      </div>
    </header>

    <main class="content">