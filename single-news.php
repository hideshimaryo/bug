<?php get_header(); ?>
    <main>
      <div class="blog_bg page-top-view">
        <p class="page-title">お知らせ</p>
      </div>
      <div class="Breadcrumb" typeof="BreadcrumbList" vocab="//schema.org/">
    <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
</div>

      <div class="page-cont section-padding">
        <ul>
        <li class="blog page-box wow animated fadeIn" data-wow-duration="2s">
          <p class="blog-date">
          <?php echo get_the_time('Y年m月d日'); ?>
          </p>
          <p class="blog-heading">
          <?php echo get_the_title(); ?>
          </p>
          <div class="eye-catch">
          <?php if ( has_post_thumbnail() ) : ?>
        <?php the_post_thumbnail('medium'); ?>
      <?php endif; ?>
          </div>
          <p class="blog-p">
           <?php
           the_content();
           ?>
          </p>
        </li>

      </ul>
      <div class="paginavi">
      <div class="prev"><?php previous_post_link('« %link', '前の記事へ'); ?></div>
<div class="next"><?php next_post_link('%link »', '次の記事へ'); ?></div>
</div>
      </div>
      
    </main>
   <?php get_footer(); ?>
