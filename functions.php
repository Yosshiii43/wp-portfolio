<?php
function portfolio_theme_setup(){
//テーマサポート
    add_theme_support('title-tag');
}
add_action( 'after_setup_theme', 'portfolio_theme_setup' );


function portfolio_add_files(){
    // jQueryの読み込み(3.7.1を指定して読み込み)
    wp_enqueue_script(
        'portfolio-jquery-3.7.1',
        'https://code.jquery.com/jquery-3.7.1.min.js',
        array(),
        null,
        true
    );

    // textillate.jsの読み込み（ランダムレタリング）
    wp_enqueue_script(
        'portfolio-textillate',
        'https://cdnjs.cloudflare.com/ajax/libs/textillate/0.4.0/jquery.textillate.min.js',
        array('portfolio-jquery-3.7.1'),
        null,
        true
    );

    // lettering.jsの読み込み（ランダムレタリング）
    wp_enqueue_script(
        'portfolio-lettering',
        get_template_directory_uri() . '/js/jquery.lettering.js',
        array('portfolio-jquery-3.7.1'),
        null,
        true
    );

    // slick.jsの読み込み（スライダー）
    wp_enqueue_script(
        'portfolio-slick',
        get_template_directory_uri() . '/js/slick-1.8.1/slick/slick.js',
        array('portfolio-jquery-3.7.1'),
        null,
        true
    );

    // メインスクリプトの読み込み
    wp_enqueue_script(
        'portfolio-main',
        get_template_directory_uri() . '/js/main.js',
        array('portfolio-jquery-3.7.1', 'portfolio-textillate', 'portfolio-lettering', 'portfolio-slick'),
        null,
        true
    );

    // Google FontsからNunito読み込み
    wp_enqueue_style(
        'portfolio-nunito',
        'https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap',
        array(),
        null
    );

    // リセットCSS読み込み
    wp_enqueue_style(
        'portfolio-destyle',
        'https://cdn.jsdelivr.net/npm/destyle.css@1.0.15/destyle.css',
        array(),
        null
    );

    // ランダムレタリング用animate.css読み込み
    wp_enqueue_style(
        'portfolio-animate',
        'https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.css',
        array(),
        null       
    );

    // slick.css読み込み
    wp_enqueue_style(
        'portfolio-slick-style',
        get_template_directory_uri() . '/js/slick-1.8.1/slick/slick.css',
        array(),
        null
    );

    // slick-theme.css読み込み
    wp_enqueue_style(
        'portfolio-slick-theme-style',
        get_template_directory_uri() . '/js/slick-1.8.1/slick/slick-theme.css',
        array(),
        null
    );
    
    // portfolioテーマスタイルの読み込み
    wp_enqueue_style(
        'portfolio-theme-style',
        get_template_directory_uri() . '/css/style.css',
        array(),
        null
    );
}
add_action( 'wp_enqueue_scripts', 'portfolio_add_files');

function enqueue_custom_fonts() {
    // Adobe Fontsの読み込み
    wp_enqueue_script(
        'portfolio-adobe-fonts',
        'https://use.typekit.net/hff0ssr.js',
        array(),
        null,
        false
    );

    // Adobeフォントの設定
    wp_add_inline_script(
        'portfolio-adobe-fonts',
        '(function(d) {
            var config = {
              kitId: "hff0ssr",
              scriptTimeout: 3000,
              async: true
            },
            h = d.documentElement,
            t = setTimeout(function() {
              h.className = h.className.replace(/\bwf-loading\b/g, "") + " wf-inactive";
            }, config.scriptTimeout),
            tk = d.createElement("script"),
            f = false,
            s = d.getElementsByTagName("script")[0],
            a;
            h.className += " wf-loading";
            tk.src = "https://use.typekit.net/" + config.kitId + ".js";
            tk.async = true;
            tk.onload = tk.onreadystatechange = function() {
              a = this.readyState;
              if (f || a && a != "complete" && a != "loaded") return;
              f = true;
              clearTimeout(t);
              try {
                Typekit.load(config);
              } catch (e) {}
            };
            s.parentNode.insertBefore(tk, s);
        })(document);'
    );
}
add_action('wp_enqueue_scripts', 'enqueue_custom_fonts');

//タイトル出力(後で使用)
function portfolio_title( $title ){
    if(is_front_page() || is_home()){//トップページなら
        $title = get_bloginfo('name','display');
    } elseif(is_singular()){//シングルページなら
        $title = single_post_title('', false). ' | ' .get_bloginfo('name','display');
    }
    return $title;
}
add_filter('pre_get_document_title','portfolio_title');
//タイトル出力区切り線変更
function portfolio_title_separator($separator) {
    $separator = '|';
    return $separator;
  }
  add_filter('document_title_separator', 'portfolio_title_separator');