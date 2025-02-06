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
 //キャンペーンカード・お客様の声（Voice）_投稿件数の変更
function change_posts_per_page($query) {
  if ( is_admin() || ! $query->is_main_query() )
      return;

  // カスタム投稿タイプ 'voice' の表示件数を設定
  if ( $query->is_archive('voice') ) {
      $query->set( 'posts_per_page', 6 ); // 表示件数を6件に設定
  }

  // カスタム投稿タイプ 'campaign' の表示件数を設定
  if ( $query->is_post_type_archive('campaign') ) { 
      $query->set( 'posts_per_page', 4 ); // 表示件数を4件に設定
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
//キャンペーン　カテゴリータブ
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
/* ---------- 「投稿」の表記変更_（例）ブログに変更 ---------- */
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



/* -------------------------------------------------------------------------------- */
//管理画面カスタム
/* -------------------------------------------------------------------------------- */

//固定ページの料金一覧とよくある質問を管理画面サイドバーに表示
function add_custom_menu() {
  // 料金一覧（post ID: 55）のメニュー
  add_menu_page(
    '料金一覧', // ページタイトル
    '料金一覧', // サイドバーのラベル
    'manage_options', // 権限
    'post.php?post=55&action=edit', // スラッグ名（クリック先のURL）
    '', // 遷移後に実行する関数（リンク先が指定されているので不要）
    'dashicons-welcome-widgets-menus', // アイコン
    '13' // 表示位置
  );

  // FAQ（post ID: 59）のメニュー
  add_menu_page(
    'FAQ', // ページタイトル
    'FAQ', // サイドバーのラベル
    'manage_options', // 権限
    'post.php?post=59&action=edit', // スラッグ名（クリック先のURL）
    '', // 遷移後に実行する関数（リンク先が指定されているので不要）
    'dashicons-search', // アイコン
    '14' // 表示位置（13と異なる位置に配置）
  );

  // 私たちについて（post ID: 48）のメニュー
  add_menu_page(
    'ギャラリー画像', // ページタイトル
    'ギャラリー画像', // サイドバーのラベル
    'manage_options', // 権限
    'post.php?post=48&action=edit', // スラッグ名（クリック先のURL）
    '', // 遷移後に実行する関数（リンク先が指定されているので不要）
    'dashicons-format-image', // アイコン
    '15' // 表示位置（13と異なる位置に配置）
  );
}
add_action('admin_menu', 'add_custom_menu');

/* -------------------------------------------------------------------------------- */
//【管理画面】ダッシュボードカスタマイズ（初期ウィジェット不要分不表示にする）
function remove_dashboard_widget() {
  // remove_meta_box( 'dashboard_site_health', 'dashboard', 'normal' ); // サイトヘルスステータス
  // remove_meta_box( 'dashboard_right_now', 'dashboard', 'normal' ); // 概要
  // remove_meta_box( 'dashboard_activity', 'dashboard', 'normal' ); // アクティビティ
  remove_meta_box( 'dashboard_quick_press', 'dashboard', 'side' ); // クイックドラフト
  remove_meta_box( 'dashboard_primary', 'dashboard', 'side' ); // WordPress イベントとニュース
  remove_action( 'welcome_panel', 'wp_welcome_panel' ); // ウェルカムパネル
}
add_action( 'wp_dashboard_setup', 'remove_dashboard_widget' );


/* -------------------------------------------------------------------------------- */
//【管理画面】ダッシュボードカスタマイズ（新しいウィジェットを追加する）
function add_dashboard_widgets() {
  wp_add_dashboard_widget(
    'quick_action_dashboard_widget', // ウィジェットのスラッグ名
    'ショートカットリンク', // ウィジェットに表示するタイトル
    'dashboard_widget_function' // 実行する関数
  );
}
add_action('wp_dashboard_setup', 'add_dashboard_widgets');

function dashboard_widget_function() {
  // 管理画面ウィジェットのHTML
  ?>
  <ul class="quick-action">
    <!-- ショートカットリスト -->
    <li>
      <a href="post-new.php" class="quick-action-button">
        <span class="dashicons-before dashicons-admin-post"></span>
        新しい記事を作成（ブログ）
      </a>
    </li>
    <li>
      <a href="post-new.php?post_type=campaign" class="quick-action-button">
        <span class="dashicons-before dashicons-universal-access"></span>
        新しく記事を作成（キャンペーン）
      </a>
    </li>
    <li>
      <a href="post-new.php?post_type=voice" class="quick-action-button">
        <span class="dashicons-before dashicons-format-status"></span>
        口コミ投稿を作成（お客様の声）
      </a>
    </li>
    <li>
      <a href="post.php?post=55&action=edit" class="quick-action-button">
        <span class="dashicons-before dashicons-welcome-widgets-menus"></span>
        料金の変更（コース料金表）
      </a>
    </li>
    <li>
      <a href="post.php?post=59&action=edit" class="quick-action-button">
        <span class="dashicons-before dashicons-search"></span>
        FAQ（よくある質問）を追加
      </a>
    </li>
    <li>
      <a href="post.php?post=48&action=edit" class="quick-action-button">
        <span class="dashicons-before dashicons-format-image"></span>
        ギャラリー画像を追加
      </a>
    </li>
  </ul>

  <style>
    /* クイックアクションのスタイルを調整 */
    .quick-action {
      list-style: none;
      padding: 0;
      margin: 0;
    }
    .quick-action li {
      margin-bottom: 10px;
    }
    .quick-action-button {
      display: flex;
      align-items: center;
      text-decoration: none;
      background-color: #007cba;
      color: #fff;
      padding: 10px;
      border-radius: 4px;
      transition: background-color 0.3s ease;
    }
    .quick-action-button:hover {
      background-color: #005a8c;
      color: #fff;
    }
    .dashicons-before {
      margin-right: 8px;
    }
  </style>
  <?php
}
/* -------------------------------------------------------------------------------- */
//【管理画面】新規投稿画面のカスタマイズ
// タイトルのプレイスホルダーテキストを変更
  function change_default_title( $title ) {
    $screen = get_current_screen();
    if ( $screen->post_type == 'post' ) {
          $title = 'ここにブログのタイトルを入力';
    }
    elseif ( $screen->post_type == 'campaign' ) {
          $title = 'ここにキャンペーン名を入力';
    }
    elseif ( $screen->post_type == 'voice' ) {
          $title = 'ここにお客様の声（口コミ）タイトルを入力';
    }
      return $title;
  }
  add_filter( 'enter_title_here', 'change_default_title' );


//  本文プレイスホルダーテキストを変更(クリックしたら戻る)
  function change_default_placeholder( $text ) {
    $screen = get_current_screen();
    if ( $screen->post_type == 'post' ) {
        $text = 'ここにブログ記事の本文を入力してください ( 画像挿入も可 )';
    }
    elseif ( $screen->post_type == 'campaign' ) {
          $text = 'ここにキャンペーン記事の本文を入力してください';
    }
    elseif ( $screen->post_type == 'voice' ) {
          $text = 'ここにお客様の声(口コミ)の本文を入力してください';
    }
      return $text;
  }
  add_filter( 'write_your_story', 'change_default_placeholder', 10, 2 );
  /* -------------------------------------------------------------------------------- */