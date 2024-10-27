<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/destyle.css@1.0.15/destyle.css" >
    <script>
        (function(d) {
          var config = {
            kitId: 'hff0ssr',
            scriptTimeout: 3000,
            async: true
          },
          h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
        })(document);
      </script><!--Adobe Fontsより筑紫A丸ゴシック(現在400のみにしている)-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.css"><!--メインビジュアル内アニメーション用-->
    <link rel="stylesheet" type="text/css" href="<?php echo esc_url(get_theme_file_uri()); ?>/js/slick-1.8.1/slick/slick.css"><!--スライダー(slick)用-->
    <link rel="stylesheet" type="text/css" href="<?php echo esc_url(get_theme_file_uri()); ?>/js/slick-1.8.1/slick/slick-theme.css"><!--スライダー(slick)用-->
    <link rel="stylesheet" href="<?php echo esc_url(get_theme_file_uri()); ?>/css/style.css">
    <title>Yoshino’s Portfolio Site</title>
</head>
<body class="home c-body">
    <div class="p-loadingOverlay">
        <div class="p-loader"></div>
    </div>
    <header class="l-header p-header" id="header">
        <p class="p-header__title">
            <a href="#">
                <img src="<?php echo esc_url(get_theme_file_uri()); ?>/img/header__title.png" alt="Yoshino's portfolio site" width="116px" height="57px">
            </a>
        </p>
        <div class="p-header__menu">
            <button class="p-hamburger js-hamburger">
                <span>menuボタン</span>
            </button>
            <ul class="p-gmenu c-font--nunito200">
                <li class="p-gmenu__item"><a href="#service">Service</a></li>
                <li class="p-gmenu__item"><a href="#works">Works</a></li>
                <li class="p-gmenu__item"><a href="#about">About</a></li>
                <li class="p-gmenu__item"><a href="#flow">Flow</a></li>
                <li class="p-gmenu__item"><a href="#contact">Contact</a></li>
            </ul>
        </div>
    </header>
