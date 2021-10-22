<?php
function my_setup()
{
  add_theme_support('post-thumbnails'); // アイキャッチ画像を有効化
  add_theme_support('automatic-feed-links'); // 投稿とコメントのRSSフィードのリンクを有効化
  add_theme_support('title-tag'); // titleタグ自動生成
  add_theme_support('html5', array( //HTML5による出力
    'search-form',
    'comment-form',
    'comment-list',
    'gallery',
    'caption',
  ));
}
add_action('after_setup_theme', 'my_setup');


/* CSSとJavaScriptの読み込み */
function my_script_init()
  { // WordPressに含まれているjquery.jsを読み込まない
    wp_deregister_script('jquery');
    // jQueryの読み込み
    wp_enqueue_script( 'jquery', '//code.jquery.com/jquery-3.5.1.min.js', "", "1.0.1");
    wp_enqueue_script( 'main-js', get_template_directory_uri() . '/js/main.js', array( 'jquery' ), '1.0.1', true );
    wp_enqueue_style( 'style-css', get_template_directory_uri() . '/css/style.css', array(), '1.0.1' );
  }
  add_action('wp_enqueue_scripts', 'my_script_init');


function twpp_enqueue_styles()
{
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  wp_enqueue_style('reset-sheet', get_template_directory_uri() . "/css/reset.css");
}
add_action('wp_enqueue_scripts', 'twpp_enqueue_styles');

// カスタマイズ用の黒いバー↓
add_filter('show_admin_bar', '__return_false');


function twpp_enqueue_scripts()
{
  wp_enqueue_script(
    'main-js-sheet',
    get_template_directory_uri() . '/js/main.js',
    array(),
    false,
    true
  );
}
add_action('wp_enqueue_scripts', 'twpp_enqueue_scripts');

// ↓画像のwidth100%を指定するためのfunction
add_filter('image_send_to_editor', 'remove_image_attribute', 10);
add_filter('post_thumbnail_html', 'remove_image_attribute', 10);
function remove_image_attribute($html)
{
  $html = preg_replace('/(width|height)="\d*"\s/', '', $html);
  $html = preg_replace('/class=[\'"]([^\'"]+)[\'"]/i', ' ', $html);
  return $html;
}