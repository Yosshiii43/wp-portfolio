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
      <?php 
        if ( function_exists( 'the_custom_logo' ) ) {
          the_custom_logo();
        }
      ?>
    </p>
    <div class="p-header__menu">
      <button class="p-hamburger js-hamburger" tabindex="0">
        <span>menuボタン</span>
      </button>

      <?php
        wp_nav_menu([
          'theme_location' => 'main_nav',
          'menu_class'     => 'p-gmenu c-font--nunito200',
          'container'      => false,
          'items_wrap'     => '<ul class="%2$s">%3$s</ul>',
        ]);
      ?>
    </div>
  </header>
