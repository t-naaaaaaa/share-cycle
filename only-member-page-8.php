<?php
/*
Template Name: アンケート回答結果
*/
get_header();
?>

<main class="page-main">
  <section class="page-title-wrap">
    <h1 class="page-title">アンケート回答結果</h1>
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
    <div class="sidebar-wrap">
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
    </div>
    <div class="section-wrap">
      <section class="first">
        <h2 class="first-title">総会資料</h2>
        <p class="first-text">
        <ul id="file">
          <li class="only-member-li"><a class="only-member-a" href="<?php echo esc_url(get_template_directory_uri() . '/member-pdf/enquete_2023_02.pdf'); ?>">2023年度　アンケート回答結果(JSCA/JIC合同研修会)</a></li>
          <li class="only-member-li"><a class="only-member-a" href="<?php echo esc_url(get_template_directory_uri() . '/member-pdf/enquete_2023_01.pdf'); ?>">2023年度　アンケート回答結果(JSCA研修会)</a></li>
          <li class="only-member-li"><a class="only-member-a" href="<?php echo esc_url(get_template_directory_uri() . '/member-pdf/enquete_2022.pdf'); ?>">2022年度　アンケート回答結果(JSCA/JIC合同研修会)</a></li>
        </ul>
        </p>
    </div>
    </section>
  </div>
</main>

<?php get_footer(); ?>