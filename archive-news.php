<?php get_header(); ?>
    <main>
      <div class="archive_news_bg page-top-view">
        <p class="page-title">お知らせ</p>
      </div>
      <div class="Breadcrumb" typeof="BreadcrumbList" vocab="//schema.org/">
    <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
</div>

      <div class="page-cont section-padding">
          <ul class="news-list archive_news page-box">

          <?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>
          <li class="item wow animated fadeIn" data-wow-duration="1.5s">
                <a href="<?php the_permalink(); ?>">
                    <p class="date"><?php echo get_the_date(); ?></p>
                    <p class="category"><span class="<?php
                                $categories = get_the_category();
                                if (!empty($categories)) {
                                  echo esc_attr('category-' . $categories[0]->slug); // カテゴリスラッグをクラスに追加
                                }
                                ?>"><?php
                                $categories = get_the_category();
                                if (!empty($categories)) {
                                  echo esc_html($categories[0]->name); // 最初のカテゴリの名前を表示
                                }
                                ?></span></p>
                    <p class="title"><?php the_title(); ?></p>
                </a>
            </li>
          <?php endwhile; endif; ?>
            



           
        </ul>
        <div class="navigation">
            <?php if(function_exists('wp_pagenavi')): ?>
                <?php wp_pagenavi(); ?>
                <?php else: ?>
                    <?php endif; ?>
        </div>

      </div>
    </main>
   <?php get_footer(); ?>
