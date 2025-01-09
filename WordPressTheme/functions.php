<?php 
function add_custom_scripts() {
  // Google Fontsの追加
  wp_enqueue_style( 'google-fonts-montserrat', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Noto+Serif+JP:wght@300;400;500;700&display=swap', false );
  wp_enqueue_style( 'google-fonts-noto', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Noto+Sans+JP:wght@400;700&family=Noto+Serif+JP:wght@300;400;500;700&display=swap', false );

  // swiperのCSSの追加
  wp_enqueue_style( 'swiper', 'https://unpkg.com/swiper@8/swiper-bundle.min.css', false );

  // テーマのCSSの追加
  wp_enqueue_style( 'theme-styles', get_theme_file_uri('assets/css/style.css'), false );

  // jQueryの追加
  wp_enqueue_script( 'jquery', 'https://code.jquery.com/jquery-3.6.0.js', array(), '3.6.0', true );

  // swiperのJSの追加
  wp_enqueue_script( 'swiper', 'https://unpkg.com/swiper@8/swiper-bundle.min.js', array('jquery'), '8.0.0', true );

  // テーマのJSの追加
  wp_enqueue_script( 'theme-scripts', get_theme_file_uri('assets/js/script.js'), array('jquery'), '1.0.0', true );
}

  /* -------------------------------------------------------------------------------- */
add_action( 'wp_enqueue_scripts', 'add_custom_scripts' );

// crossorigin属性を持つタグに対する対応
function add_rel_preconnect( $html, $handle, $href, $media ) {
  if ( 'google-fonts-montserrat' === $handle || 'google-fonts-noto' === $handle || 'swiper' === $handle ) {
      $html = <<<EOT
<link rel='preconnect' href='https://fonts.googleapis.com'>
<link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
$html
EOT;
  }
  return $html;
}

add_filter( 'style_loader_tag', 'add_rel_preconnect', 10, 4 );

  /* -------------------------------------------------------------------------------- */
function my_setup() {
	add_theme_support( 'post-thumbnails' ); /* アイキャッチ */
	add_theme_support( 'automatic-feed-links' ); /* RSSフィード */
	add_theme_support( 'title-tag' ); /* タイトルタグ自動生成 */
	add_theme_support(
		'html5',
		array( /* HTML5のタグで出力 */
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		)
	);
}
add_action( 'after_setup_theme', 'my_setup' );

add_theme_support('post-thumbnails');
add_image_size('custom-size', 300, 200, true); // 300x200px のカスタムサイズを登録

  /* -------------------------------------------------------------------------------- */
//アーカイブの表示件数変更
function change_posts_per_page($query) {
  if ( is_admin() || ! $query->is_main_query() )
      return;
  if ( $query->is_archive('voice') ) { //カスタム投稿タイプを指定
      $query->set( 'posts_per_page', '6' ); //表示件数を指定
  }
}
add_action( 'pre_get_posts', 'change_posts_per_page' );


  /* -------------------------------------------------------------------------------- */
//ページネーション
function custom_wp_pagenavi_text($html) {
  // 矢印用のHTMLをカスタマイズ
  $html = str_replace('« Previous', '<span class="pagination-arrow">«</span>', $html);
  $html = str_replace('Next »', '<span class="pagination-arrow">»</span>', $html);
  return $html;
}
add_filter('wp_pagenavi', 'custom_wp_pagenavi_text');

  /* -------------------------------------------------------------------------------- */
//キャンペーン
register_post_type('campaign', [
  'label' => 'キャンペーン',
  'public' => true,
  'has_archive' => true,
  'supports' => ['title', 'editor', 'thumbnail', 'custom-fields'],
  'rewrite' => ['slug' => 'campaign'],
]);

register_taxonomy('campaign_category', 'campaign', [
  'label' => 'カテゴリー',
  'hierarchical' => true,
  'rewrite' => ['slug' => 'campaign-category'],
]);

  /* -------------------------------------------------------------------------------- */
/* ---------- 「投稿」の表記変更 ---------- */
function Change_menulabel() {
  global $menu;
  global $submenu;
  $name = 'ブログ';
  $menu[5][0] = $name;
  $submenu['edit.php'][5][0] = $name.'一覧';
  $submenu['edit.php'][10][0] = '新規'.$name.'投稿';
}
function Change_objectlabel() {
  global $wp_post_types;
  $name = 'ブログ';
  $labels = &$wp_post_types['post']->labels;
  $labels->name = $name;
  $labels->singular_name = $name;
  $labels->add_new = _x('追加', $name);
  $labels->add_new_item = $name.'の新規追加';
  $labels->edit_item = $name.'の編集';
  $labels->new_item = '新規'.$name;
  $labels->view_item = $name.'を表示';
  $labels->search_items = $name.'を検索';
  $labels->not_found = $name.'が見つかりませんでした';
  $labels->not_found_in_trash = 'ゴミ箱に'.$name.'は見つかりませんでした';
}
add_action( 'init', 'Change_objectlabel' );
add_action( 'admin_menu', 'Change_menulabel' );


// Contact Form 7で自動挿入されるPタグ、brタグを削除
add_filter('wpcf7_autop_or_not', 'wpcf7_autop_return_false');
function wpcf7_autop_return_false() {
  return false;
}


  /* -------------------------------------------------------------------------------- */
  // jquery-inviewリンク先指定
function enqueue_scripts() {
  wp_enqueue_script('jquery');
  wp_enqueue_script(
      'jquery-inview',
      get_theme_file_uri('/assets/js/jquery.inview.min.js'), // 正しいパスを指定
      array('jquery'),
      null,
      true
  );
}
add_action('wp_enqueue_scripts', 'enqueue_scripts');
