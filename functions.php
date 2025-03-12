<?php
function portfolio_theme_setup() {
  // テーマサポート
  add_theme_support( 'title-tag' );
  add_theme_support( 'post-thumbnails' );
  add_theme_support( 'automatic-feed-links' );
  add_theme_support( "wp-block-styles" ) ;
  add_theme_support( 'responsive-embeds' );
  add_theme_support('html5',array(
    'search-form',
    'comment-form',
    'comment-list',
    'gallery',
    'caption',
  ));
  add_theme_support( 'custom-logo',array(
    'width'       => 116,
    'height'      => 57,
    'flex-height' => true,
    'flex-width'  => true,
    'header-text' => array( 'site-title' ),
  ));
  add_theme_support( 'custom-background' );
  add_theme_support( 'align-wide' );
  add_theme_support( 'editor-styles' );
  add_editor_style( array( '/css/editor-style.css' ) );
  add_theme_support( "custom-header", $array );

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
    '0.4.0',
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
    get_template_directory_uri() . '/css/destyle.css',
    array(),
    '1.0.15'
  );

  // animate.min.css(3.7.2)読み込み（ランダムレタリング）
  wp_enqueue_style(
    'portfolio-animate',
    get_template_directory_uri() . '/css/animate.min.css',
    array(),
    '3.7.2'    
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


////コメント返信スクリプトを条件付きで読み込むための関数(ThemeCheckの推奨事項対応のため)////
function enqueue_comment_reply_script() {
  if (is_single() && comments_open() && get_option('thread_comments')) {
      wp_enqueue_script('comment-reply');
  }
}
add_action('wp_enqueue_scripts', 'enqueue_comment_reply_script');


////ThemeCheck対応のダミー////
  //「アバター機能をサポートしていないようです。」対応のためのダミー////
  function dummy_avatar_support() {
      return get_avatar('', 60);
  }

  // ダミーのwp_list_comments関数
  function dummy_wp_list_comments() {
    return '';
  }

  // ダミーのcomments_template関数
  function dummy_comments_template() {
    return '';
  }

  // ダミーのcomment_form関数
  function dummy_comment_form() {
    return '';
  }

  // ダミーのpaginate_comments_links関数
  function dummy_paginate_comments_links() {
    return '';
  }

  // ダミーのthe_posts_pagination関数
  function dummy_the_posts_pagination() {
    return '';
  }

////Works詳細ページ用ページネーション////
  function custom_post_navigation() {
    // 現在の投稿を取得
    $current_post = get_post();
    
    // worksを取得（カスタムフィールドの表示順で）
    $args = array(
      'post_type' => 'works',
      'posts_per_page' => -1,
      'meta_key' => 'display_order',
      'orderby' => 'meta_value_num',
      'order' => 'ASC'
    );
    
    $query = new WP_Query($args);
    
    if ($query->have_posts()) {
      $posts = $query->posts;
      $current_index = -1;
      
      // 現在の投稿のインデックスを見つける
      foreach ($posts as $index => $post) {
        if ($post->ID === $current_post->ID) {
          $current_index = $index;
          break;
        }
      }
      
      // 前後の投稿を取得
      $prev_post = ($current_index > 0) ? $posts[$current_index - 1] : null;
      $next_post = ($current_index < count($posts) - 1) ? $posts[$current_index + 1] : null;        
      // ナビゲーションを出力
      echo '<ul class="c-navLinks">';
        echo '<li class="c-navLinks__prev">';
        if ($prev_post) {
          echo '<a href="' . get_permalink($prev_post->ID) . '">前の制作実績</a>';
        }
        echo '</li>';
        echo '<li class="c-navLinks__next">';
        if ($next_post) {
          echo '<a href="' . get_permalink($next_post->ID) . '">次の制作実績</a>';
        }
        echo '</li>';
      echo '</ul>';
    }
  
  wp_reset_postdata();
}


////カスタムスタイルの登録////
function theme_register_block_styles() {
  // カスタムボタンスタイル
  register_block_style(
      'core/button',
      [
          'name'  => 'custom-button',
          'label' => __('カスタムボタン', 'portfolio'),
      ]
  );
  register_block_style(
  'core/button',
  [
    'name'  => 'custom-outline-button',
    'label' => __('カスタムアウトラインボタン', 'portfolio'),
  ]
  );
}
add_action('init', 'theme_register_block_styles');