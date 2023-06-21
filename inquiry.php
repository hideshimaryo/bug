<?php
/*
Template Name: お問い合わせ
*/
?>

<?php get_header(); ?>
    <main>
      <div class="page-contact_bg page-top-view">
        <p class="page-title">お問い合わせ</p>
      </div>
      <div class="Breadcrumb" typeof="BreadcrumbList" vocab="//schema.org/">
    <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
</div>

      <div class="page-cont section-padding">
        <ul>
        <li class="page-contact page-box page-contact_title wow animated fadeIn" data-wow-duration="2s">
          <h2 class="page-heading page-heading_contact">
            お問い合わせ
          </h2>
          <p>
            お問い合わせはこちらのフォームから受け付けております。
            </p>
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>
            <?php the_content(); ?>
            <?php endwhile; endif; ?>
            
        </li>

      </ul>
      </div>
    </main>
    <?php get_footer(); ?>