<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="css/reset.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Roboto:wght@700&display=swap" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.6.4.min.js" 
integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <script src="js/main.js"></script>
    
  <link rel="stylesheet" href="css/style.css">
  <?php wp_head(); ?>
</head>
  <body>
    <header class="header">
      <h1 class="site-title">
        <div class="img"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_theme_file_uri( 'images/logo.svg' ); ?>" alt=""></a></div>
      </h1>

      <div id="drawer_toggle">
        <span></span>
        <span></span>
        <span></span>
      </div>
      <nav id="global_nav">

        <?php
         wp_nav_menu(
         //.header-listを置き換えて、PC用メニューを動的に表示する
         array(
         'depth' => 1,
         'theme_location' => 'global', //グローバルメニューをここに表示すると指定
         'container' => 'false', //コンテナータグで囲むかの選択
         'menu_class' => 'nav-menu', //ulタグへのclass追加
         'add_li_class' => 'menu-list', // liタグへclass追加
         )
         );
         ?>

    </nav>
    </header>