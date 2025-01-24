<?php get_header(); ?>

    <!-- メインビュー -->
    <div class="page-mv">
      <div class="page-mv__inner">
        <div class="page-mv__img">
          <picture>
            <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/FAQ-p-MV-sp.jpg" media="(max-width: 767px)">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/FAQ-p-MV.jpg" alt="海の砂浜の写真">
          </picture>
          <h1 class="page-mv__title">FAQ</h1>
        </div>
      </div>
    </div>


    <!-- パンくず -->
    <?php get_template_part('parts/breadcrumb') ?>

    <!-- faq -->
    <?php // SCFの繰り返しフィールドを取得
        $faq_items = SCF::get('faq_1'); // 繰り返しグループ名: faq_1
    ?>

    <?php if (!empty($faq_items)): // FAQ項目が存在する場合のみセクションを表示 ?>
      <div class="page-faq layout-page-faq">
        <div class="page-faq__inner inner fish-image">
          <div class="page-faq__accordion accordion js-accordion-list">
            <?php foreach ($faq_items as $faq): ?>
              <div class="accordion__item js-accordion-item">
                <h3 class="accordion__title js-accordion-title">
                  <?php echo esc_html($faq['question_1']); // 質問 ?>
                </h3>
                <div class="accordion__content">
                  <p class="accordion__text">
                    <?php echo nl2br(esc_html($faq['answer_1'])); // 答え ?>
                  </p>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    <?php endif; // セクション表示条件終了 ?>




<?php get_footer(); ?>


