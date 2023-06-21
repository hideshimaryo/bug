<?php get_header(); ?>
    <main>
      <div class="clothes_bg page-top-view">
        <p class="page-title">古着販売</p>
      </div>
      <div class="Breadcrumb" typeof="BreadcrumbList" vocab="//schema.org/">
    <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
</div>

      <div class="page-cont section-padding">
        <ul>
        <li class="clothes page-box wow animated fadeIn" data-wow-duration="2s">
          <h2 class="page-heading">
            フルコーディ<br class="mobile_br">ネート提案します
          </h2>
          <img src="<?php echo get_theme_file_uri('images/service_clothes.svg'); ?>" alt="" class="page-image">
          <p>
            40年代、50年代のミリタリー物から、バイクに乗る時にどんな格好をしていいかわからないライト層のコーデとして基本的なライン、長く愛されているシルエットとして「カーハート」「ディッキーズ」「ショット」「リーバイス501.505.517.646」「LEE102」「Drマーチン」などオーソドックスの中でも玄人が唸るようなレア色やレア素材などを取り揃えています。
            </p>
        </li>

      </ul>
      </div>
    </main>
    <?php get_footer(); ?>