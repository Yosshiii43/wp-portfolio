<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="description" content="<?php bloginfo( 'description' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>
<body <?php body_class( 'c-body' ); ?> >
  
  <?php wp_body_open(); ?>

  <header class="l-header p-header" id="header">
    <p class="p-header__title">
      <?php the_custom_logo(); ?>
    </p>
    <div class="p-header__menu">
      <button class="p-hamburger js-hamburger" tabindex="0">
        <span>menuボタン</span>
      </button>
      <ul class="p-gmenu c-font--nunito200">
        <li class="p-gmenu__item"><a href="<?php echo esc_url( home_url('/#service') ); ?>" tabindex="0">Service</a></li>
        <li class="p-gmenu__item"><a href="<?php echo esc_url( home_url('/#works') ); ?>" tabindex="0">Works</a></li>
        <li class="p-gmenu__item"><a href="<?php echo esc_url( home_url('/#about') ); ?>" tabindex="0">About</a></li>
        <li class="p-gmenu__item"><a href="<?php echo esc_url( home_url('/#contact') ); ?>" tabindex="0">Contact</a></li>
      </ul>
    </div>
  </header>
