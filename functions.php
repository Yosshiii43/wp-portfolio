<?php
function portfolio_theme_setup() {
  // テーマサポート
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'portfolio_theme_setup');


function portfolio_add_files(){
  // jQueryの読み込み(3.7.1を指定して読み込み)
  wp_enqueue_script(
    'portfolio-jquery-3.7.1',
    get_template_directory_uri() . '/js/jquery-3.7.1.min.js',
    array(),
    null,
    true
  );

  // textillate.min.js(0.4.0)の読み込み（ランダムレタリング）
  wp_enqueue_script(
    'portfolio-textillate',
    get_template_directory_uri() . '/js/jquery.textillate.min.js',
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

  // Google Fontsのpreconnectを追加
  wp_enqueue_style(
    'google-fonts-preconnect-googleapis',
    'https://fonts.googleapis.com', 
    array(), 
    null
  );
  wp_enqueue_style(
    'google-fonts-preconnect-gstatic',
    'https://fonts.gstatic.com', 
    array(), 
    null
  );

  // Google FontsからNunito読み込み
  wp_enqueue_style(
    'portfolio-nunito',
    'https://fonts.googleapis.com/css2?family=Nunito:wght@200&display=swap',
    array(),
    null
  );

  // Google FontsからZenMaruGothic読み込み
  wp_enqueue_style(
    'portfolio-zenmarugothic',
    'https://fonts.googleapis.com/css2?family=Zen+Maru+Gothic:wght@300&display=swap',
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

  // animate.min.css(3.7.2)読み込み（ランダムレタリング）
  wp_enqueue_style(
    'portfolio-animate',
    get_template_directory_uri() . '/css/animate.min.css',
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


// 制作実績投稿タイプのスラッグメタボックスを非表示にする
function hide_slug_meta_box() {
  remove_meta_box('slugdiv', 'works', 'normal'); 
}
add_action('add_meta_boxes', 'hide_slug_meta_box');


////タイトル出力////
function portfolio_title( $title ){
  if(is_front_page() || is_home()){//トップページなら
    $title = get_bloginfo('name','display'). ' | ' .get_bloginfo('description','display');
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


//コンタクトフォーム7のtabindex追加
add_filter('wpcf7_form_elements', 'add_tabindex_to_form_elements');
function add_tabindex_to_form_elements($form) {
  $form = str_replace(
    array(
      '<input ', 
      '<textarea ',
      '<select '
    ),
    array(
      '<input tabindex="0" ', 
      '<textarea tabindex="0" ',
      '<select tabindex="0" '
    ),
    $form
  );
  return $form;
}