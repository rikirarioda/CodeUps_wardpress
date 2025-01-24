<?php get_header(); ?>

    <!-- メインビュー -->
    <div class="page-mv">
      <div class="page-mv__inner">
        <div class="page-mv__img">
          <picture>
            <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/Site_MAP-p-MV-sp.jpg" media="(max-width: 767px)">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/Site_MAP-p-MV.jpg" alt="海の中で沢山の魚が泳いでいる様子">
          </picture>
          <h1 class="page-mv__title">Terms of Service</h1>
        </div>
      </div>
    </div>


    <!-- パンくず -->
  <?php get_template_part('parts/breadcrumb') ?>

    <!-- プライバシーポリシー -->
    <div class="page-termsofservice layout-page-termsofservice">
      <div class="page-termsofservice__inner inner fish-image">
        <h2 class="page-termsofservice__title"><?php the_title(); ?></h2>
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
              <div class="page-termsofservice__box">
                  <?php the_content(); ?>
              </div>
          <?php endwhile;endif; ?>
      </div>
    </section>

<?php get_footer(); ?>


