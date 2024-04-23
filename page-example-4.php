<?php
/*
Template Name:事例4
*/
get_header();
?>
<main class="page-main">
  <section class="page-title-wrap">
    <h1 class="page-title">複数事業者混在事例</h1>
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
          <div class="sidebar-contents-items">はじめに</div>
          <div class="sidebar-contents-items">サービス概要</div>
          <div class="sidebar-contents-items">導入事例・活用事例</div>
        </div>
      </div>
    </div>
    <div class="section-wrap">
      <section class="first">
        <h2 class="first-title">複数事業者混在事例(都内)</h2>
        <p class="first-text">
          東京都では、東京都環境局の主導により、ドコモ・バイクシェア、OpenStreet、Luupの3社でシェアサイクルステーションの用地共同利用検証事業を行っています。<br />
          2024年3月時点で、西新宿エリア3カ所と池袋エリア2カ所の計5カ所に共同のシェアサイクルステーション(3社のシェアサイクルステーションが同一用地内に隣接)が設置されています。<br />
          異なる事業者のサービスが一カ所に集まることで利用者が自分のニーズに合ったサービスを容易に選べるようになり、結果としてシェアサイクルの利用促進が期待されます。<br />
          また複数事業者での用地共同利用にあたって、その効果と課題を検証することも本実証の目的の1つとなっています。<br />
          今後も東京都のリーダーシップのもと、シェアサイクル事業者間でも連携してその効果と課題を検証すること
          で、利用者にとってさらに利用しやすいシェアサイクルサービスの提供を目指してまいります。
        </p>
        <img src="<?php echo get_theme_file_uri('/img/example-4-1.png'); ?>" alt="" class="first-img" />
      </section>
      <!-- <section class="second">
            <h3 class="second-title">自治体向け</h3>
            <p class="second-text text-1">
              QUADRAは、オンラインマニュアルや講座系のサイトの
              構築に最適化されたWordPressテーマです。深
            </p>
            <p class="second-text text-2">
              QUADRAは、オンラインマニュアルや講座系のサイトの
              構築に最適化されたWordPressテーマです。深
            </p>
          </section>
          <section class="second second-end">
            <h3 class="second-title">自治体向け</h3>
            <p class="second-text text-1">
              QUADRAは、オンラインマニュアルや講座系のサイトの
              構築に最適化されたWordPressテーマです。深
            </p>
            <p class="second-text text-2">
              QUADRAは、オンラインマニュアルや講座系のサイトの
              構築に最適化されたWordPressテーマです。深
            </p>
          </section> -->
    </div>
  </div>
</main>

<?php get_footer(); ?>