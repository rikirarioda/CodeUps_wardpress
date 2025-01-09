<?php get_header(); ?>

  <main>
    <!-- メインビュー -->
    <div class="mv js-mv">
      <div class="mv__inner">
        <div class="mv__slider swiper js-main-swiper">
          <div class="swiper-wrapper">
            <!-- "swiper-slide"が増えるごとにスライドの数が増える -->
            <div class="swiper-slide">
              <picture>
                <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/MV-1.jpg" media="(min-width: 1025px)">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/MV-1-sp.jpg" alt="亀が海を泳いでいる様子">
              </picture>
            </div>
            <div class="swiper-slide">
              <picture>
                <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/MV-2.jpg" media="(min-width: 1025px)">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/MV-2-sp.jpg" alt="亀とダイビングスーツを着た人が泳いでいる様子">
              </picture>
            </div>
            <div class="swiper-slide">
              <picture>
                <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/MV-3.jpg" media="(min-width: 1025px)">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/MV-3-sp.jpg" alt="海と山と船の写真">
              </picture>
            </div>
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
              <li class="campaign__card swiper-slide">
                <a href="#">
                  <div class="campaign__card-img">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign1.jpg" alt="たくさんの魚が泳いでいる様子">
                  </div>
                  <div class="campaign__card-body">
                    <div class="campaign__card-meta">
                      <span class="campaign__card-tag">ライセンス講習</span>
                      <p class="campaign__card-category">ライセンス取得</p>
                    </div>
                    <div class="campaign__card-contents">
                      <p class="campaign__card-title">全部コミコミ(お一人様)</p>
                      <div class="campaign__card-price--body">
                        <span class="campaign__card-original--price">¥56,000</span>
                        <span class="campaign__card-discounted--price">¥46,000</span>
                      </div>
                    </div>
                  </div>
                </a>
              </li>
              <li class="campaign__card swiper-slide">
                <a href="#">
                  <div class="campaign__card-img">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign2.jpg" alt="船が出向する様子">
                  </div>
                  <div class="campaign__card-body">
                    <div class="campaign__card-meta">
                      <span class="campaign__card-tag">体験ダイビング</span>
                      <p class="campaign__card-category">貸切体験ダイビング</p>
                    </div>
                    <div class="campaign__card-contents">
                      <p class="campaign__card-title">全部コミコミ(お一人様)</p>
                      <div class="campaign__card-price--body">
                        <span class="campaign__card-original--price">¥24,000</span>
                        <span class="campaign__card-discounted--price">¥18,000</span>
                      </div>
                    </div>
                  </div>
                </a>
              </li>
              <li class="campaign__card swiper-slide">
                <a href="#">
                  <div class="campaign__card-img">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign3.jpg" alt="たくさんのクラゲが泳いでいる様子">
                  </div>
                  <div class="campaign__card-body">
                    <div class="campaign__card-meta">
                      <span class="campaign__card-tag">体験ダイビング</span>
                      <p class="campaign__card-category">ナイトダイビング</p>
                    </div>
                    <div class="campaign__card-contents">
                      <p class="campaign__card-title">全部コミコミ(お一人様)</p>
                      <div class="campaign__card-price--body">
                        <span class="campaign__card-original--price">¥10,000</span>
                        <span class="campaign__card-discounted--price">¥8,000</span>
                      </div>
                    </div>
                  </div>
                </a>
              </li>
              <li class="campaign__card swiper-slide">
                <a href="#">
                  <div class="campaign__card-img">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign4.jpg" alt="ファンダイビングしている様子">
                  </div>
                  <div class="campaign__card-body">
                    <div class="campaign__card-meta">
                      <span class="campaign__card-tag">ファンダイビング</span>
                      <p class="campaign__card-category">貸し切りファンダイビング</p>
                    </div>
                    <div class="campaign__card-contents">
                      <p class="campaign__card-title">全部コミコミ(お一人様)</p>
                      <div class="campaign__card-price--body">
                        <span class="campaign__card-original--price">¥20,000</span>
                        <span class="campaign__card-discounted--price">¥16,000</span>
                      </div>
                    </div>
                  </div>
                </a>
              </li>
            </ul>
          </div>
          <div class="campaign__button">
            <a href="page-campaign.html" class="button">View more<span></span></a>
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
                    <a href="#" class="button">View more<span></span></a>
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
              <a href="#" class="button">View more<span></span></a>
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
          <li class="blog-cards__card blog-card">
            <a href="">
              <div class="blog-card__item-img">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/Blog-1.jpg" alt="イソギンチャク">
              </div>
              <div class="blog-card__item-content">
                <time class="blog-card__item-category">2023.11/17</time>
                <p class="blog-card__item-title">ライセンス取得</p>
                <p class="blog-card__item-text">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
                    ここにテキストが入ります。ここにテキストが入ります。ここにテキスト</p>
              </div>
            </a>
          </li>
          <li class="blog-cards__card blog-card">
            <a href="">
              <div class="blog-card__item-img">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/Blog-2.jpg" alt="ウミガメ">
              </div>
              <div class="blog-card__item-content">
                <time class="blog-card__item-category">2023.11/17</time>
                <p class="blog-card__item-title">ウミガメと泳ぐ</p>
                <p class="blog-card__item-text">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
                    ここにテキストが入ります。ここにテキストが入ります。ここにテキスト</p>
              </div>
            </a>
          </li>
          <li class="blog-cards__card blog-card">
            <a href="">
              <div class="blog-card__item-img">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/blog-3.jpg" alt="カクレクマノミ">
              </div>
              <div class="blog-card__item-content">
                <time class="blog-card__item-category">2023.11/17</time>
                <p class="blog-card__item-title">カクレクマノミ</p>
                <p class="blog-card__item-text">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
                    ここにテキストが入ります。ここにテキストが入ります。ここにテキスト</p>
              </div>
            </a>
          </li>
        </ul>
        <div class="blog__button">
          <a href="#" class="button">View more<span></span></a>
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
            <li class="voice-cards__card voice-card">
              <a href="">
                <div class="voice-card__item-content">
                  <div class="voice-card__box">
                    <div class="voice-card__items">
                    <div class="voice-card__wrap">
                      <p class="voice-card__item-information">20代(女性)</p>
                      <p class="voice-card__item-tag">ライセンス講習</p>
                    </div>
                      <p class="voice-card__item-title">
                          ここにタイトルが入ります。ここにタイトル
                      </p>
                      </div>
                      <div class="voice-card__item-img colorbox js-colorbox">
                          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/Voice-1.jpg" alt="帽子を被った女性の写真">
                      </div>
                  </div>
                    <p class="voice-card__item-text">
                      ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
                      ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
                      ここにテキストが入ります。ここにテキストが入ります。
                    </p>
                </div>
              </a>
            </li>
            <li class="voice-cards__card voice-card">
              <a href="">
                <div class="voice-card__item-content">
                  <div class="voice-card__box">
                    <div class="voice-card__items">
                    <div class="voice-card__wrap">
                      <p class="voice-card__item-information">30代(男性)</p>
                      <p class="voice-card__item-tag">ファンダイビング</p>
                    </div>
                      <p class="voice-card__item-title">
                          ここにタイトルが入ります。ここにタイトル
                      </p>
                      </div>
                      <div class="voice-card__item-img colorbox js-colorbox">
                          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/Voice-2.jpg" alt="グットポーズをした男性の写真">
                      </div>
                  </div>
                    <p class="voice-card__item-text">
                      ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
                      ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
                      ここにテキストが入ります。ここにテキストが入ります。
                    </p>
                </div>
              </a>
            </li>
          </ul>
          <div class="voice__button">
            <a href="#" class="button">View more<span></span></a>
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
              <div class="price__item">
                <h3 class="price__heading">ライセンス講習</h3>
                <dl class="price__list">
                  <div class="price__item-container">
                    <dt class="price__text">オープンウォーターダイバーコース</dt>
                    <dd class="price__price-menu">¥50,000</dd>
                  </div>
                  <div class="price__item-container">
                    <dt class="price__text">アドバンスドオープンウォーターコース</dt>
                    <dd class="price__price-menu">¥60,000</dd>
                  </div>
                  <div class="price__item-container">
                    <dt class="price__text">レスキュー＋EFRコース</dt>
                    <dd class="price__price-menu">¥70,000</dd>
                  </div>
                </dl>
              </div>
              <div class="price__item">
                <h3 class="price__heading">体験ダイビング</h3>
                <dl class="price__list">
                  <div class="price__item-container">
                    <dt class="price__text">ビーチ体験ダイビング(半日)</dt>
                    <dd class="price__price-menu">¥7,000</dd>
                  </div>
                  <div class="price__item-container">
                    <dt class="price__text">ビーチ体験ダイビング(1日)</dt>
                    <dd class="price__price-menu">¥14,000</dd>
                  </div>
                  <div class="price__item-container">
                    <dt class="price__text">ボート体験ダイビング(半日)</dt>
                    <dd class="price__price-menu">¥10,000</dd>
                  </div>
                  <div class="price__item-container">
                    <dt class="price__text">ボート体験ダイビング(1日)</dt>
                    <dd class="price__price-menu">¥18,000</dd>
                  </div>
                </dl>
              </div>
              <div class="price__item">
                <h3 class="price__heading">ファンダイビング</h3>
                <dl class="price__list">
                  <div class="price__item-container">
                    <dt class="price__text">ビーチダイビング(2ダイブ)</dt>
                    <dd class="price__price-menu">¥14,000</dd>
                  </div>
                  <div class="price__item-container">
                    <dt class="price__text">ボートダイビング(2ダイブ)</dt>
                    <dd class="price__price-menu">¥18,000</dd>
                  </div>
                  <div class="price__item-container">
                    <dt class="price__text">スペシャルダイビング(2ダイブ)</dt>
                    <dd class="price__price-menu">¥24,000</dd>
                  </div>
                  <div class="price__item-container">
                    <dt class="price__text">ナイトダイビング(1ダイブ)</dt>
                    <dd class="price__price-menu">¥10,000</dd>
                  </div>
                </dl>
              </div>
              <div class="price__item">
                <h3 class="price__heading">スペシャルダイビング</h3>
                <dl class="price__list">
                  <div class="price__item-container">
                    <dt class="price__text">貸切ダイビング(2ダイブ)</dt>
                    <dd class="price__price-menu">¥24,000</dd>
                  </div>
                  <div class="price__item-container">
                    <dt class="price__text">1日ダイビング(3ダイブ)</dt>
                    <dd class="price__price-menu">¥32,000</dd>
                  </div>
                </dl>
              </div>
            </div>
          </div>
          <div class="price__button">
            <a href="#" class="button">View more<span></span></a>
          </div>
        </div>
        </div>
    </section>

  </main>

<?php get_footer(); ?>