<?php get_header(); ?>
    <main>
      <div class="lether_bg page-top-view">
        <p class="page-title">革工房</p>
      </div>
      <div class="Breadcrumb" typeof="BreadcrumbList" vocab="//schema.org/">
    <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
</div>

      <div class="page-cont section-padding">
        <ul>
        <li class="lether page-box wow animated fadeIn" data-wow-duration="2s">
          <h2 class="page-heading">
            あなただけの<br class="mobile_br">一品を製作します
          </h2>
          <img src="<?php echo get_theme_file_uri( 'images/service_lether.svg' ); ?>" alt="" class="page-image">
          <p>
            Bugではバイク小物作成と共に、デザインフェスタへ参加するなど、日常生活でクスッとできるようなアイテムを作成しております。他、レザークラフトスクールは一律で1h千円でおこなっています。
            </p>
          <br>
          <p>
            アパートで音が出るのが気になるので、専用の工房で集中したい方、まずは革で作って見たい方の体験教室もあります。
          </p>
          <table class="price-bord">
            <thead>
              <tr>
                <th>内容</th>
                <th>時間</th>
                <th>料金</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>キーホルダー作成体験 革染＆打刻、刻印</td>
                <td>1h</td>
                <td>1,000円</td>
              </tr>
              <tr>
                <td>三角両開きコインケース 打刻、刻印、レーザー刻印
                  <br>（お好きな柄をレーザーで焼きます）</td>
                <td>1h</td>
                <td>1,000円</td>
              </tr>
              <tr>
                <td>レザーポーチ お好きな革を選んでいただき、革切、打刻</td>
                <td>2h</td>
                <td>2,000円</td>
              </tr>
              <tr class="last">
                <td>蛇腹ポーチ お好きな革を選んでいただき、革切、打刻</td>
                <td>2.5h</td>
                <td>2,500円</td>
              </tr>
            </tbody>
          </table>


        </li>
      </ul>




      </div>
    </main>
    <?php get_footer(); ?>