<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width" />
  <meta name="description" content="ディスクリプション" />
  <title>一般社団法人日本シェアサイクル協会</title>
  <!--ページCSSの読み込み-->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&display=swap" rel="stylesheet" />

  <!--OGP設定-->
  <meta property="og:title" content="一般財団法人日本シェアサイクル協会" />
  <meta property="og:description" content="一般社団法人日本シェアサイクル協会（JSCA）の公式サイトです。一般社団法人日本シェアサイクル協会（JSCA）は、自治体とのパイプ役として、日本のシェアサイクル発展のために業界関係者がまとまり、技術や資金的問題への提言とシェアサイクル実施に向けて活動しています。" />
  <meta property="og:image" content="画像URL" />
  <meta property="og:image:secure_url" content="画像URL" />
  <meta property="og:url" content="サイトURL" />
  <meta property="og:site_name" content="一般財団法人日本シェアサイクル協会" />
  <meta property="og:image:width" content="1200" />
  <meta property="og:image:height" content="630" />
  <meta name="twitter:title" content="一般財団法人日本シェアサイクル協会" />
  <meta name="twitter:description" content="一般社団法人日本シェアサイクル協会（JSCA）の公式サイトです。一般社団法人日本シェアサイクル協会（JSCA）は、自治体とのパイプ役として、日本のシェアサイクル発展のために業界関係者がまとまり、技術や資金的問題への提言とシェアサイクル実施に向けて活動しています。" />
  <meta name="twitter:image" content="画像URL" />
  <meta name="twitter:card" content="summary" />
  <!--favicon設定-->
  <link rel="icon" href="/favicon.ico" />
  <!-- 32×32 -->
  <link rel="icon" href="/icon.svg" type="image/svg+xml" />
  <link rel="apple-touch-icon" href="/apple-touch-icon.png" />
  <!-- 180×180 -->
  <link rel="manifest" href="/manifest.webmanifest" />
  <!-- モバイルChromeのヘッダー色などで使われるテーマカラー   -->
  <meta name="theme-color" content="#fafafa" />

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>><?php wp_body_open(); ?>
  <header class="header">
    <!-- ヘッダーロゴ -->
    <div class="header-wrap">
      <div class="header-logo-wrap">
        <div class="header-logo">
          <a href="<?php echo esc_url(home_url('/')); ?>" class="header-logo">
            <img src="<?php echo get_theme_file_uri('/img/logo.png'); ?>" alt="ロゴ" class="header-logo-img" />
            <p class="header-title">
              <span class="header-title-sub">一般社団法人</span>日本シェアサイクル協会
            </p>
          </a>
        </div>
        <div class="header-member-wrap">
          <!-- <div class="search-wrap">
              <form action="" method="get" class="search-form-wrapper">
                <input type="search" name="search" class="search-form" />
                <input
                  type="image"
                  src="/img/search.png"
                  class="search-submit"
                  width="20px"
                  height="15px"
                />
              </form>
            </div> -->
          <div class="btn-wrap">
            <button onclick="location.href='/home/member'" class="header-btn">
              会員登録
            </button>
            <button onclick="location.href='/home/coming-soon'" class="header-btn">ログイン</button>
          </div>
        </div>
      </div>
      <!-- ハンバーガーメニュー部分 -->
      <div class="header-nav">
        <!-- ハンバーガーメニューの表示・非表示を切り替えるチェックボックス -->
        <input id="drawer_input" class="drawer_hidden" type="checkbox" />

        <!-- ハンバーガーアイコン -->
        <label for="drawer_input" class="drawer_open"><span></span></label>
        <!-- メニュー -->
        <nav class="nav_content">
          <ul class="nav_list">
            <li class="nav_item">
              <a href="<?php echo esc_url(home_url('/')); ?>" class="header-nav-link">ホーム</a>
            </li>
            <li class="nav_item">
              <a href="<?php echo esc_url(home_url('/home#introduction')); ?>" class="header-nav-link">導入の手引き</a>
            </li>
            <li class="nav_item">
              <a href="<?php echo esc_url(home_url('/home#move')); ?>" class="header-nav-link">国や自治体の動き</a>
            </li>
            <li class="nav_item">
              <a href="<?php echo esc_url(home_url('/home/member/all/')); ?>" class="header-nav-link">会員一覧</a>
            </li>
            <li class="nav_item">
              <a href="<?php echo esc_url(home_url('/home/notice')); ?>" class="header-nav-link">お知らせ</a>
            </li>
            <li class="nav_item">
              <a href="<?php echo esc_url(home_url('/home/association')); ?>" class="header-nav-link">協会について</a>
            </li>
            <li class="nav_item pc-hidden"><a href="<?php echo esc_url(home_url('/home/member')); ?>">会員登録</a></li>
            <li class="nav_item pc-hidden"><a href="<?php echo esc_url(home_url('/home/coming-soon')); ?>">ログイン</a></li>
            <!-- <li class="nav_item pc-hidden"><a href="#">サイト内を検索</a></li> -->
          </ul>
        </nav>
      </div>
    </div>
  </header>