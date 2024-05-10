<?php
function my_setup()
{
  add_theme_support('post-thumbnails'); // アイキャッチ画像を有効化
  add_theme_support('automatic-feed-links'); // 投稿とコメントのRSSフィードのリンクを有効化
  add_theme_support('title-tag'); // titleタグ自動生成
  add_theme_support('html5', array( // HTML5による出力
    'search-form',
    'comment-form',
    'comment-list',
    'gallery',
    'caption',
  ));
}
add_action('after_setup_theme', 'my_setup');

/* CSSとJavaScriptの読み込み */
function my_script_init()
{ // WordPressに含まれているjquery.jsを読み込まない
  wp_deregister_script('jquery');
  // jQueryの読み込み
  wp_enqueue_script('jquery', '//code.jquery.com/jquery-3.6.1.min.js', "", "1.0.1", true);
  wp_enqueue_style('reset-css', get_template_directory_uri() . '/css/reset.css', array(), '1.0.1');
  wp_enqueue_style('style-css', get_template_directory_uri() . '/css/style.css', array(), '1.0.1');
  wp_enqueue_script('hamburger-js', get_template_directory_uri() . '/js/hamburger.js', array('jquery'), '1.0.1', true);
  wp_enqueue_script('slide-js', get_template_directory_uri() . '/js/slide.js', array('jquery'), '1.0.1', true);
  wp_enqueue_script('scroll-in-js', get_template_directory_uri() . '/js/scroll-in.js', array('jquery'), '1.0.1', true);
  // PHPでデータをJavaScriptに渡す場合（例えば、画像URLの配列）
  wp_enqueue_script('kv-slide-js', get_template_directory_uri() . '/js/kv-slide.js', array('jquery'), '1.0.1', true);

  // PHPでデータをJavaScriptに渡す
  $image_paths = [
    get_theme_file_uri('/img/Xshare-cycle-day.png'),
    get_theme_file_uri('/img/docomo_big_new.jpg'),
    get_theme_file_uri('/img/momochari_big_new.jpg'),
    get_theme_file_uri('/img/Luup.jpeg'),
    get_theme_file_uri('/img/saitama_new.png')
  ];

  wp_localize_script('kv-slide-js', 'slideData', array('slides' => $image_paths));
}
add_action('wp_enqueue_scripts', 'my_script_init');

// functions.php
$image_paths = [
  get_theme_file_uri('/img/Xshare-cycle-day.png'),
  get_theme_file_uri('/img/docomo_big_new.jpg'),
  get_theme_file_uri('/img/momochari_big_new.jpg'),
  get_theme_file_uri('/img/Luup.jpeg'),
  get_theme_file_uri('/img/saitama_new.png')
];
update_option('my_theme_image_paths', $image_paths);


/**
 * Contact Form 7 "フリガナ"のバリデーション追加
 */
function custom_wpcf7_validate_kana($result, $tag)
{
  $tag   = new WPCF7_Shortcode($tag);
  $name  = $tag->name;
  $value = isset($_POST[$name]) ? trim(wp_unslash(strtr((string) $_POST[$name], "\n", " "))) : "";

  //全角カタカナ又は平仮名の入力チェック
  if ($name === "your-kana") {
    if (!preg_match("/^[ア-ヶーぁ-ん]+$/u", $value)) {
      $result->invalidate($tag, "全角カタカナ又は平仮名で入力してください。");
    }
  }
  return $result;
}
add_filter('wpcf7_validate_text', 'custom_wpcf7_validate_kana', 11, 2);
add_filter('wpcf7_validate_text*', 'custom_wpcf7_validate_kana', 11, 2);

