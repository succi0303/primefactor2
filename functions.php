<?php

// カスタムメニュー
register_nav_menus(array(
  'navigation' => 'ナビゲーションバー'
));

// ウィジェット
register_sidebar();

// WordPressのバージョン情報の出力を停止する
remove_action('wp_head', 'wp_generator');

// RSSフィードの情報を出力する
add_theme_support('automatic-feed-links');

// jQueryの設定を出力する
add_action('wp_head', 'myScript', 1);
function myScript() {
  wp_enqueue_script('jquery');
}

// アイキャッチ画像を有効にする
add_theme_support('post-thumbnails');
set_post_thumbnail_size(610, 400, true);

// 概要(抜粋)の省略記号を指定する
function my_excerpt_more($more) {
  return '...';
}
add_filter('excerpt_more', 'my_excerpt_more');

?>