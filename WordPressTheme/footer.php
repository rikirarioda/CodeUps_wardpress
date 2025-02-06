
<!-- Contact-top -->
<?php if (!is_404() && !is_page(array('thanks', 'contact'))): // 404ページと特定の固定ページではない場合に表示 ?>
<section id="#" class="contact-top layout-contact-top">
  <div class="contact-top__inner inner">
    <div class="contact-top__contents">
      <div class="contact-top__map">
        <h3 class="contact-top__logo-wrap">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/icon-revers.svg" class="contact-top__logo" alt="ロゴ">
        </h3>
        <div class="contact-top__text-wrap">
          <div class="contact-top__text">
            <p>沖縄県那覇市1-1</p>
            <p><a href="tel:01200000000">TEL:0120-000-0000</a></p>
            <p>営業時間:8:30-19:00</p>
            <p>定休日:毎週火曜日</p>
          </div>
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d57272.98530030893!2d127.64350223082273!3d26.21093643736236!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34e5697141a6b58b%3A0x2cd8aff616585e98!2z5rKW57iE55yM6YKj6KaH5biC!5e0!3m2!1sja!2sjp!4v1714199998793!5m2!1sja!2sjp" 
                  width="295" height="160" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
      <div class="contact-top__title-wrap">
        <div class="contact-top__title">
          <div class="title">
            <p class="title__main title__main--contact-top">Contact</p>
            <h2 class="title__sub title__sub--contact-top">お問い合わせ</h2>
          </div>
        </div>
        <p class="contact-top__sub-text">ご予約・お問合せはコチラ</p>
        <div class="contact-top__button">
          <a href="<?php echo esc_url(home_url('/contact')); ?>" class="button">Contact us<span></span></a>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>



    <a href="<?php echo esc_url(home_url('/')); ?>" class="back-to-top js-back-to-top">
      <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/Contact-icon.svg" alt="トップへ戻るボタン">
    </a>
    <footer class="footer layout-footer <?php if (is_404()) echo 'layout-page-404--footer'; ?>">
     <div class="footer__wrap">
    <div class="footer__icon-wrap">
      <a href="<?php echo esc_url(home_url('/')); ?>" class="footer__logo">
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/icon.svg" alt="ロゴ">
      </a>
      <div class="footer__sns-wrap">
        <a href="https://www.facebook.com/" target="_blank" class="footer__sns">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/FacebookLogo.svg" alt="facebookのロゴ">
        </a>
        <a href="https://www.instagram.com/" target="_blank" class="footer__sns">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/InstagramLogo.svg" alt="instagramのロゴ">
        </a>
      </div>
    </div>
    <div class="footer__list">
      <div class="footer__left">
        <div class="footer__pc">
          <div class="footer__link footer-link">
            <a href="<?php echo esc_url(get_post_type_archive_link('campaign')); ?>" class="footer-link__main">
              <div class="footer-link__icon">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/hitode.svg" alt="ヒトデのアイコン">
              </div>
              <p class="footer-link__text">キャンペーン</p>
            </a>
            <div class="footer-link__details">
            <?php
                //　カスタム投稿タイプ『campaign』にカテゴリ(タクソノミー)が追加される度に、そのタクソノミーの一覧ページへのリンクが生成されるようにする。
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
          <div class="footer__link footer-link">
            <a href="<?php echo esc_url(get_permalink(get_page_by_path('about'))); ?>" class="footer-link__main">
              <div class="footer-link__icon">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/hitode.svg" alt="ヒトデのアイコン">
              </div>
              <p class="footer-link__text">私たちについて</p>
            </a>
          </div>
        </div>
        <div class="footer__pc">
          <div class="footer__link footer-link">
            <a href="<?php echo esc_url(get_permalink(get_page_by_path('information'))); ?>" class="footer-link__main">
              <div class="footer-link__icon">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/hitode.svg" alt="ヒトデのアイコン">
              </div>
              <p class="footer-link__text">ダイビング情報</p>
            </a>
            <div class="footer-link__details">
              <a href="<?php echo esc_url(get_permalink(get_page_by_path('information'))); ?>?tab=license-lecture" class="footer-link__detail">ライセンス講習</a>
              <a href="<?php echo esc_url(get_permalink(get_page_by_path('information'))); ?>?tab=intro-diving" class="footer-link__detail">体験ダイビング</a>
              <a href="<?php echo esc_url(get_permalink(get_page_by_path('information'))); ?>?tab=fun-diving" class="footer-link__detail">ファンダイビング</a>
            </div>
          </div>
          <div class="footer__link footer-link">
            <a href="<?php echo esc_url(get_permalink(get_page_by_path('blog'))); ?>" class="footer-link__main">
              <div class="footer-link__icon">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/hitode.svg" alt="ヒトデのアイコン">
              </div>
              <p class="footer-link__text">ブログ</p>
            </a>
          </div>
        </div>
      </div>
      <div class="footer__right">
        <div class="footer__pc">
          <div class="footer__link footer-link">
            <a href="<?php echo esc_url(get_post_type_archive_link('voice')); ?>" class="footer-link__main">
              <div class="footer-link__icon">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/hitode.svg" alt="ヒトデのアイコン">
              </div>
              <p class="footer-link__text">お客様の声</p>
            </a>
          </div>
          <div class="footer__link footer-link">
            <a href="<?php echo esc_url(get_permalink(get_page_by_path('price'))); ?>" class="footer-link__main">
              <div class="footer-link__icon">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/hitode.svg" alt="ヒトデのアイコン">
              </div>
              <p class="footer-link__text">料金一覧</p>
            </a>
            <div class="footer-link__details">
              <a href="<?php echo esc_url(get_permalink(get_page_by_path('price'))); ?>#license-course" class="footer-link__detail">ライセンス講習</a>
              <a href="<?php echo esc_url(get_permalink(get_page_by_path('price'))); ?>#trial-diving" class="footer-link__detail">体験ダイビング</a>
              <a href="<?php echo esc_url(get_permalink(get_page_by_path('price'))); ?>#diving-fun" class="footer-link__detail">ファンダイビング</a>
              <a href="<?php echo esc_url(get_permalink(get_page_by_path('price'))); ?>#special-diving" class="footer-link__detail">スペシャルダイビング</a>
            </div>
          </div>
        </div>
        <div class="footer__pc">
          <div class="footer__link footer-link">
            <a href="<?php echo esc_url(get_permalink(get_page_by_path('faq'))); ?>" class="footer-link__main">
              <div class="footer-link__icon">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/hitode.svg" alt="ヒトデのアイコン">
              </div>
              <p class="footer-link__text">よくある質問</p>
            </a>
          </div>
          <div class="footer__link footer-link">
            <a href="<?php echo esc_url(get_permalink(get_page_by_path('sitemap'))); ?>" class="footer-link__main">
              <div class="footer-link__icon">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/hitode.svg" alt="ヒトデのアイコン">
              </div>
              <p class="footer-link__text">サイトマップ</p>
            </a>
          </div>
          <div class="footer__link footer-link">
            <a href="<?php echo esc_url(get_permalink(get_page_by_path('privacypolicy'))); ?>" class="footer-link__main">
              <div class="footer-link__icon">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/hitode.svg" alt="ヒトデのアイコン">
              </div>
              <p class="footer-link__text">プライバシーポリシー</p>
            </a>
          </div>
          <div class="footer__link footer-link">
            <a href="<?php echo esc_url(get_permalink(get_page_by_path('terms-of-service'))); ?>" class="footer-link__main">
              <div class="footer-link__icon">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/hitode.svg" alt="ヒトデのアイコン">
              </div>
              <p class="footer-link__text">利用規約</p>
            </a>
          </div>
          <div class="footer__link footer-link">
            <a href="<?php echo esc_url(get_permalink(get_page_by_path('contact'))); ?>" class="footer-link__main">
              <div class="footer-link__icon">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/hitode.svg" alt="ヒトデのアイコン">
              </div>
              <p class="footer-link__text">お問い合わせ</p>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <small class="footer__copyright">Copyright&nbsp;&copy;&nbsp;2021&nbsp;-&nbsp;2023&nbsp;CodeUps&nbsp;LLC.&nbsp;All&nbsp;Rights&nbsp;Reserved.</small>
</footer>

    <?php wp_footer(); ?>
  </body>
</html>