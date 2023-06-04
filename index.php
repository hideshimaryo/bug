<?php get_header(); ?>
    <main>

    <div class="fv"></div>

    <!-- アバウトセクションーーーーーーーーーーーーーーーーーーーーーー -->
    <section class="about section-padding">
      <h2 class="section-title heading" data-en="about Bug">Bugについて</h2>
      <p>
        Bugの主軸は1970年代のビンテージハーレーの販売です。
        他にも国産車のTLシリーズやSRなどの古臭いけれども遊び心があった時代のバイクのものを大切にしていきたいと考えています。
      </p>
      <button class="button">
        <a href="#">詳しく見る</a>
      </button>
    </section>


    <!-- ニュースセクションーーーーーーーーーーーーーーーーーーー -->
    <section class="news section-padding">
      <div class="inner">
        <h2 class="section-title heading" data-en="news">お知らせ</h2>
     
      <ul class="news-list">
        <?php
        $args = array(
           'post_type' => 'news',
           'posts_per_page' => 3,
        );
        $_query = new WP_Query( $args );
        if ( $_query->have_posts() ): while ( $_query->have_posts() ): $_query->the_post(); ?>
        <li class="item">
            <a href="#">
                <p class="date"><?php the_time('Y/m/d'); ?></p>
                <p class="category"><span>お知らせ</span></p>
                <p class="title"><?php the_title(); ?></p>
            </a>
        </li>
        <?php endwhile; endif; wp_reset_postdata(); ?>

    </ul>

    <button class="button">
      <a href="/archive_news.html">一覧を見る</a>
    </button>
  </div>
    </section>

    <!-- サービスセクションーーーーーー -->
    <section class="service section-padding">
      <div class="inner">
        <h2 class="section-title heading" data-en="service">サービス</h2>
      <ul class="service-list">
        <li class="service-item"><a href="#">
          <img src="<?php echo get_theme_file_uri( 'images/bike.jpg' ); ?>" alt="">
          <div class="text-overlay">
            <p>バイク販売</p>
          </div>
        </a></li>
        <li class="service-item"><a href="#">
          <img src="<?php echo get_theme_file_uri( 'images/koubou.jpg' ); ?>" alt="">
          <div class="text-overlay">
            <p>革工房</p>
          </div>
        </a></li>
        <li class="service-item"><a href="#">
          <img src="<?php echo get_theme_file_uri( 'images/zakka.jpg' ); ?>" alt="">
          <div class="text-overlay">
            <p>雑貨販売</p>
          </div>
        </a></li>
        <li class="service-item"><a href="#">
          <img src="<?php echo get_theme_file_uri( 'images/hurugi.jpg' ); ?>" alt="">
          <div class="text-overlay">
            <p>古着販売</p>
          </div>
        </a></li>
      </ul>

      <button class="button">
        <a href="#">一覧を見る</a>
      </button>
    </div>
    </section>

    <!-- ブログセクションーーーーー -->
    <section class="blog section-padding">
      <div class="inner">
        <h2 class="section-title heading" data-en="blog">ブログ</h2>
        <ul class="blog-list">
          
<?php
$args = array(
   'post_type' => 'blog',
   'posts_per_page' => 3,
);
$blog_query = new WP_Query( $args );
if ( $blog_query->have_posts() ): while ( $blog_query->have_posts() ): $blog_query->the_post(); ?>
<li class="blog-card">
            <?php the_post_thumbnail('medium'); ?>
            <div class="blog-content">
              <h2 class="blog-date"><?php the_time('Y/m/d'); ?></h2>
              <p class="blog-text"><?php the_title(); ?>
              </p>
              <div class="button-container">
                <a href="<?php the_permalink(); ?>" class="button">詳しく見る</a>
              </div>
            </div>
          </li>
<?php endwhile; endif; wp_reset_postdata(); ?>
        </ul>
        <button class="button">
          <a href="#">ブログ一覧を見る</a>
        </button>
      </div>
    </section>
  </main>
  <?php get_footer(); ?>