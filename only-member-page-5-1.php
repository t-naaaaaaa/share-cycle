<?php
/*
Template Name: 2023年度　第1回 JSCA/JIC合同研修会
*/
get_header();
?>

<main class="page-main">
  <section class="page-title-wrap">
    <h1 class="page-title">2023年度　第1回 JSCA/JIC合同研修会</h1>
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
        <h2 class="first-title">2023年度　第1回 JSCA/JIC合同研修会</h2>
        <div class="kensyu">
          <ol>
            <li>日　時：2023年7月25日(火)第1部:研修会15:00〜17:20(受付開始14:30〜)</li>
            <li>場　所：アイオス永田町(東京都千代田区永田町2-17-172階会議室)/オンライン</li>
            <li>スケジュール：※講演内容等詳細は変更となる場合があります</li>
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
                  14:30〜
                </td>
                <td>
                  受付開始
                </td>
                <td>
                </td>
              </tr>
              <tr>
                <td>
                  15:00〜15:30
                </td>
                <td>
                  ご挨拶/ご講演<br>
                  <p>■自転車・シェアサイクルについて(仮)</p>
                  <p>　<a href="kensyukai2023_01a.pdf">資料</a></p>
                </td>
                <td>
                  <br>
                  JSCA古倉宗治会長<br>
                </td>
              </tr>
              <tr>
                <td>
                  <br>
                  15:30〜16:20
                </td>
                <td>
                  【基調講演】<br>
                  <p>
                    ■ベロシティについて(仮)<br>
                  </p>
                  <p>　<a href="kensyukai2023_01b.pdf">資料</a></p>
                </td>
                <td>
                  <br>
                  国土交通省道路局<br>
                  自転車推進本部<br>
                </td>
              </tr>
              <tr>
                <td>
                  16:20〜16:30
                </td>
                <td>
                  《休 憩》<br>
                </td>
                <td>
                </td>
              </tr>
              <tr class="last">
                <td>
                  16:30〜17:20
                </td>
                <td>
                  <p>
                    ■ベロシティ(シェアサイクル)について(仮)
                  </p>
                  <p>　<a href="kensyukai2023_01c.pdf">資料</a></p>
                </td>
                <td>
                  自転車活用推進研究会<br>
                  内海潤氏<br>
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