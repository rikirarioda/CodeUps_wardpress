
    <!-- 人気記事 -->
          <aside class="article">
            <div class="article__content">
              <div class="article__wrap label">
                <div class="label__title">
                  <h2>人気記事</h2>
                </div>
              </div>
              <div class="article__reviews">
                <ul class="article-cards">
                  <?php
                  // 最新3件の投稿を取得
                  $args = [
                    'posts_per_page' => 3,       // 表示件数を3件に制限
                  ];
                  $popular_posts = new WP_Query($args);

                  if ($popular_posts->have_posts()) :
                    while ($popular_posts->have_posts()) : $popular_posts->the_post();
                  ?>
                    <li class="article-cards__card article-card">
                      <a href="<?php the_permalink(); ?>" class="article-card__link">
                        <div class="article-card__list">
                          <div class="article-card__img">
                            <?php if (has_post_thumbnail()) : ?>
                              <img src="<?php echo esc_url(get_the_post_thumbnail_url(null, 'medium')); ?>" alt="<?php echo esc_attr(get_the_title()); ?>">
                            <?php else : ?>
                              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/no-image.jpg" alt="No Image">
                            <?php endif; ?>
                          </div>
                          <div class="article-card__content">
                            <time class="article-card__category" datetime="<?php echo get_the_date('c'); ?>"><?php echo get_the_date(); ?></time>
                            <p class="article-card__title"><?php the_title(); ?></p>
                          </div>
                        </div>
                      </a>
                    </li>
                  <?php
                    endwhile;
                    wp_reset_postdata();
                  else :
                  ?>
                    <p>人気記事がありません。</p>
                  <?php endif; ?>
                </ul>
              </div>
            </div>



            <!-- 口コミ -->
            <div class="article__content">
              <div class="article__wrap label">
                <div class="label__title">
                  <h2>口コミ</h2>
                </div>
              </div>
              <?php
              // カスタム投稿タイプ 'voice' から最新の1件を取得
              $args = [
                'post_type'      => 'voice',   // 投稿タイプ 'voice'
                'posts_per_page' => 1,         // 最新1件を取得
              ];
              $voice_query = new WP_Query($args);

              if ($voice_query->have_posts()) : while ($voice_query->have_posts()) : $voice_query->the_post();
              ?>
                <div class="article__reviews">
                  <!-- 画像表示 -->
                  <img src="<?php echo esc_url(get_the_post_thumbnail_url(null, 'full')); ?>" alt="<?php echo esc_attr(get_the_title()); ?>のアイキャッチ画像">
                  
                  <!-- 年齢・性別とタイトル表示 -->
                  <div class="article__item-content">
                    <p class="article__category"><?php the_field('voice_1') ?></p>
                    <p class="article__sub-text"><?php the_title(); ?></p>
                  </div>

                  <!-- ボタン -->
                  <div class="article__button">
                    <a href="<?php echo get_post_type_archive_link('voice'); ?>" class="button">View more<span></span></a>
                  </div>
                </div>
              <?php endwhile; wp_reset_postdata(); else : ?>
                <p>口コミがまだありません。</p>
              <?php endif; ?>
            </div>



            <!-- キャンペーン -->
            <div class="article__content">
              <div class="article__wrap label">
                <div class="label__title">
                  <h2>キャンペーン</h2>
                </div>
              </div>

              <ul class="article__campaign-cards campaign">
                <?php
                // カスタム投稿タイプ 'campaign' から最新の2件を取得
                $args = [
                  'post_type'      => 'campaign', // 投稿タイプ 'campaign'
                  'posts_per_page' => 2,          // 2件取得
                ];
                $campaign_query = new WP_Query($args);

                if ($campaign_query->have_posts()) :
                  while ($campaign_query->have_posts()) : $campaign_query->the_post();
                ?>
                  <li class="campaign__card campaign__card--page">
                    <div href="<?php the_permalink(); ?>">
                      <div class="campaign__card-img campaign__card-img--page">
                        <?php if (has_post_thumbnail()) : ?>
                          <img src="<?php echo esc_url(get_the_post_thumbnail_url(null, 'full')); ?>" alt="<?php echo esc_attr(get_the_title()); ?>">
                        <?php else : ?>
                          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/no-image.jpg" alt="No Image">
                        <?php endif; ?>
                      </div>
                      <div class="campaign__card-body campaign__card-body--blog">
                        <div class="campaign__card-meta">
                        <?php
                          // 現在の投稿に紐付けられたタクソノミー 'campaign_category' の取得
                          $terms = get_the_terms(get_the_ID(), 'campaign_category');
                          if (!empty($terms) && !is_wp_error($terms)): 
                            $term_name = $terms[0]->name;
                          else: 
                            $term_name = '未分類';
                          endif;
                        ?>
                          <p class="campaign__card-category campaign__card-category--blog"><?php echo esc_html($term_name); ?></p>
                        </div>
                        <div class="campaign__card-contents campaign__card-contents--blog">
                          <p class="campaign__card-title">全部コミコミ(お一人様)</p>
                          <div class="campaign__card-price--body">
                            <span class="campaign__card-original--price campaign__card-original--price-blog"><?php the_field('campaign_1'); ?></span>
                            <span class="campaign__card-discounted--price campaign__card-discounted--price-blog"><?php the_field('campaign_2'); ?></span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                <?php
                  endwhile;
                  wp_reset_postdata();
                else :
                ?>
                  <p>キャンペーンがまだありません。</p>
                <?php endif; ?>
              </ul>
              
              <div class="article__button">
                <a href="<?php echo get_post_type_archive_link('campaign'); ?>" class="button">View more<span></span></a>
              </div>
            </div>


            <!-- アーカイブ -->
            <div class="article__content">
              <div class="article__wrap label">
                <div class="label__title">
                  <h2>アーカイブ</h2>
                </div>
              </div>
              <div class="article__archive">
                <?php
                global $wpdb;
                $years = $wpdb->get_results("
                    SELECT DISTINCT YEAR(post_date) AS year
                    FROM $wpdb->posts
                    WHERE post_status = 'publish' AND post_type = 'post'
                    ORDER BY year DESC
                ");
                foreach ($years as $year) :
                  $months = $wpdb->get_results("
                      SELECT DISTINCT MONTH(post_date) AS month
                      FROM $wpdb->posts
                      WHERE YEAR(post_date) = $year->year AND post_status = 'publish' AND post_type = 'post'
                      ORDER BY month DESC
                  ");
                ?>
                  <div class="article__date-wrapper">
                    <!-- 年の表示 -->
                    <div class="article__date js-accordion-list" 
                        data-icon-open="<?php echo get_theme_file_uri('/assets/images/common/blog-p-archive1.svg'); ?>" 
                        data-icon-close="<?php echo get_theme_file_uri('/assets/images/common/blog-p-archive2.svg'); ?>">
                      <img src="<?php echo get_theme_file_uri('/assets/images/common/blog-p-archive2.svg'); ?>" alt="アイコン">
                      <?php echo esc_html($year->year); ?>
                    </div>
                    <!-- 月のリスト -->
                    <div class="article__months">
                      <?php foreach ($months as $month) : ?>
                        <a href="<?php echo esc_url(get_month_link($year->year, $month->month)); ?>" class="article__month">
                          <img src="<?php echo get_theme_file_uri('/assets/images/common/blog-p-archive2.svg'); ?>" alt="アイコン">
                          <?php echo esc_html($month->month) . '月'; ?>
                        </a>
                      <?php endforeach; ?>
                    </div>
                  </div>
                <?php endforeach; ?>
              </div>
            </div>


          </aside>


