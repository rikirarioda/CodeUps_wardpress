<?php get_header(); ?>

  <main>
    <!-- メインビュー -->
    <div class="mv js-mv">
      <div class="mv__inner">
        <div class="mv__slider swiper js-main-swiper">
          <div class="swiper-wrapper">
            <!-- 繰り返し -->
            <?php $fields = SCF::get('top-page'); ?>
            <?php if (!empty($fields)): ?>
              <?php foreach ($fields as $field): ?>
                <div class="swiper-slide">
                  <picture>
                    <!-- PC版の画像 -->
                    <?php if (!empty($field['mv-image-pc'])): ?>
                      <source srcset="<?php echo wp_get_attachment_url($field['mv-image-pc']); ?>" media="(min-width: 1025px)">
                    <?php endif; ?>
                    <!-- SP版の画像 -->
                    <?php if (!empty($field['mv-image-sp'])): ?>
                      <img src="<?php echo wp_get_attachment_url($field['mv-image-sp']); ?>" alt="<?php echo esc_attr($field['alt-text'] ?: 'MV'); ?>">
                    <?php else: ?>
                      <!-- SP版画像がない場合 -->
                      <img src="<?php echo esc_url(get_theme_file_uri('img/dummy.jpg')); ?>" alt="ダミー画像">
                    <?php endif; ?>
                  </picture>
                </div>
              <?php endforeach; ?>
            <?php else: ?>
              <p>スライダー画像が設定されていません。</p>
            <?php endif; ?>
            <!-- /繰り返し -->
          </div>

          <div class="mv__title-wrap">
            <h2 class="mv__title">DIVING</h2>
            <p class="mv__text">into&nbsp;the&nbsp;ocean</p>
          </div>
        </div>
      </div>
    </div>


    <!-- Campaign -->
    <section id="#" class="campaign layout-campaign">
      <div class="campaign__inner inner">
        <div class="campaign__box">
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>
        </div>
          <div class="campaign__title">
            <div class="title">
              <p class="title__main">Campaign</p>
              <h2 class="title__sub">キャンペーン</h2>
            </div>
          </div>
          <div class="campaign__swiper-wrap campaign-swiper js-campaign-swiper swiper">
            <ul class="campaign__cards swiper-wrapper">
              <?php
              // カスタム投稿タイプ 'campaign' から投稿を取得
              $args = [
                'post_type'      => 'campaign',
                'posts_per_page' => -1,
                'post_status'    => 'publish',
                'orderby'        => 'date',
                'order'          => 'DESC',
              ];
              $campaign_query = new WP_Query($args);

              if ($campaign_query->have_posts()) :
                while ($campaign_query->have_posts()) : $campaign_query->the_post();
              ?>
                <li class="campaign__card swiper-slide">
                  <?php
                  // 投稿に関連付けられている最初のタクソノミー情報を取得
                  $terms = get_the_terms(get_the_ID(), 'campaign_category');
                  if (!empty($terms) && !is_wp_error($terms)) {
                    $term_link = get_term_link($terms[0]->term_id); // 最初のタクソノミーのリンクを取得
                  } else {
                    $term_link = '#'; // タクソノミーがない場合のデフォルトリンク
                  }
                  ?>
                  <a href="<?php echo esc_url($term_link); ?>">
                    <div class="campaign__card-img">
                      <?php if (has_post_thumbnail()) : ?>
                        <img src="<?php echo esc_url(get_the_post_thumbnail_url(null, 'full')); ?>" alt="<?php echo esc_attr(get_the_title()); ?>">
                      <?php else : ?>
                        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/no-image.jpg" alt="No Image">
                      <?php endif; ?>
                    </div>
                    <div class="campaign__card-body">
                      <div class="campaign__card-meta">
                        <span class="campaign__card-tag"><?php echo !empty($terms) ? esc_html($terms[0]->name) : '未分類'; ?></span>
                        <p class="campaign__card-category"><?php the_title(); ?></p>
                      </div>
                      <div class="campaign__card-contents">
                        <p class="campaign__card-title">全部コミコミ(お一人様)</p>
                        <div class="campaign__card-price--body">
                          <span class="campaign__card-original--price"><?php the_field('campaign_1'); ?></span>
                          <span class="campaign__card-discounted--price"><?php the_field('campaign_2'); ?></span>
                        </div>
                      </div>
                    </div>
                  </a>
                </li>
              <?php
                endwhile;
                wp_reset_postdata();
              else :
              ?>
                <p>キャンペーンがありません。</p>
              <?php endif; ?>
            </ul>
          </div>

          <div class="campaign__button">
            <a href="<?php echo esc_url(get_post_type_archive_link('campaign')); ?>" class="button">View more<span></span></a>
          </div>

      </div>
    </section>

    <!-- About us -->
    <section id="#" class="about-us layout-about-us">
      <div class="about-us__inner inner">
        <div class="about-us__title">
          <div class="title">
            <p class="title__main">About&nbsp;us</p>
            <h2 class="title__sub">私たちについて</h2>
          </div>
        </div>
        <div class="about-us__contents">
          <div class="about-us__img-wrap">
            <div class="about-us__img-left">
              <picture>
                <source media="(max-width: 768px)" srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/Aboutas-1-sp.jpg">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/Aboutas-1.jpg" alt="屋根の上のシーサー">
              </picture>
            </div>
            <div class="about-us__img-right">
              <picture>
                <source media="(max-width: 768px)" srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/Aboutas-2-sp.jpg">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/Aboutas-2.jpg" alt="海の中で２匹の魚が泳いでいる様子">
              </picture>
            </div>
          </div>
          <div class="about-us__text-body">
                <h2 class="about-us__sub-titles">Dive&nbsp;into<br>the&nbsp;Ocean</h2>
              <div class="about-us__button-content">
                <p class="about-us__sub-texts">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
                  ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキスト</p>
                  <div class="about-us__button">
                    <a href="<?php echo esc_url(home_url('/about')); ?>" class="button">View more<span></span></a>
                  </div>
              </div>
          </div>
        </div>
      </div>
    </section>

    <!-- information -->
    <section id="#" class="information layout-information">
      <div class="information__inner inner">
          <div class="information__title">
            <div class="title">
              <p class="title__main">Information</p>
              <h2 class="title__sub">ダイビング情報</h2>
            </div>
          </div>
        <div class="information__body">
          <div class="information__img colorbox js-colorbox">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/Information.jpg" alt="サンゴの周りで魚が泳いでいる様子">
          </div>
          <div class="information__text-content">
            <h3 class="information__titles">ライセンス講習</h3>
            <p class="information__text">当店はダイビングライセンス（Cカード）世界最大の教育機関PADI<br class="sp-none">の「正規店」として店舗登録されています。<br>
            正規登録店として、安心安全に初めての方でも安心安全にライセン<br class="sp-none">ス取得をサポート致します。</p>
            <div class="information__button">
              <a href="<?php echo esc_url(home_url('/information')); ?>" class="button">View more<span></span></a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Blog -->
    <section id="#" class="blog layout-blog">
      <div class="blog__inner inner">
        <div class="blog__title">
          <div class="title">
            <p class="title__main title__main--blog">Blog</p>
            <h2 class="title__sub title__sub--blog">ブログ</h2>
          </div>
        </div>
        <ul class="blog__cards blog-cards">
          <?php
          // 最新の3件を取得するクエリ
          $args = [
            'post_type'      => 'post',   // 投稿タイプを指定
            'posts_per_page' => 3,        // 最新3件を取得
            'post_status'    => 'publish' // 公開された投稿のみ
          ];
          $blog_query = new WP_Query($args);

          if ($blog_query->have_posts()) :
            while ($blog_query->have_posts()) :
              $blog_query->the_post(); 
          ?>
            <li class="blog-cards__card blog-card">
              <a href="<?php the_permalink(); ?>">
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
          <?php
            endwhile;
            wp_reset_postdata(); // クエリのリセット
          else :
          ?>
            <p>投稿がありません。</p>
          <?php endif; ?>
        </ul>
        <div class="blog__button">
          <a href="<?php echo esc_url(home_url('/blog')); ?>" class="button">View more<span></span></a>
        </div>
      </div>
    </section>

