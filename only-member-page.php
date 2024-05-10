<?php
/*
Template Name: 会員専用ページTOP
*/
get_header();
?>

<main class="page-main">
  <section class="page-title-wrap">
    <h1 class="page-title">会員専用ページTOP</h1>
  </section>

  <!-- パンクズリスト追加する -->
  <div class="breadcrumb">
    <?php
    if (function_exists('bcn_display')) {
      bcn_display();
    }
    ?>
  </div>
  <!-- サイドバー追加する -->

  <div class="page-pc-wrap">
    <!-- <div class="sidebar-wrap">
      <div class="sidebar">
        <div class="sidebar-contents">
          <div class="sidebar-contents-items"><a href="<?php echo esc_url(home_url('/home/only-member-page/only-member-1')); ?>">総会資料</a> </div>
          <div class="sidebar-contents-items"><a href="<?php echo esc_url(home_url('/home/only-member-page/only-member-2')); ?>">2023年度事業方針、2023年度ロードマップ</a> </div>
          <div class="sidebar-contents-items"><a href="<?php echo esc_url(home_url('/home/only-member-page/only-member-3')); ?>">2024年度組織図</a> </div>
          <div class="sidebar-contents-items"><a href="<?php echo esc_url(home_url('/home/only-member-page/only-member-member')); ?>">役員、正会員、賛助会員、協力会員　名簿</a> </div>
          <div class="sidebar-contents-items"><a href="<?php echo esc_url(home_url('/home/only-member-page/only-member-4')); ?>">議事録</a> </div>
          <div class="sidebar-contents-items"><a href="<?php echo esc_url(home_url('/home/only-member-page/only-member-5')); ?>">研修会・勉強会等資料</a> </div>
          <div class="sidebar-contents-items"><a href="<?php echo esc_url(home_url('/home/only-member-page/only-member-6')); ?>">月間「自転車・バイク・自動車&nbsp;&nbsp;パーキングプレス」掲載記事</a> </div>
          <div class="sidebar-contents-items"><a href="<?php echo esc_url(home_url('/home/only-member-page/only-member-7')); ?>">出版物紹介</a> </div>
          <div class="sidebar-contents-items"><a href="<?php echo esc_url(home_url('/home/only-member-page/only-member-8')); ?>">アンケート回答結果</a> </div>

        </div>
      </div>
    </div> -->
    <div class="section-wrap only-member-wrap">
      <section class="first">
        <a href="<?php echo esc_url(home_url('/home/only-member-page/only-member-1')); ?>" class="first-link">
          <h2 class="first-title first-link">総会資料</h2>
        </a>
        <a href="<?php echo esc_url(home_url('/home/only-member-page/only-member-2')); ?>" class="first-link">
          <h2 class="first-title first-link">2023年度事業方針、2023年度ロードマップ</h2>
        </a>
        <a href="<?php echo esc_url(home_url('/home/only-member-page/only-member-3')); ?>" class="first-link">
          <h2 class="first-title first-link">2024年度組織図</h2>
        </a>
        <a href="<?php echo esc_url(home_url('/home/only-member-page/only-member-member')); ?>" class="first-link">
          <h2 class="first-title first-link">役員、正会員、賛助会員、協力会員　名簿</h2>
        </a>
        <a href="<?php echo esc_url(home_url('/home/only-member-page/only-member-4')); ?>" class="first-link">
          <h2 class="first-title first-link">議事録</h2>
        </a>
        <a href="<?php echo esc_url(home_url('/home/only-member-page/only-member-5')); ?>" class="first-link">
          <h2 class="first-title first-link">研修会・勉強会等資料</h2>
        </a>
        <a href="<?php echo esc_url(home_url('/home/only-member-page/only-member-6')); ?>" class="first-link">
          <h2 class="first-title first-link">月間「自転車・バイク・自動車&nbsp;&nbsp;パーキングプレス」掲載記事</h2>
        </a>
        <a href="<?php echo esc_url(home_url('/home/only-member-page/only-member-7')); ?>" class="first-link">
          <h2 class="first-title first-link">出版物紹介</h2>
        </a>
        <a href="<?php echo esc_url(home_url('/home/only-member-page/only-member-8')); ?>" class="first-link">
          <h2 class="first-title first-link">アンケート回答結果</h2>
        </a>
      </section>
    </div>
  </div>
</main>

<?php get_footer(); ?>