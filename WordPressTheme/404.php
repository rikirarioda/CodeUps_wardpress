<?php get_header(); ?>


    <!-- プライバシーポリシー -->
    <div class="page-404 layout-page-404">
      <div class="page-404__inner inner">
        <div class="breadcrumb">
          <!-- パンくず -->
            <?php get_template_part('parts/breadcrumb'); ?>
        </div>
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/404-p-icon.svg" alt="鯨" class="page-404__img">
        <div class="page-404__content">
          <div class="page-404__wraps">
            <h2 class="page-404__title">404</h2>
            <div class="page-404__wrap">
              <div class="page-404__text">申し訳ありません。<br>お探しのページが見つかりません。</div>
            </div>
            <div class="page-404__button">
              <a href="<?php echo esc_url(home_url('/top')); ?>" class="button-white" >Page TOP<span></span></a>
            </div>
          </div>
        </div>
      </div>
    </div>

<?php get_footer(); ?>