<!-- Voice -->
    <section id="#" class="voice layout-voice">
      <div class="voice__inner inner">
        <div class="voice__title">
          <div class="title">
            <p class="title__main">Voice</p>
            <h2 class="title__sub">お客様の声</h2>
          </div>
        </div>
        <ul class="voice__cards voice-cards">
          <?php
          // 最新の投稿2件を取得
          $args = [
            'post_type'      => 'voice',   // 投稿タイプ 'voice'
            'posts_per_page' => 2,         // 表示件数を2件に制限
            'post_status'    => 'publish', // 公開された投稿のみ
            'orderby'        => 'date',    // 日付でソート
            'order'          => 'DESC',    // 降順（新しい順）
          ];
          $voice_query = new WP_Query($args);

          if ($voice_query->have_posts()) :
            while ($voice_query->have_posts()) : $voice_query->the_post();
          ?>
            <li class="voice-cards__card voice-card">
              <!-- アーカイブページへのリンクを設定 -->
              <a href="<?php echo esc_url(get_post_type_archive_link('voice')); ?>">
                <div class="voice-card__item-content">
                  <div class="voice-card__box">
                    <div class="voice-card__items">
                      <div class="voice-card__wrap">
                        <!-- 年齢・性別を表示 -->
                        <p class="voice-card__item-information"><?php the_field('voice_1'); ?></p>

                        <?php
                        // タクソノミー 'voice_category' の取得
                        $terms = get_the_terms(get_the_ID(), 'voice_category');
                        if (!empty($terms) && !is_wp_error($terms)) {
                          $term_name = $terms[0]->name;
                        } else {
                          $term_name = '未分類';
                        }
                        ?>
                        <p class="voice-card__item-tag"><?php echo esc_html($term_name); ?></p>
                      </div>
                      <!-- タイトルを表示 -->
                      <p class="voice-card__item-title"><?php the_title(); ?></p>
                    </div>
                    <!-- アイキャッチ画像を表示 -->
                    <div class="voice-card__item-img colorbox js-colorbox">
                      <?php if (has_post_thumbnail()) : ?>
                        <img src="<?php echo esc_url(get_the_post_thumbnail_url(null, 'full')); ?>" alt="<?php echo esc_attr(get_the_title()); ?>">
                      <?php else : ?>
                        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/no-image.jpg" alt="No Image">
                      <?php endif; ?>
                    </div>
                  </div>
                  <!-- 本文またはカスタムフィールドのテキストを表示 -->
                  <p class="voice-card__item-text">
                    <?php
                    if (!empty(get_post_meta(get_the_ID(), 'voice_card_text', true))) {
                      echo esc_html(get_post_meta(get_the_ID(), 'voice_card_text', true));
                    } elseif (has_excerpt()) {
                      the_excerpt();
                    } else {
                      echo wp_trim_words(get_the_content(), 300, '...');
                    }
                    ?>
                  </p>
                </div>
              </a>
            </li>
          <?php
            endwhile;
            wp_reset_postdata();
          else :
          ?>
            <p>お客様の声がまだありません。</p>
          <?php endif; ?>
        </ul>
        <div class="voice__button">
          <a href="<?php echo esc_url(get_post_type_archive_link('voice')); ?>" class="button">View more<span></span></a>
        </div>
      </div>
    </section>



