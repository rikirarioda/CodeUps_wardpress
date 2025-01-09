<?php get_header(); ?>

    <!-- メインビュー -->
    <div class="page-mv">
      <div class="page-mv__inner">
        <div class="page-mv__img">
          <picture>
            <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/blog-p-MV-sp.jpg" media="(max-width: 767px)">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/blog-p-MV.jpg" alt="海の中で泳いでいる黄色い魚２尾">
          </picture>
          <h1 class="page-mv__title">Blog</h1>
        </div>

      </div>
    </div>


    <!-- パンくず -->
    <?php get_template_part('parts/breadcrumb') ?>


    <!-- blog -->
    <div class="page-blog layout-page-blog">
      <div class="page-blog__inner inner fish-image">
        <div class="page-blog__wraps">
          <div class="page-blog__pagination-wrap">
          <!-- 投稿の日時を動的に表示 -->
          <time class="page-blog__category page-blog-detail"><?php echo get_the_date(); ?></time>

          <!-- 投稿のタイトルを動的に表示 -->
          <h1 class="page-blog-detail__title"><?php the_title(); ?></h1>

          <!-- 投稿のアイキャッチ画像を動的に表示 -->
          <div class="page-blog-detail__img">
            <?php if (has_post_thumbnail()) : ?>
              <img src="<?php echo esc_url(get_the_post_thumbnail_url(null, 'full')); ?>" alt="<?php echo esc_attr(get_the_title()); ?>">
            <?php else : ?>
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/no-image.jpg" alt="No Image">
            <?php endif; ?>
          </div>

          <!-- 投稿の本文を動的に表示 -->
          <div class="page-blog-detail__container">
            <?php the_content(); ?>
          </div>

          <!-- WP-PageNavi -->
          <nav class="page-blog-detail__pagination pagination">
            <div class="pagination pagination__sub">
            <?php previous_post_link('%link', '＜'); ?>
            <?php next_post_link('%link', '＞'); ?>
            </div>
          </nav>
        </div>

          <!-- アサイド -->
          <?php get_sidebar(); ?>
        </div>
      </div>
    </div>

<?php get_footer(); ?>