<?php
/*
Template Name: 出版物紹介
*/
get_header();
?>

<main class="page-main">
  <section class="page-title-wrap">
    <h1 class="page-title">出版物紹介</h1>
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
        <h2 class="first-title">出版物紹介</h2>
        <p class="first-text">
        <div class="bookinfo">
          <table>
            <thead>
              <tr>
                <th class="first-title">What‘ｓシェアサイクル？</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th>
                  <p><img src="<?php echo get_theme_file_uri('/member-pdf/member-img/what01.jpg'); ?>" alt="What‘ｓシェアサイクル？ 表紙" class="shadow"></img></p>
                  <p><img src="<?php echo get_theme_file_uri('/member-pdf/member-img/what02.jpg'); ?>" alt="What‘ｓシェアサイクル？ 目次" class="shadow"></a></p>
                  <p>
                    判型・頁数<br>
                    A4判　63ページ<br>
                    価格<br>
                    1,000円<br>
                    (税込1,100円)<br>
                    (送料別)<br>
                  </p>
                </th>
              </tr>
            </tbody>
          </table>
          <div class="first-text">
            <a href="https://www.gia-jsca.net/new2024/wp-content/uploads/2024/05/what_member.xlsx" download class="first-download-link">申込書をダウンロード</a>
          </div>
        </div>
        </p>
    </div>
    </section>
  </div>
</main>

<?php get_footer(); ?>