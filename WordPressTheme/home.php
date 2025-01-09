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
          <div class="page-blog__container page-blog__container--blog">
            <ul class="page-blog__cards blog-cards">
              <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
              <!-- ループ開始 -->
              <li class="blog-cards__card">
                <a href="<?php the_permalink(); ?>" class="blog-card">
                  <div class="blog-card__item-img">
                    <?php if (has_post_thumbnail()) : ?>
                      <img src="<?php echo esc_url(get_the_post_thumbnail_url(null, 'full')); ?>" alt="<?php echo esc_attr(get_the_title()); ?>">
                    <?php else : ?>
                      <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/no-image.jpg" alt="No Image">
                    <?php endif; ?>
                  </div>
                  <div class="blog-card__item-content">
                    <time class="blog-card__item-category"><?php echo get_the_date(); ?></time>
                    <p class="blog-card__item-title"><?php the_title(); ?></p>
                    <p class="blog-card__item-text">
                      <?php 
                      if (!empty(get_post_meta(get_the_ID(), 'custom_text_field', true))) {
                        // カスタムフィールドがある場合
                        echo esc_html(get_post_meta(get_the_ID(), 'custom_text_field', true));
                      } elseif (has_excerpt()) {
                        // 抜粋が設定されている場合
                        echo get_the_excerpt();
                      } else {
                        // 投稿の冒頭部分を切り取る
                        echo wp_trim_words(get_the_content(), 80, '...');
                      }
                      ?>
                    </p>
                  </div>
                </a>
              </li>
              <!-- ループ終了 -->
              <?php endwhile; endif; ?>
            </ul>

                    <!-- WP-PageNavi -->
              <nav class="page-campaign__pagination pagination">
                <?php 
                  if (function_exists('wp_pagenavi')) {
                    wp_pagenavi(); 
                  }
                ?>
              </nav>
          </div>


          <!-- アサイド -->
          <?php get_sidebar(); ?>
        </div>
      </div>
    </div>

<?php get_footer(); ?>