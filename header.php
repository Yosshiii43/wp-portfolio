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
    <!--
    <div class="p-loadingOverlay">
        <div class="p-loader"></div>
    </div>
    -->
    <header class="l-header p-header" id="header">
        <p class="p-header__title">
            <a href="<?php echo esc_url( home_url() ); ?> ">
                <img src="<?php echo esc_url(get_theme_file_uri()); ?>/img/header__title.png" alt="<?php bloginfo( 'name' ) ?>" width="116px" height="57px">
            </a>
        </p>
        <div class="p-header__menu">
            <button class="p-hamburger js-hamburger">
                <span>menuボタン</span>
            </button>
            <ul class="p-gmenu c-font--nunito200">
                <li class="p-gmenu__item"><a href="<?php echo esc_url( home_url('/#service') ); ?>">Service</a></li>
                <li class="p-gmenu__item"><a href="<?php echo esc_url( home_url('/#works') ); ?>">Works</a></li>
                <li class="p-gmenu__item"><a href="<?php echo esc_url( home_url('/#about') ); ?>">About</a></li>
                <li class="p-gmenu__item"><a href="<?php echo esc_url( home_url('/#flow') ); ?>">Flow</a></li>
                <li class="p-gmenu__item"><a href="<?php echo esc_url( home_url('/#contact') ); ?>">Contact</a></li>
            </ul>
        </div>
    </header>
