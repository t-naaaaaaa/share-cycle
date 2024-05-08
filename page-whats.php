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
          <!-- <div class="sidebar-contents-items">シェアサイクル協会とは</div>
          <div class="sidebar-contents-items">安全啓蒙に向けた取り組み</div>
          <div class="sidebar-contents-items">
            オープンデータ普及に向けて
          </div> -->
          <div class="sidebar-contents-items">
            自転車活用推進法
          </div>
        </div>
      </div>
    </div>
    <div class="section-wrap">
      <section class="first page-first">
        <h2 class="first-title">シェアサイクルとは</h2>
        <!-- <p class="first-text">
          自転車を共同利用する交通システムで、特にコミュニティサイクルは多数の自転車を都市内の各所に配置し、利用者はどこの拠点(ポート)からでも借り出して、好きなポートで返却ができる新たな都市交通手段です。現在、欧米を中心に世界中の500
          都市以上で本格運営されています。<br />欧米では、都市(地区)平均
          自転車5,000台、1,000ポート程度の規模で実施されています。最低限この規模でおこなうことが、この事業の利便性や採算性などの要点であると言えましょう。
        </p> -->
        <img src="<?php echo get_theme_file_uri('/img/whatxshare__detail.png'); ?>" alt="シェアサイクルの図" class="page-whats-contents-img">
      </section>
      <section class="first move-first">
        <h2 class="first-title">シェアサイクルが持つ”メリット”</h2>
      </section>
      <section class="second">
        <h3 class="second-title">通勤・通学・ビジネス</h3>
        <p class="second-text text-1">
          通勤・通学の手段の補強、企業向けの法人会員制度などにより、ビジネスの移動ツールとして利用
        </p>
      </section>
      <section class="second">
        <h3 class="second-title  whats-second">まちの活性化</h3>
        <p class="second-text text-1">
          ポート間を面的に、多方向に移動が可能なため、まちの回遊性向上が期待できる
        </p>
      </section>
      <section class="second">
        <h3 class="second-title  whats-second">観光</h3>
        <p class="second-text text-1">
          ポートのネットワークを利用して「自転車で巡るルート」等を提案し、新しい観光スタイルの提案も
        </p>
      </section>
      <section class="second">
        <h3 class="second-title  whats-second">環境</h3>
        <p class="second-text text-1">
          公共交通機関の中で唯一、化石燃料に由来しない動力源をもつ移動手段として、温暖化防止（CO2削減）に貢献する。渋滞緩和も期待できる
        </p>
      </section>
      <section class="second">
        <h3 class="second-title  whats-second">健康</h3>
        <p class="second-text text-1">
          自転車に乗ることはそのまま健康増進に繋がり、医療費の抑制効果も期待できる
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