<!-- Price -->
    <section id="#" class="price layout-price">
      <div class="price__inner inner">
        <div class="price__title">
          <div class="title">
            <p class="title__main">Price</p>
            <h2 class="title__sub">料金一覧</h2>
          </div>
        </div>
        <div class="price__body">
          <div class="price__box">
            <picture class="price__img colorbox js-colorbox">
              <source media="(max-width: 767px)" srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/price-1-sp.jpg">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/price-1.jpg" alt="サンゴの周りで沢山の魚が泳いでいる様子">
            </picture>
            <div class="price__content">
              <?php
              // 各セクションのフィールド設定
              $sections = [
                [
                  'title_field' => 'price_title1',
                  'group_field' => 'price_list1',
                  'text_field'  => 'price_text1',
                  'price_field' => 'price_1',
                ],
                [
                  'title_field' => 'price_title2',
                  'group_field' => 'price_list2',
                  'text_field'  => 'price_text2',
                  'price_field' => 'price_2',
                ],
                [
                  'title_field' => 'price_title3',
                  'group_field' => 'price_list3',
                  'text_field'  => 'price_text3',
                  'price_field' => 'price_3',
                ],
                [
                  'title_field' => 'price_title4',
                  'group_field' => 'price_list4',
                  'text_field'  => 'price_text4',
                  'price_field' => 'price_4',
                ],
              ];

              // 固定ページ ID (page-price.php の ID)
              $page_id = 55;

              foreach ($sections as $section):
                // タイトルとデータの取得
                $section_title = SCF::get($section['title_field'], $page_id);
                $group_data = SCF::get($section['group_field'], $page_id);

                // セクションにデータがある場合のみ表示
                if (!empty($section_title) && !empty($group_data)):
              ?>
                <div class="price__item">
                  <h3 class="price__heading"><?php echo esc_html($section_title); ?></h3>
                  <dl class="price__list">
                    <?php foreach ($group_data as $row): ?>
                      <div class="price__item-container">
                        <dt class="price__text">
                          <?php 
                          echo isset($row[$section['text_field']]) 
                            ? nl2br(esc_html($row[$section['text_field']])) 
                            : '項目名なし'; 
                          ?>
                        </dt>
                        <dd class="price__price-menu">
                          ¥<?php 
                          echo isset($row[$section['price_field']]) 
                            ? number_format((int)preg_replace('/[^0-9]/', '', $row[$section['price_field']])) 
                            : '0'; 
                          ?>
                        </dd>
                      </div>
                    <?php endforeach; ?>
                  </dl>
                </div>
              <?php else: ?>
                <div class="price__item">
                  <h3 class="price__heading"><?php echo esc_html($section_title); ?></h3>
                  <p class="price__error">料金情報がありません。</p>
                </div>
              <?php endif; ?>
              <?php endforeach; ?>
            </div>
          </div>
          <div class="price__button">
            <a href="<?php echo esc_url(home_url('/price')); ?>" class="button">View more<span></span></a>
          </div>
        </div>
        </div>
    </section>
  </main>



<?php get_footer(); ?>

