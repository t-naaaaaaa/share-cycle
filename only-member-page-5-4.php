<?php
/*
Template Name: 2021年度　第1回 JSCA/JIC合同オンライン研修会
*/
get_header();
?>

<main class="page-main">
  <section class="page-title-wrap">
    <h1 class="page-title">2021年度　第1回 JSCA/JIC合同オンライン研修会</h1>
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
        <h2 class="first-title">2021年度　第1回 JSCA/JIC合同オンライン研修会</h2>
        <div class="kensyu">
          <ol>
            <li>日　時：2021 年 11 月 17 日（水） 15:00 〜 16:25</li>
            <li>場　所：ウェビナー（Zoom）</li>
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
                  15:00〜15:05
                </td>
                <td>
                  ご挨拶
                </td>
                <td>
                  日本シェアサイクル協会<br>
                  会長　高橋洋二<br>
                </td>
              </tr>
              <tr>
                <td>
                  <br>
                  15:05～15:35
                </td>
                <td>
                  《基調講演》<br>
                  <p>■自転車駐車場とシェアサイクルの今後の施策</p>
                </td>
                <td>
                  <br>
                  国土交通省 都市局<br>
                  街路交通施設課長 荒川辰雄氏<br>
                </td>
              </tr>
              <tr>
                <td>
                  <br>
                  15:35～16:05
                </td>
                <td>
                  《講演》<br>
                  <p>
                    ■自転車走行空間と自転車駐車場及び<br>
                    　シェアサイクルとマイクロモビリティの展望<br>
                    　〜ウォーカビリィを考慮したまちづくりと<br>
                    　自転車利用と駐車場整備の今後 〜<br>
                  </p>
                  <p>　<a href="kensyukai2021_01a.pdf">資料</a></p>
                </td>
                <td>
                  <br>
                  日本大学理工学部<br>
                  交通システム工学科<br>
                  教授 小早川悟氏<br>
                </td>
              </tr>
              <tr class="last">
                <td>
                  16:05～16:25
                </td>
                <td>
                  <p>
                    ■ドコモ・バイクシェアを支える<br>　シェアリングプラットフォーム
                  </p>
                  <p>　<a href="kensyukai2021_01b.pdf">資料</a></p>
                </td>
                <td>
                  株式会社ドコモ・バイクシェア<br>
                  代表取締役社長 武岡雅則氏<br>
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