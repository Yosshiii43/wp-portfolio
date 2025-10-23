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
  //add_theme_support( "custom-header", $array );
  register_nav_menus( array(
    'main_nav' => 'main-nav',
     ));
}
add_action('after_setup_theme', 'portfolio_theme_setup');



////メニュー出力関連////
// カスタムリンクのURLを動的に生成する関数
function get_home_url_with_section($section) {
  return esc_url(home_url('/#' . $section));
}
//liタグにclass追加
function add_menu_item_classes($classes, $item, $args) {
  if ($args->theme_location == 'main_nav') {
      $classes[] = 'p-gmenu__item';
  }
  return $classes;
}
add_filter('nav_menu_css_class', 'add_menu_item_classes', 10, 3);



function portfolio_add_files(){
  
  // jQueryの読み込み(3.7.1を指定して読み込み)
  wp_enqueue_script(
    'portfolio-jquery-3.7.1',
    get_template_directory_uri() . '/js/jquery-3.7.1.min.js',
    array(),
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
    array('portfolio-jquery-3.7.1', 'portfolio-slick'),
    null,
    true
  );

  // リセットCSS読み込み
  wp_enqueue_style(
    'portfolio-destyle',
    get_template_directory_uri() . '/css/destyle.css',
    array(),
    '1.0.15'
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

//Google Fonts読み込み（クロスオリジン対応）
function portfolio_add_google_fonts() {
  echo "\n";
  echo '<link rel="preconnect" href="https://fonts.googleapis.com">' . "\n";
  echo '<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>' . "\n";
  echo '<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300&family=Zen+Maru+Gothic:wght@300;400&display=swap" rel="stylesheet">' . "\n";
}
add_action('wp_head', 'portfolio_add_google_fonts');

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

// ブロックパターンの登録サンプル
function theme_register_block_patterns() {
  register_block_pattern(
    'your-theme/hero-section',
    [
      'title'    => __('ヒーローセクション', 'portfolio'),
      'content'  => '<!-- WP Block Pattern Code here -->
        <div class="wp-block-group hero-section">
          <h1>タイトル</h1>
          <p>説明文</p>
          <div class="wp-block-buttons">
            <div class="wp-block-button">
              <a href="#" class="wp-block-button__link">ボタン</a>
            </div>
          </div>
        </div>
      ',
      'category' => 'layout',
    ]
);
}
add_action('init', 'theme_register_block_patterns');


////ウィジェットエリアの登録////
function theme_slug_widgets_init() {
  register_sidebar( array(
      'name'          => __( 'Sidebar', 'portfolio' ),
      'id'            => 'sidebar-1',
      'description'   => __( 'サイドバーに表示するウィジェットを追加します。', 'portfolio' ),
      'before_widget' => '<section id="%1$s" class="widget %2$s">',
      'after_widget'  => '</section>',
      'before_title'  => '<h2 class="widget-title">',
      'after_title'   => '</h2>',
  ) );
}
add_action( 'widgets_init', 'theme_slug_widgets_init' );


/*********************
OGPタグ/Twitterカード設定を出力
*********************/
function my_meta_ogp() {
  if( is_front_page() || is_home() || is_singular() ){
    global $post;
    $ogp_title = '';
    $ogp_descr = '';
    $ogp_url = '';
    $ogp_img = '';
    $insert = '';

    if( is_singular() ) { //記事＆固定ページ
       setup_postdata($post);
       $ogp_title = $post->post_title;
       $ogp_descr = mb_substr(get_the_excerpt(), 0, 100);
       $ogp_url = get_permalink();
       wp_reset_postdata();
    } elseif ( is_front_page() || is_home() ) { //トップページ
       $ogp_title = get_bloginfo('name');
       $ogp_descr = get_bloginfo('description');
       $ogp_url = home_url();
    }

    //og:type
    $ogp_type = ( is_front_page() || is_home() ) ? 'website' : 'article';

    //og:image
    if ( is_singular() && has_post_thumbnail() ) {
       $ps_thumb = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full');
       $ogp_img = $ps_thumb[0];
    } else {
     $ogp_img = 'https://yosshiii.site/wp-content/themes/portfolio/img/ogp.png';
    }

    //出力するOGPタグをまとめる
    $insert .= '<meta property="og:title" content="'.esc_attr($ogp_title).'" />' . "\n";
    $insert .= '<meta property="og:description" content="'.esc_attr($ogp_descr).'" />' . "\n";
    $insert .= '<meta property="og:type" content="'.$ogp_type.'" />' . "\n";
    $insert .= '<meta property="og:url" content="'.esc_url($ogp_url).'" />' . "\n";
    $insert .= '<meta property="og:image" content="'.esc_url($ogp_img).'" />' . "\n";
    $insert .= '<meta property="og:site_name" content="'.esc_attr(get_bloginfo('name')).'" />' . "\n";
    $insert .= '<meta name="twitter:card" content="summary_large_image" />' . "\n";
    $insert .= '<meta name="twitter:site" content="@y_weblab" />' . "\n";
    $insert .= '<meta property="og:locale" content="ja_JP" />' . "\n";

    echo $insert;
  }
} //END my_meta_ogp

add_action('wp_head','my_meta_ogp');//headにOGPを出力