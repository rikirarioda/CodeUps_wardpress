<?php get_header(); ?>

    <!-- メインビュー -->
    <div class="page-mv">
      <div class="page-mv__inner">
        <div class="page-mv__img">
          <picture>
            <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/Site_MAP-p-MV-sp.jpg" media="(max-width: 767px)">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/Site_MAP-p-MV.jpg" alt="海の中で沢山の魚が泳いでいる様子">
          </picture>
          <h1 class="page-mv__title">Site MAP</h1>
        </div>
      </div>
    </div>


    <!-- パンくず -->
  <?php get_template_part('parts/breadcrumb') ?>

    <!-- サイトマップ -->
    <section class="page-sitemap layout-page-sitemap">
      <div class="page-sitemap__inner inner">
          <div class="page-sitemap__wrap">
            <div class="page-sitemap__list">
              <div class="page-sitemap__left">
                <div class="page-sitemap__pc">
                  <div class="page-sitemap__link page-sitemap-link">
                    <a href="<?php echo esc_url(get_post_type_archive_link('campaign')); ?>" class="page-sitemap-link__main">
                      <div class="page-sitemap-link__icon"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/hitode2.svg" alt="ヒトデのアイコン"></div>
                      <p class="page-sitemap-link__text">キャンペーン</p>
                    </a>
                    <div class="page-sitemap-link__details">
                    <?php
                      // カスタム投稿タイプ『campaign』にカテゴリ(タクソノミー)が追加される度に、そのタクソノミーの一覧ページへのリンクが生成されるようにする。
                      // カスタムタクソノミーのカテゴリを取得
                      $terms = get_terms(array(
                        'taxonomy' => 'campaign_category',
                        'hide_empty' => false,
                      ));

                      // 取得したカテゴリが存在する場合、リンクを生成
                      if (!empty($terms) && !is_wp_error($terms)): 
                        foreach ($terms as $term): 
                          // 各カテゴリのリンクを出力
                          echo '<a href="' . esc_url(get_term_link($term)) . '" class="footer-link__detail">' . esc_html($term->name) . '</a>';
                        endforeach; 
                      endif;
                    ?>

                    </div>
                  </div>
                  <div class="page-sitemap__link page-sitemap-link">
                    <a href="<?php echo esc_url(get_permalink(get_page_by_path('about'))); ?>" class="page-sitemap-link__main">
                      <div class="page-sitemap-link__icon"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/hitode2.svg" alt="ヒトデのアイコン"></div>
                      <p class="page-sitemap-link__text">私たちについて</p>
                    </a>
                  </div>
                </div>
                <div class="page-sitemap__pc">
                  <div class="page-sitemap__link page-sitemap-link">
                    <a href="<?php echo esc_url(get_permalink(get_page_by_path('information'))); ?>" class="page-sitemap-link__main">
                      <div class="page-sitemap-link__icon"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/hitode2.svg" alt="ヒトデのアイコン"></div>
                      <p class="page-sitemap-link__text">ダイビング情報</p>
                    </a>
                    <div class="page-sitemap-link__details">
                      <a href="<?php echo esc_url(get_permalink(get_page_by_path('information'))); ?>?tab=license-lecture" class="footer-link__detail">ライセンス講習</a>
                      <a href="<?php echo esc_url(get_permalink(get_page_by_path('information'))); ?>?tab=intro-diving" class="footer-link__detail">体験ダイビング</a>
                      <a href="<?php echo esc_url(get_permalink(get_page_by_path('information'))); ?>?tab=fun-diving" class="footer-link__detail">ファンダイビング</a>
                    </div>
                  </div>
                  <div class="page-sitemap__link page-sitemap-link">
                    <a href="<?php echo esc_url(get_permalink(get_page_by_path('blog'))); ?>" class="page-sitemap-link__main">
                      <div class="page-sitemap-link__icon"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/hitode2.svg" alt="ヒトデのアイコン"></div>
                      <p class="page-sitemap-link__text">ブログ</p>
                    </a>
                  </div>
                </div>
              </div>
              <div class="page-sitemap__right">
                <div class="page-sitemap__pc">
                  <div class="page-sitemap__link page-sitemap-link">
                    <a href="<?php echo esc_url(get_post_type_archive_link('voice')); ?>" class="page-sitemap-link__main">
                      <div class="page-sitemap-link__icon"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/hitode2.svg" alt="ヒトデのアイコン"></div>
                      <p class="page-sitemap-link__text">お客様の声</p>
                    </a>
                  </div>
                  <div class="page-sitemap__link page-sitemap-link">
                    <a href="<?php echo esc_url(get_permalink(get_page_by_path('price'))); ?>" class="page-sitemap-link__main">
                      <div class="page-sitemap-link__icon"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/hitode2.svg" alt="ヒトデのアイコン"></div>
                      <p class="page-sitemap-link__text">料金一覧</p>
                    </a>
                    <div class="page-sitemap-link__details">
                      <a href="<?php echo esc_url(get_permalink(get_page_by_path('information'))); ?>?tab=license-lecture" class="footer-link__detail">ライセンス講習</a>
                      <a href="<?php echo esc_url(get_permalink(get_page_by_path('information'))); ?>?tab=intro-diving" class="footer-link__detail">体験ダイビング</a>
                      <a href="<?php echo esc_url(get_permalink(get_page_by_path('information'))); ?>?tab=fun-diving" class="footer-link__detail">ファンダイビング</a>
                      <a href="<?php echo esc_url(get_permalink(get_page_by_path('price'))); ?>#special-diving" class="footer-link__detail">スペシャルダイビング</a>
                    </div>
                  </div>
                </div>
                <div class="page-sitemap__pc">
                  <div class="page-sitemap__link page-sitemap-link">
                    <a href="<?php echo esc_url(get_permalink(get_page_by_path('faq'))); ?>" class="page-sitemap-link__main">
                      <div class="page-sitemap-link__icon"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/hitode2.svg" alt="ヒトデのアイコン"></div>
                      <p class="page-sitemap-link__text">よくある質問</p>
                    </a>
                  </div>
                  <div class="page-sitemap__link page-sitemap-link">
                    <a href="<?php echo esc_url(get_permalink(get_page_by_path('privacypolicy'))); ?>" class="page-sitemap-link__main">
                      <div class="page-sitemap-link__icon"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/hitode2.svg" alt="ヒトデのアイコン"></div>
                      <p class="page-sitemap-link__text">プライバシー<br>ポリシー</p>
                    </a>
                  </div>
                  <div class="page-sitemap__link page-sitemap-link">
                    <a href="<?php echo esc_url(get_permalink(get_page_by_path('terms-of-service'))); ?>" class="page-sitemap-link__main">
                      <div class="page-sitemap-link__icon"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/hitode2.svg" alt="ヒトデのアイコン"></div>
                      <p class="page-sitemap-link__text">利用規約</p>
                    </a>
                  </div>
                  <div class="page-sitemap__link page-sitemap-link">
                    <a href="<?php echo esc_url(get_permalink(get_page_by_path('contact'))); ?>" class="page-sitemap-link__main">
                      <div class="page-sitemap-link__icon"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/hitode2.svg" alt="ヒトデのアイコン"></div>
                      <p class="page-sitemap-link__text">お問い合わせ</p>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
    </section>

<?php get_footer(); ?>


