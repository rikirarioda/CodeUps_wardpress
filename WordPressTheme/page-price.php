<?php get_header(); ?>

    <!-- メインビュー -->
    <div class="page-mv">
      <div class="page-mv__inner">
        <div class="page-mv__img">
          <picture>
            <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/Price-p-MV-sp.jpg" media="(max-width: 767px)">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/Price-p-MV.jpg" alt="海の中に潜っている様子">
          </picture>
          <h1 class="page-mv__title">Price</h1>
        </div>
      </div>
    </div>

    <!-- パンくず -->
  <?php get_template_part('parts/breadcrumb') ?>

    <!-- price -->
    <div class="page-price layout-page-price">
      <div class="page-price__inner inner fish-image">
        <div class="page-price__container price-content">

          <!-- ライセンス講習 -->
          <?php 
          $price_title1 = SCF::get('price_title1'); // タイトルを取得
          $price_list1 = SCF::get('price_list1'); // 繰り返しグループを取得
          ?>
          <?php if (!empty($price_title1) && !empty($price_list1)): ?>
            <div id="license-course" class="price-content__item price-table">
              <div class="price-table__heading">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/Price.svg" alt="ヒトデのアイコン">
                <?php echo esc_html($price_title1); ?>
              </div>
              <table class="price-table__table">
                <?php foreach ($price_list1 as $row): ?>
                  <tr class="price-table__list">
                    <td class="price-table__text">
                      <?php echo nl2br(esc_html($row['price_text1'])); ?>
                    </td>
                    <td class="price-table__price-menu">
                      <?php echo esc_html($row['price_1']); ?>
                    </td>
                  </tr>
                <?php endforeach; ?>
              </table>
            </div>
          <?php endif; ?>

          <!-- 体験ダイビング -->
          <?php 
          $price_title2 = SCF::get('price_title2'); 
          $price_list2 = SCF::get('price_list2'); 
          ?>
          <?php if (!empty($price_title2) && !empty($price_list2)): ?>
            <div id="trial-diving" class="price-content__item price-table">
              <div class="price-table__heading">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/Price.svg" alt="ヒトデのアイコン">
                <?php echo esc_html($price_title2); ?>
              </div>
              <table class="price-table__table">
                <?php foreach ($price_list2 as $row): ?>
                  <tr class="price-table__list">
                    <td class="price-table__text">
                      <?php echo nl2br(esc_html($row['price_text2'])); ?>
                    </td>
                    <td class="price-table__price-menu">
                      <?php echo esc_html($row['price_2']); ?>
                    </td>
                  </tr>
                <?php endforeach; ?>
              </table>
            </div>
          <?php endif; ?>

          <!-- ファンダイビング -->
          <?php 
          $price_title3 = SCF::get('price_title3'); 
          $price_list3 = SCF::get('price_list3'); 
          ?>
          <?php if (!empty($price_title3) && !empty($price_list3)): ?>
            <div id="diving-fun" class="price-content__item price-table">
              <div class="price-table__heading">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/Price.svg" alt="ヒトデのアイコン">
                <?php echo esc_html($price_title3); ?>
              </div>
              <table class="price-table__table">
                <?php foreach ($price_list3 as $row): ?>
                  <tr class="price-table__list">
                    <td class="price-table__text">
                      <?php echo nl2br(esc_html($row['price_text3'])); ?>
                    </td>
                    <td class="price-table__price-menu">
                      <?php echo esc_html($row['price_3']); ?>
                    </td>
                  </tr>
                <?php endforeach; ?>
              </table>
            </div>
          <?php endif; ?>

          <!-- スペシャルダイビング -->
          <?php 
          $price_title4 = SCF::get('price_title4'); 
          $price_list4 = SCF::get('price_list4'); 
          ?>
          <?php if (!empty($price_title4) && !empty($price_list4)): ?>
            <div class="price-content__item price-table">
              <div class="price-table__heading">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/Price.svg" alt="ヒトデのアイコン">
                <?php echo esc_html($price_title4); ?>
              </div>
              <table class="price-table__table">
                <?php foreach ($price_list4 as $row): ?>
                  <tr class="price-table__list">
                    <td class="price-table__text">
                      <?php echo nl2br(esc_html($row['price_text4'])); ?>
                    </td>
                    <td class="price-table__price-menu">
                      <?php echo esc_html($row['price_4']); ?>
                    </td>
                  </tr>
                <?php endforeach; ?>
              </table>
            </div>
          <?php endif; ?>

        </div>
      </div>
    </div>

<?php get_footer(); ?>



