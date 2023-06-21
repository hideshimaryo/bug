<?php get_header(); ?>
    <main>
      <div class="goods_bg page-top-view">
        <p class="page-title">雑貨販売</p>
      </div>
      <div class="Breadcrumb" typeof="BreadcrumbList" vocab="//schema.org/">
    <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
</div>

      <div class="page-cont section-padding">
        <ul>
        <li class="goods page-box wow animated fadeIn" data-wow-duration="2s">
          <h2 class="page-heading">
            懐かしの雑貨を<br class="mobile_br">集めています
          </h2>
          <img src="<?php echo get_theme_file_uri( 'images/service_goods.svg' ); ?>" alt="" class="page-image">
          <p>
            当店では、バイク用品以外にも様々な雑貨を販売しております。
            </p>
          <br>
          <p>
            ガレージ雑貨をメインに、レトロ雑貨やライトを集めています。７０〜８０年代ワッペン、ピンズ、おもちゃ、看板、アニトイなど。欲しいものがあればご相談ください。探せます！
          </p>
        </li>

      </ul>
      </div>
    </main>
    <?php get_footer(); ?>