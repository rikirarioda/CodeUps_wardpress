<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <meta name="robots" content="noindex">
  <!-- meta情報 -->
  <title>CodeUps_Diving</title>
  <meta name="description" content="CodeUps_Divingではライセンス取得・貸切体験ダイビング・貸切体験ダイビングなどが楽しめます">
  <meta name="keywords" content="CodeUps_Diving,ダイビング,海">
  <!-- ファビコン -->
  <link rel="icon" href="<?php echo get_theme_file_uri(); ?>/assets/images/common/favicon.svg">
  <link rel="apple-touch-icon" href="<?php echo get_theme_file_uri(); ?>/assets/images/common/favicon.png" sizes="180x180">
  <!-- ogp -->
  <meta property="og:url" content="http://wp201226.wpx.jp/codeups_wp/" />
  <meta property="og:type" content="website" />
  <meta property="og:title" content="CodeUps_Diving" />
  <meta property="og:description" content="CodeUps_Divingではライセンス取得・貸切体験ダイビング・貸切体験ダイビングなどが楽しめます" />
  <meta property="og:site_name" content="CodeUps_Diving" />
  <meta property="og:image" content="http://wp201226.wpx.jp/codeups_wp/<?php echo get_theme_file_uri(); ?>/assets/images/common/MV-1.jpg" />
  <?php wp_head(); ?>
</head>
<body>

