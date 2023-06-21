<footer class="footer section-padding">
    <div class="footer-inner">
      <div class="footer-cont">
      <div class="footer-left">
      <div class="logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_theme_file_uri( 'images/logo.svg' ); ?>" alt="会社ロゴ"></a></div>
      <div class="sns-icon"><a href="//www.instagram.com/bug043/"><img src="<?php echo get_theme_file_uri( 'images/logos_instagram-icon.svg' ); ?>" alt="Instagramのアイコン"></a></div>
    </div>
    <div class="footer-right">
    
      <?php
         wp_nav_menu(
         //.header-listを置き換えて、PC用メニューを動的に表示する
         array(
         'depth' => 1,
         'theme_location' => 'footer', //グローバルメニューをここに表示すると指定
         'container' => 'false', //コンテナータグで囲むかの選択
         'menu_class' => 'footer-nav', //ulタグへのclass追加
         'add_li_class' => 'footer-nav-item', // liタグへclass追加
         )
         );
         ?>
    </div>
  </div>
    <small>©  Bug Co.Ltd. All rights reserved.</small>
    </div>
  </footer>
  <script>
new WOW().init();
</script>
  <?php wp_footer(); ?>
  
  </body>
</html>