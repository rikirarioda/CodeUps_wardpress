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


    <!-- サンクスページ -->
      <div class="thanks layout-page-thanks">
        <div class="thanks__inner inner">
          <p class="thanks__text-top">お問い合わせ内容を送信完了しました。</p>
          <p class="thanks__text-bottom">
            このたびは、お問い合わせ頂き<br class="u-mobile">誠にありがとうございます。<br
            >お送り頂きました内容を確認の上、<br class="u-mobile">3営業日以内に折り返しご連絡させて頂きます。<br
            >また、ご記入頂いたメールアドレスへ、<br class="u-mobile">自動返信の確認メールをお送りしております。
          </p>
        </div>
      </div>
<?php get_footer(); ?>