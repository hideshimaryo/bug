<?php
function my_setup()
{
 add_theme_support('post-thumbnails'); 
 add_theme_support('automatic-feed-links'); 
 add_theme_support('title-tag'); 
 add_theme_support(
   'html5',
   array( 
     'search-form',
     'comment-form',
     'comment-list',
     'gallery',
     'caption',
   )
 );
}
add_action('after_setup_theme', 'my_setup');

// cssとjsなどを読み込ませるための記述
function my_script_init()
{
wp_enqueue_style('preconnect01', '//fonts.googleapis.com');
wp_enqueue_style('preconnect02', '//fonts.gstatic.com');
wp_enqueue_style('font01', '//fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap');
wp_enqueue_style('font02', '//fonts.googleapis.com/css2?family=Pacifico&family=Roboto:wght@700&display=swap');
wp_enqueue_style('my_css', get_template_directory_uri() . '/css/reset.css', );
wp_enqueue_script('main_js', get_template_directory_uri() . '/js/main.js', array( 'jquery' ), '1.0.0', false);
wp_enqueue_script('contact_js', get_template_directory_uri() . '/js/contact.js', array( 'jquery' ), '1.0.0', false);
wp_enqueue_style('reset_css', get_template_directory_uri() . '/css/style.css', array(), '1.0.0', 'all');
}
add_action('wp_enqueue_scripts', 'my_script_init');

// ヘッダー・フッター動的化
function my_menu_init()
{
register_nav_menus(
array(
'global' => 'ヘッダーメニュー',
'footer' => 'フッターメニュー',
)
);
}
add_action('init', 'my_menu_init');

// wp_nav_menuのliにclass追加
function add_additional_class_on_li($classes, $item, $args)
{
 if (isset($args->add_li_class)) {
   $classes['class'] = $args->add_li_class;
 }
 return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);

// wp_nav_menuのaにclass追加
function add_additional_class_on_a($classes, $item, $args)
{
 if (isset($args->add_li_class)) {
   $classes['class'] = $args->add_li_class;
 }
 return $classes;
}
add_filter('nav_menu_link_attributes', 'add_additional_class_on_a', 1, 3);

function create_custom_post_type() {
  // ブログ投稿タイプを作成
  register_post_type( 'blog',
      array(
          'labels' => array(
              'name' => __( 'ブログ' ),
              'singular_name' => __( 'ブログ' )
          ),
          'public' => true,
          'has_archive' => true,
          'supports' => array( 'title', 'editor', 'thumbnail' ), // アイキャッチ機能を有効にする
      )
  );

  // お知らせ投稿タイプを作成
  register_post_type( 'news',
      array(
          'labels' => array(
              'name' => __( 'お知らせ' ),
              'singular_name' => __( 'お知らせ' )
          ),
          'public' => true,
          'has_archive' => true,
          'supports' => array( 'title', 'editor', 'thumbnail' ), // アイキャッチ機能を有効にする
      )
  );
}
add_action( 'init', 'create_custom_post_type' );