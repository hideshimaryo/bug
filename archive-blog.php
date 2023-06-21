<?php get_header(); ?>
    <main>
      <div class="blog-archive_bg page-top-view">
        <p class="page-title">ブログ一覧</p>
      </div>
      <div class="Breadcrumb" typeof="BreadcrumbList" vocab="//schema.org/">
    <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
</div>

      <div class="page-cont section-padding blog-archive-padding ">
        <div class="blog-archive_inner">
        <ul class="blog-list">
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>
          
          <li class="blog-card wow animated fadeIn" data-wow-duration="2s">
            <?php if ( has_post_thumbnail() ) : ?>
              <?php the_post_thumbnail( 'thumbnail', array( 'class' => 'blog-image' ) ); ?>
      <?php else : ?>
        <img class="blog-image" src="<?php echo get_template_directory_uri() . '/images/bike.jpg'; ?>" alt="ダミー画像">
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
          <?php endwhile; endif; ?>
          
        </ul>
        <div class="navigation pagenation">
            <?php if(function_exists('wp_pagenavi')): ?>
                <?php wp_pagenavi(); ?>
                <?php else: ?>
                    <?php endif; ?>
        </div>
      </div>
      </div>
    </main>
    <?php get_footer(); ?>