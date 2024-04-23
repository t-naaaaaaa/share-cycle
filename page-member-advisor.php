<?php
/*
Template Name:顧問一覧
*/
get_header();
?>
<main class="page-main">
  <section class="page-title-wrap">
    <h1 class="page-title">顧問一覧</h1>
  </section>
  <!-- パンクズリスト追加する -->
  <div class="breadcrumb">
    <?php
    if (function_exists('bcn_display')) {
      bcn_display();
    }
    ?>
  </div>
  <!-- 問い合わせフォーム -->

  <div class="page-pc-wrap">
    <div class="sidebar-wrap member-all-sidebar">
      <div class="sidebar">
        <div class="sidebar-contents">
          <div class="sidebar-contents-items"><a href="<?php echo esc_url(home_url('/home/member')); ?>">会員募集</a></div>
          <div class="sidebar-contents-items"><a href="<?php echo esc_url(home_url('/home/member/all/')); ?>">会員一覧</a> </div>
          <div class="sidebar-contents-items"><a href="<?php echo esc_url(home_url('/home/member/advisor/')); ?>">顧問一覧</div>
          <div class="sidebar-contents-items"><a href="<?php echo esc_url(home_url('/home/member/memorandum/')); ?>">定款</a></div>
        </div>
      </div>
    </div>
    <div class="section-wrap member-all-section-wrap">
      <section class="first advisor-wrap">
        <h2 class="first-title">顧問一覧</h2>
      </section>
      <section class="second advisor-wrap">
        <div class="first-text adviser_note">アイウエオ順</div>
        <table class="second advisor-table adviser">
          <thead>
            <tr>
              <th class="number"></th>
              <th>役職名</th>
              <th>氏　名</th>
              <th>備　考（所属企業・役職等）</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>顧　問</td>
              <td>伊藤　孝紀</td>
              <td>名古屋工業大学大学院　准教授</td>
            </tr>
            <tr>
              <td>2</td>
              <td>顧　問</td>
              <td>金　利昭</td>
              <td>茨城大学　名誉教授</td>
            </tr>
            <tr>
              <td>3</td>
              <td>顧　問</td>
              <td>久保田　尚</td>
              <td>埼玉大学大学院　教授</td>
            </tr>
            <tr>
              <td>4</td>
              <td>顧　問</td>
              <td>古池　弘隆</td>
              <td>宇都宮共和大学　シティライフ学部　特任教授</td>
            </tr>
            <tr>
              <td>5</td>
              <td>顧　問</td>
              <td>小早川　悟</td>
              <td>日本大学　理工学部　交通システム工学科　教授</td>
            </tr>
            <tr>
              <td>6</td>
              <td>顧　問</td>
              <td>小林　成基</td>
              <td>NPO法人自転車活用推進研究会　理事長</td>
            </tr>
            <tr>
              <td>7</td>
              <td>顧　問</td>
              <td>鈴木　美緒</td>
              <td>東海大学　工学部　土木工学科　特任准教授</td>
            </tr>
            <tr>
              <td>8</td>
              <td>顧　問</td>
              <td>髙橋　洋二</td>
              <td>東京海洋大学　名誉教授</td>
            </tr>
            <tr>
            <tr>
              <td>9</td>
              <td>顧　問</td>
              <td>中村　文彦</td>
              <td>東京大学大学院　新領域創世科学研究科　特任教授</td>
            </tr>
            <tr>
              <td>10</td>
              <td>顧　問</td>
              <td>松井　直人</td>
              <td>日本測地設計株式会社　取締役副社長</td>
            </tr>
            <tr>
              <td>11</td>
              <td>顧　問</td>
              <td>松谷　春敏</td>
              <td>日本大学　客員教授</td>
            </tr>
            <tr>
              <td>12</td>
              <td>顧　問</td>
              <td>三浦　清洋</td>
              <td>公益社団法人日本交通計画協会　企画室　室長</td>
            </tr>
            <tr>
              <td>13</td>
              <td>顧　問</td>
              <td>三国　成子</td>
              <td>地球の友・金沢　自転車・歩行者安全マップ担当</td>
            </tr>
            <tr>
              <td>14</td>
              <td>顧　問</td>
              <td>三国　千秋</td>
              <td>北陸大学　名誉教授</td>
            </tr>
            <tr>
              <td>15</td>
              <td>顧　問</td>
              <td>村尾　公一</td>
              <td>東京都市大学　客員教授</td>
            </tr>
            <tr>
              <td>16</td>
              <td>顧　問</td>
              <td>森川　高行</td>
              <td>名古屋大学大学院　教授</td>
            </tr>
            <tr>
              <td>17</td>
              <td>顧　問</td>
              <td>屋井　鉄雄</td>
              <td>東京工業大学　名誉教授</td>
            </tr>
            <tr>
              <td>18</td>
              <td>顧　問</td>
              <td>山中　英生</td>
              <td>徳島大学大学院　社会産業理工学研究部　教授</td>
            </tr>
            <tr>
              <td>19</td>
              <td>顧　問</td>
              <td>亘理　章</td>
              <td>都市交通評論家</td>
            </tr>
          </tbody>
        </table>
      </section>
    </div>
  </div>
</main>

<?php get_footer(); ?>