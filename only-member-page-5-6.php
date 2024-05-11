<?php
/*
Template Name: 2019年度　第1回 日本シェアサイクル協会 研修会
*/
get_header();
?>

<main class="page-main">
  <section class="page-title-wrap">
    <h1 class="page-title">2019年度　第1回 日本シェアサイクル協会 研修会</h1>
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
        <h2 class="first-title">2019年度　第1回 日本シェアサイクル協会 研修会</h2>
        <div class="kensyu">
          <ol>
            <li>日　時：2019 年 7 月 5 日（金） 15:00 〜 19:30 （受付開始 14:30 〜）</li>
            <li>場　所：アイオス永田町（東京都千代田区永田町 2-17-17 2階 第2会議室）</li>
            <li>スケジュール：</li>
          </ol>

          <table>
            <thead>
              <tr>
                <th>時間帯</th>
                <th>内容</th>
                <th>担当</th>
              </tr>
            </thead>
            <tbody>
              <tr class="first">
                <td>
                  15:00〜15:10
                </td>
                <td>
                  ご挨拶
                </td>
                <td>
                  髙橋会長
                </td>
              </tr>
              <tr>
                <td>
                  <br>
                  15:10～15:40
                </td>
                <td>
                  【基調講演】<br>
                  <p>■<a href="kensyukai2019_01a.pdf">シェアサイクル の政策動向について</a></p>
                </td>
                <td>
                  <br>
                  国土交通省都市局<br>
                  街路交通施設課長 本田 武志 様<br>
                </td>
              </tr>
              <tr>
                <td>
                  <br>
                  15:40～16:10
                </td>
                <td>
                  【第1部】<br>
                  <p>■シェアサイクルについて</p>
                </td>
                <td>
                  <br>
                  東海大学工学部 土木工学科<br>
                  特任准教授 鈴木 美緒 様<br>
                </td>
              </tr>
              <tr>
                <td>
                  16:10～16:30
                </td>
                <td>
                  ≪休　憩≫
                </td>
                <td>
                </td>
              </tr>
              <tr>
                <td>
                  <br>
                  16:30～17:00
                </td>
                <td>
                  【第2部】<br>
                  <p>■<a href="kensyukai2019_01b.pdf">日本と世界のシェアサイクル事情等について</a></p>
                </td>
                <td>
                  <br>
                  株式会社ドーコン東京支店事業部<br>
                  グループ長 小美野 智紀 様<br>
                </td>
              </tr>
              <tr>
                <td>
                  17:00～17:30
                </td>
                <td>
                  <p>■<a href="kensyukai2019_01c.pdf">日本の各都市におけるシェアサイクルのあり方</a></p>
                </td>
                <td>
                  株式会社ドコモ・バイクシェア<br>
                  取締役 清水貴司 様<br>
                </td>
              </tr>
              <tr>
                <td>
                  17:30～17:50
                </td>
                <td>
                  ≪休　憩≫
                </td>
                <td>
                </td>
              </tr>
              <tr class="last">
                <td>
                  <br>
                  17:50～19:30
                </td>
                <td>
                  【第3部】<br>
                  <p>■情報交換会<br></p>
                </td>
                <td>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
    </div>
    </section>
  </div>
</main>

<?php get_footer(); ?>