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
                    <a href="page-campaign.html" class="page-sitemap-link__main">
                      <div class="page-sitemap-link__icon"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/hitode2.svg" alt="ヒトデのアイコン"></div>
                      <p class="page-sitemap-link__text">キャンペーン</p>
                    </a>
                    <div class="page-sitemap-link__details">
                      <a href="#" class="page-sitemap-link__detail">ライセンス取得</a>
                      <a href="#" class="page-sitemap-link__detail">貸切体験ダイビング</a>
                      <a href="#" class="page-sitemap-link__detail">ナイトダイビング</a>
                    </div>
                  </div>
                  <div class="page-sitemap__link page-sitemap-link">
                    <a href="page-about.html" class="page-sitemap-link__main">
                      <div class="page-sitemap-link__icon"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/hitode2.svg" alt="ヒトデのアイコン"></div>
                      <p class="page-sitemap-link__text">私たちについて</p>
                    </a>
                  </div>
                </div>
                <div class="page-sitemap__pc">
                  <div class="page-sitemap__link page-sitemap-link">
                    <a href="page-information.html" class="page-sitemap-link__main">
                      <div class="page-sitemap-link__icon"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/hitode2.svg" alt="ヒトデのアイコン"></div>
                      <p class="page-sitemap-link__text">ダイビング情報</p>
                    </a>
                    <div class="page-sitemap-link__details">
                      <a href="page-information.html?tab=license-lecture" class="page-sitemap-link__detail">ライセンス講習</a>
                      <a href="page-information.html?tab=intro-diving" class="page-sitemap-link__detail">体験ダイビング</a>
                      <a href="page-information.html?tab=fun-diving" class="page-sitemap-link__detail">ファンダイビング</a>
                    </div>
                  </div>
                  <div class="page-sitemap__link page-sitemap-link">
                    <a href="page-blog.html" class="page-sitemap-link__main">
                      <div class="page-sitemap-link__icon"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/hitode2.svg" alt="ヒトデのアイコン"></div>
                      <p class="page-sitemap-link__text">ブログ</p>
                    </a>
                  </div>
                </div>
              </div>
              <div class="page-sitemap__right">
                <div class="page-sitemap__pc">
                  <div class="page-sitemap__link page-sitemap-link">
                    <a href="page-voice.html" class="page-sitemap-link__main">
                      <div class="page-sitemap-link__icon"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/hitode2.svg" alt="ヒトデのアイコン"></div>
                      <p class="page-sitemap-link__text">お客様の声</p>
                    </a>
                  </div>
                  <div class="page-sitemap__link page-sitemap-link">
                    <a href="page-price.html" class="page-sitemap-link__main">
                      <div class="page-sitemap-link__icon"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/hitode2.svg" alt="ヒトデのアイコン"></div>
                      <p class="page-sitemap-link__text">料金一覧</p>
                    </a>
                    <div class="page-sitemap-link__details">
                      <a href="page-price.html#license-course" class="page-sitemap-link__detail">ライセンス講習</a>
                      <a href="page-price.html#trial-diving" class="page-sitemap-link__detail">体験ダイビング</a>
                      <a href="page-price.html#diving-fun" class="page-sitemap-link__detail">ファンダイビング</a>
                    </div>
                  </div>
                </div>
                <div class="page-sitemap__pc">
                  <div class="page-sitemap__link page-sitemap-link">
                    <a href="page-faq.html" class="page-sitemap-link__main">
                      <div class="page-sitemap-link__icon"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/hitode2.svg" alt="ヒトデのアイコン"></div>
                      <p class="page-sitemap-link__text">よくある質問</p>
                    </a>
                  </div>
                  <div class="page-sitemap__link page-sitemap-link">
                    <a href="page-privacy-policy.html" class="page-sitemap-link__main">
                      <div class="page-sitemap-link__icon"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/hitode2.svg" alt="ヒトデのアイコン"></div>
                      <p class="page-sitemap-link__text">プライバシー<br>ポリシー</p>
                    </a>
                  </div>
                  <div class="page-sitemap__link page-sitemap-link">
                    <a href="page-terms-of-service.html" class="page-sitemap-link__main">
                      <div class="page-sitemap-link__icon"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/hitode2.svg" alt="ヒトデのアイコン"></div>
                      <p class="page-sitemap-link__text">利用規約</p>
                    </a>
                  </div>
                  <div class="page-sitemap__link page-sitemap-link">
                    <a href="page-contact.html" class="page-sitemap-link__main">
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


