<?php
/*
Template Name:事例3
*/
get_header();
?>
<main class="page-main">
  <section class="page-title-wrap">
    <h1 class="page-title">観光利用・フェリー連携</h1>
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
        <h2 class="first-title">観光利用・フェリー連携(小豆島)</h2>
        <p class="first-text">
          小豆島は、豊かな自然と文化が魅力の観光地であり、年間を通じて多くの観光客が訪れます。<br />
          2017年2月から導入されたHELLO&emsp;CYCLINGは、小豆島の観光体験をより豊かにしています。<br />
          2024年2月時点で、32カ所のステーションと165台の自転車が設置され、多くの観光客や地元の人々に利用されています。<br />
          小豆島の主要な交通手段は航路とバスですが、全ての港にシェアサイクルのステーションを設置することで、公共交通では補いきれない細かな移動ニーズに応えています。<br />
          特に、観光地へのアクセスを重視し、観光客がスムーズに島内を巡れるよう積極的にステーションを設けています。<br />
          人気観光スポットの一つであるエンジェルロードは、特に注目されており、土庄港付近に設置された2箇所のステーションから多くの観光客が自転車で訪れます。<br />
          エンジェルロードからの帰路には、バスを利用するなど、シェアサイクルと公共交通機関を組み合わせた移動が可能で、訪れる人々に柔軟な移動プランを提供しています。
        </p>
        <img src="<?php echo get_theme_file_uri('/img/example-3-1.png'); ?>" alt="" class="first-img" />
        <img src="<?php echo get_theme_file_uri('/img/example-3-2.png'); ?>" alt="" class="first-img" />
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