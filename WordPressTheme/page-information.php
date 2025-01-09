<?php get_header(); ?>

    <!-- メインビュー -->
    <div class="page-mv">
      <div class="page-mv__inner">
        <div class="page-mv__img">
          <picture>
            <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/Information-p-MV-sp.jpg" media="(max-width: 767px)">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/Information-p-MV.jpg" alt="海の中で泳いでいる黄色い魚とダイバーさん">
          </picture>
          <h1 class="page-mv__title">Information</h1>
        </div>
      </div>
    </div>


    <!-- パンくず -->
  <?php get_template_part('parts/breadcrumb') ?>


    <!-- information -->
    <div class="page-information layout-page-information">
      <div class="page-information__inner inner fish-image">
        <div class="page-information__tab tab">
          <div class="tab__list">
            <button class="tab__button tab__example-mask--white js-tab-list is-active" id="license-lecture">
              <span class="u-desktop"></span>ライセンス<br class="u-mobile">講習
            </button>
            <button class="tab__button tab__example-mask--green js-tab-list" id="fun-diving">
              <span class="u-desktop"></span>ファン<br class="u-mobile">ダイビング
            </button>
            <button class="tab__button tab__example-mask--green2 js-tab-list" id="intro-diving">
              <span class="u-desktop"></span>体験<br class="u-mobile">ダイビング
            </button>
          </div>
          
          <div class="tab__contents">
            <div class="tab__content js-information-tab-content is-active">
              <div class="tab__item">
                <div class="tab__wrap">
                  <p class="tab__title">ライセンス講習</p>
                  <p class="tab__text">泳げない人も、ちょっと水が苦手な人も、ダイビングを「安全に」楽しんでいただけるよう、スタッフがサポートいたします&#33;ス<br class="u-desktop">キューバダイビングを楽しむ<br class="u-mobile">ためには最低限の知識とスキルが要求されます。知識やスキルと言ってもそんなに難しい事ではなく、安全に楽しむ事を目的としたものです。プロダイバーの指導のもと知識とスキルを習得しCカード<br class="u-mobile">を取得して、ダイバーになろう&#33;</p>
                </div>
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/Information-p-img1.jpg" alt="5人の人がダイビングをしている様子" class="tab__img">
              </div>
            </div>
            <div class="tab__content js-information-tab-content">
              <div class="tab__item">
                <div class="tab__wrap">
                  <p class="tab__title">ファンダイビング</p>
                  <p class="tab__text">ブランクダイバー、ライセンスを取り立ての方も安心&#33;沖縄本島を代表する「青の洞窟」（真栄田岬）やケラマ諸島などメジャーなポイントはモチロンのこと、最北端「辺戸岬」や最南端の「大渡海岸」等もご用意&#33;</p>
                </div>
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/Information-p-img2.jpg" alt="沢山のピンク色の魚が泳いでいる様子" class="tab__img">
              </div>
            </div>
            <div class="tab__content js-information-tab-content">
              <div class="tab__item">
                <div class="tab__wrap">
                  <p class="tab__title">体験ダイビング</p>
                  <p class="tab__text">ブランクダイバー、ライセンスを取り立ての方も安心&#33;沖縄本島を代表する「青の洞窟」（真栄田岬）やケラマ諸島などメジャーなポイントはモチロンのこと、最北端「辺戸岬」や最南端の「大渡海岸」等もご用意&#33;</p>
                </div>
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/Information-p-img3.jpg" alt="二匹の黄色と青色の魚が泳いでいる様子" class="tab__img">
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>




<?php get_footer(); ?>


