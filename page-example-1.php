<?php
/*
Template Name:事例１
*/
get_header();
?>
<main class="page-main">
  <section class="page-title-wrap">
    <h1 class="page-title">狭小地のポート化</h1>
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
        <h2 class="first-title">狭小地のポート化（マンション・軒先等）</h2>
        <p class="first-text">
          シェアサイクルの認知拡大と都市交通インフラとしての普及を背景に、近年は狭小地へのステーション設置要望が増えてきています。<br />
          HELLO CYCLINGでは、利用者と土地オーナーからのステーション設置の要望に応えつつ、風雨や接触による車両転倒など設置に伴う懸念を解消するため、狭いスペースにもフィットするシェアサイクルステーションの開発・設置を進めています。<br />
          最小で自転車2台分のラックが設置できるスペースがあることを条件に、現地調査を行ったうえで安全性を考慮した設置レイアウトや台数の提案を行っています。<br />
          また、地域の不動産事業者が自らシェアサイクル事業に参入し、HELLO CYCLINGの運営事業者になる事例も増えています。<br />
          海外では、シェアサイクルの普及が地域の不動産価値の向上に貢献しているという研究結果も出ており、例えば従来は遠かった鉄道駅や主要施設、地域商店等へのアクセスがシェアサイクル設置により改善されるなど、その設置メリットは大きいです。<br />
          狭小地へのシェアサイクルステーション設置は単に遊休用地の収益化という直接的な収益効果を超えて、不動産価値の向上や地域経済の活性化など、街全体への好循環を生み出す可能性を秘めています。
        </p>
        <img src="<?php echo get_theme_file_uri('/img/example-1-1.png'); ?>" alt="" class="first-img" />
        <img src="<?php echo get_theme_file_uri('/img/example-1-2.png'); ?>" alt="" class="first-img" />
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