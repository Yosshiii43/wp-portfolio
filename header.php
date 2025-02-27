<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="description" content="<?php bloginfo( 'description' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Zen+Maru+Gothic:wght@300;400;500;700&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>
<body <?php body_class( 'c-body' ); ?> >
  
    <?php wp_body_open(); ?>

    <header class="l-header p-header" id="header">
        <p class="p-header__title">
            <a href="<?php echo esc_url( home_url() ); ?> " tabindex="0">
                <img src="<?php echo esc_url(get_theme_file_uri()); ?>/img/header__title.png" alt="<?php bloginfo( 'name' ) ?>" width="116px" height="57px">
            </a>
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
