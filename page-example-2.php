<?php
/*
Template Name:事例2
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
          <div class="sidebar-contents-items"><a href="<?php echo esc_url(home_url('/home/example/example-1/')); ?>">狭小地のポート化（マンション・軒先等）</a> </div>
          <div class="sidebar-contents-items"><a href="<?php echo esc_url(home_url('/home/example/example-2/')); ?>">官民連携</a> </div>
          <div class="sidebar-contents-items"><a href="<?php echo esc_url(home_url('/home/example/example-3/')); ?>">観光利用・フェリー連携</div>
          <div class="sidebar-contents-items"><a href="<?php echo esc_url(home_url('/home/example/example-4/')); ?>">複数事業者混在事例</a></div>
        </div>
      </div>
    </div>
    <div class="section-wrap">
      <section class="first">
        <h2 class="first-title">官⺠連携(朝霞市)</h2>
        <p class="first-text">
          OpenStreet株式会社とシナネンモビリティ&emsp;PLUS株式会社は、2019年1月に朝霞市と協定を締結しシェアサイクル事業の実証実験を開始して以来、朝霞市民の交通利便性向上を目的に官民連携でステーション数を拡大してきました。<br />
          2023年12月末時点で130ステーション969ラック(1km²あたりに7ポート)を展開しており、朝霞市の人口約13.6万人のうち、月間利用者数は1.2万人に達し、人口の約10%がシェアサイクルを活用していることからもその普及ぶりが伺えます。<br />
          また、朝霞市では職員の公務上の移動手段としてもシェアサイクルを活用いただいています。<br />
          従来、公務上の移動に際しては、主に自動車を使用されていましたが、公務では近距離移動が多いことや、駐車場の確保が困難な場合があること、環境負荷低減の観点から自転車の活用を検討されてきました。<br />
          しかしながら、朝霞市の地理特性として高低差が大きいこともあり、電動アシスト付き自転車の導入が必須であり、高額な購入費用や購入後のメンテナンスの負荷がネックとなっていました。<br />
          そこで、同市内で「ダイチャリ」ブランドにて実証実験中である、電動アシスト付き自転車を展開するシェアサイクルサービス「HELLO&emsp;CYCLING」を2021年9月より公務上の移動手段として採用、月間で平均約73回(2022年1月~12月実績)ご利用いただいています。<br />
          この取り組みにより、自動車移動では気づけない市内の不具合箇所の早期発見に繋がることも期待されています。<br />
          また、近距離の移動手段をシェアサイクルに代替したことで、2022年9月に公用自動車5台の減車にも繋がっており、環境保全にも貢献できています。<br />
          OpenStreet株式会社とシナネンモビリティ&emsp;PLUS株式会社は、今後も朝霞市と官民連携し、市民が気軽にシェアサイクルを使える環境を整備し、利便性の向上に寄与するとともに、
          市職員の公務活用による環境保全や安全なまちづくりへ貢献していきます。
        </p>
        <div class="first-img-wrap">
          <img src="<?php echo get_theme_file_uri('/img/example-2-1.png'); ?>" alt="" class="first-img" />
          <img src="<?php echo get_theme_file_uri('/img/example-2-2.png'); ?>" alt="" class="first-img" />
        </div>
      </section>
    </div>
  </div>
</main>

<?php get_footer(); ?>