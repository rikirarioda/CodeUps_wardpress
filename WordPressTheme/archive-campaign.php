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

    
    <?php 
    // タクソノミーと投稿が存在するか確認
    $terms = get_terms([
      'taxonomy' => 'campaign_category',
      'hide_empty' => true,
    ]);
    $has_posts = have_posts(); // 投稿が存在するか確認
    ?>

    <?php if ((!empty($terms) && !is_wp_error($terms)) || $has_posts): // タクソノミーまたは投稿がある場合に表示 ?>
      <div class="page-campaign layout-page-campaign">
        <div class="page-campaign__inner inner fish-image">
          <div class="page-campaign__category-button category-button">
            <div class="category-button__list">
              <!-- ALLタブ -->
              <a class="category-button__tab js-tab-button is-active" href="<?php echo get_post_type_archive_link('campaign'); ?>">ALL</a>

              <!-- 他のタクソノミー -->
              <?php if (!empty($terms) && !is_wp_error($terms)): ?>
                <?php foreach ($terms as $term): ?>
                  <a 
                    class="category-button__tab <?php if (is_tax('campaign_category', $term->slug)) echo 'is-active'; ?>" 
                    href="<?php echo esc_url(get_term_link($term)); ?>">
                    <?php echo esc_html($term->name); ?>
                  </a>
                <?php endforeach; ?>
              <?php endif; ?>
            </div>

            <ul class="page-campaign__contents campaign-cards">
            <!-- ループ -->
            <?php if (have_posts()): ?>
              <?php while (have_posts()): the_post(); ?>
                <li class="page-campaign__content campaign-card js-tab-content">
                  <!-- アイキャッチ画像 -->
                  <?php if (has_post_thumbnail()): ?>
                    <div class="campaign__card-img">
                      <img src="<?php echo esc_url(get_the_post_thumbnail_url(null, 'full')); ?>" alt="<?php echo esc_attr(get_the_title()); ?>のアイキャッチ画像">
                    </div>
                  <?php endif; ?>

                  <div class="campaign__card-body campaign__card-body--page">
                    <!-- タクソノミー情報とタイトル -->
                    <?php
                    $terms = get_the_terms(get_the_ID(), 'campaign_category');
                    $term_name = (!empty($terms) && !is_wp_error($terms)) ? $terms[0]->name : null;
                    ?>
                    <?php if ($term_name || get_the_title()): ?>
                      <div class="campaign__card-meta campaign__card-meta--page">
                        <?php if ($term_name): ?>
                          <p class="campaign__card-tag"><?php echo esc_html($term_name); ?></p>
                        <?php endif; ?>
                        <?php if (get_the_title()): ?>
                          <p class="campaign__card-category campaign__card-category--page"><?php the_title(); ?></p>
                        <?php endif; ?>
                      </div>
                    <?php endif; ?>

                    <!-- 価格情報 -->
                    <?php
                    $campaign_6 = get_field('campaign_6'); // 価格情報のグループ
                    $original_price = $campaign_6['campaign_1'] ?? null; // 通常価格
                    $discounted_price = $campaign_6['campaign_2'] ?? null; // 割引価格
                    ?>
                    <?php if ($original_price || $discounted_price): ?>
                      <div class="campaign__card-price--body">
                        <?php if ($original_price): ?>
                          <span class="campaign__card-original--price">
                            &yen;<?php echo esc_html(number_format($original_price)); ?>
                          </span>
                        <?php endif; ?>
                        <?php if ($discounted_price): ?>
                          <span class="campaign__card-discounted--price">
                            &yen;<?php echo esc_html(number_format($discounted_price)); ?>
                          </span>
                        <?php endif; ?>
                      </div>
                    <?php endif; ?>

                    <!-- 詳細情報 -->
                    <?php if (get_field('campaign_3')): ?>
                      <div class="campaign__card-text u-desktop">
                        <?php the_field('campaign_3'); ?>
                      </div>
                    <?php endif; ?>

                    <!-- 日付情報 -->
                    <?php
                    $campaign_4 = get_field('campaign_4'); // 日付情報のグループ
                    $campaign_5_value = $campaign_4['campaign_5'] ?? null; // 開始日
                    $campaign_7_value = $campaign_4['campaign_7'] ?? null; // 終了日
                    ?>
                    <?php if ($campaign_5_value || $campaign_7_value): ?>
                      <div class="campaign__card-date u-desktop">
                        <span class="campaign__card-date-range">
                          <?php echo esc_html($campaign_5_value) . ' ‐ ' . esc_html($campaign_7_value); ?>
                        </span>
                      </div>
                    <?php endif; ?>

                    <!-- お問い合わせ情報 -->
                    <div class="campaign__card-contact u-desktop">ご予約・お問い合わせはコチラ</div>

                    <!-- ボタン -->
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

          <!-- WP-PageNavi -->
          <nav class="page-campaign__pagination pagination">
            <?php if (function_exists('wp_pagenavi')): ?>
              <?php wp_pagenavi(); ?>
            <?php endif; ?>

          </nav>
        </div>
      </div>
    <?php endif; // セクション表示条件終了 ?>


<?php get_footer(); ?>