<?php get_header(); ?>

    <!-- メインビュー -->
    <div class="page-mv">
      <div class="page-mv__inner">
        <div class="page-mv__img">
          <picture>
            <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/about-p-MV-sp.jpg" media="(max-width: 767px)">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/about-p-MV.jpg" alt="一匹のシーサーがこちらを見ている様子">
          </picture>
          <h1 class="page-mv__title">About us</h1>
        </div>
      </div>
    </div>


    <!-- パンくず -->
    <?php get_template_part('parts/breadcrumb') ?>


    <!-- About us -->
    <div class="page-about-us layout-page-about-us">
      <div class="page-about-us__inner inner fish-image">
        <div class="page-about-us__wrap about-us">
          <div class="about-us__contents about-us__contents--page">
            <div class="about-us__img-wrap">
              <div class="about-us__img-left">
                <picture>
                  <img class="u-desktop" src="<?php echo get_theme_file_uri(); ?>/assets/images/common/Aboutas-1.jpg" alt="屋根の上のシーサー">
                </picture>
              </div>
              <div class="about-us__img-right about-us__img-right--page">
                <picture>
                  <source media="(max-width: 768px)" srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/Aboutas-2-sp.jpg">
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/Aboutas-2.jpg" alt="海の中で２匹の魚が泳いでいる様子">
                </picture>
              </div>
            </div>
            <div class="about-us__text-body about-us__text-body--page">
              <h2 class="about-us__sub-titles about-us__sub-titles--page">Dive&nbsp;into<br>the&nbsp;Ocean</h2>
              <div class="about-us__wrap">
              <p class="about-us__sub-texts about-us__sub-texts--page">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br class="u-mobile">
                ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
              </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!--  Gallery -->
    <?php $fields = SCF::get('about-page'); // SCF グループ名: about-page?>
    <?php if (!empty($fields)): // フィールドが空でない場合のみセクションを表示 ?>
      <section class="gallery layout-gallery">
        <div class="gallery__inner inner">
          <div class="gallery__title">
            <div class="title">
              <p class="title__main">Gallery</p>
              <h2 class="title__sub">フォト</h2>
            </div>
          </div>
          <div class="gallery__contents js-modal-open">
            <?php foreach ($fields as $field): ?>
              <?php 
              // 画像IDを取得
              $image_id = $field['gallery-img']; 
              $image_url = wp_get_attachment_url($image_id); // IDから画像URLを取得
              ?>
              <?php if ($image_url): ?>
                <img 
                  src="<?php echo esc_url($image_url); ?>" 
                  alt="ギャラリー画像" 
                  class="gallery__img js-modal-open" 
                  data-img-src="<?php echo esc_url($image_url); ?>">
              <?php endif; ?>
            <?php endforeach; ?>
          </div>

          <div class="gallery__modal js-modal">
            <div class="modal__body">
              <img src="#" alt="拡大画像" class="gallery__img js-modal-img">
            </div>
          </div>
        </div>
      </section>
    <?php endif; // セクション表示条件終了 ?>


<?php get_footer(); ?>