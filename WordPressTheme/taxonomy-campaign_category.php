<?php get_header(); ?>

    <!-- メインビュー -->
    <div class="page-mv">
      <div class="page-mv__inner">
        <div class="page-mv__img">
          <picture>
            <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign-p-MV-sp.jpg" media="(max-width: 767px)">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign-p-MV.jpg" alt="海の中で泳いでいる黄色い魚２尾">
          </picture>
          <h1 class="page-mv__title">Campaign</h1>
        </div>
      </div>
    </div>


    <!-- パンくず -->
    <?php get_template_part('parts/breadcrumb') ?>


    <div class="page-campaign layout-page-campaign">
      <div class="page-campaign__inner inner fish-image">
				<div class="page-campaign__category-button category-button">
          <div class="category-button__list">
          <!-- ALLタブ -->
          <a class="category-button__tab <?php if (!is_tax('campaign_category')) echo 'is-active'; ?>" href="<?php echo get_post_type_archive_link('campaign'); ?>">ALL</a>




            <!-- 他のタクソノミー -->
            <?php
            $terms = get_terms([
              'taxonomy' => 'campaign_category', // タクソノミー名
              'hide_empty' => true,           // 投稿がないタームを非表示
            ]);

            if (!empty($terms) && !is_wp_error($terms)) {
              foreach ($terms as $term): ?>
                <a 
                  class="category-button__tab <?php if (is_tax('campaign_category', $term->slug)) echo 'is-active'; ?>" 
                  href="<?php echo esc_url(get_term_link($term)); ?>">
                  <?php echo esc_html($term->name); ?>
                </a>
              <?php endforeach;
            }
            ?>
          </div>
        </div>

        <ul class="page-campaign__contents campaign-cards">
            <!-- ループ -->
            <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
            <li class="page-campaign__content campaign-card js-tab-content">
              <div class="campaign__card-img">
                <?php if (has_post_thumbnail()): ?>
                  <img src="<?php echo esc_url(get_the_post_thumbnail_url(null, 'full')); ?>" alt="<?php echo esc_attr(get_the_title()); ?>のアイキャッチ画像">
                <?php endif; ?>
              </div>
              <div class="campaign__card-body campaign__card-body--page">
                <div class="campaign__card-meta campaign__card-meta--page">
                    <?php
                      // 現在の投稿に紐付けられたタクソノミー 'campaign_category' の取得
                      $terms = get_the_terms(get_the_ID(), 'campaign_category');
                      if (!empty($terms) && !is_wp_error($terms)) {
                        $term_name = $terms[0]->name;
                      } else {
                        $term_name = '未分類';
                      }
                      ?>
                    <p class="campaign__card-tag"><?php echo esc_html($term_name); ?></p>
                    <p class="campaign__card-category campaign__card-category--page"><?php the_title(); ?></p>
                </div>
                <div class="campaign__card-contents campaign__card-contents--page">
                  <p class="campaign__card-title">全部コミコミ(お一人様)</p>
                  <div class="campaign__card-price--body ">
                    <span class="campaign__card-original--price"><?php the_field('campaign_1') ?></span>
                    <span class="campaign__card-discounted--price"><?php the_field('campaign_2') ?></span>
                  </div>
                </div>
                <div class="campaign__card-text u-desktop">
                <?php the_field('campaign_3') ?>
                </div>
                <div class="campaign__card-date u-desktop"><?php the_field('campaign_4') ?></div>
                <div class="campaign__card-contact u-desktop">ご予約・お問い合わせはコチラ</div>
                <div class="campaign__card-button u-desktop">
                  <a href="<?php echo esc_url(get_permalink(get_page_by_path('contact'))); ?>" class="button">Contact us<span></span></a>
                </div>
              </div>
            </li>
            <?php endwhile; ?>
            <?php else: ?>
              <p>該当する投稿がありません。</p>
            <?php endif; ?>
            <!-- ループ終了 -->
          </ul>

      </div>
    </div>


<!-- WP-PageNavi -->
      <nav class="page-campaign__pagination pagination">
          <?php 
          if (function_exists('wp_pagenavi')) {
              wp_pagenavi(); 
          }
          ?>
      </nav>



<?php get_footer(); ?>