add_filter('wpcf7_validate_email', 'wpcf7_validate_email_filter_extend', 11, 2);
add_filter('wpcf7_validate_email*', 'wpcf7_validate_email_filter_extend', 11, 2);
function wpcf7_validate_email_filter_extend($result, $tag)
{
  $type = $tag['type'];
  $name = $tag['name'];
  $_POST[$name] = trim(strtr((string) $_POST[$name], "n", " "));
  if ('email' == $type || 'email*' == $type) {
    if (preg_match('/(.*)_confirm$/', $name, $matches)) { //確認用メルアド入力フォーム名を ○○○_confirm としています。
      $target_name = $matches[1];
      if ($_POST[$name] != $_POST[$target_name]) {
        if (method_exists($result, 'invalidate')) {
          $result->invalidate($tag, "確認用のメールアドレスが一致していません");
        } else {
          $result['valid'] = false;
          $result['reason'][$name] = '確認用のメールアドレスが一致していません';
        }
      }
    }
  }
  return $result;
}

function wpcf7_validate_password_filter_extend($result, $tag)
{
  $type = $tag['type'];
  $name = $tag['name'];
  $_POST[$name] = trim(strtr((string) $_POST[$name], "n", " "));
  if ('password' == $type || 'password*' == $type) {
    if (preg_match('/(.*)_confirm$/', $name, $matches)) { //確認用パスワード入力フォーム名を ○○○_confirm としています。
      $target_name = $matches[1];
      if ($_POST[$name] != $_POST[$target_name]) {
        if (method_exists($result, 'invalidate')) {
          $result->invalidate($tag, "確認用のパスワードが一致していません");
        } else {
          $result['valid'] = false;
          $result['reason'][$name] = '確認用のパスワードが一致していません';
        }
      }
    }
  }
  return $result;
}

//コンタクトフォーム７読み込み制限
function wpcf7_file_load()
{
  add_filter('wpcf7_load_js', '__return_false');
  add_filter('wpcf7_load_css', '__return_false');
  if (is_page('otoiawase')) {
    if (function_exists('wpcf7_enqueue_scripts')) {
      wpcf7_enqueue_scripts();
    }
    if (function_exists('wpcf7_enqueue_styles')) {
      wpcf7_enqueue_styles();
    }
  }
}
add_action('template_redirect', 'wpcf7_file_load');

//ウィジェット
function sample_widgets()
{
  register_sidebar(array(
    'name' => '共通サイドバー',/* ←追加したいウィジェットの名前 */
    'description' => 'サイドバーウィジェット',/* ←追加したいウィジェットの概要 */
    'id' => 'wordpress-sidebar',/* ←追加したいウィジェットのID */
    'before_widget' => '<div class="sidebar-contents">',/* ←追加したいウィジェットを囲う開始タグ */
    'after_widget' => '</div>',/* ←追加したいウィジェットを囲う閉じタグ */
    'before_title' => '<div class="sidebar-contents-items">',/* ←追加したいウィジェットのタイトルを囲う開始タグ */
    'after_title' => '</div>'/* ←追加したいウィジェットのタイトルを囲う閉じタグ */
  ));
}
add_action('widgets_init', 'sample_widgets');

// WP-members
add_action('wpmem_register_redirect', 'my_reg_redirect');
function my_reg_redirect($fields)
{
  wp_redirect('https://gia-jsca.net/only-member-page/');
  exit();
}
// WP-Membersのログイン後の遷移先を変更
function theme_login_redirect($redirect_to, $user_id)
{
  return '/only-member-page/';
}
add_filter('wpmem_login_redirect', 'theme_login_redirect', 10, 2);
// 管理バーを権限グループ毎に表示・非表示を切り替える
function theme_show_admin_bar($content)
{
  // 管理者・編集者の権限グループの場合は表示
  if (current_user_can('administrator') || current_user_can('editor')) {
    return $content;
    // 他の権限グループの場合は非表示
  } else {
    return false;
  }
}
add_filter('show_admin_bar', 'theme_show_admin_bar');

// WP-Membersのログイン画面のラベル変更
function theme_wpmem_default_text($text)
{
  $text['login_username'] = 'ユーザー名';
  return $text;
}
add_filter('wpmem_default_text', 'theme_wpmem_default_text');
