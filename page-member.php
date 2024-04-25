<?php
/*
Template Name:会員募集
*/
get_header();
?>
<main class="page-main">
  <section class="page-title-wrap">
    <h1 class="page-title">会員募集</h1>
  </section>
  <!-- パンクズリスト追加する -->

  <main class="page-main">
    <div class="breadcrumb">
      <?php
      if (function_exists('bcn_display')) {
        bcn_display();
      }
      ?>
    </div>

    <div class="page-pc-wrap">
      <div class="sidebar-wrap">
        <div class="sidebar">
          <!-- <div class="sidebar-speech-balloon">
              下記項目の中から、設定がわからない<br />
              下記項目の中から、設定がわからない<br />
              下記項目の中から、設定がわからない<br />
            </div> -->
          <div class="sidebar-contents">
            <div class="sidebar-contents-items"><a href="<?php echo esc_url(home_url('/home/member')); ?>">会員募集</a></div>
            <div class="sidebar-contents-items"><a href="<?php echo esc_url(home_url('/home/member/all/')); ?>">会員一覧</a> </div>
            <div class="sidebar-contents-items"><a href="<?php echo esc_url(home_url('/home/member/all/detail/')); ?>">会員一覧詳細</a> </div>
            <div class="sidebar-contents-items"><a href="<?php echo esc_url(home_url('/home/member/advisor/')); ?>">顧問一覧</div>
            <div class="sidebar-contents-items"><a href="<?php echo esc_url(home_url('/home/member/memorandum/')); ?>">定款</a></div>
          </div>
        </div>
      </div>
      <div class="section-wrap">
        <section class="first">
          <h2 class="first-title">会員募集</h2>
          <p class="first-text">
            入会のお申し込みは&nbsp;&nbsp;FAX&nbsp;&nbsp;郵送&nbsp;&nbsp;E-Mail&nbsp;&nbsp;でお願い申し上げます。
          </p>
          <p class="first-text">
            <a href="http://share-cycle.local/wp-content/uploads/2024/04/membership.xlsx" download class="first-download-link">申込書をダウンロード</a>
          </p>
          <img src="<?php echo get_theme_file_uri('/img/member-int.png'); ?>" alt="" class="first-img" />
          <div class="member-button-wrap">
            <button class="more-button btn member-btn">
              <a href="<?php echo esc_url(home_url('/home/member/all/')); ?>" class="member-btn">会員一覧</a>
            </button>
            <button class="more-button btn member-btn">
              <a href="<?php echo esc_url(home_url('/home/member/advisor/')); ?>" class="member-btn">顧問一覧</a>
            </button>
            <button class="more-button btn member-btn">
              <a href="<?php echo esc_url(home_url('/home/member/memorandum/')); ?>" class="member-btn">定款</a>
            </button>
          </div>
        </section>
      </div>
    </div>
  </main>

  <?php get_footer(); ?>