<header class="header js-header">
  <div class="header__inner">
    <h1 class="header__logo">
      <a href="<?php echo esc_url(home_url('/')); ?>" class="header__logo-link">
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/icon.svg" alt="ヘッダーロゴ">
      </a>
    </h1>

    <!-- SP ハンバーガー -->
    <button class="header__hamburger hamburger js-hamburger u-mobile">
      <span></span>
      <span></span>
      <span></span>
    </button>

    <!-- SPドロワー -->
    <div class="header__drawer-menu drawer-menu js-drawer">
      <div class="drawer-menu__wrap">
        <div class="drawer-menu__list">
          <div class="drawer-menu__left">
            <div class="drawer-menu__link drawer-menu-link">
              <a href="<?php echo esc_url(get_post_type_archive_link('campaign')); ?>" class="drawer-menu-link__main">
                <div class="drawer-menu-link__icon"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/hitode.svg" alt="ヒトデのアイコン"></div>
                <p class="drawer-menu-link__text">キャンペーン</p>
              </a>
              <div class="drawer-menu-link__details">
              <?php
                //　カスタム投稿タイプ『campaign』にカテゴリ(タクソノミー)が追加される度に、そのタクソノミーの一覧ページへのリンクが生成されるようにする。
                  // カスタムタクソノミーのカテゴリを取得
                  $terms = get_terms(array(
                    'taxonomy' => 'campaign_category',
                    'hide_empty' => false,
                  ));

                  // 取得したカテゴリが存在する場合、リンクを生成
                  if (!empty($terms) && !is_wp_error($terms)) {
                    foreach ($terms as $term) {
                      // 各カテゴリのリンクを出力
                      echo '<a href="' . esc_url(get_term_link($term)) . '" class="footer-link__detail">' . esc_html($term->name) . '</a>';
                    }
                  }
                ?>
              </div>
            </div>
            <div class="drawer-menu__link drawer-menu-link">
              <a href="<?php echo esc_url(get_permalink(get_page_by_path('about'))); ?>" class="drawer-menu-link__main">
                <div class="drawer-menu-link__icon"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/hitode.svg" alt="ヒトデのアイコン"></div>
                <p class="drawer-menu-link__text">私たちについて</p>
              </a>
            </div>
            <div class="drawer-menu__link drawer-menu-link">
              <a href="<?php echo esc_url(get_permalink(get_page_by_path('information'))); ?>" class="drawer-menu-link__main">
                <div class="drawer-menu-link__icon"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/hitode.svg" alt="ヒトデのアイコン"></div>
                <p class="drawer-menu-link__text">ダイビング情報</p>
              </a>
              <div class="drawer-menu-link__details">
                <a href="<?php echo esc_url(get_permalink(get_page_by_path('information'))); ?>?tab=license-lecture" class="footer-link__detail">ライセンス講習</a>
                <a href="<?php echo esc_url(get_permalink(get_page_by_path('information'))); ?>?tab=intro-diving" class="footer-link__detail">体験ダイビング</a>
                <a href="<?php echo esc_url(get_permalink(get_page_by_path('information'))); ?>?tab=fun-diving" class="footer-link__detail">ファンダイビング</a>
              </div>
            </div>
            <div class="drawer-menu__link drawer-menu-link">
              <a href="<?php echo esc_url(get_permalink(get_page_by_path('blog'))); ?>" class="drawer-menu-link__main">
                <div class="drawer-menu-link__icon"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/hitode.svg" alt="ヒトデのアイコン"></div>
                <p class="drawer-menu-link__text">ブログ</p>
              </a>
            </div>
          </div>
          <div class="drawer-menu__right">
            <div class="drawer-menu__link drawer-menu-link">
              <a href="<?php echo esc_url(get_post_type_archive_link('voice')); ?>" class="drawer-menu-link__main-right">
                <div class="drawer-menu-link__icon"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/hitode.svg" alt="ヒトデのアイコン"></div>
                <p class="drawer-menu-link__text">お客様の声</p>
              </a>
            </div>
            <div class="drawer-menu__link drawer-menu-link">
              <a href="<?php echo esc_url(get_permalink(get_page_by_path('price'))); ?>" class="drawer-menu-link__main-right">
                <div class="drawer-menu-link__icon"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/hitode.svg" alt="ヒトデのアイコン"></div>
                <p class="drawer-menu-link__text">料金一覧</p>
              </a>
              <div class="drawer-menu-link__details">
                <a href="<?php echo esc_url(get_permalink(get_page_by_path('price'))); ?>#license-course" class="footer-link__detail">ライセンス講習</a>
                <a href="<?php echo esc_url(get_permalink(get_page_by_path('price'))); ?>#trial-diving" class="footer-link__detail">体験ダイビング</a>
                <a href="<?php echo esc_url(get_permalink(get_page_by_path('price'))); ?>#diving-fun" class="footer-link__detail">ファンダイビング</a>
                <a href="<?php echo esc_url(get_permalink(get_page_by_path('price'))); ?>#special-diving" class="footer-link__detail">スペシャルダイビング</a>
              </div>
            </div>
            <div class="drawer-menu__link drawer-menu-link">
              <a href="<?php echo esc_url(get_permalink(get_page_by_path('faq'))); ?>" class="drawer-menu-link__main-right">
                <div class="drawer-menu-link__icon"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/hitode.svg" alt="ヒトデのアイコン"></div>
                <p class="drawer-menu-link__text">よくある質問</p>
              </a>
            </div>
            <div class="drawer-menu__link drawer-menu-link">
              <a href="<?php echo esc_url(get_permalink(get_page_by_path('sitemap'))); ?>" class="drawer-menu-link__main-right">
                <div class="drawer-menu-link__icon"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/hitode.svg" alt="ヒトデのアイコン"></div>
                <p class="drawer-menu-link__text">サイトマップ</p>
              </a>
            </div>
            <div class="drawer-menu__link drawer-menu-link">
              <a href="<?php echo esc_url(get_permalink(get_page_by_path('privacypolicy'))); ?>" class="drawer-menu-link__main-right">
                <div class="drawer-menu-link__icon"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/hitode.svg" alt="ヒトデのアイコン"></div>
                <p class="drawer-menu-link__text">プライバシーポリシー</p>
              </a>
            </div>
            <div class="drawer-menu__link drawer-menu-link">
              <a href="<?php echo esc_url(get_permalink(get_page_by_path('terms-of-service'))); ?>" class="drawer-menu-link__main-right">
                <div class="drawer-menu-link__icon"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/hitode.svg" alt="ヒトデのアイコン"></div>
                <p class="drawer-menu-link__text">利用規約</p>
              </a>
            </div>
            <div class="drawer-menu__link drawer-menu-link">
              <a href="<?php echo esc_url(get_permalink(get_page_by_path('contact'))); ?>" class="drawer-menu-link__main-right">
                <div class="drawer-menu-link__icon"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/hitode.svg" alt="ヒトデのアイコン"></div>
                <p class="drawer-menu-link__text">お問い合わせ</p>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- PC -->
    <div class="header__pc-nav pc-nav">
      <ul class="pc-nav__items">
        <li class="pc-nav__item">
          <a href="<?php echo esc_url(get_post_type_archive_link('campaign')); ?>">
            <p class="pc-nav__main">Campaign</p>
            <p class="pc-nav__sub">キャンペーン</p>
          </a>
        </li>
        <li class="pc-nav__item">
          <a href="<?php echo esc_url(get_permalink(get_page_by_path('about'))); ?>">
            <p class="pc-nav__main">About&nbsp;us</p>
            <p class="pc-nav__sub">私たちについて</p>
          </a>
        </li>
        <li class="pc-nav__item">
          <a href="<?php echo esc_url(get_permalink(get_page_by_path('information'))); ?>">
            <p class="pc-nav__main">Information</p>
            <p class="pc-nav__sub">ダイビング情報</p>
          </a>
        </li>
        <li class="pc-nav__item">
          <a href="<?php echo esc_url(get_permalink(get_page_by_path('blog'))); ?>">
            <p class="pc-nav__main">Blog</p>
            <p class="pc-nav__sub">ブログ</p>
          </a>
        </li>
        <li class="pc-nav__item">
          <a href="<?php echo esc_url(get_post_type_archive_link('voice')); ?>">
            <p class="pc-nav__main">Voice</p>
            <p class="pc-nav__sub">お客様の声</p>
          </a>
        </li>
        <li class="pc-nav__item">
          <a href="<?php echo esc_url(get_permalink(get_page_by_path('price'))); ?>">
            <p class="pc-nav__main">Price</p>
            <p class="pc-nav__sub">料金一覧</p>
          </a>
        </li>
        <li class="pc-nav__item">
          <a href="<?php echo esc_url(get_permalink(get_page_by_path('faq'))); ?>">
            <p class="pc-nav__main">FAQ</p>
            <p class="pc-nav__sub">よくある質問</p>
          </a>
        </li>
        <li class="pc-nav__item">
          <a href="<?php echo esc_url(get_permalink(get_page_by_path('contact'))); ?>">
            <p class="pc-nav__main">Contact</p>
            <p class="pc-nav__sub">お問合せ</p>
          </a>
        </li>
      </ul>
    </div>
  </div>
</header>

