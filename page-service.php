<?php get_header(); ?>
    <main>
    
      <div class="service_bg page-top-view">
        <p class="page-title">サービス一覧</p>
      </div>
      <div class="Breadcrumb" typeof="BreadcrumbList" vocab="//schema.org/">
    <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
</div>

      <div class="page-cont section-padding">
        <div class="service-inner">
        <ul class="service_archive">
          <li class="page-service-item wow animated fadeIn" data-wow-duration="2s">
            <div class="service-text">
              <h2 class="service-heading">バイク販売</h2>
              <p>
                Bugはこれからバイクを乗りたいという人を応援していきたいと思っております。お客様一人ひとりの悩みや要望に寄り添って一緒にあなたに合ったバイクを探しましょう。
              </p>
              <div class="button-block">
              <button class="button"><a href="<?php echo esc_url(home_url('bike')); ?>">詳しく見る</a></button>
            </div>
            </div>
              <div class="page-service_img">
                <div class="page-service_img_bg page-buy-bike"></div>
              </div>
          </li>
          <li class="page-service-item wow animated fadeIn" data-wow-duration="2s">
            <div class="service-text">
              <h2 class="service-heading">革工房</h2>
              <p>
                Bugではバイク小物作成と共に、デザインフェスタへ参加するなど、日常生活でクスッとできるようなアイテムを作成している他、レザークラフトスクールも行っております。
              </p>
              <div class="button-block">
              <button class="button"><a href="<?php echo esc_url(home_url('lether')); ?>">詳しく見る</a></button>
            </div>
            </div>
              <div class="page-service_img">
                <div class="page-service_img_bg page-koubou"></div>
              </div>
          </li>
          <li class="page-service-item wow animated fadeIn" data-wow-duration="2s">
            <div class="service-text">
              <h2 class="service-heading">雑貨販売</h2>
              <p>
                当店では、バイク用品以外にも様々な雑貨を販売しております。ガレージ雑貨をメインに、レトロ雑貨やライトを集めています。
              </p>
              <div class="button-block">
              <button class="button"><a href="<?php echo esc_url(home_url('goods')); ?>">詳しく見る</a></button>
            </div>
            </div>
              <div class="page-service_img">
                <div class="page-service_img_bg page-zakka"></div>
              </div>
          </li>
          <li class="page-service-item wow animated fadeIn" data-wow-duration="2s">
            <div class="service-text">
              <h2 class="service-heading">古着販売</h2>
              <p>
                40年代、50年代のミリタリー物から、オーソドックスの中でも玄人が唸るようなレア色やレア素材などを取り揃えています。
              </p>
              <div class="button-block">
              <button class="button"><a href="<?php echo esc_url(home_url('clothes')); ?>">詳しく見る</a></button>
            </div>
            </div>
              <div class="page-service_img">
                <div class="page-service_img_bg page-hurugi"></div>
              </div>
          </li>
        </ul>
      </div>
      </div>


    </main>
    <?php get_footer(); ?>