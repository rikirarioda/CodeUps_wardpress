<?php get_header(); ?>

    <!-- メインビュー -->
    <div class="page-mv">
      <div class="page-mv__inner">
        <div class="page-mv__img">
          <picture>
            <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/Voice-p-MV-sp.jpg" media="(max-width: 767px)">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/Voice-p-MV.jpg" alt="海の中で泳いでいる黄色い魚２尾">
          </picture>
          <h1 class="page-mv__title">Voice</h1>
        </div>
      </div>
    </div>


    <!-- パンくず -->
    <?php get_template_part('parts/breadcrumb') ?>


    <div class="page-voice layout-page-voice">
      <div class="page-voice__inner inner fish-image">
      <div class="page-voice__category-button category-button">
          <div class="category-button__list">
            <!-- ALLタブ -->
            <a class="category-button__tab <?php if (!is_tax('voice_category')) echo 'is-active'; ?>" href="<?php echo get_post_type_archive_link('voice'); ?>">ALL</a>



            <!-- 他のタクソノミー -->
            <?php
              $terms = get_terms([
                'taxonomy' => 'voice_category', // タクソノミー名
                'hide_empty' => true,           // 投稿がないタームを非表示
              ]);
              ?>

              <?php if (!empty($terms) && !is_wp_error($terms)): ?>
                <?php foreach ($terms as $term): ?>
                  <a 
                    class="category-button__tab <?php if (is_tax('voice_category', $term->slug)) echo 'is-active'; ?>" 
                    href="<?php echo esc_url(get_term_link($term)); ?>">
                    <?php echo esc_html($term->name); ?>
                  </a>
                <?php endforeach; ?>
            <?php endif; ?>

          </div>
        </div>

        <?php if (have_posts()): // 投稿がある場合のみセクションを表示 ?>
          <ul class="page-voice__cards voice-cards">
            <?php while (have_posts()): the_post(); ?>
              <li class="voice-cards__card voice-card">
                <div href="<?php the_permalink(); ?>">
                  <div class="voice-card__item-content">
                    <div class="voice-card__box">
                      <div class="voice-card__items">
                        <div class="voice-card__wrap">
                          <p class="voice-card__item-information"><?php the_field('voice_1') ?></p>
                          <?php
                            // 現在の投稿に紐付けられたタクソノミー 'voice_category' の取得
                            $terms = get_the_terms(get_the_ID(), 'voice_category');
                            if (!empty($terms) && !is_wp_error($terms)): 
                              $term_name = $terms[0]->name;
                            else: 
                              $term_name = '未分類';
                            endif;
                          ?>
                          <p class="voice-card__item-tag"><?php echo esc_html($term_name); ?></p>
                        </div>
                        <p class="voice-card__item-title"><?php the_title(); ?></p>
                      </div>
                      <div class="voice-card__item-img colorbox js-colorbox">
                        <?php if (has_post_thumbnail()): ?>
                          <img src="<?php echo esc_url(get_the_post_thumbnail_url(null, 'full')); ?>" alt="<?php echo esc_attr(get_the_title()); ?>のアイキャッチ画像">
                        <?php endif; ?>
                      </div>
                    </div>
                    <p class="voice-card__item-text">
                    <?php
                      if (!empty(get_post_meta(get_the_ID(), 'voice_card_text', true))):
                        echo esc_html(get_post_meta(get_the_ID(), 'voice_card_text', true));
                      elseif (has_excerpt()):
                        the_excerpt();
                      else:
                        the_content();
                      endif;
                    ?>
                    </p>
                  </div>
                </div>
              </li>
            <?php endwhile; ?>
          </ul>
        <?php endif; // 投稿がある場合のみセクションを表示 ?>


      </div>
    </div>


<!-- WP-PageNavi -->
      <nav class="page-campaign__pagination pagination">
            <?php if (function_exists('wp_pagenavi')): ?>
              <?php wp_pagenavi(); ?>
            <?php endif; ?>
      </nav>



<?php get_footer(); ?>

