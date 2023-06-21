<?php get_header(); ?>
<main>

  <div class="fv wow animated fadeIn" data-wow-duration="3s"></div>

  <!-- アバウトセクションーーーーーーーーーーーーーーーーーーーーーー -->
  <section class="about section-padding wow fadeIn">
    <h2 class="section-title heading" data-en="about Bug">Bugについて</h2>
    <p>
      Bugの主軸は1970年代のビンテージハーレーの販売です。
      他にも国産車のTLシリーズやSRなどの古臭いけれども遊び心があった時代のバイクのものを大切にしていきたいと考えています。
    </p>
    <button class="button">
      <a href="<?php echo esc_url(home_url('aboutus')); ?>">詳しく見る</a>
    </button>
  </section>


  <!-- ニュースセクションーーーーーーーーーーーーーーーーーーー -->
  <section class="news section-padding wow animated fadeIn" data-wow-duration="2s">
    <div class="inner">
      <h2 class="section-title heading" data-en="news">お知らせ</h2>

      <ul class="news-list">
        <?php
        $args = array(
          'post_type' => 'news',
          'posts_per_page' => 3,
        );
        $_query = new WP_Query($args);
        if ($_query->have_posts()) : while ($_query->have_posts()) : $_query->the_post(); ?>
            <li class="item">
              <a href="<?php the_permalink(); ?>">
                <p class="date"><?php the_time('Y/m/d'); ?></p>
                <p class="category">
                  <span class="<?php
                                $categories = get_the_category();
                                if (!empty($categories)) {
                                  echo esc_attr('category-' . $categories[0]->slug); // カテゴリスラッグをクラスに追加
                                }
                                ?>"><?php
                                    $categories = get_the_category();
                                    if (!empty($categories)) {
                                      echo esc_html($categories[0]->name); // 最初のカテゴリの名前を表示
                                    }
                                    ?></span>
                </p>
                <p class="title"><?php the_title(); ?></p>
              </a>
            </li>
        <?php endwhile;
        endif;
        wp_reset_postdata(); ?>

      </ul>
      <button class="button">
        <a href="<?php bloginfo('url'); ?>/news">一覧を見る</a>
      </button>
    </div>
  </section>

  <!-- サービスセクションーーーーーー -->
  <section class="service section-padding wow animated fadeIn" data-wow-duration="2s">
    <div class="inner">
      <h2 class="section-title heading" data-en="service">サービス</h2>
      <ul class="service-list">
        <li class="service-item"><a href="<?php echo esc_url(home_url('bike')); ?>">
            <img src="<?php echo get_theme_file_uri('images/bike.jpg'); ?>" alt="">
            <div class="text-overlay">
              <p>バイク販売</p>
            </div>
          </a></li>
        <li class="service-item"><a href="<?php echo esc_url(home_url('lether')); ?>">
            <img src="<?php echo get_theme_file_uri('images/koubou.jpg'); ?>" alt="">
            <div class="text-overlay">
              <p>革工房</p>
            </div>
          </a></li>
        <li class="service-item"><a href="<?php echo esc_url(home_url('goods')); ?>">
            <img src="<?php echo get_theme_file_uri('images/zakka.jpg'); ?>" alt="">
            <div class="text-overlay">
              <p>雑貨販売</p>
            </div>
          </a></li>
        <li class="service-item"><a href="<?php echo esc_url(home_url('clothes')); ?>">
            <img src="<?php echo get_theme_file_uri('images/hurugi.jpg'); ?>" alt="">
            <div class="text-overlay">
              <p>古着販売</p>
            </div>
          </a></li>
      </ul>
      <button class="button">
        <a href="<?php echo esc_url(home_url('service')); ?>">一覧を見る</a>
      </button>
    </div>
  </section>

  <!-- ブログセクションーーーーー -->
  <section class="blog section-padding wow animated fadeIn" data-wow-duration="2s">
    <div class="inner">
      <h2 class="section-title heading" data-en="blog">ブログ</h2>
      <ul class="blog-list">

        <?php
        $args = array(
          'post_type' => 'blog',
          'posts_per_page' => 3,
        );
        $blog_query = new WP_Query($args);
        if ($blog_query->have_posts()) : while ($blog_query->have_posts()) : $blog_query->the_post(); ?>
            <li class="blog-card">
            <?php if ( has_post_thumbnail() ) : ?>
        <?php the_post_thumbnail('thumbnail'); ?>
      <?php else : ?>
        <img class="blog-image" src="<?php echo get_template_directory_uri() . '/images/mobile_archive_news.jpg'; ?>" alt="ダミー画像">
      <?php endif; ?>
              <div class="blog-content">
                <h2 class="blog-date"><?php the_time('Y/m/d'); ?></h2>
                <p class="blog-text"><?php the_title(); ?>
                </p>
                <div class="button-container">
                  <a href="<?php the_permalink(); ?>" class="button">詳しく見る</a>
                </div>
              </div>
            </li>
        <?php endwhile;
        endif;
        wp_reset_postdata(); ?>
      </ul>
      <button class="button">
        <a href="<?php echo get_post_type_archive_link('blog'); ?>">ブログ一覧を見る</a>
      </button>
    </div>
  </section>
</main>
<?php get_footer(); ?>

