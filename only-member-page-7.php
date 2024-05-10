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
                <th colspan="2">What‘ｓシェアサイクル？</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th>
                  <p><a href="../img/bookinfo/what01.jpg" class="book_photo" rel="group1"><img src="/img/bookinfo/what01.jpg" alt="What‘ｓシェアサイクル？ 表紙" class="shadow"></a></p>
                  <p><a href="../img/bookinfo/what02.jpg" class="book_photo" rel="group1"><img src="/img/bookinfo/what02.jpg" alt="What‘ｓシェアサイクル？ 目次" class="shadow"></a></p>
                  <p>
                    判型・頁数<br>
                    A4判　63ページ<br>
                    価格<br>
                    1,000円<br>
                    (税込1,100円)<br>
                    (送料別)<br>
                  </p>
                </th>
                <td>
                  <dl>
                    <dt>
                      第一章
                    </dt>
                    <dd>
                      <strong>シェアサイクルが都市にもたらす効果</strong><br>
                      <span>04</span>自転車を用いたシェアサイクル＝新たな公共交通<br>
                      <span>05</span>自転車活用のメリット　シェアサイクルのメリット<br>
                      <span>06</span>シェアサイクル導入のプロセス<br>
                    </dd>
                  </dl>
                  <dl>
                    <dt>
                      第二章
                    </dt>
                    <dd>
                      <strong>シェアサイクルの種類と方式</strong><br>
                      <span>10</span>シェアサイクルの種類<br>
                    </dd>
                  </dl>
                  <dl>
                    <dt>
                      第三章
                    </dt>
                    <dd>
                      <strong>世界・日本のシェアサイクル事例</strong><br>
                      <span>14</span>世界のシェアサイクル事例<br>
                      <span>28</span>日本のシェアサイクル事例<br>
                    </dd>
                  </dl>
                  <dl>
                    <dt>
                      第四章
                    </dt>
                    <dd>
                      <strong>シェアサイクル導入にかかる費用</strong><br>
                      <span>52</span>自転車　ポート（ステーション）設備<br>
                      <span></span>会員登録用および精査システム　運営・管理用ソフト<br>
                      <span>53</span>運営・管理センターおよびコールセンター<br>
                      <span>54</span>再配置　巡回メンテナンス<br>
                    </dd>
                  </dl>
                  <dl>
                    <dt>
                      第五章
                    </dt>
                    <dd>
                      <strong>シェアサイクルの課題と展望</strong><br>
                      <span>56</span>シェアサイクル成功のキーファクター<br>
                      <span>57</span>シェアサイクルの課題について<br>
                    </dd>
                  </dl>
                  <dl>
                    <dt>
                      エッセイ
                    </dt>
                    <dd>
                      <span>58</span>世界の大都市を変えたシェアサイクル<br>
                    </dd>
                  </dl>

                  <div>
                    <a href="../download/what_member.xlsx?2">お申込はこちら</a>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
        </p>
    </div>
    </section>
  </div>
</main>

<?php get_footer(); ?>