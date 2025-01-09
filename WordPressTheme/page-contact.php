
<?php get_header(); ?>

    <!-- メインビュー -->
    <div class="page-mv">
      <div class="page-mv__inner">
        <div class="page-mv__img">
          <picture>
            <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/Contact-p-MV-sp.jpg" media="(max-width: 767px)">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/Contact-p-MV.jpg" alt="海の沖の写真">
          </picture>
          <h1 class="page-mv__title">Contact</h1>
        </div>

      </div>
    </div>


    <!-- パンくず -->
    <?php get_template_part('parts/breadcrumb') ?>


    <!-- コンタクト -->
    <div class="page-contact layout-page-contact">
      <div class="page-contact__inner inner fish-image">
        <?php echo do_shortcode('[contact-form-7 id="63c9611" title="お問い合わせ"]'); ?>
      </div>
    </div>

<?php get_footer(); ?>