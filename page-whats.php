<?php
/*
Template Name:What's Share Cycle
*/
get_header();
?>
<main class="page-main">
  <section class="page-title-wrap">
    <h1 class="page-title">What's シェアサイクル</h1>
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
          <div class="sidebar-contents-items">シェアサイクルとは</div>
          <div class="sidebar-contents-items">シェアサイクル協会とは</div>
          <div class="sidebar-contents-items">安全啓蒙に向けた取り組み</div>
          <div class="sidebar-contents-items">
            オープンデータ普及に向けて
          </div>
          <div class="sidebar-contents-items">
            自転車活用推進法
          </div>
        </div>
      </div>
    </div>
    <div class="section-wrap">
      <section class="first page-first">
        <h2 class="first-title">シェアサイクルとは</h2>
        <p class="first-text">
          自転車を共同利用する交通システムで、特にコミュニティサイクルは多数の自転車を都市内の各所に配置し、利用者はどこの拠点(ポート)からでも借り出して、好きなポートで返却ができる新たな都市交通手段です。現在、欧米を中心に世界中の500
          都市以上で本格運営されています。<br />欧米では、都市(地区)平均
          自転車5,000台、1,000ポート程度の規模で実施されています。最低限この規模でおこなうことが、この事業の利便性や採算性などの要点であると言えましょう。
        </p>
      </section>
      <section class="first page-first">
        <h2 class="first-title">シェアサイクル協会とは</h2>
        <p class="first-text">
          自治体とのパイプ役として、民間運営団体等のサポート役として日本のシェアサイクル発展のために
          業界関係者がまとまり、技術や資金的問題への提言とシェアサイクル実施に向けて活動しています
        </p>
      </section>
      <section class="first page-first">
        <h2 class="first-title">安全啓蒙に向けた取り組み</h2>
        <p class="first-text">
          道路交通法改正施行などの社会背景を踏まえ、当協会では業界横断的な連携強化や国内外における
          自転車走行環境の情報収集に努めています。
        </p>
      </section>
      <section class="first page-first page-first-end">
        <h2 class="first-title">オープンデータ普及に向けて</h2>
        <p class="first-text">
          利用者の利便性向上とサービス認知度向上を目指し国際的なシェアサイクルオープンデータ規格GBFSno国内普及を促進しています。<br />
          また、地域課題解決コンテスト「アーバンデータチャレンジ2023」において当協会協賛でGBFS特別賞を創設しています。
        </p>
      </section>
      <section class="first page-first page-first-end">
        <h2 class="first-title">自転車活用推進法</h2>
        <p class="first-text">
          <a href="<?php echo esc_url(home_url('/home/low')); ?>" class="first-text">自転車活用推進法については<span class="border-bottom">こちら</span></a>
        </p>
      </section>
    </div>
  </div>
</main>

<?php get_footer(); ?>